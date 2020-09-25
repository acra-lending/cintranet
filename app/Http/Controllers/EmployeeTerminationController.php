<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\EmployeeTermination;
use App\Post;
use App\User;
use Mail;
use Session;
use DB;

class EmployeeTerminationController extends Controller
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

        $position = DB::table('s2zar_jsn_users')
        ->orderBy('position', 'asc')
        ->groupBy('position')
        ->where('position', '<>', '')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->pluck('position', 'position')
        ->toArray();

        return view('pages.employee.termination')
            ->with([
                'departments'   => $departments,
                'position'      => $position
            ]);
    }

    public function submit(Request $request)
    {
        $dataValidate = request()->validate([
            'name'                  => 'required|max:100',
            'email'                 => 'required|email',
            'status'                => 'nullable',
            'requestDueDate'        => 'required',
            'position'              => 'required',
            'emailForward'          => 'nullable',
            'specialInstructions'   => 'nullable|max:500',
            'submittedBy'           => 'required',
            'email2'                => 'required|email',
            'email3'                => 'nullable|email',
            'email4'                => 'nullable|email',
            'email5'                => 'nullable|email',
        ]);
        $data = $request->all();

        // dd($request)->all();
 
        Mail::to([
            'itsupport@citadelservicing.com', 
            'staffchanges@citadelservicing.com', 
            'human_resources@citadelservicing.com', 
            'hitzm@citadelservicing.com'
        ])->send(new EmployeeTermination($data));
        

        return redirect('/employee/termination')
            ->with('success', 'Request Form Sent');
    }
}
