<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class OperationsFormsController extends Controller
{
    public function index()
    {

        //-----------------
        //Compliance Forms 
        //-----------------       
        $disclosure = Post::whereRaw("find_in_set('disclosure', category_id)")
        ->sortable('filename')
        ->get();

        $important = Post::whereRaw("find_in_set('important', category_id)")
        ->sortable('filename')
        ->get();
        
        $fundingStates = Post::whereRaw("find_in_set('fundingStates', category_id)")
        ->sortable('filename')
        ->get();

        $policies = Post::whereRaw("find_in_set('policies', category_id)")
        ->sortable('filename')
        ->get();

        $deptContacts = Post::whereRaw("find_in_set('deptContacts', category_id)")
        ->sortable('filename')
        ->get();

        //--------
        //Funding
        // -------
        $fundingCompliance = Post::whereRaw("find_in_set('fundingCompliance', category_id)")
        ->sortable('filename')
        ->get();

        $fundingForms = Post::whereRaw("find_in_set('fundingForms', category_id)")
        ->sortable('filename')
        ->get();

        // $fundingProcesses = Post::whereRaw("find_in_set('fundingProcesses', category_id)")
        // ->sortable('filename')
        // ->get();

        $fundingSystems = Post::whereRaw("find_in_set('fundingSystems', category_id)")
        ->sortable('filename')
        ->get();

        $fundingTisp = Post::whereRaw("find_in_set('fundingTisp', category_id)")
        ->sortable('filename')
        ->get();

        $fundingVetting = Post::whereRaw("find_in_set('fundingVetting', category_id)")
        ->sortable('filename')
        ->get();

        //-----------
        //CD Doc Drawer
        //-----------
        $docDrawerCompliance = Post::whereRaw("find_in_set('docDrawerCompliance', category_id)")
        ->sortable('filename')
        ->get();

        $docDrawerForms = Post::whereRaw("find_in_set('docDrawerForms', category_id)")
        ->sortable('filename')
        ->get();

        // $docDrawerProcesses = Post::whereRaw("find_in_set('docDrawerProcesses', category_id)")
        // ->sortable('filename')
        // ->get();

        $docDrawerSystems = Post::whereRaw("find_in_set('docDrawerSystems', category_id)")
        ->sortable('filename')
        ->get();

        $docDrawerTisp = Post::whereRaw("find_in_set('docDrawerTisp', category_id)")
        ->sortable('filename')
        ->get();

        $docDrawerVetting = Post::whereRaw("find_in_set('docDrawerVetting', category_id)")
        ->sortable('filename')
        ->get();

        //-------
        //Funder-Closer
        //-------
        $funderCompliance = Post::whereRaw("find_in_set('funderCompliance', category_id)")
        ->sortable('filename')
        ->get();

        $funderEscrow = Post::whereRaw("find_in_set('funderEscrow', category_id)")
        ->sortable('filename')
        ->get();

        $funderForms = Post::whereRaw("find_in_set('funderForms', category_id)")
        ->sortable('filename')
        ->get();

        $funderPOA = Post::whereRaw("find_in_set('funderPOA', category_id)")
        ->sortable('filename')
        ->get();

        // $funderProcesses = Post::whereRaw("find_in_set('funderProcesses', category_id)")
        // ->sortable('filename')
        // ->get();

        $funderSystems = Post::whereRaw("find_in_set('funderSystems', category_id)")
        ->sortable('filename')
        ->get();

        $funderTisp = Post::whereRaw("find_in_set('funderTisp', category_id)")
        ->sortable('filename')
        ->get();

        $funderVetting = Post::whereRaw("find_in_set('funderVetting', category_id)")
        ->sortable('filename')
        ->get();

        //---------------
        //Funding Forms
        //---------------
        $fundingFormsCompliance = Post::whereRaw("find_in_set('fundingFormsCompliance', category_id)")
        ->sortable('filename')
        ->get();

        $fundingFormsForms = Post::whereRaw("find_in_set('fundingFormsForms', category_id)")
        ->sortable('filename')
        ->get();

        // $fundingFormsProcesses = Post::whereRaw("find_in_set('fundingFormsProcesses', category_id)")
        // ->sortable('filename')
        // ->get();

        $fundingFormsSystems = Post::whereRaw("find_in_set('fundingFormsSystems', category_id)")
        ->sortable('filename')
        ->get();

        $fundingFormsTisp = Post::whereRaw("find_in_set('fundingFormsTisp', category_id)")
        ->sortable('filename')
        ->get();

        $fundingFormsVetting = Post::whereRaw("find_in_set('fundingFormsVetting', category_id)")
        ->sortable('filename')
        ->get();

        //-----------------
        //Funding Assitant
        //-----------------
        $fundingAssistantCompliance = Post::whereRaw("find_in_set('fundingAssistantCompliance', category_id)")
        ->sortable('filename')
        ->get();

        $fundingAssistantForms = Post::whereRaw("find_in_set('fundingAssistantForms', category_id)")
        ->sortable('filename')
        ->get();

        // $fundingAssistantProcesses = Post::whereRaw("find_in_set('fundingAssistantProcesses', category_id)")
        // ->sortable('filename')
        // ->get();

        $fundingAssistantSystems = Post::whereRaw("find_in_set('fundingAssistantSystems', category_id)")
        ->sortable('filename')
        ->get();

        $fundingAssistantTisp = Post::whereRaw("find_in_set('fundingAssistantTisp', category_id)")
        ->sortable('filename')
        ->get();

        $fundingAssistantVetting = Post::whereRaw("find_in_set('fundingAssistantVetting', category_id)")
        ->sortable('filename')
        ->get();

        //------------
        //Loan Set Up
        //------------
        $lsuAttachments= Post::whereRaw("find_in_set('lsuAttachments', category_id)")
        ->sortable('filename')
        ->get();

        $lsuCompliance = Post::whereRaw("find_in_set('lsuCompliance', category_id)")
        ->sortable('filename')
        ->get();

        $lsuForms = Post::whereRaw("find_in_set('lsuForms', category_id)")
        ->sortable('filename')
        ->get();

        $lsuFloodCerts = Post::whereRaw("find_in_set('lsuFloodCerts', category_id)")
        ->sortable('filename')
        ->get();

        // $lsuProcesses = Post::whereRaw("find_in_set('lsuProcesses', category_id)")
        // ->sortable('filename')
        // ->get();

        $lsuSsaAnd4506T = Post::whereRaw("find_in_set('lsuSsaAnd4506T', category_id)")
        ->sortable('filename')
        ->get();

        $lsuSystems = Post::whereRaw("find_in_set('lsuSystems', category_id)")
        ->sortable('filename')
        ->get();

        $lsuValuation = Post::whereRaw("find_in_set('lsuValuation', category_id)")
        ->sortable('filename')
        ->get();

        $lsuVetting = Post::whereRaw("find_in_set('lsuVetting', category_id)")
        ->sortable('filename')
        ->get();

        //--------------------
        //Transaction Manager
        //--------------------
        $tmCompliance = Post::whereRaw("find_in_set('tmCompliance', category_id)")
        ->sortable('filename')
        ->get();

        $tmFormsForBrokers = Post::whereRaw("find_in_set('tmFormsForBrokers', category_id)")
        ->sortable('filename')
        ->get();

        $tmProgramGuides = Post::whereRaw("find_in_set('tmProgramGuides', category_id)")
        ->sortable('filename')
        ->get();

        $tmInternalForms = Post::whereRaw("find_in_set('tmInternalForms', category_id)")
        ->sortable('filename')
        ->get();

        // $tmProcesses = Post::whereRaw("find_in_set('tmProcesses', category_id)")
        // ->sortable('filename')
        // ->get();

        $tmSystems = Post::whereRaw("find_in_set('tmSystems', category_id)")
        ->sortable('filename')
        ->get();

        $tmTisp = Post::whereRaw("find_in_set('tmTisp', category_id)")
        ->sortable('filename')
        ->get();

        $tmVetting = Post::whereRaw("find_in_set('tmVetting', category_id)")
        ->sortable('filename')
        ->get();

        //-------------
        //Underwriting
        //-------------
        $uwCompliance = Post::whereRaw("find_in_set('uwCompliance', category_id)")
        ->sortable('filename')
        ->get();

        // $uwProcesses = Post::whereRaw("find_in_set('uwProcesses', category_id)")
        // ->sortable('filename')
        // ->get();

        $uwSystems = Post::whereRaw("find_in_set('uwSystems', category_id)")
        ->sortable('filename')
        ->get();

        $uwTisp = Post::whereRaw("find_in_set('uwTisp', category_id)")
        ->sortable('filename')
        ->get();

        $uwGuidelines = Post::whereRaw("find_in_set('uwGuidelines', category_id)")
        ->sortable('filename')
        ->get();

        $uwGuidelines_past = Post::whereRaw("find_in_set('uwGuidelinesPast', category_id)")
        ->sortable('filename')
        ->get();

        $uwTools = Post::whereRaw("find_in_set('uwTools', category_id)")
        ->sortable('filename')
        ->get();

        $uwVetting = Post::whereRaw("find_in_set('uwVetting', category_id)")
        ->sortable('filename')
        ->get();

        $uwVideos = Post::whereRaw("find_in_set('uwVideos', category_id)")
        ->sortable('filename')
        ->get();

        //-------------
        //Jr Processor
        //-------------
        $jrProcessorForms = Post::whereRaw("find_in_set('jrProcessorForms', category_id)")
        ->sortable('filename')
        ->get();

        //-------------
        //Processor
        //-------------
        $processorForms = Post::whereRaw("find_in_set('processorForms', category_id)")
        ->sortable('filename')
        ->get();

        //-------------
        //NDA
        //-------------
        $nda = Post::whereRaw("find_in_set('nda', category_id)")
        ->sortable('filename')
        ->get();

        //-------------
        //Jr Underwriter
        //-------------
        $jrUW = Post::whereRaw("find_in_set('jrUW', category_id)")
        ->sortable('filename')
        ->get();
        //-------------
        //Pre-Screen
        //-------------
        $prescreen = Post::whereRaw("find_in_set('prescreen', category_id)")
        ->sortable('filename')
        ->get();
        //-------------
        //Vetting Clerk
        //-------------
        $vettingClerk = Post::whereRaw("find_in_set('vettingClerk', category_id)")
        ->sortable('filename')
        ->get();
        //-------------
        //Post Close-Funding
        //-------------
        $postCloseFunding = Post::whereRaw("find_in_set('postCloseFunding', category_id)")
        ->sortable('filename')
        ->get();
        //-------------
        //Post Close-Shipping
        //-------------
        $postCloseShipping = Post::whereRaw("find_in_set('postCloseShipping', category_id)")
        ->sortable('filename')
        ->get();
        
        return view('pages.operations.forms', [
            'disclosure'            => $disclosure,
            'important'             => $important,
            'fundingStates'         => $fundingStates,
            'policies'              => $policies,
            'deptContacts'          => $deptContacts,
            'fundingCompliance'    => $fundingCompliance,
            'fundingForms'         => $fundingForms,
            // 'fundingProcesses'     => $fundingProcesses,
            'fundingSystems'       => $fundingSystems,
            'fundingTisp'          => $fundingTisp,
            'fundingVetting'       => $fundingVetting,
            'docDrawerCompliance'     => $docDrawerCompliance,
            'docDrawerForms'          => $docDrawerForms,
            // 'docDrawerProcesses'      => $docDrawerProcesses,
            'docDrawerSystems'        => $docDrawerSystems,
            'docDrawerTisp'           => $docDrawerTisp,
            'docDrawerVetting'        => $docDrawerVetting,
            'funderCompliance'     => $funderCompliance,
            'funderEscrow'         => $funderEscrow,
            'funderForms'          => $funderForms,
            'funderPOA'            => $funderPOA,
            // 'funderProcesses'      => $funderProcesses,
            'funderSystems'        => $funderSystems,
            'funderTisp'           => $funderTisp,
            'funderVetting'        => $funderVetting,
            'fundingFormsCompliance'     => $fundingFormsCompliance,
            'fundingFormsForms'          => $fundingFormsForms,
            // 'fundingFormsProcesses'      => $fundingFormsProcesses,
            'fundingFormsSystems'        => $fundingFormsSystems,
            'fundingFormsTisp'           => $fundingFormsTisp,
            'fundingFormsVetting'        => $fundingFormsVetting,
            'fundingAssistantCompliance'     => $fundingAssistantCompliance,
            'fundingAssistantForms'          => $fundingAssistantForms,
            // 'fundingAssistantProcesses'      => $fundingAssistantProcesses,
            'fundingAssistantSystems'        => $fundingAssistantSystems,
            'fundingAssistantTisp'           => $fundingAssistantTisp,
            'fundingAssistantVetting'        => $fundingAssistantVetting,
            'lsuAttachments'            => $lsuAttachments,
            'lsuCompliance'             => $lsuCompliance,
            'lsuForms'                  => $lsuForms,
            'lsuFloodCerts'             => $lsuFloodCerts,
            // 'lsuProcesses'              => $lsuProcesses,
            'lsuSsaAnd4506T'            => $lsuSsaAnd4506T,
            'lsuSystems'                => $lsuSystems,
            'lsuValuation'              => $lsuValuation,
            'lsuVetting'                => $lsuVetting,
            'tmCompliance'          => $tmCompliance,
            'tmFormsForBrokers'     => $tmFormsForBrokers,
            'tmProgramGuides'       => $tmProgramGuides,
            'tmInternalForms'       => $tmInternalForms,
            // 'tmProcesses'           => $tmProcesses,
            'tmSystems'             => $tmSystems,
            'tmTisp'                => $tmTisp,
            'tmVetting'             => $tmVetting,
            'uwCompliance'      => $uwCompliance,
            // 'uwProcesses'       => $uwProcesses,
            'uwSystems'         => $uwSystems,
            'uwTisp'            => $uwTisp,
            'uwGuidelines'      => $uwGuidelines,
            'uwGuidelines_past' => $uwGuidelines_past,
            'uwTools'           => $uwTools,
            'uwVetting'         => $uwVetting,
            'uwVideos'          => $uwVideos,
            'jrProcessorForms'  => $jrProcessorForms,
            'processorForms'    => $processorForms,
            'nda'           => $nda,
            'jrUW'                  => $jrUW,
            'prescreen'             => $prescreen,
            'vettingClerk'          => $vettingClerk,
            'postCloseFunding'      => $postCloseFunding,
            'postCloseShipping'     => $postCloseShipping,
        ]);
    }
}
