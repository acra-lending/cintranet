<?php

namespace App\Classes;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Mail\BrokerPortalRequests;
use App\Mail\BrokerPortalRequestsClient;

use Illuminate\Support\Facades\Storage;
use App\Post;
use Mail;
use PhpMimeMailParser;


class BrokerLoginRequestParser {   
    public $response;

    public function brokerLoginRequestParser(Request $request)
    {        
        $remove[] = "'";
        $remove[] = " ";
        $remove[] = "-";

        //Handle File Upload

            foreach ($request->file('file') as $file){

                // Get filename with the extension
                $filenameWithExt = $file->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get Just ext
                $extension = $file->getClientOriginalExtension();
                // Get filesize
                $filesize = $file->getSize();
                $filesizeToStore = round($filesize * 0.0009765625, 2);
                // Filename to store
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                // Upload
                $path = $file->storeAs('public/upload/emails/brokers', $fileNameToStore);

                $parser = new PhpMimeMailParser\Parser();

                $parser->setPath(public_path().'/storage/upload/emails/brokers/'.$fileNameToStore); 

                $subject = $parser->getHeader('subject');
                $string = $parser->getMessageBody('text');
                $string = preg_replace('/<mailto:[\s\S]+?>/', '', $string);

                // Set the regex.
                if (strpos($subject, "Broker Portal Login Request") !== false) {
                    $fName = '/(?<=\bFirst Name:\s)(?:[\w-]+)/is';
                    $lName = '/(?<=\bLast Name:\s)(?:[\w-]+)/is';
                    $email = '/[a-z0-9_\-\+\.]+@[a-z0-9\-]+\.([a-z]{2,4})(?:\.[a-z]{2})?/i';
                } else {
                    return "Not valid";
                }
            
                // Run the regex with preg_match_all.
                preg_match_all($fName, $string, $matches);
                // print_r($matches);
                $firstName = $matches[0][0];
            
                preg_match_all($lName, $string, $matches);
                $lastName = $matches[0][0];
            
                preg_match_all($email, $string, $matches);
                // print_r($matches);
                $emailAddress = $matches[0][0];

                if (isset($firstName)) {
                    $firstName = ucwords(strtolower($firstName));
                }
                if (isset($lastName)) {
                    $lastName = ucwords(strtolower($lastName));
                    $lastNameWithNoSpace = str_replace($remove, "", $lastName);
                }
                if (isset($emailAddress)) {
                    // $userName = strtolower($lastNameWithNoSpace .$firstName[0] .time());
                    $userName = strtolower($emailAddress);
                    $emailAddress = strtolower($emailAddress);
                }
                $tempPassword = $lastName.'$1!';

                $token = Http::post('https://acralending.com/wp-json/jwt-auth/v1/token', [
                    'username' => env('WP_USERNAME'),
                    'password' => env('WP_PASSWORD'),
                ]);
        
                $token = $token->json()['token'];
        
                $this->response = Http::withToken($token)
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

                if ($this->response->successful()) {
                    Mail::to($emailArray)
                    ->queue(new BrokerPortalRequests($data));
                    Mail::to([
                        $emailAddress
                    ])->queue(new BrokerPortalRequestsClient($data));

                    Storage::delete('public/upload/emails/brokers/'.$fileNameToStore);
                    // return redirect ('/usermanagement/wp-users')->with ('success', 'Credentials created');

                }
                else 
                $message = $this->response->json()['message'];
            
                // return back()->withInput($request->all())->with('error', $message);
            }     
        // return back()->with('success', 'Credentials created successfully');
        // return response()->json(['success' => 'Credentials created successfully']);
        
        
    }

