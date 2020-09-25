<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ServicingDocsController extends Controller
{
    public function index()
    {
        //Correspondent Documents
        $callScripts = Post::whereRaw("find_in_set('callScripts', category_id)")
        ->sortable('filename')
        ->get();

        //Retail Documents
        $watchlist = Post::whereRaw("find_in_set('watchlist', category_id)")
        ->sortable('filename')
        ->get();
        
        //Retail MLO Licenses
        $servicingDocs = Post::whereRaw("find_in_set('servicingDocs', category_id)")
        ->sortable('filename')
        ->get();

        //Retail MLO Licenses
        $servicingForeclosure = Post::whereRaw("find_in_set('servicingForeclosure', category_id)")
        ->sortable('filename')
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
