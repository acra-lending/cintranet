<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class OperationsEmpowerController extends Controller
{
    public function index()
    {
   
        $empowerBrokerPortal = Post::whereRaw("find_in_set('empowerBrokerPortal', category_id)")
        ->sortable('filename')
        ->get();

        $empowerLoanSetUp = Post::whereRaw("find_in_set('empowerLoanSetUp', category_id)")
        ->sortable('filename')
        ->get();

        $empowerDisclosures = Post::whereRaw("find_in_set('empowerDisclosures', category_id)")
        ->sortable('filename')
        ->get();

        $empowerAccountManagement = Post::whereRaw("find_in_set('empowerAccountManagement', category_id)")
        ->sortable('filename')
        ->get();

        $empowerUnderwriting = Post::whereRaw("find_in_set('empowerUnderwriting', category_id)")
        ->sortable('filename')
        ->get();

        $empowerValuationSpecialist = Post::whereRaw("find_in_set('empowerValuationSpecialist', category_id)")
        ->sortable('filename')
        ->get();

        $empowerClosingFunding = Post::whereRaw("find_in_set('empowerClosingFunding', category_id)")
        ->sortable('filename')
        ->get();

        $empowerPostClosing = Post::whereRaw("find_in_set('empowerPostClosing', category_id)")
        ->sortable('filename')
        ->get();

        $empowerShipping = Post::whereRaw("find_in_set('empowerShipping', category_id)")
        ->sortable('filename')
        ->get();


        return view('pages.operations.empower', [
            'empowerBrokerPortal'         => $empowerBrokerPortal,
            'empowerLoanSetUp'            => $empowerLoanSetUp,
            'empowerDisclosures'          => $empowerDisclosures,
            'empowerAccountManagement'    => $empowerAccountManagement,
            'empowerUnderwriting'         => $empowerUnderwriting,
            'empowerValuationSpecialist'  => $empowerValuationSpecialist,
            'empowerClosingFunding'       => $empowerClosingFunding,
            'empowerPostClosing'          => $empowerPostClosing,
            'empowerShipping'             => $empowerShipping,
        ]);
    }
}
