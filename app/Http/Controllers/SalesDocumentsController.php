<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SalesDocumentsController extends Controller
{
    public function index()
    {
        //Correspondent Documents
        $wholesaleDocs = Post::whereRaw("find_in_set('wholesaleDocs', category_id)")
        ->sortable('filename')
        ->get();
        
        $salesDeptContacts = Post::whereRaw("find_in_set('salesDeptContacts', category_id)")
        ->sortable('filename')
        ->get();

        //Sales Tools
        $salesTools = Post::whereRaw("find_in_set('salesTools',category_id)")
        ->sortable('filename')
        ->get();
        
        return view('pages.sales.documents')
        ->with([
            'wholesaleDocs'     => $wholesaleDocs,
            'salesDeptContacts' => $salesDeptContacts,
            'salesTools'        => $salesTools,
        ]);
    }
}