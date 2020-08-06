<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ServicingDocsController extends Controller
{
    public function index()
    {
        //Correspondent Documents
        $callScripts = Post::where('category_id', 'callScripts')
        ->orderBy('filename', 'asc')
        ->get();

        //Retail Documents
        $watchlist = Post::where('category_id', 'watchlist')
        ->orderBy('filename', 'asc')
        ->get();
        
        //Retail MLO Licenses
        $servicingDocs = Post::where('category_id', 'servicingDocs')
        ->orderBy('filename', 'asc')
        ->get();

        //Retail MLO Licenses
        $servicingForeclosure = Post::where('category_id', 'servicingForeclosure')
        ->orderBy('filename', 'asc')
        ->get();
        
        return view('pages.servicing.servicing')
        ->with([
            'callScripts'           => $callScripts,
            'watchlist'             => $watchlist,
            'servicingDocs'         => $servicingDocs,
            'servicingForeclosure'  => $servicingForeclosure,
        ]);
    }
}
