<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use DB;

class UsersApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return $request->user();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $position = $request->input('position');
        $departments = $request->input('departments');
        $directPhone = $request->input('directphone');
        $ext = $request->input('ext');

        $role = Role::where('name', 'user')->first();

        $nameArray = array($firstname, $lastname);
        $name = implode(' ', $nameArray);

        $user = User::create([
            'name' => $name,
            'email' => $email,
        ]);

        $id = $user->id;

        $info = DB::table('s2zar_jsn_users')->insert([
            'id'            => $id,
            'firstname'     => $firstname,
            'lastname'      => $lastname,
            'directphone'   => $directPhone,
            'extension'     => $ext,
            // 'cell'          => $cellPhone,
            'departments'   => $departments
        ]);

        $user->assignRole($role);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, User $user)
    {
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'position' => 'required',
            'email' => 'required',
            'directphone' => 'required',
            'ext' => 'nullable',
            'departments' => 'required',
            'team' => 'nullable',
            'cell' => 'nullable',
            'folderID' => 'nullable',
            'avatar' => 'image|nullable|max:1999'
        ]);

        // Update User in s2zar_jsn_users table
        $info = DB::table('s2zar_jsn_users')->where('id', $user->id)->update([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'position' => $request->input('position'),
            'extension' => $request->input('extension'),
            'directphone' => $request->input('directphone'),
            'departments' => $request->input('departments'),
            'team' => $request->input('team'),
            'cell' => $request->input('cell'),
        ]);


        // Update User Name in s2zar_users table
        $array = array($request->input('firstname'), $request->input('lastname'));
        $fullname = implode(' ', $array);
        $folderID = $request->input('folderID');

        $info2 = DB::table('s2zar_users')->where('id', $user->id)->update([
            'name' => $fullname,
            'folderID' => $folderID
        ]);

        $profile = User::where('id', $user->id)->first();
        $profile->email = $request->input('email');
        
        $profile->save();

        //Roles
        switch($request->roles) {
            case 'Super Admin':
                $role = 1;
                break;
            case 'Admin':
                $role = 2;
                break;
            case 'Author':
                $role = 3;
                break;
            case 'User':
                $role = 4;
                break;
            default:
                $role = 4;
                break;
        }

        $user->roles()->sync($role);

        return response()->json('User updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->roles()->detach();
        DB::table('s2zar_jsn_users')->where('id', '=', $user->id)->delete();
        $user->delete();

        return response()->json('User deleted');
    }
}
