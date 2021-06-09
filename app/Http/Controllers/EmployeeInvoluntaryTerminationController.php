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


        // $additionalRecipient1 = $request->email4;
        // $additionalRecipient2 = $request->email5;
        $emails = [
            'keith.lind@acralending.com',
            'kyle.gunderlock@acralending.com',
            'trudy.barton@acralending.com',
            'tim.doyle@acralending.com',
            'alice.boutwell@acralending.com',
            'chetna.vora@acralending.com',
            'robert.diaz@acralending.com',
            'jeffrey.lemieux@acralending.com',
            'brian.robinett@acralending.com',
            'robert.jennings@acralending.com',
            'grace.francuz@acralending.com',
            'kim.nguyen@acralending.com',
            'caitlin.poncedeleon@acralending.com',
            'barbara.rieber@acralending.com',
            'james.kiyohara@acralending.com',
            'erik.johnson@acralending.com',
            'jordan.faust@acralending.com',
            'vincent.sanchez@acralending.com',
            'abdul.qatamish@acralending.com',
            'hitz.mistry@acralending.com',
            'sergio.loza@acralending.com',
            'terrence.taylor@acralending.com',
            'anthony.miller@acralending.com',
            'tom.verdone@acralending.com',
            'shabbie.hutton@acralending.com',
            'payroll@acralending.com',
            'webupdates@acralending.com',
        ];

        if($request->filled('email4')){
            array_push($emails, $request->email4);
        }
        if($request->filled('email5')) {
            array_push($emails, $request->email5);
        }

        foreach($emails as $recipient) {
            Mail::to($recipient)
            ->queue(new EmployeeInvoluntaryTermination($data));
        }

        // if ($request->filled(['email5', 'email4'])) {
        //     foreach($emails as $recipient) {
        //         Mail::to($recipient)
        //         ->queue(new EmployeeInvoluntaryTermination($data));
        //     }

        // } elseif ($request->filled('email4')) {
        //     foreach($emails as $recipient) {
        //         Mail::to($recipient)
        //         ->queue(new EmployeeInvoluntaryTermination($data));
        //     }

        // } elseif ($request->filled('email5')) {
        //     foreach($emails as $recipient) {
        //         Mail::to($recipient)
        //         ->queue(new EmployeeInvoluntaryTermination($data));
        //     }

        // } else {
        //     foreach($emails as $recipient) {
        //         Mail::to($recipient)
        //         ->queue(new EmployeeInvoluntaryTermination($data));
        //     }
        // }

        return redirect('/employee/termination')
            ->with('success', 'Request Form Sent');
    }
}