<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;

class HRAuditTimeController extends Controller
{
    public function index()
    {
        //Template Page
        if(Gate::denies('edit-posts')){
            return redirect(route('home'));
        }

        return view('pages.humanresources.audit');
    }
}
