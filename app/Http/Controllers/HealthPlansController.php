<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Storage;

class HealthPlansController extends Controller
{
    public function index()
    {
        $welfare = Post::where('category_id', 'hrHealthPlanDocs')
        ->where('filename', 'like', '%health and welfare%')
        ->orderBy('created_at', 'desc')
        ->first();
        
        $planDescription = Post::where('category_id', 'hrHealthPlanDocs')
        ->where('filename', 'like', '%plan description%')
        ->orderBy('created_at', 'desc')
        ->first();

        $premium = Post::where('category_id', 'hrHealthPlanDocs')
        ->where('filename', 'like', '%premium only plan%')
        ->orderBy('created_at', 'desc')
        ->first();

        $pop = Post::where('category_id', 'hrHealthPlanDocs')
        ->where('filename', 'like', '%pop summary%')
        ->orderBy('created_at', 'desc')
        ->first();

        $qmcso = Post::where('category_id', 'hrHealthPlanDocs')
        ->where('filename', 'like', '%qmcso%')
        ->orderBy('created_at', 'desc')
        ->first();

        return view('pages.humanresources.healthplan')
        ->with([
            'welfare'           => $welfare,
            'planDescription'   => $planDescription,
            'premium'           => $premium,
            'pop'               => $pop,
            'qmcso'             => $qmcso,
        ]);
    }
}
