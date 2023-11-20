<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class CorrespondentJobaidesController extends Controller
{
    public function index() 
    {
        //Correspondent Documents
        $corrJobaides = Post::whereRaw("find_in_set('corrJobaides', category_id)")
        ->sortable('filename')
        ->get();

        return view('pages.correspondent.jobaides')
        ->with([
            'corrJobaides'          => $corrJobaides,
        ]);
    }
}
