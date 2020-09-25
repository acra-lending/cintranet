<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;

class DownloadController extends Controller
{
    public function show($filename)
    {

        // $filepath = Storage::disk('spaces')->get('/public/upload/'.$filename);
        $filepath = public_path().'/storage/upload/'.$filename;
        $headers = [
            'Content-Type' => 'application/zip',
        ];
        // return response($filepath, 200, $headers);
        return response()->download($filepath);
    }
    public function view($filename)
    {

        // $filepath = Storage::disk('spaces')->get('/public/upload/'.$filename);
        $filepath = public_path().'/storage/upload/'.$filename;
        // $headers = [
        //     'Content-Type' => 'application/pdf',
        // ];
        // return response($filepath, 200, $headers);
        return response()->file($filepath);
    }

    // public function show($filename)
    // {
    //     $filepath = public_path().'/storage/upload/'.$filename;

    //     return response()->file($filepath);
    // }

    public function edit($id)
    {
        $file = Post::find($id);

        return view('pages.mediamanager.edit')->with('file', $file);
    }
    
}
