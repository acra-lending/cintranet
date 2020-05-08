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
        $disclosure = Post::where('category_id', 'disclosure')
        ->orderBy('created_at', 'desc')
        ->get();

        $important = Post::where('category_id', 'important')
        ->orderBy('created_at', 'desc')
        ->get();
        
        $fundingStates = Post::where('category_id', 'fundingStates')
        ->orderBy('created_at', 'desc')
        ->get();

        $policies = Post::where('category_id', 'policies')
        ->orderBy('created_at', 'desc')
        ->get();

        $marketingForms = Post::where('category_id', 'marketingForms')
        ->orderBy('created_at', 'desc')
        ->get();

        $marketingMaterials = Post::where('category_id', 'marketingMaterials')
        ->orderBy('created_at', 'desc')
        ->get();

        //------------------------
        //General Operation Forms
        //------------------------
        $opSystems = Post::where('category_id', 'opSystems')
        ->orderBy('created_at', 'desc')
        ->get();

        $opForms = Post::where('category_id', 'opForms')
        ->orderBy('created_at', 'desc')
        ->get();

        $opTisp = Post::where('category_id', 'opTisp')
        ->orderBy('created_at', 'desc')
        ->get();

        $opVetting = Post::where('category_id', 'opVetting')
        ->orderBy('created_at', 'desc')
        ->get();

        $opCompliance = Post::where('category_id', 'opCompliance')
        ->orderBy('created_at', 'desc')
        ->get();

        $opProcesses = Post::where('category_id', 'opProcesses')
        ->orderBy('created_at', 'desc')
        ->get();

        $deptContacts = Post::where('category_id', 'deptContacts')
        ->orderBy('created_at', 'desc')
        ->get();

        //--------
        //Funding
        // -------
        $fundingCompliance = Post::where('category_id', 'fundingCompliance')
        ->orderBy('created_at', 'desc')
        ->get();

        $fundingForms = Post::where('category_id', 'fundingForms')
        ->orderBy('created_at', 'desc')
        ->get();

        $fundingProcesses = Post::where('category_id', 'fundingProcesses')
        ->orderBy('created_at', 'desc')
        ->get();

        $fundingSystems = Post::where('category_id', 'fundingSystems')
        ->orderBy('created_at', 'desc')
        ->get();

        $fundingTisp = Post::where('category_id', 'fundingTisp')
        ->orderBy('created_at', 'desc')
        ->get();

        $fundingVetting = Post::where('category_id', 'fundingVetting')
        ->orderBy('created_at', 'desc')
        ->get();

        //-----------
        //Doc Drawer
        //-----------
        $docDrawerCompliance = Post::where('category_id', 'docDrawerCompliance')
        ->orderBy('created_at', 'desc')
        ->get();

        $docDrawerForms = Post::where('category_id', 'docDrawerForms')
        ->orderBy('created_at', 'desc')
        ->get();

        $docDrawerProcesses = Post::where('category_id', 'docDrawerProcesses')
        ->orderBy('created_at', 'desc')
        ->get();

        $docDrawerSystems = Post::where('category_id', 'docDrawerSystems')
        ->orderBy('created_at', 'desc')
        ->get();

        $docDrawerTisp = Post::where('category_id', 'docDrawerTisp')
        ->orderBy('created_at', 'desc')
        ->get();

        $docDrawerVetting = Post::where('category_id', 'docDrawerVetting')
        ->orderBy('created_at', 'desc')
        ->get();

        //-------
        //Funder
        //-------
        $funderCompliance = Post::where('category_id', 'funderCompliance')
        ->orderBy('created_at', 'desc')
        ->get();

        $funderEscrow = Post::where('category_id', 'funderEscrow')
        ->orderBy('created_at', 'desc')
        ->get();

        $funderForms = Post::where('category_id', 'funderForms')
        ->orderBy('created_at', 'desc')
        ->get();

        $funderPOA = Post::where('category_id', 'funderPOA')
        ->orderBy('created_at', 'desc')
        ->get();

        $funderProcesses = Post::where('category_id', 'funderProcesses')
        ->orderBy('created_at', 'desc')
        ->get();

        $funderSystems = Post::where('category_id', 'funderSystems')
        ->orderBy('created_at', 'desc')
        ->get();

        $funderTisp = Post::where('category_id', 'funderTisp')
        ->orderBy('created_at', 'desc')
        ->get();

        $funderVetting = Post::where('category_id', 'funderVetting')
        ->orderBy('created_at', 'desc')
        ->get();

        //---------------
        //Funding Forms
        //---------------
        $fundingFormsCompliance = Post::where('category_id', 'fundingFormsCompliance')
        ->orderBy('created_at', 'desc')
        ->get();

        $fundingFormsForms = Post::where('category_id', 'fundingFormsForms')
        ->orderBy('created_at', 'desc')
        ->get();

        $fundingFormsProcesses = Post::where('category_id', 'fundingFormsProcesses')
        ->orderBy('created_at', 'desc')
        ->get();

        $fundingFormsSystems = Post::where('category_id', 'fundingFormsSystems')
        ->orderBy('created_at', 'desc')
        ->get();

        $fundingFormsTisp = Post::where('category_id', 'fundingFormsTisp')
        ->orderBy('created_at', 'desc')
        ->get();

        $fundingFormsVetting = Post::where('category_id', 'fundingFormsVetting')
        ->orderBy('created_at', 'desc')
        ->get();

        //-----------------
        //Funding Assitant
        //-----------------
        $fundingAssistantCompliance = Post::where('category_id', 'fundingAssistantCompliance')
        ->orderBy('created_at', 'desc')
        ->get();

        $fundingAssistantForms = Post::where('category_id', 'fundingAssistantForms')
        ->orderBy('created_at', 'desc')
        ->get();

        $fundingAssistantProcesses = Post::where('category_id', 'fundingAssistantProcesses')
        ->orderBy('created_at', 'desc')
        ->get();

        $fundingAssistantSystems = Post::where('category_id', 'fundingAssistantSystems')
        ->orderBy('created_at', 'desc')
        ->get();

        $fundingAssistantTisp = Post::where('category_id', 'fundingAssistantTisp')
        ->orderBy('created_at', 'desc')
        ->get();

        $fundingAssistantVetting = Post::where('category_id', 'fundingAssistantVetting')
        ->orderBy('created_at', 'desc')
        ->get();

        //------------
        //Loan Set Up
        //------------
        $lsuAttachments= Post::where('category_id', 'lsuAttachments')
        ->orderBy('created_at', 'desc')
        ->get();

        $lsuCompliance = Post::where('category_id', 'lsuCompliance')
        ->orderBy('created_at', 'desc')
        ->get();

        $lsuForms = Post::where('category_id', 'lsuForms')
        ->orderBy('created_at', 'desc')
        ->get();

        $lsuFloodCerts = Post::where('category_id', 'lsuFloodCerts')
        ->orderBy('created_at', 'desc')
        ->get();

        $lsuProcesses = Post::where('category_id', 'lsuProcesses')
        ->orderBy('created_at', 'desc')
        ->get();

        $lsuSsaAnd4506T = Post::where('category_id', 'lsuSsaAnd4506T')
        ->orderBy('created_at', 'desc')
        ->get();

        $lsuSystems = Post::where('category_id', 'lsuSystems')
        ->orderBy('created_at', 'desc')
        ->get();

        $lsuValuation = Post::where('category_id', 'lsuValuation')
        ->orderBy('created_at', 'desc')
        ->get();

        $lsuVetting = Post::where('category_id', 'lsuVetting')
        ->orderBy('created_at', 'desc')
        ->get();

        //--------------------
        //Transaction Manager
        //--------------------
        $tmCompliance = Post::where('category_id', 'tmCompliance')
        ->orderBy('created_at', 'desc')
        ->get();

        $tmFormsForBrokers = Post::where('category_id', 'tmFormsForBrokers')
        ->orderBy('created_at', 'desc')
        ->get();

        $tmProgramGuides = Post::where('category_id', 'tmProgramGuides')
        ->orderBy('created_at', 'desc')
        ->get();

        $tmInternalForms = Post::where('category_id', 'tmInternalForms')
        ->orderBy('created_at', 'desc')
        ->get();

        $tmProcesses = Post::where('category_id', 'tmProcesses')
        ->orderBy('created_at', 'desc')
        ->get();

        $tmSystems = Post::where('category_id', 'tmSystems')
        ->orderBy('created_at', 'desc')
        ->get();

        $tmTisp = Post::where('category_id', 'tmTisp')
        ->orderBy('created_at', 'desc')
        ->get();

        $tmVetting = Post::where('category_id', 'tmVetting')
        ->orderBy('created_at', 'desc')
        ->get();

        //-------------
        //Underwriting
        //-------------
        $uwCompliance = Post::where('category_id', 'uwCompliance')
        ->orderBy('created_at', 'desc')
        ->get();

        $uwProcesses = Post::where('category_id', 'uwProcesses')
        ->orderBy('created_at', 'desc')
        ->get();

        $uwSystems = Post::where('category_id', 'uwSystems')
        ->orderBy('created_at', 'desc')
        ->get();

        $uwTisp = Post::where('category_id', 'uwTisp')
        ->orderBy('created_at', 'desc')
        ->get();

        $uwGuidelines = Post::where('category_id', 'uwGuidelines')
        ->orderBy('created_at', 'desc')
        ->get();

        $uwTools = Post::where('category_id', 'uwTools')
        ->orderBy('created_at', 'desc')
        ->get();

        $uwVetting = Post::where('category_id', 'uwVetting')
        ->orderBy('created_at', 'desc')
        ->get();

        $uwVideos = Post::where('category_id', 'uwVideos')
        ->orderBy('created_at', 'desc')
        ->get();

        return view('pages.operations.forms', [
            'disclosure'            => $disclosure,
            'important'             => $important,
            'fundingStates'         => $fundingStates,
            'policies'              => $policies,
            'marketingForms'        => $marketingForms,
            'marketingMaterials'    => $marketingMaterials,
            'opSystems'          => $opSystems,
            'opForms'            => $opForms,
            'opTisp'             => $opTisp,
            'opVetting'          => $opVetting,
            'opCompliance'       => $opCompliance,
            'opProcesses'        => $opProcesses,
            'deptContacts'       => $deptContacts,
            'fundingCompliance'    => $fundingCompliance,
            'fundingForms'         => $fundingForms,
            'fundingProcesses'     => $fundingProcesses,
            'fundingSystems'       => $fundingSystems,
            'fundingTisp'          => $fundingTisp,
            'fundingVetting'       => $fundingVetting,
            'docDrawerCompliance'     => $docDrawerCompliance,
            'docDrawerForms'          => $docDrawerForms,
            'docDrawerProcesses'      => $docDrawerProcesses,
            'docDrawerSystems'        => $docDrawerSystems,
            'docDrawerTisp'           => $docDrawerTisp,
            'docDrawerVetting'        => $docDrawerVetting,
            'funderCompliance'     => $funderCompliance,
            'funderEscrow'         => $funderEscrow,
            'funderForms'          => $funderForms,
            'funderPOA'            => $funderPOA,
            'funderProcesses'      => $funderProcesses,
            'funderSystems'        => $funderSystems,
            'funderTisp'           => $funderTisp,
            'funderVetting'        => $funderVetting,
            'fundingFormsCompliance'     => $fundingFormsCompliance,
            'fundingFormsForms'          => $fundingFormsForms,
            'fundingFormsProcesses'      => $fundingFormsProcesses,
            'fundingFormsSystems'        => $fundingFormsSystems,
            'fundingFormsTisp'           => $fundingFormsTisp,
            'fundingFormsVetting'        => $fundingFormsVetting,
            'fundingAssistantCompliance'     => $fundingAssistantCompliance,
            'fundingAssistantForms'          => $fundingAssistantForms,
            'fundingAssistantProcesses'      => $fundingAssistantProcesses,
            'fundingAssistantSystems'        => $fundingAssistantSystems,
            'fundingAssistantTisp'           => $fundingAssistantTisp,
            'fundingAssistantVetting'        => $fundingAssistantVetting,
            'lsuAttachments'            => $lsuAttachments,
            'lsuCompliance'             => $lsuCompliance,
            'lsuForms'                  => $lsuForms,
            'lsuFloodCerts'             => $lsuFloodCerts,
            'lsuProcesses'              => $lsuProcesses,
            'lsuSsaAnd4506T'            => $lsuSsaAnd4506T,
            'lsuSystems'                => $lsuSystems,
            'lsuValuation'              => $lsuValuation,
            'lsuVetting'                => $lsuVetting,
            'tmCompliance'          => $tmCompliance,
            'tmFormsForBrokers'     => $tmFormsForBrokers,
            'tmProgramGuides'       => $tmProgramGuides,
            'tmInternalForms'       => $tmInternalForms,
            'tmProcesses'           => $tmProcesses,
            'tmSystems'             => $tmSystems,
            'tmTisp'                => $tmTisp,
            'tmVetting'             => $tmVetting,
            'uwCompliance'      => $uwCompliance,
            'uwProcesses'       => $uwProcesses,
            'uwSystems'         => $uwSystems,
            'uwTisp'            => $uwTisp,
            'uwGuidelines'      => $uwGuidelines,
            'uwTools'           => $uwTools,
            'uwVetting'         => $uwVetting,
            'uwVideos'          => $uwVideos
        ]);

    }
}
