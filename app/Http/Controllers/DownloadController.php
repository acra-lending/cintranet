<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;

class DownloadController extends Controller
{
    public function download($filename)
    {
        $filepath = public_path().'/storage/upload/'.$filename;

        return response()->download($filepath);
    }

    public function show($filename)
    {
        $filepath = public_path().'/storage/upload/'.$filename;

        return response()->file($filepath);
    }

    public function edit($id)
    {
        $file = Post::find($id);

        return view('pages.mediamanager.edit')->with('file', $file);
    }
    
}
