<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MarketingRequestMail;
use App\Post;
use Mail;
use Session;
use App\User;

class MarketingController extends Controller
{
    public function index()
    {
        //Marketing Materials & Reference
        //Marketing Requests
        $marketingForms = Post::where('category_id', 'marketingForms')
        ->orderBy('filename', 'asc')
        ->get();

        //Materials & Reference
        $marketingMaterials = Post::where('category_id', 'marketingMaterials')
        ->orderBy('filename', 'asc')
        ->get();

        //Sales Tools
        $salesTools = Post::where('category_id', 'salesTools')
        ->orderBy('filename', 'asc')
        ->get();

        return view('pages.marketing.index')
        ->with([
            'marketingForms'        => $marketingForms,
            'marketingMaterials'    => $marketingMaterials,
            'salesTools'            => $salesTools,
        ]);
    }

    public function submitForm(Request $request)
    {
            $dataValidate = request()->validate([
                'department' => 'required|max:255',
                'email' => 'required|email',
                'name' => 'required|max:100',
                'phone' => 'required|max:20',
                'projectName' => 'required|max:255',
                'selectProject' => 'required',
                'selectRequest' => 'required',
                'selectAudience' => 'required',
                'bodyMessage' => 'nullable|max:500',
                'relevantInfo' => 'nullable',
                'estimatedQuantity' => 'required',
                'requestDueDate' => 'required',
                'statesDistributed' => 'required|max:1000',
                'dateRange' => 'required'
            ]);
            $data = $request->all();

            // dd($request)->all();

            Mail::to('marketing@citadelservicing.com')->send(new MarketingRequestMail($data));

            return redirect('/marketing')->with('success', 'Request Form Sent');

    }
}
