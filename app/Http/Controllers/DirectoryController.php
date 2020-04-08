<?php

namespace App\Http\Controllers;
use App\Directory;
use DB;

use Illuminate\Http\Request;

class DirectoryController extends Controller
{
    public function index()
    {
        // $data = DB::table('s2zar_jsn_users')
        // ->join('s2zar_users', 's2zar_jsn_users.id', '=', 's2zar_users.id' )
        // ->get();
        // return view('pages.directory.directory')->with('data', $data);
        // $contacts = Directory::orderBy('lastname', 'asc')->paginate(9);
        // return view('pages.directory.directory')->with('contacts', $contacts);
        $contacts = DB::table('s2zar_jsn_users')
        ->orderBy('lastname', 'asc')
        ->join('s2zar_users', 's2zar_users.id',  's2zar_jsn_users.id')
        ->paginate(9);
        return view('pages.directory.directory')->with('contacts', $contacts);
    }

    public function show($id)
    {
        // $profile = Directory::find($id);
        // return view('pages.usermanagement.profile')->with('profile', $profile);
        $profile = DB::table('s2zar_jsn_users')
        ->orderBy('lastname', 'asc')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('s2zar_jsn_users.id', $id)
        ->get();
        return view('pages.directory.user.profile')->with('profile', $profile);
    }
}
