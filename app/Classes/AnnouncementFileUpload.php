<?php

namespace App\Classes;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\AnnouncementFile;

class AnnouncementFileUpload {   

    public function uploadFile(Request $request, $post)
    {   
        $num = 2;
        // Handle File Upload
        if($request->hasFile('file')){


            foreach($request->file('file') as $file){

                // Get filename with the extension
                $filenameWithExt = $file->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get Just ext
                $extension = $file->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore = $filename.'.'.$extension;
                //Check if Filename exists
                while(Storage::disk('local')->exists('public/upload/'.$fileNameToStore)){
                    $fileNameToStore = $filename.' v'.$num.'.'.$extension;
                    $num++;
                }
                // Upload
                $path = $file->storeAs('public/files', $fileNameToStore);

                $filePost = new AnnouncementFile;
                $filePost->announcement_id = $post->id;
                $filePost->file = $fileNameToStore;
                $filePost->save();
            } 
        }
    }
}