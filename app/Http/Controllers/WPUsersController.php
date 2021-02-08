<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WPUsersController extends Controller
{
    public function index()
    {
        $wp_users = DB::connection('mysql2')->table('wp_9c4654a05b_users')->paginate(12);

        // dd($wp_users);
        return view('pages.usermanagement.wpusers.wpusers')->with(['wp_users' => $wp_users]);
        


    }
}
