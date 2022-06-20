<?php

namespace App\Classes;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;

class FFSingleFamilyUpload {   

    public function uploadFfSingleFamily(Request $request)
    {
        $num = 2;
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
                $fileNameToStore = 'Stabilized Bridge Credit Box (SFR) '.date('m-d-Y').'.'.$extension;
                
                //Check if Filename exists
                while(Storage::disk('local')->exists('public/upload/'.$fileNameToStore)){
                    $fileNameToStore = 'Stabilized Bridge Credit Box (SFR) '.date('m-d-Y').' v'.$num.'.'.$extension;
                    $num++;
                }
                // Upload
                $path = $file->storeAs('public/upload', $fileNameToStore);

                //Create Upload Post
                $post = new Post;
                $post->category_id = implode(',', $request->input('category_id'));
                $post->filename = $fileNameToStore;
                $post->filesize = $filesizeToStore;
                $post->save();
                    
            }     
            
            // return back()->with('success', 'Upload Complete');
            return response()->json(['success' => 'Uploaded Successfully']);
    
        }
    }
}