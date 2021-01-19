<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Mail\BrokerPortalRequests;
use App\Mail\BrokerPortalRequestsClient;
use App\User;
use Mail;
use Session;
use DB;

class BrokerPortalRequestsController extends Controller
{
    public function index()
    {
        return view('pages.operations.brokerportalrequests');
    }

    public function submit(Request $request)
    {
        $dataValidate = request()->validate([
            'username'          => 'required|max:100',
            'firstname'         => 'required|max:100',
            'lastname'          => 'required|max:100',
            'email'             => 'required|email',
            'selectType'        => 'nullable',
        ]);

        $remove[] = "'";
        $remove[] = " ";
        $remove[] = "-";




        // $username = strtolower(str_replace($remove, "", $request->input('username'))).strtolower(substr($request->input('firstname'), 0, 1));
        $username = strtolower(str_replace($remove, "", $request->input('username')));
        $tempPassword = $username.'1';
        $data = [$request->all(), 'username' => $username, 'tempPassword' => $tempPassword];
        // dd($data);

        $token = Http::post('https://acralending.com/wp-json/jwt-auth/v1/token', [
            'username' => env('WP_USERNAME'),
            'password' => env('WP_PASSWORD'),
        ]);

        $token = $token->json()['token'];

        $response = Http::withToken($token)
        ->post('https://acralending.com/wp-json/wp/v2/users', [
                'username' => $username,
                'email' => $request->input('email'),
                'first_name' => $request->input('firstname'),
                'last_name' => $request->input('lastname'),
                'roles' => $request->input('selectType'),
                'password' => $tempPassword,
        ]);

        // dd($response->json());

    if ($response->successful()) {
        Mail::to([
            'webupdates@acralending.com', 'brokerportalconfirmations@citadelservicing.com'
        ])->send(new BrokerPortalRequests($data));
        Mail::to([
            $request->input('email')
        ])->send(new BrokerPortalRequestsClient($data));

        return redirect ('/usermanagement/brokerportalrequests')->with ('success', 'Credentials created');
    }
    else 
    $message = $response->json()['message'];

    return back()->withInput($request->all())->with('error', $message);

    }
}
