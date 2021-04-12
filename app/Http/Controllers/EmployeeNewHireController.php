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

        $additionalRecipient1 = $request->email3;
        $additionalRecipient2 = $request->email4;

        if ($request->filled(['email4', 'email3'])) {
            Mail::to([
                'itsupport@citadelservicing.com', 
                'staffchanges@citadelservicing.com', 
                'human_resources@citadelservicing.com', 
                'hitz.mistry@acralending.com',
                $additionalRecipient1,
                $additionalRecipient2,
            ])->queue(new NewHireForm($data));

        } elseif ($request->filled('email3')) {
            Mail::to([
                'itsupport@citadelservicing.com', 
                'staffchanges@citadelservicing.com', 
                'human_resources@citadelservicing.com', 
                'hitz.mistry@acralending.com',
                $additionalRecipient1,
            ])->queue(new NewHireForm($data));
        } elseif ($request->filled('email4')) {
            Mail::to([
                'itsupport@citadelservicing.com', 
                'staffchanges@citadelservicing.com', 
                'human_resources@citadelservicing.com', 
                'hitz.mistry@acralending.com',
                $additionalRecipient2,
            ])->queue(new NewHireForm($data));
        } else {
            Mail::to([
                'itsupport@citadelservicing.com', 
                'staffchanges@citadelservicing.com', 
                'human_resources@citadelservicing.com', 
                'hitz.mistry@acralending.com',
            ])->queue(new NewHireForm($data));
        }

        return redirect('/employee/newhire')
            ->with('success', 'Request Form Sent');
    }

}
