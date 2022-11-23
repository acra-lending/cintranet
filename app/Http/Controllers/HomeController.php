<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Directory;
use App\User;
use App\Announcement;
use App\Event;
use App\Post;
use App\StatusReport;
use App\Reminder;
use Illuminate\Support\Facades\Storage;
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

        // Employee Daily Status Report
        $dailyStatus = StatusReport::orderBy('created_at', 'desc')
        ->limit(1)
        ->get();

        // Reminders
        $reminders = Reminder::orderby('created_at', 'desc')
        ->limit(1)
        ->get();
        // dd($reminders);

        // Announcements
        $posts = Announcement::orderBy('created_at', 'desc')->paginate(2);
        
        // Events
        // $currentMonth = date('m');
        // $events = Event::whereRaw('MONTH(created_at) = ?', [$currentMonth])->paginate(5);
        $events = Event::where('start', '>', date('Y-m-d'))->orderBy('start', 'asc')->paginate(5);

        // Query Database
        if (DB::table('s2zar_jsn_users')
        ->orderBy('lastname', 'asc')
        ->groupBy('team')
        ->where('s2zar_jsn_users.id', '=', $user)
        ->where('team', '<>', '')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->pluck('team')->isNotEmpty())
        {
            // $team = DB::table('s2zar_jsn_users')
            // ->orderBy('lastname', 'asc')
            // ->groupBy('team')
            // ->where('s2zar_jsn_users.id', '=', $user)
            // ->where('team', '<>', '')
            // ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
            // ->pluck('team');
            
            $team = DB::table('s2zar_jsn_users')
            ->where('s2zar_jsn_users.id', $user)
            ->value('team');  

            $teamMembers = DB::table('s2zar_jsn_users')
            ->where('s2zar_jsn_users.deleted_at', NULL)
            ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
            ->where('team', $team)
            ->orWhere('s2zar_users.name', $team)
            ->orderBy('lastname', 'asc')
            ->get();

            $teamLead = DB::table('s2zar_jsn_users')
            ->where('s2zar_jsn_users.deleted_at', NULL)
            ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
            ->where('s2zar_users.name', $team)
            ->orderBy('lastname', 'asc')
            ->first();


            /* 
            
            // Team members should be all users in same team
            // Reporting Team members is all members reporting to team lead

            */

            return view('pages.dashboard')
            ->with([
                'teamMembers'   => $teamMembers,
                'team'          => $team,
                'teamLead'      => $teamLead,
                'first_name'    => $first_name,
                'posts'         => $posts,
                'events'        => $events,
                'dailyStatus'   => $dailyStatus,
                'reminders'     => $reminders,
            ]);
        }
        
        return view('pages.dashboard')     
        ->with([
            'first_name'    => $first_name,
            'posts'         => $posts,
            'events'        => $events,
            'dailyStatus'   => $dailyStatus,
            'reminders'     => $reminders,
        ]);
    }
}
