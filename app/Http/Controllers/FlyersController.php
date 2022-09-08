<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Post;

class FlyersController extends Controller
{
    public function index()
    {
        $seconds = 86400;

        //About CSC Flyers
        $aboutCsc = Cache::remember('aboutCsc', $seconds, function() {
            return Post::whereRaw("find_in_set('aboutCsc', category_id)")
            ->sortable('filename')
            ->get();
        });
        

        //Automation Flyers
        $automation = Cache::remember('automation', $seconds, function() {
            return Post::whereRaw("find_in_set('automation', category_id)")
            ->sortable('filename')
            ->get();
        });
        

        //Brokers Flyers
        $brokerFlyers = Cache::remember('brokerFlyers', $seconds, function() {
            return Post::whereRaw("find_in_set('flyersForBrokers', category_id)")
            ->sortable('filename')
            ->get();
        });
        

        //Correspondent Flyers
        $corrFlyers = Cache::remember('corrFlyers', $seconds, function() {
            return Post::whereRaw("find_in_set('flyersForBrokers', category_id)")
            ->sortable('filename')
            ->get();
        });
        

        //CSC Program Flyers
        $cscPrograms = Cache::remember('cscPrograms', $seconds, function() {
            return Post::whereRaw("find_in_set('cscPrograms', category_id)")
            ->sortable('filename')
            ->get();
        });
        

        //Social Flyers
        $social = Cache::remember('social', $seconds, function() {
            return Post::whereRaw("find_in_set('social', category_id)")
            ->sortable('filename')
            ->get();
        });
        

        //Niche Flyers
        $aeFlyers = Cache::remember('aeFlyers', $seconds, function() {
            return Post::whereRaw("find_in_set('AEFlyers', category_id)")
            ->sortable('filename')
            ->get();
        });
        

        //Retail Flyers
        $retail = Cache::remember('retail', $seconds, function() {
            return Post::whereRaw("find_in_set('retailFlyers', category_id)")
            ->sortable('filename')
            ->get();
        });
        

        //Retail Flyers
        $standards = Cache::remember('standards', $seconds, function() {
            return Post::whereRaw("find_in_set('standards', category_id)")
            ->sortable('filename')
            ->get();
        });
        

        //Vertical Integration Flyers
        $vert = Cache::remember('vert', $seconds, function() {
            return Post::whereRaw("find_in_set('vertFlyers', category_id)")
            ->sortable('filename')
            ->get();
        });
        

        //Sales Tools Video
        $salesVideos = Cache::remember('salesVideos', $seconds, function() {
            return Post::whereRaw("find_in_set('salesVideos',category_id)")
            ->sortable('filename')
            ->get();
        });
        

        //Small Balance Multifamily
        // $sbmfFlyers = Cache::remember('sbmfFlyers', $seconds, function() {
            // return Post::whereRaw("find_in_set('sbmfFlyers', category_id)")
            // ->sortable('filename')
            // ->get();
        // });
        

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
            'salesVideos'   => $salesVideos,
            // 'sbmfFlyers'    => $sbmfFlyers,
        ]);
    }
}
