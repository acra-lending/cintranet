<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use App\Mail\BrokerPortalRequests;
use App\Mail\BrokerPortalRequestsClient;
use Maatwebsite\Excel\Concerns\ToCollection;
use Mail;


class WPUsersImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            $firstName = $row[0];
            $lastName = $row[1];
            $emailAddress = strtolower($row[2]);
            $userName = strtolower($lastName .$firstName[0] .time());
            $tempPassword = $lastName.'$1!';

            $token = Http::post('https://acralending.com/wp-json/jwt-auth/v1/token', [
                'username' => env('WP_USERNAME'),
                'password' => env('WP_PASSWORD'),
            ]);
    
            $token = $token->json()['token'];
    
            $response = Http::withToken($token)
            ->post('https://acralending.com/wp-json/wp/v2/users', [
                    'username' => $userName,
                    'email' => $emailAddress,
                    'first_name' => $firstName,
                    'last_name' => $lastName,
                    'roles' => 'um_broker',
                    'password' => $tempPassword,
            ]);

            $data = [
                [
                    'firstname'     => $firstName,
                    'lastname'      => $lastName,
                    'email'         => $emailAddress,
                ],
                'username'      => $userName,
                'tempPassword'  => $tempPassword,
            ];

            $emailArray = array('webupdates@acralending.com', 'brokerportalconfirmations@citadelservicing.com'); 

            if ($response->successful()) {
                Mail::to($emailArray)
                ->queue(new BrokerPortalRequests($data));
                Mail::to([
                    $emailAddress
                ])->queue(new BrokerPortalRequestsClient($data));
        
                // return redirect ('/usermanagement/wp-users')->with ('success', 'Credentials created');
            }
            else 
            $message = $response->json()['message'];
        }

        if ($response->successful()) {
            return back()->with('success', 'Credentials created successfully');
        } else {
            $message = $response->json()['message'];
            return back()->with('error', $message);
        }
    }
}
