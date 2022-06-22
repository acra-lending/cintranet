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
