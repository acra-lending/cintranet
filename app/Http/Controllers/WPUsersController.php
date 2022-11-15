<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WPUsersController extends Controller
{
    public function index()
    {

        // $wp_users = DB::connection('mysql2')->table('wp_9c4654a05b_users')->paginate(12);

        //Strapi Table join
        $wp_users = DB::connection('mysql3')->table('up_users')->join('up_users_role_links', 'up_users_role_links.user_id', 'up_users.id')->paginate(12);
        
        // dd($wp_users);
        return view('pages.usermanagement.wpusers.wpusers')->with(['wp_users' => $wp_users]);
        


    }
}
