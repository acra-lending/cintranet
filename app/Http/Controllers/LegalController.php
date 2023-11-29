<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class LegalController extends Controller
{
    public function index()
    {
        $legalDocs = Post::whereRaw("find_in_set('legalDocs', category_id)")
        ->sortable('filename')
        ->get();

        return view('pages.legal.documents')
        ->with([
            'legalDocs' => $legalDocs,
        ]);
    }
}
