<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JumboRatesheetUploadCorrespondentController extends Controller
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

        $brokers = new JumboPrimeWholesaleRecipients;
        $brokers = $brokers->getBrokers();

        $users = new JumboPrimeWholesaleRecipients;
        $users = $users->getCompanyUsers();

        $recipients = array_merge($brokers, $users);

        // dd($recipients);

        //Handle File Upload
        if($request->hasFile('file')){

            $file = $request->file('file');
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
            // $path = $file->storeAs('public/upload', $fileNameToStore);
            $path = $file->storeAs(
                'acraweb/wp-content/uploads/2020/RateSheets/Wholesale',
                'acra-ws-ratematrix-jumboprime-1.pdf',
                'sftp'
            );

            //Create Upload Post
            $post = new Post;
            $post->category_id = 'JumboPrimeRatesheet';
            // dd($request->input('category_id'));
            // $post->categories()->attach($request->categories_id);
            $post->filename = $fileNameToStore;
            $post->filesize = $filesizeToStore;
            $post->save();

            // foreach ($recipients as $recipient) {
            //     Mail::to($recipient)
            //     ->queue(new JumboPrimeRatesheetUpdate());
            // }


            Mail::to('webupdates@acralending.com')
            ->queue(new JumboPrimeRatesheetUpdate());

            $token = Http::post('https://acralending.com/wp-json/jwt-auth/v1/token', [
                'username' => env('WP_USERNAME'),
                'password' => env('WP_PASSWORD'),
            ]);
        
            $token = $token->json()['token'];

            $response = Http::withToken($token)
            ->post('https://acralending.com/wp-json/wp/v2/jumboprimeratesheet', [
                    'title' => 'Jumbo Prime Ratesheet Update',
                    'status' => 'publish',
            ]);
    
            // return back()->with('success', 'Upload Complete');
            return response()->json(['success' => 'Processed Successfully']);
        
        } else {
            return 'file not found';
        }

    }
}
