<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\StatusReport;
use App\User;
use App\Role;
use Gate;
use DB;


class EmployeeStatusReportController extends Controller
{
    public function create()
    {
        if(Gate::denies('edit-posts')){
            return redirect(route('home'));
        }

        return view('pages.employee.statusreport');
    }

    public function store(Request $request)
    {
        if(Gate::denies('edit-posts')){
            return redirect(route('home'));
        }

        $this->validate($request, [
            'body'          => 'required',
            'requestDate'   => 'required'
        ]);

        $date = $request->input('requestDate');
        $timestamp = date('Y-m-d', strtotime($date));
        // Create Post
        $post = StatusReport::create($request->all());
        $post->user_id = Auth::user()->id;
        $post->body = $request->input('body');
        $post->requestDate = $timestamp;
        $post->save();

        return redirect ('/employee/outofoffice')
            ->with('success', 'List Submitted');
    }
}
