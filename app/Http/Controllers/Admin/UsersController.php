<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Role;
use Gate;
use DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // $users = DB::table('s2zar_jsn_users')
        // ->orderBy('firstname', 'asc')
        // ->join('s2zar_users', 's2zar_users.id',  's2zar_jsn_users.id')
        // ->paginate(14);

        $users = User::all();

        if(!empty($request->input('q'))){
            $q = $request->input('q');
            // $users = DB::table('s2zar_jsn_users')
            // ->orderBy('lastname', 'asc')
            // ->join('s2zar_users', 's2zar_users.id',  's2zar_jsn_users.id')
            // ->where('name', 'LIKE', '%'.$q.'%')
            // ->orWhere('email', 'LIKE', '%'.$q.'%')
            // ->get();

            // dd($users);

            $users = User::where('name', 'LIKE', '%'.$q.'%')
            ->orWhere('email', 'LIKE', '%'.$q.'%')
            ->paginate();

            return view('pages.usermanagement.index')
            ->with([
                'users'         => $users
            ]);
        }

        return view('pages.usermanagement.index')
        ->with([
            'users'         => $users
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if(Gate::denies('edit-users')){
            return redirect(route('admin.user.index'));
        }
        
        $roles = Role::all();

        $profile = DB::table('s2zar_jsn_users')
        ->orderBy('lastname', 'asc')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->where('s2zar_jsn_users.id', $user->id)
        ->get();

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
        
        return view('pages.usermanagement.edit')->with([
            'user'          => $user,
            'roles'         => $roles,
            'profile'       => $profile,
            'departments'   => $departments,
            'position'      => $position
        ]);
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
        if(Gate::denies('edit-users')){
            return redirect(route('admin.user.index'));
        }

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
// dd($user);

        // Handle File Upload
        if($request->hasFile('avatar')){
            // Get filename with the extension
            $filenameWithExt = $request->file('avatar')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get Just ext
            $extension = $request->file('avatar')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('avatar')->storeAs('public/avatars', $fileNameToStore);
        } 
        // else {
        //     $fileNameToStore = '';
        // }
        $name = auth()->user()->name;
        $firstname = explode(' ', trim($name))[0];
        $lastname = explode(' ', trim($name))[1];

        // dd($request);

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

        if($request->hasFile('avatar')){
            $profile->avatar = $fileNameToStore;
        }
        
        $profile->save();
        
        $user->roles()->sync($request->roles);

        
        return redirect('/usermanagement/profile/'.$user->id)->with('success', 'User Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if(Gate::denies('delete-users')){
            return redirect(route('admin.user.index'));
        }

        $user->roles()->detach();
        DB::table('s2zar_jsn_users')->where('id', '=', $user->id)->delete();
        $user->delete();

        return redirect()->route('admin.user.index')->with('success', 'User Deleted');
    }
}
