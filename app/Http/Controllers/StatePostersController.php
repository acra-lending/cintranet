<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class StatePostersController extends Controller
{
    public function index()
    {
        $federal = Post::where('category_id', 'federal')
        ->orderBy('filename', 'asc')
        ->get();

        $alabama = Post::where('category_id', 'alabama')
        ->orderBy('filename', 'asc')
        ->get();

        $arizona = Post::where('category_id', 'arizona')
        ->orderBy('filename', 'asc')
        ->get();

        $california = Post::where('category_id', 'california')
        ->orderBy('filename', 'asc')
        ->get();

        $colorado = Post::where('category_id', 'colorado')
        ->orderBy('filename', 'asc')
        ->get();

        $delaware = Post::where('category_id', 'delaware')
        ->orderBy('filename', 'asc')
        ->get();

        $florida = Post::where('category_id', 'florida')
        ->orderBy('filename', 'asc')
        ->get();

        $georgia = Post::where('category_id', 'georgia')
        ->orderBy('filename', 'asc')
        ->get();

        $idaho = Post::where('category_id', 'idaho')
        ->orderBy('filename', 'asc')
        ->get();

        $illinois = Post::where('category_id', 'illinois')
        ->orderBy('filename', 'asc')
        ->get();

        $indiana = Post::where('category_id', 'indiana')
        ->orderBy('filename', 'asc')
        ->get();

        $kentucky = Post::where('category_id', 'kentucky')
        ->orderBy('filename', 'asc')
        ->get();

        $louisiana = Post::where('category_id', 'louisiana')
        ->orderBy('filename', 'asc')
        ->get();

        $maryland = Post::where('category_id', 'maryland')
        ->orderBy('filename', 'asc')
        ->get();

        $massachusetts = Post::where('category_id', 'massachusetts')
        ->orderBy('filename', 'asc')
        ->get();

        $minnesota = Post::where('category_id', 'minnesota')
        ->orderBy('filename', 'asc')
        ->get();

        $nevada = Post::where('category_id', 'nevada')
        ->orderBy('filename', 'asc')
        ->get();

        $newJersey = Post::where('category_id', 'newJersey')
        ->orderBy('filename', 'asc')
        ->get();

        $northCarolina = Post::where('category_id', 'northCarolina')
        ->orderBy('filename', 'asc')
        ->get();

        $oregon = Post::where('category_id', 'oregon')
        ->orderBy('filename', 'asc')
        ->get();

        $pennsylvania = Post::where('category_id', 'pennsylvania')
        ->orderBy('filename', 'asc')
        ->get();

        $southCarolina = Post::where('category_id', 'southCarolina')
        ->orderBy('filename', 'asc')
        ->get();

        $tennessee = Post::where('category_id', 'tennessee')
        ->orderBy('filename', 'asc')
        ->get();

        $texas = Post::where('category_id', 'texas')
        ->orderBy('filename', 'asc')
        ->get();

        $utah = Post::where('category_id', 'utah')
        ->orderBy('filename', 'asc')
        ->get();

        $virginia = Post::where('category_id', 'virginia')
        ->orderBy('filename', 'asc')
        ->get();

        $washington = Post::where('category_id', 'washington')
        ->orderBy('filename', 'asc')
        ->get();

        $washingtonDc = Post::where('category_id', 'washingtonDc')
        ->orderBy('filename', 'asc')
        ->get();

        $wisconsin = Post::where('category_id', 'wisconsin')
        ->orderBy('filename', 'asc')
        ->get();
        
        return view('pages.humanresources.stateposters')
        ->with([
            'federal'       => $federal,
            'alabama'       => $alabama,
            'arizona'       => $arizona,
            'california'    => $california,
            'colorado'      => $colorado,
            'delaware'      => $delaware,
            'florida'       => $florida,
            'georgia'       => $georgia,
            'idaho'         => $idaho,
            'illinois'      => $illinois,
            'indiana'       => $indiana,
            'kentucky'      => $kentucky,
            'louisiana'     => $louisiana,
            'maryland'      => $maryland,
            'massachusetts' => $massachusetts,
            'minnesota'     => $minnesota,
            'nevada'        => $nevada,
            'newJersey'     => $newJersey,
            'northCarolina' => $northCarolina,
            'oregon'        => $oregon,
            'pennsylvania'  => $pennsylvania,
            'southCarolina' => $southCarolina,
            'tennessee'     => $tennessee,
            'texas'         => $texas,
            'utah'          => $utah,
            'virginia'      => $virginia,
            'washington'    => $washington,
            'washingtonDc'  => $washingtonDc,
            'wisconsin'     => $wisconsin,
        ]);
    }
}





