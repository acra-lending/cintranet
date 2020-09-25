<?php

namespace App\Http\Controllers;
use App\Directory;
use App\User;
use DB;

use Illuminate\Http\Request;

class DirectoryController extends Controller
{
    public function index(Request $request)
    {   
        $departments = DB::table('s2zar_jsn_users')
        ->orderBy('departments', 'asc')
        ->groupBy('departments')
        ->where('departments', '<>', '')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->pluck('departments', 'departments')
        ->toArray();

        $position = DB::table('s2zar_jsn_users')
        ->orderBy('position', 'asc')
        ->groupBy('position')
        ->where('position', '<>', '')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->pluck('position', 'position')
        ->toArray();

        $team = DB::table('s2zar_jsn_users')
        ->orderBy('team', 'asc')
        ->groupBy('team')
        ->where('team', '<>', '')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->pluck('team', 'team')
        ->toArray();


        $query = DB::table('s2zar_jsn_users')
                ->join('s2zar_users', 's2zar_users.id',  's2zar_jsn_users.id')
                ->orderBy('lastname', 'asc');

        $fields = ['firstname', 'lastname', 'departments', 'position', 'team'];
        foreach ($fields as $field) {
            if ($request->filled($field)) {
                $query = $query->where($field, '=', $request->$field);
                $contacts = $query->paginate(9);
                return view('pages.directory.directory')
                ->with([
                    'contacts'      => $contacts,
                    'departments'   => $departments,
                    'position'      => $position,
                    'team'          => $team,
                ]);
            }
        }

        $contacts = DB::table('s2zar_jsn_users')
        ->orderBy('lastname', 'asc')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->paginate(12);
        return view('pages.directory.directory')
        ->with([
            'contacts'      => $contacts,
            'departments'   => $departments,
            'position'      => $position,
            'team'          => $team,
        ]);
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

        $info = User::find($id);

        return view('pages.directory.user.profile')
        ->with([
            'profile'   => $profile,
            'info'      => $info,
        ]);
    }
}
