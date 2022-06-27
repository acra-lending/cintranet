<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\Filesystem;
use League\Flysystem\Sftp\SftpAdapter;
use App\Post;
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
                'acra-ws-ratematrix-1stTDs.pdf',
                'sftp'
            );

            //Create Upload Post
            $post = new Post;
            $post->category_id = 'NonPrimeRatesheet';
            $post->filename = $fileNameToStore;
            $post->filesize = $filesizeToStore;
            $post->save();
    
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
                'acra-ws-ratematrix-dscr.pdf',
                'sftp'
            );

            //Create Upload Post
            $post = new Post;
            $post->category_id = 'DSCRRatesheet';
            $post->filename = $fileNameToStore;
            $post->filesize = $filesizeToStore;
            $post->save();
    
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
                'acra-ws-ratematrix-3mbs.pdf',
                'sftp'
            );

            //Create Upload Post
            $post = new Post;
            $post->category_id = '3MBSRatesheet';
            $post->filename = $fileNameToStore;
            $post->filesize = $filesizeToStore;
            $post->save();
    
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
                'acra-ws-ratematrix-itin.pdf',
                'sftp'
            );

            //Create Upload Post
            $post = new Post;
            $post->category_id = 'ITINRatesheet';
            $post->filename = $fileNameToStore;
            $post->filesize = $filesizeToStore;
            $post->save();
    
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
            $post->category_id = 'JPRatesheet';
            $post->filename = $fileNameToStore;
            $post->filesize = $filesizeToStore;
            $post->save();
    
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
            $filenameWithExt = $file->getClientOriginalName();          // Get filename with the extension
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);  // Get just filename
            $extension = $file->getClientOriginalExtension();           // Get Just ext
            $filesize = $file->getSize();                               // Get filesize
            $filesizeToStore = round($filesize * 0.0009765625, 2);
            $fileNameToStore = $filename.'_'.time().'.'.$extension;     // Filename to store
            // Upload
            $path = $file->storeAs(
                'acraweb/wp-content/uploads/2022/RateSheets/FF',
                'acra-ff-ratematrix-sbmf.pdf',
                'sftp'
            );

            //Create Upload Post
            $post = new Post;
            $post->category_id = 'SBMFRatesheet';
            $post->filename = $fileNameToStore;
            $post->filesize = $filesizeToStore;
            $post->save();
    
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
