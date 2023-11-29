<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Directory;
use App\User;
use Gate;
use DB;

class DirectoryListController extends Controller
{
    public function index()
    {
        if(Gate::denies('edit-posts')){
            return redirect(route('home'));
        }

        $usersArray = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->orderby('departments', 'asc')
        ->orderby('firstname', 'asc')
        ->get([
            's2zar_jsn_users.id',
            'name',
            'division',
            'departments',
            'position',
            'extension',
            'directphone',
            'cell',
            'email'
        ])->toArray();


        $departments = DB::table('s2zar_jsn_users')
        ->orderBy('departments', 'asc')
        ->groupBy('departments')
        ->where('departments', '<>', '')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->pluck('departments', 'departments')
        ->toArray();

        $division = DB::table('s2zar_jsn_users')
        ->orderBy('division', 'asc')
        ->groupBy('division')
        ->where('division', '<>', '')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->pluck('division', 'division')
        ->toArray();

        $divisionArray = $division;
        $departmentArray = $departments;
        
        $allUsers = array();

        foreach($divisionArray as $division) {
            foreach($usersArray as $user) {
                if ($user->division == $division) {
                    $allUsers[$division][] = [
                        'id' => $user->id,
                        'name' => $user->name, 
                        'division' => $user->division,
                        'department' => $user->departments,
                        'position' => $user->position,
                        'extension' => $user->extension,
                        'directphone' => $user->directphone,
                        'cellphone' => $user->cell,
                        'email' => $user->email,
                    ];
                }
            }
        }

        $usersTotal = 0;
        foreach($allUsers as $type) { 
            $usersTotal += count($type);
        }
    
        return view('pages.usermanagement.exports')
        ->with([
            'allUsers' => $allUsers,
            'usersTotal' => $usersTotal,
        ]);

    }


}
