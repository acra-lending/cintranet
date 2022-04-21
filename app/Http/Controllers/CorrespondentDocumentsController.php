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

        return view('pages.correspondent.documents')
        ->with([
            'corrDocs'          => $corrDocs,
        ]);
    } 
}
