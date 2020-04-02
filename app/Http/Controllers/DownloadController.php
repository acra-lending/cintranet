<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    
}
