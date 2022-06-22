<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class OperationsProcessesController extends Controller
{
    public function index()
    {
        $allForms = Post::get();

        foreach ($allForms as $form) {
            // Funding
            if(str_contains($form->category_id, 'fundingProcesses')) {
                $fundingProcesses[] = $form;
            }
            //CD Doc Drawer
            if(str_contains($form->category_id, 'docDrawerProcesses')) {
                $docDrawerProcesses[] = $form;
            }
            //Funder-Closer
            if(str_contains($form->category_id, 'funderProcesses')) {
                $funderProcesses[] = $form;
            }
            //Funding Forms
            if(str_contains($form->category_id, 'fundingFormsProcesses')) {
                $fundingFormsProcesses[] = $form;
            }
            //Funding Assitant
            if(str_contains($form->category_id, 'fundingAssistantProcesses')) {
                $fundingAssistantProcesses[] = $form;
            }
            //Loan Set Up
            if(str_contains($form->category_id, 'lsuProcesses')) {
                $lsuProcesses[] = $form;
            }
            //Transaction Manager
            if(str_contains($form->category_id, 'tmProcesses')) {
                $tmProcesses[] = $form;
            }
            //Underwriting
            if(str_contains($form->category_id, 'uwProcesses')) {
                $uwProcesses[] = $form;
            }
            if(str_contains($form->category_id, 'uwProcessesNew')) {
                $uwProcessesNew[] = $form;
            }
            if(str_contains($form->category_id, 'uwProcessesCondition')) {
                $uwProcessesCondition[] = $form;
            }
            //Fix And Flip
            if(str_contains($form->category_id, 'fixAndFlipProcessing')) {
                $fixAndFlipProcessing[] = $form;
            }
        }

        //-----------------
        //Funding 
        //-----------------       
        $fundingProcesses = Post::whereRaw("find_in_set('fundingProcesses', category_id)")
        ->sortable('filename')
        ->get();

        //-----------------
        //CD Doc Drawer
        //----------------- 
        $docDrawerProcesses = Post::whereRaw("find_in_set('docDrawerProcesses', category_id)")
        ->sortable('filename')
        ->get();

        //-------
        //Funder-Closer
        //-------
        $funderProcesses = Post::whereRaw("find_in_set('funderProcesses', category_id)")
        ->sortable('filename')
        ->get();

        //---------------
        //Funding Forms
        //---------------
        $fundingFormsProcesses = Post::whereRaw("find_in_set('fundingFormsProcesses', category_id)")
        ->sortable('filename')
        ->get();

        //-----------------
        //Funding Assitant
        //-----------------
        $fundingAssistantProcesses = Post::whereRaw("find_in_set('fundingAssistantProcesses', category_id)")
        ->sortable('filename')
        ->get();

        //------------
        //Loan Set Up
        //------------
        $lsuProcesses = Post::whereRaw("find_in_set('lsuProcesses', category_id)")
        ->sortable('filename')
        ->get();

        //--------------------
        //Transaction Manager
        //--------------------
        $tmProcesses = Post::whereRaw("find_in_set('tmProcesses', category_id)")
        ->sortable('filename')
        ->get();

        //-------------
        //Underwriting
        //-------------
        $uwProcesses = Post::whereRaw("find_in_set('uwProcesses', category_id)")
        ->sortable('filename')
        ->get();
        
        $uwProcessesNew = Post::whereRaw("find_in_set('uwProcessesNew', category_id)")
        ->sortable('filename')
        ->get();
        
        $uwProcessesCondition = Post::whereRaw("find_in_set('uwProcessesCondition', category_id)")
        ->sortable('filename')
        ->get();

        //-------------
        //Fix And Flip
        //-------------
        $fixAndFlipProcessing = Post::whereRaw("find_in_set('fixAndFlipProcessing', category_id)")
        ->sortable('filename')
        ->get();

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
