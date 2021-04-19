<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MarketingRequestMail;
use App\Post;
use App\User;
use Mail;
use Session;


class MarketingController extends Controller
{
    public function index()
    {
        //Marketing Materials & Reference
        //Marketing Requests
        $marketingForms = Post::whereRaw("find_in_set('marketingForms', category_id)")
        ->orderBy('filename', 'asc')
        ->get();

        //Materials & Reference
        $marketingMaterials = Post::whereRaw("find_in_set('marketingMaterials', category_id)")
        ->orderBy('filename', 'asc')
        ->get();

        //Email Signature & Resources whereRaw("find_in_set('servicingGuides', category_id)")
        $marketingEmailSignaturesAndResources = Post::whereRaw("find_in_set('marketingEmailSignaturesAndResources', category_id)")
        ->orderBy('filename', 'asc')
        ->get();
        

        return view('pages.marketing.index')
        ->with([
            'marketingForms'                            => $marketingForms,
            'marketingMaterials'                        => $marketingMaterials,
            'marketingEmailSignaturesAndResources'      => $marketingEmailSignaturesAndResources,
        ]);
    }

    public function submitForm(Request $request)
    {
            $dataValidate = request()->validate([
                'department'        => 'required|max:255',
                'email'             => 'required|email',
                'name'              => 'required|max:100',
                'phone'             => 'required|max:20',
                'projectName'       => 'required|max:255',
                'selectProject'     => 'required',
                'selectRequest'     => 'required',
                'selectAudience'    => 'required',
                'bodyMessage'       => 'nullable|max:500',
                'relevantInfo'      => 'nullable',
                'estimatedQuantity' => 'required',
                'requestDueDate'    => 'required',
                'statesDistributed' => 'required|max:1000',
                'dateRange'         => 'required'
            ]);
            $data = $request->all();

            // dd($request)->all();

            Mail::to('marketing@citadelservicing.com')
                ->send(new MarketingRequestMail($data));

            return redirect('/marketing')
                ->with('success', 'Request Form Sent');

    }
}
