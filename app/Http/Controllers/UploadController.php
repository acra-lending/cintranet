<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class UploadController extends Controller
{
    public function index()
    {   
        $files = Post::get();
        return view('pages.sales.ratesheets')->with('files', $files);
    }
    
    public function upload(Request $request)
    {
        
        $this->validate($request, [
            'category_id' => 'required',
            'file' => 'required',
            'file.*' => 'required|mimes:xls,xlsx,pdf,jpeg,bmp,png,gif|max:9999'
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
                    $path = $file->storeAs('public/upload', $fileNameToStore);

                    //Create Upload Post
                    $post = new Post;
                    $post->category_id = $request->input('category_id');
                    $post->filename = $fileNameToStore;
                    $post->filesize = $filesizeToStore;
                    $post->save();
                    
                }           

        return back()->with('success', 'Upload Complete');
        
        // if ($request->hasfile('file')) {

        //     foreach ($request->file as $file){

        //         $filename = $file->getClientOriginalName();
        //         $file->storeAs('public/upload', $filename);

        //         $post = new Post;
        //         $post->filename = $filename;
        //         $post->save();
        //     }
            
        //     return back();
        // }        
        } else {
            return 'file not found';
        }
    }
}
