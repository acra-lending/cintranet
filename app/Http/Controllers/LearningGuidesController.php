<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class LearningGuidesController extends Controller
{
    public function index()
    {
        //General Guides
        $generalGuides = Post::where('category_id', 'generalGuides')
        ->sortable('filename')
        ->get();

        //Operation Guides
        $operationGuides = Post::where('category_id', 'operationGuides')
        ->sortable('filename')
        ->get();

        //Servicing Guides
        $servicingGuides = Post::where('category_id', 'servicingGuides')
        ->sortable('filename')
        ->get();

        return view('pages.learning.guides.guides')
        ->with([
            'generalGuides' => $generalGuides,
            'operationGuides' => $operationGuides,
            'servicingGuides' => $servicingGuides,
        ]);
    }
}
