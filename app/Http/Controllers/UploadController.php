<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use App\Category;

class UploadController extends Controller
{
    public function index()
    {   
        // $files = Post::get();
        // return view('pages.sales.ratesheets')->with('files', $files);

        // $categories = Category::get();
        return view('pages.mediamanager.upload');
    }
    
    public function upload(Request $request)
    {
        
        $this->validate($request, [
            'category_id' => 'required',
            'file' => 'required',
            'file.*' => 'required|mimes:xls,xlsx,pdf,jpeg,bmp,png,gif,mp4|max:99999999'
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
                    $post->category_id = implode(',', $request->input('category_id'));
                    // dd($request->input('category_id'));
                    // $post->categories()->attach($request->categories_id);
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

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'filename' => 'required',
        ]);

        //Create Upload Post
        $post = Post::find($id);
        // $post->category_id = implode(',', $request->input('category_id'));
        // dd($request->input('category_id'));
        // $post->categories()->attach($request->categories_id);
        $post->filename = $request->input('filename');
        // $post->filesize = $filesizeToStore;
        $post->save();

        return back()->with('success', 'Update Complete');
    }

    public function destroy($id)
    {
        $post = Post::find($id);

        // Delete file
        Storage::delete('public/upload/'.$post->filename);

        $post->delete();

        return back()->with('success', 'File Removed');
    }
}
