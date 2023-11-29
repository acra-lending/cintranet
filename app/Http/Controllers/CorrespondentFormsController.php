<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class CorrespondentFormsController extends Controller
{
    public function index() 
    {
        //Correspondent Documents
        $corrForms = Post::whereRaw("find_in_set('corrForms', category_id)")
        ->sortable('filename')
        ->get();

        return view('pages.correspondent.forms')
        ->with([
            'corrForms'          => $corrForms,
        ]);
    }
}
