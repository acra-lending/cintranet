<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\BrokerPortalRequests;
use App\Post;
use App\User;
use Mail;
use Session;
use DB;

class BrokerPortalRequestsController extends Controller
{
    public function index()
    {
        return view('pages.operations.brokerportalrequests');
    }

    public function submit(Request $request)
    {
        $dataValidate = request()->validate([
            'requestDueDate'    => 'required',
            'firstname'         => 'required|max:100',
            'lastname'          => 'required|max:100',
            'email'             => 'required|email',
            'company'           => 'required',
            'nmlsid'            => 'required',
            'selectType'        => 'required',
            'specialInstructions'   => 'nullable|max:500',
            'submittedBy'           => 'required',
            'email2'                => 'required|email',
        ]);

        $data = $request->all();

        Mail::to([
            'webupdates@citadelservicing.com'
        ])->send(new BrokerPortalRequests($data));

        return redirect('/operations/brokerportalrequests')
            ->with('success', 'Request Form Sent');
    }
}
