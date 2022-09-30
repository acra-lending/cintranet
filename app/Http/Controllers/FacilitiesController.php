<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\FacilitiesTicket;
use Mail;


class FacilitiesController extends Controller
{
    public function index()
    {
        return view('pages.facilities.ticket');
    }

    public function submitTicket(Request $request)
    {
        $dataValidate = request()->validate([
            'name'          => 'required|max:100',
            'email'         => 'required|email',
            'subject'       => 'required',
            'priority'      => 'nullable',
            'bodyMessage'   => 'required',
        ]);

        $data = $request->all();

        $mail = new FacilitiesTicket($data);

        Mail::to(['facilitiesrequest@acralending.com'])
        ->send($mail);

        return redirect('/facilities/ticket')
            ->with('success', 'Request Form Sent');
    }
}
