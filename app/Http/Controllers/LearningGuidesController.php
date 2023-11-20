<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class LearningGuidesController extends Controller
{
    public function index()
    {
        //General Guides
        $generalGuides = Post::whereRaw("find_in_set('generalGuides', category_id)")
        ->sortable('filename')
        ->get();

        //Operation Guides
        $operationGuides = Post::whereRaw("find_in_set('operationGuides', category_id)")
        ->sortable('filename')
        ->get();

        //Servicing Guides
        $servicingGuides = Post::whereRaw("find_in_set('servicingGuides', category_id)")
        ->sortable('filename')
        ->get();

        $jumboPrimeGuides = Post::whereRaw("find_in_set('jumboPrimeGuides', category_id)")
        ->sortable('filename')
        ->get();

        return view('pages.learning.guides.guides')
        ->with([
            'generalGuides'     => $generalGuides,
            'operationGuides'   => $operationGuides,
            'servicingGuides'   => $servicingGuides,
            'jumboPrimeGuides'  => $jumboPrimeGuides,
        ]);
    }
}
