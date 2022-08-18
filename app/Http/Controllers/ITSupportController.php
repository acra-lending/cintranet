<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ITSupportMail;
use App\Mail\ITSupportIssues;
use App\Mail\ITSupportRequests;
use App\Post;
use App\User;
use Mail;
use Session;
use DB;


class ITSupportController extends Controller
{
    public function index()
    {

        $position = DB::table('s2zar_jsn_users')
        ->orderBy('position', 'asc')
        ->groupBy('position')
        ->where('position', '<>', '')
        ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
        ->pluck('position', 'position')
        ->toArray();

        return view('pages.infotech.ticket')
            ->with([
                'position'  => $position
            ]);
    }

    public function submitForm(Request $request)
    {
            $dataValidate = request()->validate([
                'requestDueDate'    => 'required',
                'name'              => 'required|max:100',
                'email'             => 'required|email',
                'position'          => 'required',
                'manager'           => 'required',
                'managerEmail'      => 'required|email',
                'itemRequest'       => 'required',
                'adminAccess'       => 'nullable',
                'bytePro'           => 'nullable',
                'docVelocity'       => 'nullable',
                'folderName'        => 'nullable',
                'additionalInfo'    => 'nullable',
                'attachment'        => 'array',
                'attachment.*'      => 'image|mimes:jpg,jpeg,bmp,png',
            ]);

            $data = $request->except('itemRequest');

            
            $itemRequest = $request->input('itemRequest');
            $itemRequest = implode(', ', $itemRequest);
            // dd($itemRequest);

            // dd($data)->all();

            $mail = new ITSupportMail($data, $itemRequest);
            // dd($mail);
            $files = $request->file('attachment');
        
            if($request->hasFile('attachment')){

                foreach ($files as $file){
                    $mail->attach($file->getRealPath(), [
                        'as'    => $file->getClientOriginalName(),
                        'mime'  => $file->getClientMimeType()
                    ]);          
                }
            }

            Mail::to(['itsupport@citadelservicing.com'])
            ->send($mail);
            
            return redirect('/infotech/ticket')
                ->with('success', 'Request Form Sent');

    }

    public function submitIssues(Request $request)
    {
        $dataValidate = request()->validate([
            'name'          => 'required|max:100',
            'email'         => 'required|email',
            'subject'       => 'required',
            'priority'      => 'nullable',
            'bodyMessage'   => 'required',
            'attachment'    => 'array',
            'attachment.*'  => 'image|mimes:jpg,jpeg,bmp,png',
        ]);

        $data = $request->all();

        $mail = new ITSupportIssues($data);

        $files = $request->file('attachment');
    
        if($request->hasFile('attachment')){

            foreach ($files as $file){
                $mail->attach($file->getRealPath(), [
                    'as'    => $file->getClientOriginalName(),
                    'mime'  => $file->getClientMimeType()
                ]);          
            }
        }

        Mail::to(['itsupport@citadelservicing.com'])
        ->send($mail);

        return redirect('/infotech/ticket')
            ->with('success', 'Request Form Sent');
    }

    public function submitRequests(Request $request)
    {
        $dataValidate = request()->validate([
            'name'          => 'required|max:100',
            'email'         => 'required|email',
            'subject'       => 'required',
            'priority'      => 'nullable',
            'bodyMessage'   => 'required',
            'attachment'    => 'array',
            'attachment.*'  => 'image|mimes:jpg,jpeg,bmp,png',
        ]);

        $data = $request->all();

        $mail = new ITSupportRequests($data);

        $files = $request->file('attachment');
    
        if($request->hasFile('attachment')){

            foreach ($files as $file){
                $mail->attach($file->getRealPath(), [
                    'as'    => $file->getClientOriginalName(),
                    'mime'  => $file->getClientMimeType()
                ]);          
            }
        }
        
        Mail::to(['itsupport@citadelservicing.com'])
            ->send($mail);

        return redirect('/infotech/ticket')
            ->with('success', 'Request Form Sent');
    }

    public function getDocuments() 
    {
        $itDocs = Post::whereRaw("find_in_set('itDocs', category_id)")
        ->sortable('filename')
        ->get();

        return view('pages.infotech.documents')
        ->with([
            'itDocs' => $itDocs,
        ]);
    }

    public function newProjectRequests()
    {
        return view('pages.infotech.projectrequests');
    }
}
