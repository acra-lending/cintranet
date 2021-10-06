<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use App\Mail\BrokerPortalRequests;
use App\Mail\BrokerPortalRequestsClient;
use App\Post;
use App\Category;
use Gate;
use Session;
use URL;
use Redirect;
use Mail;

use PhpMimeMailParser;

class UploadController extends Controller
{
    public function index()
    {   
        return view('pages.mediamanager.upload');
    }
    
    public function upload(Request $request)
    {
        if(Gate::denies('manage-posts')){
            return redirect(route('home'));
        }
        
        $this->validate($request, [
            'category_id' => 'required',
            'file' => 'required',
            'file.*' => 'required|mimes:msg,doc,docx,ppt,pptx,xls,xlsx,pdf,jpg,jpeg,bmp,png,gif,mp4,eml|max:99999999',
            'filename' => 'regex:/^[0-9a-zA-Z_\-. ()&]*$/'
        ]);

        $num = 2;
        $categoryId = $request->input('category_id');
        $categoryIdSingle = reset($categoryId);

        if($categoryIdSingle == 'wsJumboPrimeAE') {
            //Handle File Upload
            if($request->hasFile('file')){
            
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
                    $fileNameToStore = 'Jumbo Prime Wholesale Rate Sheet '.date('m-d-Y').'.'.$extension;
                    
                    //Check if Filename exists
                    while(Storage::disk('local')->exists('public/upload/'.$fileNameToStore)){
                        $fileNameToStore = 'Jumbo Prime Wholesale Rate Sheet '.date('m-d-Y').' v'.$num.'.'.$extension;
                        $num++;
                    }
                    // Upload
                    $path = $file->storeAs('public/upload', $fileNameToStore);

                    //Create Upload Post
                    $post = new Post;
                    $post->category_id = implode(',', $request->input('category_id'));
                    // dd($request->input('category_id'));
                    // $post->categories()->attach($request->categories_id);
                    $post->filename = $fileNameToStore;
                    $post->filesize = $filesizeToStore;
                    $post->save();
                        
                }     
                

            // return back()->with('success', 'Upload Complete');
            return response()->json(['success' => 'Uploaded Successfully']);
        
            }
        }

