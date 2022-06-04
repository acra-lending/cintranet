<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index()
    {
        return view('pages.usermanagement.reports');
    }

    public function index2()
    {
        return view('pages.usermanagement.reports2');
    }

    public function index3()
    {
        return view('pages.usermanagement.reports3');
    }

    public function index4()
    {
        return view('pages.usermanagement.reports4');
    }

    public function index5()
    {
        return view('pages.usermanagement.reports5');
    }

    public function index6()
    {
        return view('pages.usermanagement.reports6');
    }

    public function fundingDept()
    {
        return view('pages.usermanagement.fundingDept');
    }

    public function dailyDashboard()
    {
        return view('pages.usermanagement.daily');
    }

    public function opsTM()
    {
        return view('pages.usermanagement.reportsopstm');
    }
}
