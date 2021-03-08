<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use App\Classes\JumboPrimeWholesaleRecipients;
use App\Mail\JumboPrimeRatesheetUpdate;
use League\Flysystem\Filesystem;
use League\Flysystem\Sftp\SftpAdapter;
use App\User;
use App\Post;
use Mail;
use Gate;
use DB;

class JumboRatesheetUploadController extends Controller
{
    public function index()
    {
        return view ('pages.mediamanager.uploadjumbo');
    }

    public function store(Request $request)
    {
        if(Gate::denies('edit-users')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'file' => 'required|mimes:pdf|max:99999999',
            'filename' => 'regex:/^[0-9a-zA-Z_\-. ()&]*$/'
        ]);

        $users = new JumboPrimeWholesaleRecipients;
        $users = $users->getCompanyUsers();

        //Handle File Upload
        if($request->hasFile('file')){

            $file = $request->file('file');
            $filenameWithExt = $file->getClientOriginalName();          // Get filename with the extension
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);  // Get just filename
            $extension = $file->getClientOriginalExtension();           // Get Just ext
            $filesize = $file->getSize();                               // Get filesize
            $filesizeToStore = round($filesize * 0.0009765625, 2);
            $fileNameToStore = $filename.'_'.time().'.'.$extension;     // Filename to store
            // Upload
            $path = $file->storeAs(
                'acraweb/wp-content/uploads/2020/RateSheets/Wholesale',
                'acra-ws-ratematrix-jumboprime.pdf',
                'sftp'
            );

            //Create Upload Post
            $post = new Post;
            $post->category_id = 'JumboPrimeRatesheet';
            $post->filename = $fileNameToStore;
            $post->filesize = $filesizeToStore;
            $post->save();

            //Send mail to all company users
            foreach ($users as $recipient) {
                Mail::to($recipient)
                ->queue(new JumboPrimeRatesheetUpdate());
            }

            
            $token = Http::post('https://acralending.com/wp-json/jwt-auth/v1/token', [
                'username' => env('WP_USERNAME'),
                'password' => env('WP_PASSWORD'),
            ]);
        
            $token = $token->json()['token'];

            //Trigger Custom Post Update
            $response = Http::withToken($token)
            ->post('https://acralending.com/wp-json/wp/v2/jumboprimeratesheet', [
                    'title' => 'Jumbo Prime Ratesheet Update',
                    'status' => 'publish',
            ]);
    
            return response()->json(['success' => 'Processed Successfully']);
        
        } else {
            return 'file not found';
        }

        

    }
}
