<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\Filesystem;
use League\Flysystem\Sftp\SftpAdapter;
use App\Post;
use Carbon\Carbon;
use App\Jobs\UpdateRatesheet;
use Gate;

class WebRatesheetUploadController extends Controller
{
    public function index()
    {
        return view ('pages.mediamanager.uploadratesheets');
    }

    public function store_nonprime(Request $request)
    {
        if(Gate::denies('edit-users')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'file' => 'required|mimes:pdf|max:99999999',
            'filename' => 'regex:/^[0-9a-zA-Z_\-. ()&]*$/'
        ]);

        $carbonDate = Carbon::parse($request->datetime);
        $start = Carbon::now();
        $end = $carbonDate;
        $differenceInMinutes = $end->diffInMinutes($start);

        $num = 2;
        //Handle File Upload
        if($request->hasFile('file')){

            $file = $request->file('file');
            $filenameWithExt = $file->getClientOriginalName();  
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filesize = $file->getSize();
            $filesizeToStore = round($filesize * 0.0009765625, 2);
            $fileNameToStore = 'Non-Prime Wholesale Rate Sheet '.date('m-d-Y').'.'.$extension;
                
            //Check if Filename exists
            while(Storage::disk('local')->exists('public/upload/'.$fileNameToStore)){
                $fileNameToStore = 'Non-Prime Wholesale Rate Sheet '.date('m-d-Y').' v'.$num.'.'.$extension;
                $num++;
            }   
            $path = $file->storeAs('public/upload', $fileNameToStore);
            
            // Upload
            $sftpFileName = '/acra-ws-ratematrix-1stTDs-3.pdf';
            $categoryId = 'wsNonprimeAE';

            $post = Post::create();
            
            UpdateRatesheet::dispatch($post, $fileNameToStore, $filesizeToStore, $sftpFileName, $categoryId)->delay(now()->addMinutes($differenceInMinutes));

    
            return response()->json(['success' => 'Uploaded Successfully']);

        } else {
            return 'Error. Upload failed';
        }
    }

    public function store_dscr(Request $request)
    {
        if(Gate::denies('edit-users')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'file' => 'required|mimes:pdf|max:99999999',
            'filename' => 'regex:/^[0-9a-zA-Z_\-. ()&]*$/'
        ]);

        $carbonDate = Carbon::parse($request->datetime);
        $start = Carbon::now()->subHours(7);
        $end = $carbonDate;
        $differenceInMinutes = $end->diffInMinutes($start);

        $num = 2;
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
            $fileNameToStore = 'Business Purpose Wholesale Rate Sheet '.date('m-d-Y').'.'.$extension;

            
            //Check if Filename exists
            while(Storage::disk('local')->exists('public/upload/'.$fileNameToStore)){
                $fileNameToStore = 'Business Purpose Wholesale Rate Sheet '.date('m-d-Y').' v'.$num.'.'.$extension;
                $num++;
            }
            $path = $file->storeAs('public/upload', $fileNameToStore);
            
            // Upload
            $sftpFileName = '/acra-ws-ratematrix-dscr.pdf';
            $categoryId = 'wsDscrAE';

            $post = Post::create();
            
            UpdateRatesheet::dispatch($post, $fileNameToStore, $filesizeToStore, $sftpFileName, $categoryId)->delay(now()->addMinutes($differenceInMinutes));
    
            
            return response()->json(['success' => 'Uploaded Successfully']);
        
        } else {
            return 'Error. Upload failed';
        }
    }

    public function store_3mbs(Request $request)
    {
        if(Gate::denies('edit-users')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'file' => 'required|mimes:pdf|max:99999999',
            'filename' => 'regex:/^[0-9a-zA-Z_\-. ()&]*$/'
        ]);

        $carbonDate = Carbon::parse($request->datetime);
        $start = Carbon::now()->subHours(7);
        $end = $carbonDate;
        $differenceInMinutes = $end->diffInMinutes($start);

        $num = 2;
        //Handle File Upload
        if($request->hasFile('file')){

            $file = $request->file('file');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filesize = $file->getSize();
            $filesizeToStore = round($filesize * 0.0009765625, 2);
            // Filename to store
            $fileNameToStore = '3MBS Wholesale Rate Sheet '.date('m-d-Y').'.'.$extension;

            //Check if Filename exists
            while(Storage::disk('local')->exists('public/upload/'.$fileNameToStore)){
                $fileNameToStore = '3MBS Wholesale Rate Sheet '.date('m-d-Y').' v'.$num.'.'.$extension;
                $num++;
            }
            $path = $file->storeAs('public/upload', $fileNameToStore);
            
            // Upload
            $sftpFileName = '/acra-ws-ratematrix-3mbs.pdf';
            $categoryId = '3MBSRatesheet';

            $post = Post::create();
            
            UpdateRatesheet::dispatch($post, $fileNameToStore, $filesizeToStore, $sftpFileName, $categoryId)->delay(now()->addMinutes($differenceInMinutes));

    
            return response()->json(['success' => 'Uploaded Successfully']);
        
        } else {
            return 'Error. Upload failed';
        }
    }

    public function store_itin(Request $request)
    {
        if(Gate::denies('edit-users')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'file' => 'required|mimes:pdf|max:99999999',
            'filename' => 'regex:/^[0-9a-zA-Z_\-. ()&]*$/'
        ]);

        $carbonDate = Carbon::parse($request->datetime);
        $start = Carbon::now()->subHours(7);
        $end = $carbonDate;
        $differenceInMinutes = $end->diffInMinutes($start);

        $num = 2;
        //Handle File Upload
        if($request->hasFile('file')){

            $file = $request->file('file');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filesize = $file->getSize();
            $filesizeToStore = round($filesize * 0.0009765625, 2);
            $fileNameToStore = 'ITIN Wholesale Rate Sheet '.date('m-d-Y').'.'.$extension;
                
            //Check if Filename exists
            while(Storage::disk('local')->exists('public/upload/'.$fileNameToStore)){
                $fileNameToStore = 'ITIN Wholesale Rate Sheet '.date('m-d-Y').' v'.$num.'.'.$extension;
                $num++;
            }

            $path = $file->storeAs('public/upload', $fileNameToStore);
            
            // Upload
            $sftpFileName = '/acra-ws-ratematrix-itin.pdf';
            $categoryId = 'ITINRatesheet';

            $post = Post::create();
            
            UpdateRatesheet::dispatch($post, $fileNameToStore, $filesizeToStore, $sftpFileName, $categoryId)->delay(now()->addMinutes($differenceInMinutes));
            
    
            return response()->json(['success' => 'Uploaded Successfully']);
        
        } else {
            return 'Error. Upload failed';
        }
    }

    public function store_jumboprime(Request $request)
    {
        if(Gate::denies('edit-users')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'file' => 'required|mimes:pdf|max:99999999',
            'filename' => 'regex:/^[0-9a-zA-Z_\-. ()&]*$/'
        ]);
        
        $carbonDate = Carbon::parse($request->datetime);
        $start = Carbon::now()->subHours(7);
        $end = $carbonDate;
        $differenceInMinutes = $end->diffInMinutes($start);

        $num = 2;
        //Handle File Upload
        if($request->hasFile('file')){

            $file = $request->file('file');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filesize = $file->getSize();
            $filesizeToStore = round($filesize * 0.0009765625, 2);
            $fileNameToStore = 'Jumbo Prime Wholesale Rate Sheet '.date('m-d-Y').'.'.$extension;
                
            //Check if Filename exists
            while(Storage::disk('local')->exists('public/upload/'.$fileNameToStore)){
                $fileNameToStore = 'Jumbo Prime Wholesale Rate Sheet '.date('m-d-Y').' v'.$num.'.'.$extension;
                $num++;
            }

            $path = $file->storeAs('public/upload', $fileNameToStore);
            
            // Upload
            $sftpFileName = '/acra-ws-ratematrix-jumboprime.pdf';
            $categoryId = 'wsJumboPrimeAE';

            $post = Post::create();
            
            UpdateRatesheet::dispatch($post, $fileNameToStore, $filesizeToStore, $sftpFileName, $categoryId)->delay(now()->addMinutes($differenceInMinutes));

    
            return response()->json(['success' => 'Uploaded Successfully']);
        
        } else {
            return 'Error. Upload failed';
        }
    }

    public function store_sbmf(Request $request)
    {
        if(Gate::denies('edit-users')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'file' => 'required|mimes:pdf|max:99999999',
            'filename' => 'regex:/^[0-9a-zA-Z_\-. ()&]*$/'
        ]);

        //Handle File Upload
        if($request->hasFile('file')){

            $file = $request->file('file');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filesize = $file->getSize();
            $filesizeToStore = round($filesize * 0.0009765625, 2);
            $fileNameToStore = 'Small Balance Multifamily Rate Sheet '.date('m-d-Y').'.'.$extension;
                
            //Check if Filename exists
            while(Storage::disk('local')->exists('public/upload/'.$fileNameToStore)){
                $fileNameToStore = 'Small Balance Multifamily Rate Sheet '.date('m-d-Y').' v'.$num.'.'.$extension;
                $num++;
            }


            $path = $file->storeAs('public/upload', $fileNameToStore);
            
            // Upload
            $sftpFileName = '/acra-ff-ratematrix-sbmf.pdf';
            $categoryId = 'SBMFRatesheet';

            $post = Post::create();
            
            UpdateRatesheet::dispatch($post, $fileNameToStore, $filesizeToStore, $sftpFileName, $categoryId)->delay(now()->addMinutes($differenceInMinutes));
    

            return response()->json(['success' => 'Uploaded Successfully']);
        
        } else {
            return 'Error. Upload failed';
        }
    }

    public function store_sfr(Request $request)
    {
        if(Gate::denies('edit-users')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'file' => 'required|mimes:pdf|max:99999999',
            'filename' => 'regex:/^[0-9a-zA-Z_\-. ()&]*$/'
        ]);

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
                'acraweb/wp-content/uploads/2022/RateSheets/FF',
                'acra-ff-creditbox-sfr.pdf',
                'sftp'
            );

            //Create Upload Post
            $post = new Post;
            $post->category_id = 'SFRRatesheet';
            $post->filename = $fileNameToStore;
            $post->filesize = $filesizeToStore;
            $post->save();
    
            return response()->json(['success' => 'Uploaded Successfully']);
        
        } else {
            return 'Error. Upload failed';
        }
    }

    public function store_mf(Request $request)
    {
        if(Gate::denies('edit-users')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'file' => 'required|mimes:pdf|max:99999999',
            'filename' => 'regex:/^[0-9a-zA-Z_\-. ()&]*$/'
        ]);

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
                'acraweb/wp-content/uploads/2022/RateSheets/FF',
                'acra-ff-creditbox-mf.pdf',
                'sftp'
            );

            //Create Upload Post
            $post = new Post;
            $post->category_id = 'MFRatesheet';
            $post->filename = $fileNameToStore;
            $post->filesize = $filesizeToStore;
            $post->save();
    
            return response()->json(['success' => 'Uploaded Successfully']);
        
        } else {
            return 'Error. Upload failed';
        }
    }
}
