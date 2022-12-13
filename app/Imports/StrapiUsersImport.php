<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use App\Mail\BrokerPortalRequests;
use App\Mail\BrokerPortalRequestsClient;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Mail;


class StrapiUsersImport implements ToCollection, WithChunkReading, ShouldQueue
{
    public function __construct($request, $emailArray)
    {
        $this->request = $request;
        $this->emailArray = $emailArray;
    }

    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows->slice(1) as $row)
        {
            if($row->filter()->isNotEmpty()){
                $remove[] = "'";
                $remove[] = " ";
                $remove[] = "-";
                
                $firstname = $row[0];
                $lastname = $row[1];
                $email = strtolower($row[2]);
                $lastNameWithNoSpace = str_replace($remove, "", $lastname);
                // dd($lastNameWithNoSpace);
                // $userName = strtolower($lastNameWithNoSpace .$firstName[0] .time());
                $username = strtolower($row[2]);
                $tempPassword = $lastNameWithNoSpace. time();

                //Strapi Start
                $strapiToken = env('STRAPI_API_TOKEN');

                $strapiResponse = Http::withToken($strapiToken)
                ->post('https://api.acralending.com/api/auth/local/register', [
                    'username'  => $username,
                    'email'     => $email,
                    'firstname' => $firstname,
                    'lastname'  => $lastname,
                    'password'  => $tempPassword,
                    'repeatPassword' => $tempPassword,
                    'roleType'       => 'Broker',
                ]);
        
                $data = [
                    [
                        'firstname'     => $firstname,
                        'lastname'      => $lastname,
                        'email'         => $email,
                    ],
                    'username'      => $username,
                ];
        
                if ($strapiResponse->successful()) {
                    Mail::to($this->emailArray)
                    ->queue(new BrokerPortalRequests($data));
            
                    // return redirect ('/usermanagement/wp-users')->with ('success', 'Credentials created');
                }
                else 
                $message = $strapiResponse->json()['error']['message'];

            }

        }
    }

    public function chunkSize(): int
    {
        return 50;
    }
}
