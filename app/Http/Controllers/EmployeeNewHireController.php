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
            'selectAccess'          => 'nullable',
            'fob'                   => 'nullable',
            'specialInstructions'   => 'nullable|max:500',
            'requestDueDate'        => 'required',
            'submittedBy'           => 'required',
            'email2'                => 'required|email',
            'email3'                => 'nullable|email',
            'email4'                => 'nullable|email'
        ]);
        $data = $request->all();

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
            'morelia.ruiz@acralending.com',
            'webupdates@acralending.com',
        ];

        if($request->filled('email3')){
            array_push($emails, $request->email3);
        }
        if($request->filled('email4')) {
            array_push($emails, $request->email4);
        }

        foreach($emails as $recipient) {
            Mail::to($recipient)
            ->queue(new NewHireForm($data));
        }

        // if ($request->filled(['email4', 'email3'])) {
        //     Mail::bcc($emails, [
        //         $additionalRecipient1,
        //         $additionalRecipient2,
        //     ])->queue(new NewHireForm($data));

        // } elseif ($request->filled('email3')) {
        //     Mail::bcc($emails, [
        //         $additionalRecipient1,
        //     ])->queue(new NewHireForm($data));

        // } elseif ($request->filled('email4')) {
        //     Mail::bcc($emails, [
        //         $additionalRecipient2,
        //     ])->queue(new NewHireForm($data));

        // } else {
        //     Mail::bcc($emails)->queue(new NewHireForm($data));
        // }

        return redirect('/employee/newhire')
            ->with('success', 'Request Form Sent');
    }

}
