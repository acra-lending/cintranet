<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WPUsersController extends Controller
{
    public function index()
    {
        $wp_users = DB::connection('mysql2')->table('wp_9c4654a05b_users')->paginate(12);

        // foreach($wp_users->chunk(19) as $partOfUsers) {
        //     $usersMeta = DB::connection('mysql2')->table('wp_9c4654a05b_users')
        //     ->join('wp_9c4654a05b_usermeta', 'wp_9c4654a05b_users.ID', '=', 'wp_9c4654a05b_usermeta.user_id')
        //     ->whereIn('wp_9c4654a05b_users.ID', $partOfUsers->pluck('ID'))
        //     ->get();

        //     $combinedUsers = $wp_users->groupBy('ID');
            
        // }
        // dd($wp_users);
        return view('pages.usermanagement.wpusers')->with(['wp_users' => $wp_users]);
        


    }
}
