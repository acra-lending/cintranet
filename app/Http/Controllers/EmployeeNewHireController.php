<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewHireForm;
use App\Post;
use App\User;
use Mail;
use Session;
use DB;

class EmployeeNewHireController extends Controller
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

        return view('pages.employee.newhire')
            ->with([
                'departments'   => $departments
            ]);
    }

    public function submit(Request $request)
    {
        $dataValidate = request()->validate([
            'name'                  => 'required|max:100',
            'email'                 => 'required|email',
            'phone'                 => 'nullable|max:20',
            'extension'             => 'nullable|max:20',
            'cellPhone'             => 'required|max:20',
            'territory'             => 'nullable|max:100',
            'department'            => 'required',
            'position'              => 'required',
            'manager'               => 'required|max:100',
            'mortgage101'           => 'nullable',
            'training'              => 'nullable',
            'nmls'                  => 'nullable',
            'selectAccess'          => 'nullable',
            'fob'                   => 'nullable',
            'location'              => 'required',
            'remoteLocation'        => 'nullable|max:100',
            'specialInstructions'   => 'nullable|max:500',
            'requestDueDate'        => 'required',
            // 'submittedBy'           => 'required',
            // 'email2'                => 'required|email',
            'email3.*'                => 'nullable|email',
            // 'email4'                => 'nullable|email'
        ]);
        $data = [$request->all(), 'submittedBy' => auth()->user()->name, 'email2' => auth()->user()->email];

        $userRoles = DB::table('role_user')->where('role_id', 6)->get();
        $emailArray = array('webupdates@acralending.com');      

        foreach($userRoles as $user) {
            $emailArray[] = User::where('id', $user->user_id)->value('email');
        }

        if($request->filled('email3')){
            $emails = explode(',', $request->input('email3'));
            foreach($emails as $email)
            {
                array_push($emailArray, $email);
            }
        } 

        // if($request->filled('email3')){
        //     array_push($emailArray, $request->email3);
        // }
        // if($request->filled('email4')) {
        //     array_push($emailArray, $request->email4);
        // }

        foreach($emailArray as $recipient) {
            Mail::to($recipient)
            ->queue(new NewHireForm($data));
        }

        return redirect('/employee/newhire')
            ->with('success', 'Request Form Sent');
    }

}
