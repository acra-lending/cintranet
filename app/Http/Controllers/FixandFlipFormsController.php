<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class FixandFlipFormsController extends Controller
{
    public function index()
    {
        $fixAndFlipInternalForms = Post::whereRaw("find_in_set('fixAndFlipInternalForms', category_id)")
        ->sortable('filename')
        ->get();

        $fixAndFlipWelcomeForms = Post::whereRaw("find_in_set('fixAndFlipWelcomeForms', category_id)")
        ->sortable('filename')
        ->get();

        return view('pages.fixandflip.forms')
        ->with([
            'fixAndFlipInternalForms'    => $fixAndFlipInternalForms,
            'fixAndFlipWelcomeForms'    => $fixAndFlipWelcomeForms
        ]);
    }
}
