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

        // dd($profile);

        $division = DB::table('s2zar_jsn_users')
        ->orderBy('division', 'asc')
        ->groupBy('division')
        ->where('division', '<>', '')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->pluck('division', 'division')
        ->toArray();

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

        // $pods = array(
        //     '1'  => '1', 
        //     '2'  => '2', 
        //     '3'  => '3',
        //     '4'  => '4',
        //     '5'  => '5',
        //     '6'  => 'Overflow'
        // );

        // $tmPodTeam = DB::table('s2zar_jsn_users')
        // ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        // ->where('pod_tm_lead', '1')
        // ->groupBy('name')
        // ->orderBy('name', 'asc')
        // ->pluck('name', 'name')
        // ->toArray();

        // // dd($tmPodTeam);


        // $uwPodTeam = DB::table('s2zar_jsn_users')
        // ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        // ->where('pod_uw_lead', '1')
        // ->groupBy('name')
        // ->orderBy('name', 'asc')
        // ->pluck('name', 'name')
        // ->toArray();

        // $uwPodArray = array(
        //     'Multifamily' => 'Multifamily',
        //     'DSCR / FNF UW Team' => 'DSCR / FNF UW Team', 
        //     'Consumer Direct' => 'Consumer Direct', 
        //     'Correspondent' => 'Correspondent'
        // );

        // $uwPodTeam = $uwPodTeam + $uwPodArray;
        
        return view('pages.usermanagement.edit')->with([
            'user'          => $user,
            'roles'         => $roles,
            'profile'       => $profile,
            'division'      => $division,
            'departments'   => $departments,
            'position'      => $position,
            // 'pods'          => $pods,
            // 'tmPodTeam'     => $tmPodTeam,
            // 'uwPodTeam'     => $uwPodTeam
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
            'division' => 'required',
            'departments' => 'required',
            'team' => 'nullable',
            'cell' => 'nullable',
            // 'pod_id' => 'nullable',
            // 'pod_lead' => 'nullable',
            // 'pod_tm_lead' => 'nullable',
            // 'pod_uw_lead' => 'nullable',
            // 'pod_tm_lead_name' => 'nullable',
            // 'pod_uw_lead_name' => 'nullable',
            'folderID' => 'nullable',
            'avatar' => 'image|nullable|max:1999'
        ]);
// dd($request);

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

        // $podTmLeadName = '';
        // $podUwLeadName = '';
        $array = array($request->input('firstname'), $request->input('lastname'));
        $fullname = implode(' ', $array);

        // if ($request->input('pod_id') == '6') {
        //     $podUwLeadName = $request->input('pod_uw_lead_name');
        // } else {
        //     $podUwLeadName = $fullname;
        // }

        // if ($request->input('pod_id') == '6' && $request->input('pod_uw_lead') == '1' && $request->input('pod_uw_lead') == '') {
        //     $podUwLeadName = $request->input('pod_uw_lead_name');
        // } else {
        //     $podUwLeadName = $fullname;
        // }

        // if ($request->input('pod_tm_lead') == "1") {
        //     $podTmLeadName = $fullname;
        // } else {
        //     $podTmLeadName = $request->input('pod_tm_lead_name');
        // }

        // if ($request->input('pod_uw_lead') == "1" && $request->input('pod_id') !== '6') {
        //     $podUwLeadName = $fullname;
        // } else {
        //     $podUwLeadName = $request->input('pod_uw_lead_name');
        // }

        

        // Update User in s2zar_jsn_users table
        $info = DB::table('s2zar_jsn_users')->where('id', $user->id)->update([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'position' => $request->input('position'),
            'extension' => $request->input('extension'),
            'directphone' => $request->input('directphone'),
            'division' => $request->input('division'),
            'departments' => $request->input('departments'),
            'team' => $request->input('team'),
            'cell' => $request->input('cell'),
            // 'pod_id' => $request->input('pod_id'),
            // 'pod_lead' => $request->input('pod_lead'),
            // 'pod_tm_lead' => $request->input('pod_tm_lead'),
            // 'pod_uw_lead' => $request->input('pod_uw_lead'),
            // 'pod_tm_lead_name' => $podTmLeadName,
            // 'pod_uw_lead_name' => $podUwLeadName,
        ]);


        // Update User Name in s2zar_users table
        $array = array($request->input('firstname'), $request->input('lastname'));
        $fullname = implode(' ', $array);
        $folderID = $request->input('folderID');

        // $info2 = DB::table('s2zar_users')->where('id', $user->id)->update([
        //     'name' => $fullname,
        //     'folderID' => $folderID
        // ]);

        $profile = User::where('id', $user->id)->first();
        $profile->email = $request->input('email');
        $profile->name = $fullname;
        $profile->folderID = $folderID;


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

    public function delete_avatar(User $user)
    {        
        if(Gate::denies('delete-users')){
            return redirect(route('admin.user.index'));
        }
        
        $profile = User::where('id', $user->id)->first();
        Storage::delete('public/avatars/'.$profile->avatar);
        $profile->avatar = null;
        $profile->save();
        
        return redirect('/usermanagement/profile/'.$user->id)->with('success', 'Profile Picture Deleted');
    }
}
