<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Directory;
use App\User;
use Gate;
use DB;


class DepartmentContactsController extends Controller
{
    public function uwteams()
    {
        $underwriting = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Underwriting')
        ->orderby('team', 'asc')
        // ->groupBy('team');
        ->get();

        $underwriting = collect($underwriting)->groupBy('team');

        return view('pages.directory.uwteams')
        ->with([
            'underwriting'                => $underwriting,
        ]);
    }

    public function tmteams()
    {
        $directorOfOperations = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('position', 'Director of Operations')
        ->first();

        $transactionManagers = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Transaction Managers')
        ->orderby('team', 'asc')
        ->get();

        $transactionManagers = collect($transactionManagers)->groupBy('team');

        return view('pages.directory.tmteams')
        ->with([
            'transactionManagers'                => $transactionManagers,
            'directorOfOperations'                => $directorOfOperations,
        ]);
    }

    public function cdlteams()
    {
        $consumerDirectTeams = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('departments', 'Retail')
        ->orderby('team', 'asc')
        ->get();

        $consumerDirectTeams = collect($consumerDirectTeams)->groupBy('team');

        return view('pages.directory.cdlteams')
        ->with([
            'consumerDirectTeams'       => $consumerDirectTeams,
        ]);
    }
}
