<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class StatePostersController extends Controller
{
    public function index()
    {
        $federal = Post::whereRaw("find_in_set('federal', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $alabama = Post::whereRaw("find_in_set('alabama', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $arkansas = Post::whereRaw("find_in_set('arkansas', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $arizona = Post::whereRaw("find_in_set('arizona', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $california = Post::whereRaw("find_in_set('california', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $colorado = Post::whereRaw("find_in_set('colorado', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $connecticut = Post::whereRaw("find_in_set('connecticut', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $delaware = Post::whereRaw("find_in_set('delaware', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $florida = Post::whereRaw("find_in_set('florida', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $georgia = Post::whereRaw("find_in_set('georgia', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $hawaii = Post::whereRaw("find_in_set('hawaii', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $idaho = Post::whereRaw("find_in_set('idaho', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $illinois = Post::whereRaw("find_in_set('illinois', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $indiana = Post::whereRaw("find_in_set('indiana', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $kansas = Post::whereRaw("find_in_set('kansas', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $kentucky = Post::whereRaw("find_in_set('kentucky', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $louisiana = Post::whereRaw("find_in_set('louisiana', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $maryland = Post::whereRaw("find_in_set('maryland', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $massachusetts = Post::whereRaw("find_in_set('massachusetts', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $minnesota = Post::whereRaw("find_in_set('minnesota', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $missouri = Post::whereRaw("find_in_set('missouri', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $montana = Post::whereRaw("find_in_set('montana', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $nevada = Post::whereRaw("find_in_set('nevada', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $newJersey = Post::whereRaw("find_in_set('newJersey', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $northCarolina = Post::whereRaw("find_in_set('northCarolina', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $ohio = Post::whereRaw("find_in_set('ohio', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $oregon = Post::whereRaw("find_in_set('oregon', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $pennsylvania = Post::whereRaw("find_in_set('pennsylvania', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $southCarolina = Post::whereRaw("find_in_set('southCarolina', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $tennessee = Post::whereRaw("find_in_set('tennessee', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $texas = Post::whereRaw("find_in_set('texas', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $utah = Post::whereRaw("find_in_set('utah', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $virginia = Post::whereRaw("find_in_set('virginia', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $washington = Post::whereRaw("find_in_set('washington', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $washingtonDc = Post::whereRaw("find_in_set('washingtonDc', category_id)")
        ->sortable('filename', 'asc')
        ->get();

        $wisconsin = Post::whereRaw("find_in_set('wisconsin', category_id)")
        ->sortable('filename', 'asc')
        ->get();
        
        return view('pages.humanresources.stateposters')
        ->with([
            'federal'       => $federal,
            'alabama'       => $alabama,
            'arizona'       => $arizona,
            'arkansas'      => $arkansas,
            'california'    => $california,
            'colorado'      => $colorado,
            'connecticut'   => $connecticut,
            'delaware'      => $delaware,
            'florida'       => $florida,
            'georgia'       => $georgia,
            'hawaii'        => $hawaii,
            'idaho'         => $idaho,
            'illinois'      => $illinois,
            'indiana'       => $indiana,
            'kansas'        => $kansas,
            'kentucky'      => $kentucky,
            'louisiana'     => $louisiana,
            'maryland'      => $maryland,
            'massachusetts' => $massachusetts,
            'minnesota'     => $minnesota,
            'missouri'      => $missouri,
            'montana'       => $montana,
            'nevada'        => $nevada,
            'newJersey'     => $newJersey,
            'northCarolina' => $northCarolina,
            'ohio'          => $ohio,
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





