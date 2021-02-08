<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Mail\BrokerPortalRequests;
use App\Mail\BrokerPortalRequestsClient;
use App\Mail\CorrespondentPortalRequests;
use App\Mail\CorrespondentPortalRequestsClient;
use App\User;
use Mail;
use Session;
use DB;

class BrokerPortalRequestsController extends Controller
{
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
        $email = strtolower($request->input('email'));
        $tempPassword = $username.'1';
        $data = [$request->all(), 'username' => $username, 'tempPassword' => $tempPassword];
        $selectType = $request->input('selectType');
        // dd($selectType);

        $token = Http::post('https://acralending.com/wp-json/jwt-auth/v1/token', [
            'username' => env('WP_USERNAME'),
            'password' => env('WP_PASSWORD'),
        ]);

        $token = $token->json()['token'];

        $response = Http::withToken($token)
        ->post('https://acralending.com/wp-json/wp/v2/users', [
                'username' => $username,
                'email' => $email,
                'first_name' => $request->input('firstname'),
                'last_name' => $request->input('lastname'),
                'roles' => $request->input('selectType'),
                'password' => $tempPassword,
        ]);

        // dd($response->json());
    if ($selectType != 'um_broker') {
        if ($response->successful()) {
            Mail::to([
                'webupdates@acralending.com', 'brokerportalconfirmations@citadelservicing.com'
            ])->send(new CorrespondentPortalRequests($data));
            Mail::to([
                $request->input('email')
            ])->send(new CorrespondentPortalRequestsClient($data));
    
            return redirect ('/usermanagement/wp-users')->with ('success', 'Credentials created');
        }
        else 
        $message = $response->json()['message'];
    
        return back()->withInput($request->all())->with('error', $message);
        
    } else {
        if ($response->successful()) {
            Mail::to([
                'webupdates@acralending.com', 'brokerportalconfirmations@citadelservicing.com'
            ])->send(new BrokerPortalRequests($data));
            Mail::to([
                $request->input('email')
            ])->send(new BrokerPortalRequestsClient($data));
    
            return redirect ('/usermanagement/wp-users')->with ('success', 'Credentials created');
        }
        else 
        $message = $response->json()['message'];
    
        return back()->withInput($request->all())->with('error', $message);
    }


    }

    public function edit(Request $request, $user)
    {
        $wp_users = DB::connection('mysql2')
            ->table('wp_9c4654a05b_users')
            ->where('wp_9c4654a05b_users.ID', $request->id)
            ->get();
            // dd($wp_users);

            $fullname = $wp_users[0]->display_name;;
            $fullname = trim($fullname); // remove double space
            $first_name = substr($fullname, 0, strpos($fullname, ' '));
            $last_name = ltrim(substr($fullname, strpos($fullname, ' '), strlen($fullname)));

        return view ('pages.usermanagement.wpusers.edit')
            ->with([
                'wp_users' => $wp_users,
                'first_name' => $first_name,
                'last_name' => $last_name
            ]);
    }

    public function update(Request $request, $wp_users)
    {
        $dataValidate = request()->validate([
            'username'          => 'required|max:100',
            'firstname'         => 'required|max:100',
            'lastname'          => 'required|max:100',
            'email'             => 'required|email',
            'selectType'        => 'nullable',
        ]);
        // dd($request->id);

        $remove[] = "'";
        $remove[] = " ";
        $remove[] = "-";

        // $username = strtolower(str_replace($remove, "", $request->input('username'))).strtolower(substr($request->input('firstname'), 0, 1));
        $username = strtolower(str_replace($remove, "", $request->input('username')));
        $email = strtolower($request->input('email'));
        $data = [$request->all(), 'username' => $username];
        // dd($data);

        $token = Http::post('https://acralending.com/wp-json/jwt-auth/v1/token', [
            'username' => env('WP_USERNAME'),
            'password' => env('WP_PASSWORD'),
        ]);

        $token = $token->json()['token'];

        $response = Http::withToken($token)
        ->post('https://acralending.com/wp-json/wp/v2/users/' . $wp_users, [
                'username' => $username,
                'email' => $email,
                'first_name' => $request->input('firstname'),
                'last_name' => $request->input('lastname'),
                'roles' => $request->input('selectType'),
        ]);

        if ($response->successful()) {

            return redirect ('/usermanagement/wp-users')->with ('success', 'Credentials Updated');
        }
        else 
        $message = $response->json()['message'];
    
        return back()->withInput($request->all())->with('error', $message);
    }

    public function destroy(Request $request, $wp_users)
    {
        $token = Http::post('https://acralending.com/wp-json/jwt-auth/v1/token', [
            'username' => env('WP_USERNAME'),
            'password' => env('WP_PASSWORD'),
        ]);

        $token = $token->json()['token'];

        $response = Http::withToken($token)
        ->delete('https://acralending.com/wp-json/wp/v2/users/' . $wp_users, [
            'reassign' => '997',
            'force' => true
        ]);
        
        if ($response->successful()) {

            return redirect ('/usermanagement/wp-users')->with ('success', 'Credentials Deleted');
        }
        else 
        $message = $response->json()['message'];
    
        return back()->withInput($request->all())->with('error', $message);
    }
}
