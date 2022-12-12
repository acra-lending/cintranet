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
            'firstname'         => 'required|max:100',
            'lastname'          => 'required|max:100',
            'email'             => 'required|email',
            'selectType'        => 'nullable',
            'email2.*'          => 'nullable|email',
        ]);

        $remove[] = "'";
        $remove[] = " ";
        $remove[] = "-";

        $lastName = ucwords(strtolower($request->input('lastname')));
        $firstName = ucwords(strtolower($request->input('firstname')));
        $lastNameWithNoSpace = str_replace($remove, "", $lastName);
        // $username = strtolower($lastNameWithNoSpace .$firstName[0] .time());
        $username = strtolower($request->input('email'));
        $email = strtolower($request->input('email'));
        // $tempPassword = $username.'1';
        $tempPassword = $lastNameWithNoSpace.'$1!';
        $data = [$request->all(), 'username' => $username, 'tempPassword' => $tempPassword];
        $selectType = $request->input('selectType');
        // dd($selectType);





        //Strapi Start
        $strapiToken = env('STRAPI_API_TOKEN');

        $strapiResponse = Http::withToken($strapiToken)
        ->post('https://api.acralending.com/api/auth/local/register', [
            'username'  => $username,
            'email'     => $email,
            'firstname' => $request->input('firstname'),
            'lastname'  => $request->input('lastname'),
            'password'  => $tempPassword,
            'repeatPassword' => $tempPassword,
            'roleType'       => $selectType,
            // 'role' => [
            //     'id' => $selectType
            // ]


        ]);

        //Send Email Confirmation from Cintranet
        $emailArray = array('webupdates@acralending.com', 'brokerportalconfirmations@citadelservicing.com');

        if($request->filled('email2')){
            $emails = explode(',', $request->input('email2'));
            foreach($emails as $email)
            {
                array_push($emailArray, $email);
            }
        }  

        if ($selectType = "Broker") {
            if ($strapiResponse->successful()) {
                Mail::to($emailArray)
                ->queue(new BrokerPortalRequests($data));
                // Mail::to([
                //     $request->input('email')
                // ])->queue(new BrokerPortalRequestsClient($data));
        
                return redirect ('/usermanagement/wp-users')->with ('success', 'Credentials created');
            }
            else 
            $message = $strapiResponse->json()['error']['message'];
        
            return back()->withInput($request->all())->with('error', $message);
        }

        if ($selectType = "Correspondent") {
            if ($strapiResponse->successful()) {
                Mail::to($emailArray)
                ->queue(new CorrespondentPortalRequests($data));
                // Mail::to([
                //     $request->input('email')
                // ])->queue(new CorrespondentPortalRequestsClient($data));
        
                return redirect ('/usermanagement/wp-users')->with ('success', 'Credentials created');
            }
            else 
            $message = $strapiResponse->json()['error']['message'];
        
            return back()->withInput($request->all())->with('error', $message);
            
        }

        //Strapi End

        // dd($strapiResponse);

        //WP Users Start
        // $token = Http::post('https://acralending.com/wp-json/jwt-auth/v1/token', [
        //     'username' => env('WP_USERNAME'),
        //     'password' => env('WP_PASSWORD'),
        // ]);

        // $token = $token->json()['token'];
        // $response = Http::withToken($token)
        // ->post('https://acralending.com/wp-json/wp/v2/users', [
        //         'username' => $username,
        //         'email' => $email,
        //         'first_name' => $request->input('firstname'),
        //         'last_name' => $request->input('lastname'),
        //         'roles' => $request->input('selectType'),
        //         'password' => $tempPassword,
        // ]);
        //WP Users End



    // if ($selectType = 'um_broker') {
    //     if ($strapiResponse->successful()) {
    //         Mail::to($emailArray)
    //         ->queue(new BrokerPortalRequests($data));
    //         Mail::to([
    //             $request->input('email')
    //         ])->queue(new BrokerPortalRequestsClient($data));
    
    //         return redirect ('/usermanagement/wp-users')->with ('success', 'Credentials created');
    //     }
    //     else 
    //     $message = $strapiResponse->json()['message'];
    
    //     return back()->withInput($request->all())->with('error', $message);
    // }

    // if ($selectType = 'um_correspondent') {
    //     if ($response->successful()) {
    //         Mail::to($emailArray)
    //         ->queue(new CorrespondentPortalRequests($data));
    //         Mail::to([
    //             $request->input('email')
    //         ])->queue(new CorrespondentPortalRequestsClient($data));
    
    //         return redirect ('/usermanagement/wp-users')->with ('success', 'Credentials created');
    //     }
    //     else 
    //     $message = $response->json()['message'];
    
    //     return back()->withInput($request->all())->with('error', $message);
        
    // }


    }

    public function edit(Request $request, $user)
    {
        $wp_users = DB::connection('mysql3')
            ->table('up_users')
            ->where('up_users.id', intval($user))
            // ->join('up_users_role_links', 'up_users_role_links.user_id', 'up_users.id')
            // ->join('role_types_user_links', 'role_types_user_links.user_id', 'up_users.id')
            ->get();

            // dd($wp_users);
        // $wp_users = DB::connection('mysql2')
        //     ->table('wp_9c4654a05b_users')
        //     ->where('wp_9c4654a05b_users.ID', $request->id)
        //     ->get();
            // dd($wp_users);

            // $fullname = $wp_users->display_name;
            // $fullname = trim($fullname); // remove double space
            // $first_name = substr($fullname, 0, strpos($fullname, ' '));
            // $last_name = ltrim(substr($fullname, strpos($fullname, ' '), strlen($fullname)));

        return view ('pages.usermanagement.wpusers.edit')
            ->with([
                'wp_users' => $wp_users,
                // 'first_name' => $first_name,
                // 'last_name' => $last_name
            ]);
    }

    public function update(Request $request, $wp_users)
    {
        $dataValidate = request()->validate([
            // 'username'          => 'required|max:100',
            'firstname'         => 'required|max:100',
            'lastname'          => 'required|max:100',
            'email'             => 'required|email',
            'selectType'        => 'required|max:100',
        ]);
        // dd($request->id);

        $remove[] = "'";
        $remove[] = " ";
        $remove[] = "-";

        // $username = strtolower(str_replace($remove, "", $request->input('username'))).strtolower(substr($request->input('firstname'), 0, 1));
        // $username = strtolower(str_replace($remove, "", $request->input('username')));
        $lastName = ucwords(strtolower($request->input('lastname')));
        $firstName = ucwords(strtolower($request->input('firstname')));
        $email = strtolower($request->input('email'));
        $selectType = $request->input('selectType');
        // $data = [$request->all(), 'username' => $username];
        // $data = [$request->all()];
        // $displayName = $firstName. ' ' .$lastName;
        // dd($displayName);

        //Strapi Start
        $strapiToken = env('STRAPI_API_TOKEN');

        $strapiResponse = Http::withToken($strapiToken)
        ->put('https://api.acralending.com/api/users/'. $wp_users, [
            'username'  => $email,
            'email'     => $email,
            'firstname' => $request->input('firstname'),
            'lastname'  => $request->input('lastname'),
            'roleType'  => $selectType,
            
        ]);

        if ($strapiResponse->successful()) {

            return redirect ('/usermanagement/wp-users')->with ('success', 'Credentials Updated');
        }
        else 

        $message = $strapiResponse->json()['error']['message'];
    
        return back()->withInput($request->all())->with('error', $message);

        // $token = Http::post('https://acralending.com/wp-json/jwt-auth/v1/token', [
        //     'username' => env('WP_USERNAME'),
        //     'password' => env('WP_PASSWORD'),
        // ]);

        // $token = $token->json()['token'];

        // $response = Http::withToken($token)
        // ->post('https://acralending.com/wp-json/wp/v2/users/' . $wp_users, [
        //         // 'username' => $username,
        //         'email' => $email,
        //         'first_name' => $request->input('firstname'),
        //         'last_name' => $request->input('lastname'),
        //         'name' => $displayName,
        //         'roles' => $request->input('selectType'),
        // ]);

        // if ($response->successful()) {

        //     return redirect ('/usermanagement/wp-users')->with ('success', 'Credentials Updated');
        // }
        // else 
        // $message = $response->json()['message'];
    
        // return back()->withInput($request->all())->with('error', $message);
    }

    public function destroy(Request $request, $wp_users)
    {

        //Strapi Start
        $strapiToken = env('STRAPI_API_TOKEN');

        $strapiResponse = Http::withToken($strapiToken)
        ->delete('https://api.acralending.com/api/users/'. $wp_users);

        if ($strapiResponse->successful()) {

            return redirect ('/usermanagement/wp-users')->with ('success', 'Credentials Deleted');
        }
        else 

        $message = $strapiResponse->json()['error']['message'];

        // $token = Http::post('https://acralending.com/wp-json/jwt-auth/v1/token', [
        //     'username' => env('WP_USERNAME'),
        //     'password' => env('WP_PASSWORD'),
        // ]);

        // $token = $token->json()['token'];

        // $response = Http::withToken($token)
        // ->delete('https://acralending.com/wp-json/wp/v2/users/' . $wp_users, [
        //     'reassign' => '997',
        //     'force' => true
        // ]);
        
        // if ($response->successful()) {

        //     return redirect ('/usermanagement/wp-users')->with ('success', 'Credentials Deleted');
        // }
        // else 
        // $message = $response->json()['message'];
    
        return back()->withInput($request->all())->with('error', $message);
    }

    public function destroyBulk(Request $request)
    {

        //Strapi Start
        $strapiToken = env('STRAPI_API_TOKEN');

        $selectedUsers = $request->input('selectedUsers');
        if($selectedUsers) {
            foreach($selectedUsers as $wp_users) {
                $strapiResponse = Http::withToken($strapiToken)
                ->delete('https://api.acralending.com/api/users/'. $wp_users);
            }

        }
        else {
            return back()->with('error', 'Please select a user');
        }


        if ($strapiResponse->successful()) {

            return redirect ('/usermanagement/wp-users')->with ('success', 'Credentials Deleted');
        }
        else 

        $message = $strapiResponse->json()['error']['message'];


        // $token = Http::post('https://acralending.com/wp-json/jwt-auth/v1/token', [
        //     'username' => env('WP_USERNAME'),
        //     'password' => env('WP_PASSWORD'),
        // ]);

        // $token = $token->json()['token'];

        // $response = Http::withToken($token)
        // ->delete('https://acralending.com/wp-json/wp/v2/users/' . $wp_users, [
        //     'reassign' => '997',
        //     'force' => true
        // ]);
        
        // if ($response->successful()) {

        //     return redirect ('/usermanagement/wp-users')->with ('success', 'Credentials Deleted');
        // }
        // else 
        // $message = $response->json()['message'];
    
        return back()->withInput($request->all())->with('error', $message);
    }
}
