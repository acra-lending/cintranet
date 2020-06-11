<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Directory;
use App\User;
use App\Announcement;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Grab user info
        $user = auth()->user()->id;
        $name = auth()->user()->name;
        $email = auth()->user()->email;
        $first_name = explode(' ', trim($name))[0];


        // Announcements
        $posts = Announcement::orderBy('created_at', 'desc')->paginate(2);

        // Query Database
        if (DB::table('s2zar_jsn_users')
        ->orderBy('lastname', 'asc')
        ->groupBy('team')
        ->where('s2zar_jsn_users.id', '=', $user)
        ->where('team', '<>', '')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->pluck('team')->isNotEmpty())
        {
            $team = DB::table('s2zar_jsn_users')
            ->orderBy('lastname', 'asc')
            ->groupBy('team')
            ->where('s2zar_jsn_users.id', '=', $user)
            ->where('team', '<>', '')
            ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
            ->pluck('team');
    
            $teamMembers = DB::table('s2zar_jsn_users')
            ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
            ->where('team', $team)
            ->orderBy('lastname', 'asc')
            ->take(8)->get();
            return view('pages.dashboard')
            ->with([
                'teamMembers' => $teamMembers,
                'first_name' => $first_name,
                'posts' => $posts,
            ]);
        }
        dd($posts);
        // return view('pages.dashboard')     
        // ->with([
        //     'first_name' => $first_name,
        //     'posts' => $posts
        // ]);

    }

}
