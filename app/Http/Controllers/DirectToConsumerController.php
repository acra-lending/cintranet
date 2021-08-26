<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class DirectToConsumerController extends Controller
{
    public function index() 
    {
        //Retail Documents
        $retailDocs = Post::whereRaw("find_in_set('retailDocs', category_id)")
        ->sortable('filename')
        ->get();
        
        //Retail MLO Licenses
        $retailMLO = Post::whereRaw("find_in_set('retailMLO', category_id)")
        ->sortable('filename')
        ->get();

        // $retailCollateral = Post::whereRaw("find_in_set('retailCollateral', category_id)")
        // ->sortable('filename')
        // ->get();

        $retailEmailTemplates = Post::whereRaw("find_in_set('retailEmailTemplates', category_id)")
        ->sortable('filename')
        ->get();

        return view('pages.direct.documents')
        ->with([
            'retailDocs'            => $retailDocs,
            'retailMLO'             => $retailMLO,
            // 'retailCollateral'      => $retailCollateral,
            'retailEmailTemplates'  => $retailEmailTemplates,
        ]);
    }

    
}
