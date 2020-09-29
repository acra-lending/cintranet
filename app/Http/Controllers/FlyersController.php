<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class FlyersController extends Controller
{
    public function index(){
        //About CSC Flyers
        $aboutCsc = Post::whereRaw("find_in_set('aboutCsc', category_id)")
        ->sortable('filename')
        ->get();

        //Automation Flyers
        $automation = Post::whereRaw("find_in_set('automation', category_id)")
        ->sortable('filename')
        ->get();

        //Brokers Flyers
        $brokerFlyers = Post::whereRaw("find_in_set('flyersForBrokers', category_id)")
        ->sortable('filename')
        ->get();

        //Correspondent Flyers
        $corrFlyers = Post::whereRaw("find_in_set('flyersForBrokers', category_id)")
        ->sortable('filename')
        ->get();

        //CSC Program Flyers
        $cscPrograms = Post::whereRaw("find_in_set('cscPrograms', category_id)")
        ->sortable('filename')
        ->get();

        //Social Flyers
        $social = Post::whereRaw("find_in_set('social', category_id)")
        ->sortable('filename')
        ->get();

        //Niche Flyers
        $aeFlyers = Post::whereRaw("find_in_set('AEFlyers', category_id)")
        ->sortable('filename')
        ->get();

        //Retail Flyers
        $retail = Post::whereRaw("find_in_set('retailFlyers', category_id)")
        ->sortable('filename')
        ->get();

        //Retail Flyers
        $standards = Post::whereRaw("find_in_set('standards', category_id)")
        ->sortable('filename')
        ->get();

        //Vertical Integration Flyers
        $vert = Post::whereRaw("find_in_set('vertFlyers', category_id)")
        ->sortable('filename')
        ->get();

        return view('pages.sales.flyers')
        ->with([
            'aboutCsc'      => $aboutCsc,
            'automation'    => $automation,
            'brokerFlyers'  => $brokerFlyers,
            'corrFlyers'    => $corrFlyers,
            'cscPrograms'   => $cscPrograms,
            'social'        => $social,
            'aeFlyers'      => $aeFlyers,
            'retail'        => $retail,
            'standards'     => $standards,
            'vert'          => $vert,
        ]);
    }
}
