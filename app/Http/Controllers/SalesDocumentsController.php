<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SalesDocumentsController extends Controller
{
    public function index()
    {
        //Correspondent Documents
        $wholesaleDocs = Post::whereRaw("find_in_set('wholesaleDocs', category_id)")
        ->sortable('filename')
        ->get();

        //Correspondent Documents
        $corrDocs = Post::whereRaw("find_in_set('corrDocs', category_id)")
        ->sortable('filename')
        ->get();

        //Retail Documents
        $retailDocs = Post::whereRaw("find_in_set('retailDocs', category_id)")
        ->sortable('filename')
        ->get();
        
        //Retail MLO Licenses
        $retailMLO = Post::whereRaw("find_in_set('retailMLO', category_id)")
        ->sortable('filename')
        ->get();

        //Sales Tools
        $salesTools = Post::whereRaw("find_in_set('salesTools',category_id)")
        ->sortable('filename')
        ->get();
        
        return view('pages.sales.documents')
        ->with([
            'wholesaleDocs' => $wholesaleDocs,
            'corrDocs'      => $corrDocs,
            'retailDocs'    => $retailDocs,
            'retailMLO'     => $retailMLO,
            'salesTools'    => $salesTools,
        ]);
    }
}