        if($categoryIdSingle == 'corrJumboPrimePdf') {
            //Handle File Upload
            if($request->hasFile('file')){
            
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
                    $fileNameToStore = 'Jumbo Prime Correspondent Rate Sheet '.date('m-d-Y').'.'.$extension;
                    
                    //Check if Filename exists
                    while(Storage::disk('local')->exists('public/upload/'.$fileNameToStore)){
                        $fileNameToStore = 'Jumbo Prime Correspondent Rate Sheet '.date('m-d-Y').' v'.$num.'.'.$extension;
                        $num++;
                    }
                    // Upload
                    $path = $file->storeAs('public/upload', $fileNameToStore);

                    //Create Upload Post
                    $post = new Post;
                    $post->category_id = implode(',', $request->input('category_id'));
                    // dd($request->input('category_id'));
                    // $post->categories()->attach($request->categories_id);
                    $post->filename = $fileNameToStore;
                    $post->filesize = $filesizeToStore;
                    $post->save();
                        
                }     
                

            // return back()->with('success', 'Upload Complete');
            return response()->json(['success' => 'Uploaded Successfully']);
        
            }
        }

        if($categoryIdSingle == 'corrJumboPrimeXlsx') {
            //Handle File Upload
            if($request->hasFile('file')){
            
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
                    $fileNameToStore = 'Jumbo Prime Correspondent Rate Sheet '.date('m-d-Y').'.'.$extension;
                    
                    //Check if Filename exists
                    while(Storage::disk('local')->exists('public/upload/'.$fileNameToStore)){
                        $fileNameToStore = 'Jumbo Prime Corresondent Rate Sheet '.date('m-d-Y').' v'.$num.'.'.$extension;
                        $num++;
                    }
                    // Upload
                    $path = $file->storeAs('public/upload', $fileNameToStore);

                    //Create Upload Post
                    $post = new Post;
                    $post->category_id = implode(',', $request->input('category_id'));
                    // dd($request->input('category_id'));
                    // $post->categories()->attach($request->categories_id);
                    $post->filename = $fileNameToStore;
                    $post->filesize = $filesizeToStore;
                    $post->save();
                        
                }     
                

            // return back()->with('success', 'Upload Complete');
            return response()->json(['success' => 'Uploaded Successfully']);
        
            }
        }

        //Handle File Upload
        if($request->hasFile('file')){
        
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
                $path = $file->storeAs('public/upload', $fileNameToStore);

                //Create Upload Post
                $post = new Post;
                $post->category_id = implode(',', $request->input('category_id'));
                // dd($request->input('category_id'));
                // $post->categories()->attach($request->categories_id);
                $post->filename = $fileNameToStore;
                $post->filesize = $filesizeToStore;
                $post->save();
                    
            }     
              

        // return back()->with('success', 'Upload Complete');
        return response()->json(['success' => 'Uploaded Successfully']);
      
        } else {
            return 'file not found';
        }
    }

    public function update(Request $request)
    {
        if(Gate::denies('edit-posts')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'filename' => 'required|regex:/^[0-9a-zA-Z_\-. ()&]*$/',
            'category_id' => 'required'
        ]);

        //Create Upload Post
        $post = Post::findOrFail($request->file_id);
        $oldfilename = $post->filename;
        $newfilename = $request->input('filename');
        $oldcategory = $post->category_id;
        $newcategory = $request->input('category_id');

        if ($newfilename != $oldfilename){
            Storage::move('public/upload/'.$oldfilename, 'public/upload/'.$newfilename);
            $post->category_id = ($request->input('category_id'));
            $post->filename = $newfilename;
            $post->save();
            
            return back()->with('success', 'File Updated');
        } else if ($newfilename == $oldfilename && $newcategory != $oldcategory) {
            $post->category_id = ($request->input('category_id'));
            $post->save();

            return back()->with('success', 'File Updated');

        } else {
            return back()->with('error', 'File Name Already Exists');
        }
    }

    public function broker_login_request_parser(Request $request) 
    {

        if(Gate::denies('manage-posts')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'file' => 'required',
            'file.*' => 'required|mimes:eml|max:99999999',
            'filename' => 'regex:/^[0-9a-zA-Z_\-. ()&]*$/'
        ]);

        //Handle File Upload
        if($request->hasFile('file')){

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
                    $firstName = $firstName;
                }
                if (isset($lastName)) {
                    $lastName = $lastName;
                }
                if (isset($emailAddress)) {
                    $userName = strtolower($lastName .$firstName[0] .time());
                    $emailAddress = strtolower($emailAddress);
                }
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

                if ($response->successful()) {
                    Mail::to([
                        'webupdates@acralending.com',
                    ])->queue(new BrokerPortalRequests($data));
                    Mail::to([
                        $emailAddress
                    ])->queue(new BrokerPortalRequestsClient($data));
            
                    return redirect ('/usermanagement/wp-users')->with ('success', 'Credentials created');
                }
                else 
                $message = $response->json()['message'];
            
                // return back()->withInput($request->all())->with('error', $message);
            }     
                
            if ($response->successful()) {
                return back()->with('success', 'Credentials created successfully');
            } else {
                $message = $response->json()['message'];
                return back()->with('error', $message);

            }
        // return back()->with('success', 'Credentials created successfully');
        // return response()->json(['success' => 'Credentials created successfully']);
        
        } else {
            return 'file not found';
        }
    }

    public function priority_login_request_parser(Request $request) 
    {

        if(Gate::denies('manage-posts')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'file' => 'required',
            'file.*' => 'required|mimes:eml|max:99999999',
            'filename' => 'regex:/^[0-9a-zA-Z_\-. ()&]*$/'
        ]);

        //Handle File Upload
        if($request->hasFile('file')){

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

                $parser->setPath(public_path().'/storage/upload/emails/priority/'.$fileNameToStore); 

                $subject = $parser->getHeader('subject');
                $string = $parser->getMessageBody('text');

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
                    // print_r($matches);
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
                    $firstName = $firstName;
                }
                if (isset($lastName)) {
                    $lastName = $lastName;
                }
                if (isset($emailAddress)) {
                    $userName = strtolower($lastName .$firstName[0] .time());
                    $emailAddress = strtolower($emailAddress);
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
    
                    if ($response->successful()) {
                        Mail::to([
                            'webupdates@acralending.com', 
                        ])->queue(new BrokerPortalRequests($data));
                        Mail::to([
                            $emailAddress
                        ])->queue(new BrokerPortalRequestsClient($data));
                
                        // return redirect ('/usermanagement/wp-users')->with ('success', 'Credentials created');
                    }
                    else 
                    $message = $response->json()['message'];
                
                    // return back()->withInput($request->all())->with('error', $message);
                }
                
                if (isset($emailAddress2)){
                    $emailAddress2 = strtolower($emailAddress2);
                }
                if (isset($lastName2)){
                    $lastName2 = $lastName2;
                }
                if (isset($firstName2)){
                    $firstName = $firstName2;
                    $userName2 = strtolower($lastName2 .$firstName2[0] .time());
                    $tempPassword2 = $lastName2.'$1!';

                    $token = Http::post('https://acralending.com/wp-json/jwt-auth/v1/token', [
                        'username' => env('WP_USERNAME'),
                        'password' => env('WP_PASSWORD'),
                    ]);
            
                    $token = $token->json()['token'];
            
                    $response = Http::withToken($token)
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
    
                    if ($response->successful()) {
                        Mail::to([
                            'webupdates@acralending.com',
                        ])->queue(new BrokerPortalRequests($data));
                        Mail::to([
                            $emailAddress2
                        ])->queue(new BrokerPortalRequestsClient($data));
                
                        // return redirect ('/usermanagement/wp-users')->with ('success', 'Credentials created');
                    }
                    else 
                    $message = $response->json()['message'];
                
                    // return back()->withInput($request->all())->with('error', $message);
                }
                
            }
            
            if ($response->successful()) {
                return back()->with('success', 'Credentials created successfully');
            } else {
                $message = $response->json()['message'];
                return back()->with('error', $message);
            }
        // return back()->with('success', 'Credentials created successfully');
        
        // return response()->json(['success' => 'Credentials created successfully']);
        
        } else {
            return 'file not found';
        }
    }

    public function destroy($id)
    {
        if(Gate::denies('manage-posts')){
            return redirect(route('home'));
        }

        $post = Post::find($id);

        // Delete file
        Storage::delete('public/upload/'.$post->filename);

        $post->delete();

        return back()->with('success', 'File Removed');
    }
}
