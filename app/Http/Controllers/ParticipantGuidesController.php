<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ParticipantGuidesController extends Controller
{
    public function index()
    {
        //Correspondent Documents
        $operationGuides = Post::where('category_id', 'operationGuides')
        ->orderBy('filename', 'asc')
        ->get();

        //Retail Documents
        $servicingGuides = Post::where('category_id', 'servicingGuides')
        ->orderBy('filename', 'asc')
        ->get();

        return view('pages.learning.courses.participantguides.participantguides')
        ->with([
            'operationGuides' => $operationGuides,
            'servicingGuides' => $servicingGuides,
        ]);
    }
}
