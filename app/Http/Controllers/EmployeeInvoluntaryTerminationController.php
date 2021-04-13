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
            'submittedBy'           => 'required',
            'email2'                => 'nullable|email',
            'email3'                => 'nullable|email',
            'email4'                => 'nullable|email',
            'email5'                => 'nullable|email',
        ]);
        $data = $request->all();


        $additionalRecipient1 = $request->email4;
        $additionalRecipient2 = $request->email5;

        if ($request->filled(['email5', 'email4'])) {
            Mail::to([
                'james.kiyohara@acralending.com',
                'human_resources@citadelservicing.com', 
                'hitz.mistry@acralending.com',
                'webupdates@acralending.com',
                'payroll@acralending.com',
                $additionalRecipient1,
                $additionalRecipient2,
            ])->queue(new EmployeeInvoluntaryTermination($data));

        } elseif ($request->filled('email4')) {
            Mail::to([
                'james.kiyohara@acralending.com',
                'human_resources@citadelservicing.com', 
                'hitz.mistry@acralending.com',
                'webupdates@acralending.com',
                'payroll@acralending.com',
                $additionalRecipient1,
            ])->queue(new EmployeeInvoluntaryTermination($data));
        } elseif ($request->filled('email5')) {
            Mail::to([
                'james.kiyohara@acralending.com',
                'human_resources@citadelservicing.com', 
                'hitz.mistry@acralending.com',
                'webupdates@acralending.com',
                'payroll@acralending.com',
                $additionalRecipient2,
            ])->queue(new EmployeeInvoluntaryTermination($data));
        } else {
            Mail::to([
                'james.kiyohara@acralending.com', 
                'human_resources@citadelservicing.com', 
                'hitz.mistry@acralending.com',
                'webupdates@acralending.com',
                'payroll@acralending.com',
            ])->queue(new EmployeeInvoluntaryTermination($data));
        }

        return redirect('/employee/termination')
            ->with('success', 'Request Form Sent');
    }
}
