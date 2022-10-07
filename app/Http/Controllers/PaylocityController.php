<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PaylocityController extends Controller
{
    public function index()
    {
        $loginGuide = Post::where('category_id', 'hrPaylocity')
        ->where('filename', 'like', '%instructions_to_log_in_to_paylocity%')
        ->orderBy('created_at', 'desc')
        ->first();
        
        $webPayGuide = Post::where('category_id', 'hrPaylocity')
        ->where('filename', 'like', '%web_pay_employee_login%')
        ->orderBy('created_at', 'desc')
        ->first();

        $hrHowTo = Post::where('category_id', 'hrHowTo')
        ->sortable('filename', 'asc')
        ->get();
     
        return view('pages.humanresources.dayforcelogin')
        ->with([
            'loginGuide'    => $loginGuide,
            'webPayGuide'   => $webPayGuide,
            'hrHowTo'       => $hrHowTo,
        ]);
    }
}
