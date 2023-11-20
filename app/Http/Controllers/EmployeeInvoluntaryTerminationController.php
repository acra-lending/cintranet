<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\EmployeeInvoluntaryTermination;
use App\Post;
use App\User;
use Mail;
use Session;
use DB;

class EmployeeInvoluntaryTerminationController extends Controller
{
    public function submit(Request $request)
    {
        $dataValidate = request()->validate([
            'name'                  => 'required|max:100',
            'email'                 => 'required|email',
            'status'                => 'nullable',
            'requestDueDate'        => 'required',
            'position'              => 'required',
            'emailForward'          => 'nullable',
            'duration'              => 'nullable',
            'designateAccess'       => 'required|max:100',
            'specialInstructions'   => 'nullable|max:500',
            // 'submittedBy'           => 'required',
            'email2'                => 'nullable|email',
            // 'email3'                => 'nullable|email',
            'email4.*'                => 'nullable|email',
            // 'email5'                => 'nullable|email',
        ]);
        $data = [$request->all(), 'submittedBy' => auth()->user()->name, 'email3' => auth()->user()->email];

        $userRoles = DB::table('role_user')->where('role_id', 6)->get();
        $emailArray = array('webupdates@acralending.com', 'payroll@acralending.com');      

        foreach($userRoles as $user) {
            $emailArray[] = User::where('id', $user->user_id)->value('email');
        }

        if($request->filled('email4')){
            $emails = explode(',', $request->input('email4'));
            foreach($emails as $email)
            {
                array_push($emailArray, $email);
            }
        } 

        // if($request->filled('email4')){
        //     array_push($emailArray, $request->email4);
        // }
        // if($request->filled('email5')) {
        //     array_push($emailArray, $request->email5);
        // }

        foreach($emailArray as $recipient) {
            Mail::to($recipient)
            ->queue(new EmployeeInvoluntaryTermination($data));
        }

        return redirect('/humanresources/employee/termination')
            ->with('success', 'Request Form Sent');
    }
}
