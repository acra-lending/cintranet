<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SalesDocumentsController extends Controller
{
    public function index()
    {
        //Correspondent Documents
        $corrDocs = Post::where('category_id', 'corrDocs')
        ->orderBy('filename', 'asc')
        ->get();

        //Retail Documents
        $retailDocs = Post::where('category_id', 'retailDocs')
        ->orderBy('filename', 'asc')
        ->get();
        
        //Retail MLO Licenses
        $retailMLO = Post::where('category_id', 'retailMLO')
        ->orderBy('filename', 'asc')
        ->get();
        
        return view('pages.sales.documents')
        ->with('corrDocs', $corrDocs)
        ->with('retailDocs', $retailDocs)
        ->with('retailMLO', $retailMLO)
        ;
    }
}