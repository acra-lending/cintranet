<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterUsersController extends Controller
{
    public function index()
    {
        $departments = DB::table('s2zar_jsn_users')
        ->orderBy('departments', 'asc')
        ->groupBy('departments')
        ->where('departments', '<>', '')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->pluck('departments', 'departments')
        ->toArray();

        return view('pages.usermanagement.register.register')->with([
            'departments'   => $departments
        ]);
    }

    public function create(Request $request) {

        $this->validate($request, [
            'name'          => ['required', 'string', 'max:255'],
            'email'         => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'      => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $role = Role::where('name', 'admin')->first();

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        $firstname = explode(' ', trim($request['name']))[0];
        $lastname = explode(' ', trim($request['name']))[1];
        $directPhone = $request['directPhone'];
        $ext = $request['ext'];
        $cellPhone = $request['cellPhone'];
        $departments = $request['departments'];
        $id = $user->id;

        $info = DB::table('s2zar_jsn_users')->insert([
            'id'            => $id,
            'firstname'     => $firstname,
            'lastname'      => $lastname,
            'directphone'   => $directPhone,
            'extension'     => $ext,
            'cell'          => $cellPhone,
            'departments'   => $departments
        ]);
        
        $user->assignRole($role);

        return redirect('/usermanagement/profile/'.$user->id)->with('success', 'User Created');

    }
}
