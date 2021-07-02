<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Gate;
use DB;
use App\Submissions;

class SubmissionsController extends Controller
{
    public function index()
    {
        // $users = User::sortable('name')->get();
        $submissions = DB::table('submissions');
        
        // dd($submissions);

        $users = DB::table('s2zar_jsn_users')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->leftjoin('submissions', 'submissions.user_id', 's2zar_users.id')
        ->where('s2zar_jsn_users.departments', 'Account Executives - East')
        ->orWhere('s2zar_jsn_users.departments', 'Account Executives - West')
        ->whereIn('submissions.id', function($query) {
            $query->from('submissions')->groupBy('submissions.user_id')->selectRaw('MAX(submissions.id)');
        })
        ->orderBy('submissions.ae_name', 'asc')
        ->get();

        // dd($users);

        return view('pages.usermanagement.submissions')
        ->with([
            'users'         => $users
        ]);
    }

    public function store(Request $request) {

        if(Gate::denies('edit-users')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'ae_name'           => 'required',
            'submission_goal'   => 'required',
            'funding_goal'      => 'required',
        ]);

        $post = Submissions::create($request->all());
        $post->ae_name = $request->input('name');
        $post->submission_goal = $request->input('submission_goal');
        $post->funding_goal = $request->input('funding_goal');
        $post->user_id = $request->id;

        $post->save();

        return redirect('/sales/submissions')->with('success', 'Goals Created');
    }

    public function update(Request $request) {

        if(Gate::denies('edit-users')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'ae_name'           => 'required',
            'submission_goal'   => 'required',
            'funding_goal'      => 'required',
            // 'submission_id'     => 'required',
        ]);

        // dd($request);

        $post = new Submissions;
        $post->ae_name = $request->input('ae_name');
        $post->submission_goal = $request->input('submission_goal');
        $post->funding_goal = $request->input('funding_goal');
        $post->user_id = $request->input('user_id');

        $post->save();

        return back()->with('success', 'Goals Updated');
    }

}
