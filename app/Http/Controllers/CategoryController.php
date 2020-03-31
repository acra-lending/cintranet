<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class CategoryController extends Controller
{
    public function index()
    {
        $category_zero = Post::where('category_id', '0')->orderBy('created_at', 'desc')->limit(1)->get();
        $category_one = Post::where('category_id', '1')->orderBy('created_at', 'desc')->limit(1)->get();
        $category_two = Post::where('category_id', '2')->orderBy('created_at', 'desc')->limit(1)->get();
        $category_three = Post::where('category_id', '3')->orderBy('created_at', 'desc')->limit(1)->get();

        $category_zero_past = Post::where('category_id', '0')->orderBy('created_at', 'desc')->skip(1)->take(10)->get();
        $category_one_past = Post::where('category_id', '1')->orderBy('created_at', 'desc')->skip(1)->take(10)->get();
        $category_two_past = Post::where('category_id', '2')->orderBy('created_at', 'desc')->skip(1)->take(10)->get();
        $category_three_past = Post::where('category_id', '3')->orderBy('created_at', 'desc')->skip(1)->take(10)->get();
        
        return view('pages.sales.ratesheets')
        ->with('category_zero', $category_zero)
        ->with('category_one', $category_one)
        ->with('category_two', $category_two)
        ->with('category_three', $category_three)
        ->with('category_zero_past', $category_zero_past)
        ->with('category_one_past', $category_one_past)
        ->with('category_two_past', $category_two_past)
        ->with('category_three_past', $category_three_past);

    }
    

}
