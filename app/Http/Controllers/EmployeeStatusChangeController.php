<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\EmployeeStatusChange;
use App\Post;
use App\User;
use Mail;
use Session;
use DB;

class EmployeeStatusChangeController extends Controller
{
    public function index()
    {
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

        return view('pages.employee.statuschange')
            ->with([
                'division'      => $division,
                'departments'   => $departments,
                'position'      => $position
            ]);
    }

    public function submit(Request $request)
    {
        $dataValidate = request()->validate([
            'name'                  => 'required|max:100',
            'selectPromotion'       => 'nullable',
            'requestDueDate'        => 'required',
            'position'              => 'required',
            'newEmail'              => 'nullable|email',
            'phone'                 => 'nullable|max:20',
            'extension'             => 'nullable|max:20',
            'cellPhone'             => 'nullable|max:20',
            'territory'             => 'nullable|max:100',
            'division'              => 'nullable',
            'department'            => 'nullable',
            'newPosition'           => 'nullable',
            'manager'               => 'nullable|max:100',
            'selectAccess'          => 'nullable',
            'fob'                   => 'nullable',
            'specialInstructions'   => 'nullable|max:500',
            // 'submittedBy'           => 'required',
            // 'email2'                => 'nullable|email',
            'email3.*'                => 'nullable|email',
            // 'email4'                => 'nullable|email',
        ]);
        $data = [$request->all(), 'submittedBy' => auth()->user()->name, 'email2' => auth()->user()->email];

        $userRoles = DB::table('role_user')->where('role_id', 6)->get();
        $emailArray = array('webupdates@acralending.com');

        if($request->filled('email3')){
            $emails = explode(',', $request->input('email3'));
            foreach($emails as $email)
            {
                array_push($emailArray, $email);
            }
        }        

        foreach($userRoles as $user) {
            $emailArray[] = User::where('id', $user->user_id)->value('email');
        }

        // if($request->filled('email3')){
        //     array_push($emailArray, $request->email3);
        // }
        // if($request->filled('email4')) {
        //     array_push($emailArray, $request->email4);
        // }

        foreach($emailArray as $recipient) {
            Mail::to($recipient)
            ->queue(new EmployeeStatusChange($data));
        }

        return redirect('/humanresources/employee/statuschange')
            ->with('success', 'Request Form Sent');
    }
}
