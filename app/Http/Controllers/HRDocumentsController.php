<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HRDocumentsController extends Controller
{
    public function index()
    {
        //Company Policies
        $hrPolicies = Post::where('category_id', 'hrPolicies')
        ->sortable('filename', 'asc')
        ->get();

        return view('pages.humanresources.documents')
        ->with([
            'hrPolicies' => $hrPolicies,
        ]);
    }
}
