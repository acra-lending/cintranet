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
    public function index()
    {

        // $users = DB::table('s2zar_jsn_users')
        // ->orderBy('firstname', 'asc')
        // ->join('s2zar_users', 's2zar_users.id',  's2zar_jsn_users.id')
        // ->paginate(14);
        $users = User::orderBy('name', 'asc')->paginate(14);
        return view('pages.usermanagement.index')->with([
            'users' => $users
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        
        return view('pages.usermanagement.edit')->with([
            'user' => $user,
            'roles' => $roles,
            'profile' => $profile,
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
        $this->validate($request, [
            'email' => 'required',
            'directphone' => 'required',
            'ext' => 'nullable',
            'departments' => 'required',
            'team' => 'nullable',
            'teamregion' => 'nullable',
            'cell' => 'nullable',
            'avatar' => 'image|nullable|max:1999'
        ]);



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
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        $name = auth()->user()->name;
        $firstname = explode(' ', trim($name))[0];
        $lastname = explode(' ', trim($name))[1];

        // dd($user);

        // Update User
        $info = DB::table('s2zar_jsn_users')->where('id', '=', $user->id)->update([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'extension' => $request->input('extension'),
            'directphone' => $request->input('directphone'),
            'team' => $request->input('team'),
            'teamregion' => $request->input('teamregion'),
            'cell' => $request->input('cell'),
        ]);

        $profile = User::find($user)->first();
        $profile->email = $request->input('email');
        $profile->avatar = $fileNameToStore;
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
        $user->delete();

        return redirect()->route('admin.user.index');
    }
}
