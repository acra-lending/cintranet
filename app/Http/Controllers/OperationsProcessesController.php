<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Post;

class OperationsProcessesController extends Controller
{
    public function index()
    {
        $seconds = 86400;

        //-----------------
        //Funding 
        //-----------------       
        $fundingProcesses = Cache::remember('fundingProcesses', $seconds, function() {
            return Post::whereRaw("find_in_set('fundingProcesses', category_id)")
            ->sortable('filename')
            ->get();
        });
        

        //-----------------
        //CD Doc Drawer
        //----------------- 
        $docDrawerProcesses = Cache::remember('docDrawerProcesses', $seconds, function() {
            return Post::whereRaw("find_in_set('docDrawerProcesses', category_id)")
            ->sortable('filename')
            ->get();
        });
        

        //-------
        //Funder-Closer
        //-------
        $funderProcesses = Cache::remember('funderProcesses', $seconds, function() {
            return Post::whereRaw("find_in_set('funderProcesses', category_id)")
            ->sortable('filename')
            ->get();
        });
        

        //---------------
        //Funding Forms
        //---------------
        $fundingFormsProcesses = Cache::remember('fundingFormsProcesses', $seconds, function() {
            return Post::whereRaw("find_in_set('fundingFormsProcesses', category_id)")
            ->sortable('filename')
            ->get();
        });
        

        //-----------------
        //Funding Assitant
        //-----------------
        $fundingAssistantProcesses = Cache::remember('fundingAssistantProcesses', $seconds, function() {
            return Post::whereRaw("find_in_set('fundingAssistantProcesses', category_id)")
            ->sortable('filename')
            ->get();
        });
        

        //------------
        //Loan Set Up
        //------------
        $lsuProcesses = Cache::remember('lsuProcesses', $seconds, function() {
            return Post::whereRaw("find_in_set('lsuProcesses', category_id)")
            ->sortable('filename')
            ->get();
        });
        

        //--------------------
        //Transaction Manager
        //--------------------
        $tmProcesses = Cache::remember('tmProcesses', $seconds, function() {
            return Post::whereRaw("find_in_set('tmProcesses', category_id)")
            ->sortable('filename')
            ->get();
        });
        

        //-------------
        //Underwriting
        //-------------
        $uwProcesses = Cache::remember('uwProcesses', $seconds, function() {
            return Post::whereRaw("find_in_set('uwProcesses', category_id)")
            ->sortable('filename')
            ->get();
        });
        
        
        $uwProcessesNew = Cache::remember('uwProcessesNew', $seconds, function() {
            return Post::whereRaw("find_in_set('uwProcessesNew', category_id)")
            ->sortable('filename')
            ->get();
        });
        
        
        $uwProcessesCondition = Cache::remember('uwProcessesCondition', $seconds, function() {
            return Post::whereRaw("find_in_set('uwProcessesCondition', category_id)")
            ->sortable('filename')
            ->get();
        });
        

        //-------------
        //Fix And Flip
        //-------------
        $fixAndFlipProcessing = Cache::remember('fixAndFlipProcessing', $seconds, function() {
            return Post::whereRaw("find_in_set('fixAndFlipProcessing', category_id)")
            ->sortable('filename')
            ->get();
        });
        

        return view('pages.operations.processes', [
            'fundingProcesses'              => $fundingProcesses,
            'docDrawerProcesses'            => $docDrawerProcesses,
            'funderProcesses'               => $funderProcesses,
            'fundingFormsProcesses'         => $fundingFormsProcesses,
            'fundingAssistantProcesses'     => $fundingAssistantProcesses,
            'lsuProcesses'                  => $lsuProcesses,
            'tmProcesses'                   => $tmProcesses,
            'uwProcesses'                   => $uwProcesses,
            'uwProcessesNew'                => $uwProcessesNew,
            'uwProcessesCondition'          => $uwProcessesCondition,
            'fixAndFlipProcessing'          => $fixAndFlipProcessing,
        ]);
    }
}