    public function priorityLoginRequestParser(Request $request)
    {
        $remove[] = "'";
        $remove[] = " ";
        $remove[] = "-";

        //Handle File Upload

        foreach ($request->file('file') as $file){

            // Get filename with the extension
            $filenameWithExt = $file->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get Just ext
            $extension = $file->getClientOriginalExtension();
            // Get filesize
            $filesize = $file->getSize();
            $filesizeToStore = round($filesize * 0.0009765625, 2);
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload
            $path = $file->storeAs('public/upload/emails/priority', $fileNameToStore);

            $parser = new PhpMimeMailParser\Parser();

            // $parser->setPath(public_path().'/storage/upload/emails/priority/'.$fileNameToStore); 
            $parser->setPath(public_path().'/storage/upload/emails/priority/'.$fileNameToStore); 

            $subject = $parser->getHeader('subject');
            $string = $parser->getMessageBody('text');
            $string = preg_replace('/<mailto:[\s\S]+?>/', '', $string);
            // dd($string);
                        // Set the regex.
            if (strpos($subject, "Priority Request - New Submission - Broker Portal Log In") !== false) {
                $fName = '/(?<=\bFirst Name:\s)(?:[\w-]+)/is';
                $lName = '/(?<=\bLast Name:\s)(?:[\w-]+)/is';
                // $fName2 = '/(?<=\bLP First Name:\s)(?:[\w-]+)/is';
                // $lName2 = '/(?<=\bLP Last Name:\s)(?:[\w-]+)/is';
                $email = '/[a-z0-9_\-\+\.]+@[a-z0-9\-]+\.([a-z]{2,4})(?:\.[a-z]{2})?/i';

                
                // Run the regex with preg_match_all.
                preg_match_all($fName, $string, $matches);
                // print_r($matches);
                if (isset($matches)) {
                    $firstName = $matches[0][0];
                    if(isset($matches[0][1])) {
                        $firstName2 = $matches[0][1];
                    }
                }
                
            
                preg_match_all($lName, $string, $matches);
                // print_r($matches);
                if (isset($matches)){
                    $lastName = $matches[0][0];
                    if (isset($matches[0][1])) {
                        $lastName2 = $matches[0][1];
                    }
                }
            
                preg_match_all($email, $string, $matches);
                // dd($matches);
                if (isset($matches)) {
                    if (isset($matches[0][0])) {
                        $emailAddress = $matches[0][0];
                    }
                    if (isset($matches[0][1])) {
                        $emailAddress2 = $matches[0][1];
                    }
                }


            } else {
                return "Not Valid";
            }

            if (isset($firstName)) {
                $firstName = ucwords(strtolower($firstName));
            }
            if (isset($lastName)) {
                $lastName = ucwords(strtolower($lastName));
                $lastNameWithNoSpace = str_replace($remove, "", $lastName);
            }
            if (isset($emailAddress)) {
                // $userName = strtolower($lastNameWithNoSpace .$firstName[0] .time());
                $userName = strtolower($emailAddress);
                $emailAddress = strtolower($emailAddress);
                $tempPassword = $lastNameWithNoSpace.'$1!';

                $token = Http::post('https://acralending.com/wp-json/jwt-auth/v1/token', [
                    'username' => env('WP_USERNAME'),
                    'password' => env('WP_PASSWORD'),
                ]);
        
                $token = $token->json()['token'];
        
                $this->response = Http::withToken($token)
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

                if ($this->response->successful()) {
                    Mail::to($emailArray)
                    ->queue(new BrokerPortalRequests($data));
                    Mail::to([
                        $emailAddress
                    ])->queue(new BrokerPortalRequestsClient($data));
            
                    // return redirect ('/usermanagement/wp-users')->with ('success', 'Credentials created');
                }
                else 
                $this->message = $this->response->json()['message'];
            
                // return back()->withInput($request->all())->with('error', $message);
            }
            
            if (isset($emailAddress2)){
                $emailAddress2 = strtolower($emailAddress2);
            }
            if (isset($lastName2)){
                $lastName2 = ucwords(strtolower($lastName2));
                $lastNameWithNoSpace2 = str_replace($remove, "", $lastName2);
            }
            if (isset($firstName2)){
                $firstName2 = ucwords(strtolower($firstName2));
                // $userName2 = strtolower($lastNameWithNoSpace2 .$firstName2[0] .time());
                $userName2 = strtolower($emailAddress2);
                $tempPassword2 = $lastNameWithNoSpace2.'$1!';

                $token = Http::post('https://acralending.com/wp-json/jwt-auth/v1/token', [
                    'username' => env('WP_USERNAME'),
                    'password' => env('WP_PASSWORD'),
                ]);
        
                $token = $token->json()['token'];
        
                $this->response = Http::withToken($token)
                ->post('https://acralending.com/wp-json/wp/v2/users', [
                        'username' => $userName2,
                        'email' => $emailAddress2,
                        'first_name' => $firstName2,
                        'last_name' => $lastName2,
                        'roles' => 'um_broker',
                        'password' => $tempPassword2,
                ]);

                $data = [
                    [
                        'firstname'     => $firstName2,
                        'lastname'      => $lastName2,
                        'email'         => $emailAddress2,
                    ],
                    'username'      => $userName2,
                    'tempPassword'  => $tempPassword2,
                ];

                $emailArray = array('webupdates@acralending.com', 'brokerportalconfirmations@citadelservicing.com'); 

                if ($this->response->successful()) {
                    Mail::to($emailArray)
                    ->queue(new BrokerPortalRequests($data));
                    Mail::to([
                        $emailAddress2
                    ])->queue(new BrokerPortalRequestsClient($data));
            
                    Storage::delete('public/upload/emails/brokers/'.$fileNameToStore);
                    // return redirect ('/usermanagement/wp-users')->with ('success', 'Credentials created');
                }
                else 
                $message = $this->response->json()['message'];
            
                // return back()->withInput($request->all())->with('error', $message);
            }
            
        }
            
    }
}