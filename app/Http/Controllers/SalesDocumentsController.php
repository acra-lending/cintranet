<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Post;

class SalesDocumentsController extends Controller
{
    public function index()
    {
        $seconds = 86400;

        $wholesaleDocs = Cache::remember('wholesaleDocs', $seconds, function() {
            return Post::whereRaw("find_in_set('wholesaleDocs', category_id)")
            ->sortable('filename')
            ->get();
        });
        
        
        $salesDeptContacts = Cache::remember('salesDeptContacts', $seconds, function() {
            return Post::whereRaw("find_in_set('salesDeptContacts', category_id)")
            ->sortable('filename')
            ->get();
        });
        

        //Sales Tools
        $salesTools = Cache::remember('salesTools', $seconds, function() {
            return Post::whereRaw("find_in_set('salesTools',category_id)")
            ->sortable('filename')
            ->get();
        });
        
        
        return view('pages.sales.documents')
        ->with([
            'wholesaleDocs'     => $wholesaleDocs,
            'salesDeptContacts' => $salesDeptContacts,
            'salesTools'        => $salesTools,
        ]);
    }
}