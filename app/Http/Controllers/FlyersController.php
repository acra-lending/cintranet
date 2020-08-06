<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class FlyersController extends Controller
{
    public function index(){
        //About CSC Flyers
        $aboutCsc = Post::where('category_id', 'aboutCsc')
        ->orderBy('filename', 'asc')
        ->get();

        //Automation Flyers
        $automation = Post::where('category_id', 'automation')
        ->orderBy('filename', 'asc')
        ->get();

        //Brokers Flyers
        $brokerFlyers = Post::where('category_id', 'flyersForBrokers')
        ->orderBy('filename', 'asc')
        ->get();

        //Correspondent Flyers
        $corrFlyers = Post::where('category_id', 'flyersForBrokers')
        ->orderBy('filename', 'asc')
        ->get();

        //CSC Program Flyers
        $cscPrograms = Post::where('category_id', 'cscPrograms')
        ->orderBy('filename', 'asc')
        ->get();

        //Social Flyers
        $social = Post::where('category_id', 'social')
        ->orderBy('filename', 'asc')
        ->get();

        //Niche Flyers
        $niche = Post::where('category_id', 'nicheFlyers')
        ->orderBy('filename', 'asc')
        ->get();

        //Retail Flyers
        $retail = Post::where('category_id', 'retailFlyers')
        ->orderBy('filename', 'asc')
        ->get();

        //Vertical Integration Flyers
        $vert = Post::where('category_id', 'vertFlyers')
        ->orderBy('filename', 'asc')
        ->get();

        return view('pages.sales.flyers')
        ->with([
            'aboutCsc'      => $aboutCsc,
            'automation'    => $automation,
            'brokerFlyers'  => $brokerFlyers,
            'corrFlyers'    => $corrFlyers,
            'cscPrograms'   => $cscPrograms,
            'social'        => $social,
            'niche'         => $niche,
            'retail'        => $retail,
            'vert'          => $vert,
        ]);
    }
}
