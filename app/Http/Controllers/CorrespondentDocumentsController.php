<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class CorrespondentDocumentsController extends Controller
{
    public function index()
    {
        //Correspondent Documents
        $corrDocs = Post::whereRaw("find_in_set('corrDocs', category_id)")
        ->sortable('filename')
        ->get();

        $corrForms = Post::whereRaw("find_in_set('corrForms', category_id)")
        ->sortable('filename')
        ->get();

        $corrJobaides = Post::whereRaw("find_in_set('corrJobaides', category_id)")
        ->sortable('filename')
        ->get();

        return view('pages.correspondent.documents')
        ->with([
            'corrDocs'          => $corrDocs,
            'corrForms'          => $corrForms,
            'corrJobaides'          => $corrJobaides,
        ]);
    } 
}
