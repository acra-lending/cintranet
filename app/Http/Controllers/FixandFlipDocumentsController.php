<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class FixandFlipDocumentsController extends Controller
{
    public function index()
    {
        $fixAndFlipDocs = Post::whereRaw("find_in_set('fixAndFlipDocs', category_id)")
        ->sortable('filename')
        ->get();

        $fixAndFlipSystems = Post::whereRaw("find_in_set('fixAndFlipSystems', category_id)")
        ->sortable('filename')
        ->get();

        $fixAndFlipUw = Post::whereRaw("find_in_set('fixAndFlipUw', category_id)")
        ->sortable('filename')
        ->get();

        $fixAndFlipFunding = Post::whereRaw("find_in_set('fixAndFlipFunding', category_id)")
        ->sortable('filename')
        ->get();

        $fixAndFlipProcessing = Post::whereRaw("find_in_set('fixAndFlipProcessing', category_id)")
        ->sortable('filename')
        ->get();

        return view('pages.fixandflip.documents')
        ->with([
            'fixAndFlipDocs'            => $fixAndFlipDocs,
            'fixAndFlipSystems'         => $fixAndFlipSystems,
            'fixAndFlipUw'              => $fixAndFlipUw,
            'fixAndFlipFunding'         => $fixAndFlipFunding,
            'fixAndFlipProcessing'      => $fixAndFlipProcessing
        ]);
    }
}
