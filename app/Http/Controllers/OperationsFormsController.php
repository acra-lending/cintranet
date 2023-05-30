<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Post;
use Carbon\Carbon;

class OperationsFormsController extends Controller
{
    public function index()
    {
        $seconds = 86400;

        //-----------------
        //Compliance Forms 
        //-----------------       
        $disclosure = Cache::remember('disclosure', $seconds, function() {
            return Post::whereRaw("find_in_set('disclosure', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $important = Cache::remember('important', $seconds, function() {
            return Post::whereRaw("find_in_set('important', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            
        
        $fundingStates = Cache::remember('fundingStates', $seconds, function() {
            return Post::whereRaw("find_in_set('fundingStates', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $policies = Cache::remember('policies', $seconds, function() {
            return Post::whereRaw("find_in_set('policies', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $deptContacts = Cache::remember('deptContacts', $seconds, function() {
            return Post::whereRaw("find_in_set('deptContacts', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        //--------
        //Funding
        // -------
        $fundingCompliance = Cache::remember('fundingCompliance', $seconds, function() {
            return Post::whereRaw("find_in_set('fundingCompliance', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $fundingForms = Cache::remember('fundingForms', $seconds, function() {
            return Post::whereRaw("find_in_set('fundingForms', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        // $fundingProcesses = Cache::remember('posts', $seconds, function() {
            // return Post::whereRaw("find_in_set('fundingProcesses', category_id)")
            // ->sortable('filename')
            // ->get();
            
        // });
            

        $fundingSystems = Cache::remember('fundingSystems', $seconds, function() {
            return Post::whereRaw("find_in_set('fundingSystems', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $fundingTisp = Cache::remember('fundingTisp', $seconds, function() {
            return Post::whereRaw("find_in_set('fundingTisp', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $fundingVetting = Cache::remember('fundingVetting', $seconds, function() {
            return Post::whereRaw("find_in_set('fundingVetting', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        //-----------
        //CD Doc Drawer
        //-----------
        $docDrawerCompliance = Cache::remember('docDrawerCompliance', $seconds, function() {
            return Post::whereRaw("find_in_set('docDrawerCompliance', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $docDrawerForms = Cache::remember('docDrawerForms', $seconds, function() {
            return Post::whereRaw("find_in_set('docDrawerForms', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        // $docDrawerProcesses = Cache::remember('posts', $seconds, function() {
            // return Post::whereRaw("find_in_set('docDrawerProcesses', category_id)")
            // ->sortable('filename')
            // ->get();
            
        // });
            

        $docDrawerSystems = Cache::remember('docDrawerSystems', $seconds, function() {
            return Post::whereRaw("find_in_set('docDrawerSystems', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $docDrawerTisp = Cache::remember('docDrawerTisp', $seconds, function() {
            return Post::whereRaw("find_in_set('docDrawerTisp', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $docDrawerVetting = Cache::remember('docDrawerVetting', $seconds, function() {
            return Post::whereRaw("find_in_set('docDrawerVetting', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        //-------
        //Funder-Closer
        //-------
        $funderCompliance = Cache::remember('funderCompliance', $seconds, function() {
            return Post::whereRaw("find_in_set('funderCompliance', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $funderEscrow = Cache::remember('funderEscrow', $seconds, function() {
            return Post::whereRaw("find_in_set('funderEscrow', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $funderForms = Cache::remember('funderForms', $seconds, function() {
            return Post::whereRaw("find_in_set('funderForms', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $funderPOA = Cache::remember('funderPOA', $seconds, function() {
            return Post::whereRaw("find_in_set('funderPOA', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        // $funderProcesses = Cache::remember('posts', $seconds, function() {
            // return Post::whereRaw("find_in_set('funderProcesses', category_id)")
            // ->sortable('filename')
            // ->get();
            
        // });
            

        $funderSystems = Cache::remember('funderSystems', $seconds, function() {
            return Post::whereRaw("find_in_set('funderSystems', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $funderTisp = Cache::remember('funderTisp', $seconds, function() {
            return Post::whereRaw("find_in_set('funderTisp', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $funderVetting = Cache::remember('funderVetting', $seconds, function() {
            return Post::whereRaw("find_in_set('funderVetting', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        //---------------
        //Funding Forms
        //---------------
        $fundingFormsCompliance = Cache::remember('fundingFormsCompliance', $seconds, function() {
            return Post::whereRaw("find_in_set('fundingFormsCompliance', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $fundingFormsForms = Cache::remember('fundingFormsForms', $seconds, function() {
            return Post::whereRaw("find_in_set('fundingFormsForms', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        // $fundingFormsProcesses = Cache::remember('posts', $seconds, function() {
            // return Post::whereRaw("find_in_set('fundingFormsProcesses', category_id)")
            // ->sortable('filename')
            // ->get();
            
        // });
            

        $fundingFormsSystems = Cache::remember('fundingFormsSystems', $seconds, function() {
            return Post::whereRaw("find_in_set('fundingFormsSystems', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $fundingFormsTisp = Cache::remember('fundingFormsTisp', $seconds, function() {
            return Post::whereRaw("find_in_set('fundingFormsTisp', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $fundingFormsVetting = Cache::remember('fundingFormsVetting', $seconds, function() {
            return Post::whereRaw("find_in_set('fundingFormsVetting', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        //-----------------
        //Funding Assitant
        //-----------------
        $fundingAssistantCompliance = Cache::remember('fundingAssistantCompliance', $seconds, function() {
            return Post::whereRaw("find_in_set('fundingAssistantCompliance', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $fundingAssistantForms = Cache::remember('fundingAssistantForms', $seconds, function() {
            return Post::whereRaw("find_in_set('fundingAssistantForms', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        // $fundingAssistantProcesses = Cache::remember('posts', $seconds, function() {
            // return Post::whereRaw("find_in_set('fundingAssistantProcesses', category_id)")
            // ->sortable('filename')
            // ->get();
            
        // });
            

        $fundingAssistantSystems = Cache::remember('fundingAssistantSystems', $seconds, function() {
            return Post::whereRaw("find_in_set('fundingAssistantSystems', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $fundingAssistantTisp = Cache::remember('fundingAssistantTisp', $seconds, function() {
            return Post::whereRaw("find_in_set('fundingAssistantTisp', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $fundingAssistantVetting = Cache::remember('fundingAssistantVetting', $seconds, function() {
            return Post::whereRaw("find_in_set('fundingAssistantVetting', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        //------------
        //Loan Set Up
        //------------
        $lsuAttachments= Cache::remember('lsuAttachments', $seconds, function() {
            return Post::whereRaw("find_in_set('lsuAttachments', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $lsuCompliance = Cache::remember('lsuCompliance', $seconds, function() {
            return Post::whereRaw("find_in_set('lsuCompliance', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $lsuForms = Cache::remember('lsuForms', $seconds, function() {
            return Post::whereRaw("find_in_set('lsuForms', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $lsuFloodCerts = Cache::remember('lsuFloodCerts', $seconds, function() {
            return Post::whereRaw("find_in_set('lsuFloodCerts', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        // $lsuProcesses = Cache::remember('posts', $seconds, function() {
            // return Post::whereRaw("find_in_set('lsuProcesses', category_id)")
            // ->sortable('filename')
            // ->get();
            
        // });
            

        $lsuSsaAnd4506T = Cache::remember('lsuSsaAnd4506T', $seconds, function() {
            return Post::whereRaw("find_in_set('lsuSsaAnd4506T', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $lsuSystems = Cache::remember('lsuSystems', $seconds, function() {
            return Post::whereRaw("find_in_set('lsuSystems', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $lsuValuation = Cache::remember('lsuValuation', $seconds, function() {
            return Post::whereRaw("find_in_set('lsuValuation', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $lsuVetting = Cache::remember('lsuVetting', $seconds, function() {
            return Post::whereRaw("find_in_set('lsuVetting', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $lsuJobAides = Cache::remember('lsuJobAides', $seconds, function() {
            return Post::whereRaw("find_in_set('lsuJobAides', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        //--------------------
        //Transaction Manager
        //--------------------
        $tmCompliance = Cache::remember('tmCompliance', $seconds, function() {
            return Post::whereRaw("find_in_set('tmCompliance', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $tmFormsForBrokers = Cache::remember('tmFormsForBrokers', $seconds, function() {
            return Post::whereRaw("find_in_set('tmFormsForBrokers', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $tmProgramGuides = Cache::remember('tmProgramGuides', $seconds, function() {
            return Post::whereRaw("find_in_set('tmProgramGuides', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $tmInternalForms = Cache::remember('tmInternalForms', $seconds, function() {
            return Post::whereRaw("find_in_set('tmInternalForms', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        // $tmProcesses = Cache::remember('posts', $seconds, function() {
            // return Post::whereRaw("find_in_set('tmProcesses', category_id)")
            // ->sortable('filename')
            // ->get();
            
        // });
            

        $tmSystems = Cache::remember('tmSystems', $seconds, function() {
            return Post::whereRaw("find_in_set('tmSystems', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $tmTools = Cache::remember('tmTools', $seconds, function() {
            return Post::whereRaw("find_in_set('tmTools', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $tmTisp = Cache::remember('tmTisp', $seconds, function() {
            return Post::whereRaw("find_in_set('tmTisp', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $tmVetting = Cache::remember('tmVetting', $seconds, function() {
            return Post::whereRaw("find_in_set('tmVetting', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        //-------------
        //Underwriting
        //-------------
        $uwCompliance = Cache::remember('uwCompliance', $seconds, function() {
            return Post::whereRaw("find_in_set('uwCompliance', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        // $uwProcesses = Cache::remember('posts', $seconds, function() {
            // return Post::whereRaw("find_in_set('uwProcesses', category_id)")
            // ->sortable('filename')
            // ->get();
            
        // });
            

        $uwSystems = Cache::remember('uwSystems', $seconds, function() {
            return Post::whereRaw("find_in_set('uwSystems', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $uwTisp = Cache::remember('uwTisp', $seconds, function() {
            return Post::whereRaw("find_in_set('uwTisp', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $uwGuidelines = Cache::remember('uwGuidelines', $seconds, function() {
            return Post::whereRaw("find_in_set('uwGuidelines', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $uwGuidelinesPast = Cache::remember('uwGuidelinesPast', $seconds, function() {
            return Post::whereRaw("find_in_set('uwGuidelinesPast', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $uwTools = Cache::remember('uwTools', $seconds, function() {
            return Post::whereRaw("find_in_set('uwTools', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $uwVetting = Cache::remember('uwVetting', $seconds, function() {
            return Post::whereRaw("find_in_set('uwVetting', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $uwVideos = Cache::remember('uwVideos', $seconds, function() {
            return Post::whereRaw("find_in_set('uwVideos', category_id)")
            ->sortable('filename')
            ->get();
            
        });
        
        
        //-------------
        //Valuation Reviews
        //-------------
        $valuations = Cache::remember('valuations', $seconds, function() {
            return Post::whereRaw("find_in_set('valuationReviews', category_id)")
            ->sortable('filename')
            ->get();
            
        });


        //-------------
        //Jr Processor
        //-------------
        $jrProcessorForms = Cache::remember('jrProcessorForms', $seconds, function() {
            return Post::whereRaw("find_in_set('jrProcessorForms', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $jrProcessorVendorContacts = Cache::remember('jrProcessorVendorContacts', $seconds, function() {
            return Post::whereRaw("find_in_set('jrProcessorVendorContacts', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            
        

        //-------------
        //Processor
        //-------------
        $processorForms = Cache::remember('processorForms', $seconds, function() {
            return Post::whereRaw("find_in_set('processorForms', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $processorTools = Cache::remember('processorTools', $seconds, function() {
            return Post::whereRaw("find_in_set('processorTools', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $processorVendorContacts = Cache::remember('processorVendorContacts', $seconds, function() {
            return Post::whereRaw("find_in_set('processorVendorContacts', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            
        

        //-------------
        //NDA
        //-------------
        $nda = Cache::remember('nda', $seconds, function() {
            return Post::whereRaw("find_in_set('nda', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        //-------------
        //Concierge Services
        //-------------
        $conciergeProcessing = Cache::remember('conciergeProcessing', $seconds, function() {
            return Post::whereRaw("find_in_set('conciergeProcessing', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            
        
        $conciergeVendorContacts = Cache::remember('conciergeVendorContacts', $seconds, function() {
            return Post::whereRaw("find_in_set('conciergeVendorContacts', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            
        
        $conciergeJobAides = Cache::remember('conciergeJobAides', $seconds, function() {
            return Post::whereRaw("find_in_set('conciergeJobAides', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            
        
        $conciergeTisp = Cache::remember('conciergeTisp', $seconds, function() {
            return Post::whereRaw("find_in_set('conciergeTisp', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            
        
        $conciergeVetting = Cache::remember('conciergeVetting', $seconds, function() {
            return Post::whereRaw("find_in_set('conciergeVetting', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        //-------------
        //Fix And Flip
        //-------------
        $fixAndFlipSystems = Cache::remember('fixAndFlipSystems', $seconds, function() {
            return Post::whereRaw("find_in_set('fixAndFlipSystems', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $fixAndFlipInternalForms = Cache::remember('fixAndFlipInternalForms', $seconds, function() {
            return Post::whereRaw("find_in_set('fixAndFlipInternalForms', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $fixAndFlipVetting = Cache::remember('fixAndFlipVetting', $seconds, function() {
            return Post::whereRaw("find_in_set('fixAndFlipVetting', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $fixAndFlipIntake = Cache::remember('fixAndFlipIntake', $seconds, function() {
            return Post::whereRaw("find_in_set('fixAndFlipIntake', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        // $fixAndFlipProcessing = Cache::remember('posts', $seconds, function() {
            // return Post::whereRaw("find_in_set('fixAndFlipProcessing', category_id)")
            // ->sortable('filename')
            // ->get();
            
        // });
            

        $fixAndFlipUw = Cache::remember('fixAndFlipUw', $seconds, function() {
            return Post::whereRaw("find_in_set('fixAndFlipUw', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $fixAndFlipFunding = Cache::remember('fixAndFlipFunding', $seconds, function() {
            return Post::whereRaw("find_in_set('fixAndFlipFunding', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $fixAndFlipVendorContacts = Cache::remember('fixAndFlipVendorContacts', $seconds, function() {
            return Post::whereRaw("find_in_set('fixAndFlipVendorContacts', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        // $fixAndFlipWelcomeForms = Cache::remember('posts', $seconds, function() {
            // return Post::whereRaw("find_in_set('fixAndFlipWelcomeForms', category_id)")
            // ->sortable('filename')
            // ->get();
            
        // });
            

        //-------------
        //Small Balance Multifamily
        //-------------
        $sbmfSystems = Cache::remember('sbmfSystems', $seconds, function() {
            return Post::whereRaw("find_in_set('sbmfSystems', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $sbmfInternalForms = Cache::remember('sbmfInternalForms', $seconds, function() {
            return Post::whereRaw("find_in_set('sbmfInternalForms', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        $sbmfGuidelines = Cache::remember('sbmfGuidelines', $seconds, function() {
            return Post::whereRaw("find_in_set('sbmfGuidelines', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            

        //-------------
        //Jr Underwriter
        //-------------
        $jrUW = Cache::remember('jrUW', $seconds, function() {
            return Post::whereRaw("find_in_set('jrUW', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            
        //-------------
        //Pre-Screen
        //-------------
        $prescreen = Cache::remember('prescreen', $seconds, function() {
            return Post::whereRaw("find_in_set('prescreen', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            
        //-------------
        //Vetting Clerk
        //-------------
        $vettingClerk = Cache::remember('vettingClerk', $seconds, function() {
            return Post::whereRaw("find_in_set('vettingClerk', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            
        //-------------
        //Post Close-Funding
        //-------------
        $postCloseFunding = Cache::remember('postCloseFunding', $seconds, function() {
            return Post::whereRaw("find_in_set('postCloseFunding', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            
        //-------------
        //Post Close-Shipping
        //-------------
        $postCloseShipping = Cache::remember('postCloseShipping', $seconds, function() {
            return Post::whereRaw("find_in_set('postCloseShipping', category_id)")
            ->sortable('filename')
            ->get();
            
        });
            
        
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
            'lsuJobAides'               => $lsuJobAides,
            'tmCompliance'          => $tmCompliance,
            'tmFormsForBrokers'     => $tmFormsForBrokers,
            'tmProgramGuides'       => $tmProgramGuides,
            'tmInternalForms'       => $tmInternalForms,
            // 'tmProcesses'           => $tmProcesses,
            'tmSystems'             => $tmSystems,
            'tmTools'               => $tmTools,
            'tmTisp'                => $tmTisp,
            'tmVetting'             => $tmVetting,
            'uwCompliance'      => $uwCompliance,
            // 'uwProcesses'       => $uwProcesses,
            'uwSystems'         => $uwSystems,
            'uwTisp'            => $uwTisp,
            'uwGuidelines'      => $uwGuidelines,
            'uwGuidelinesPast'  => $uwGuidelinesPast,
            'uwTools'           => $uwTools,
            'uwVetting'         => $uwVetting,
            'uwVideos'          => $uwVideos,
            'jrProcessorForms'  => $jrProcessorForms,
            'jrProcessorVendorContacts'  => $jrProcessorVendorContacts,
            'processorForms'    => $processorForms,
            'processorTools'    => $processorTools,
            'processorVendorContacts'    => $processorVendorContacts,
            'nda'           => $nda,
            'conciergeProcessing'       => $conciergeProcessing,
            'conciergeVendorContacts'   => $conciergeVendorContacts,
            'conciergeJobAides'         => $conciergeJobAides,
            'conciergeTisp'             => $conciergeTisp,
            'conciergeVetting'          => $conciergeVetting,
            'fixAndFlipSystems'         => $fixAndFlipSystems,
            'fixAndFlipInternalForms'   => $fixAndFlipInternalForms,
            'fixAndFlipVetting'         => $fixAndFlipVetting,           
            'fixAndFlipIntake'          => $fixAndFlipIntake,
            // 'fixAndFlipProcessing'      => $fixAndFlipProcessing,
            'fixAndFlipUw'              => $fixAndFlipUw,
            'fixAndFlipFunding'         => $fixAndFlipFunding,
            'fixAndFlipVendorContacts'  => $fixAndFlipVendorContacts,
            // 'fixAndFlipWelcomeForms'    => $fixAndFlipWelcomeForms,
            'sbmfSystems'           => $sbmfSystems,
            'sbmfInternalForms'     => $sbmfInternalForms,
            'sbmfGuidelines'        => $sbmfGuidelines,
            'jrUW'                  => $jrUW,
            'prescreen'             => $prescreen,
            'vettingClerk'          => $vettingClerk,
            'postCloseFunding'      => $postCloseFunding,
            'postCloseShipping'     => $postCloseShipping,
            // 'valuationReviews'      => $valuations,
        ]);
    }
}
