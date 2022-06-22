<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class OperationsFormsController extends Controller
{
    public function index()
    {
        $uwVideos = array();
        $fixAndFlipSystems = array();
        $fixAndFlipWelcomeForms = array();
        $sbmfSystems = array();
        $jrUW = array();
        $vettingClerk = array();
        $postCloseFunding = array();
        $postCloseShipping = array();

        $allForms = Post::get();

        foreach ($allForms as $form) {
            //-----------------
            //Compliance Forms 
            //-----------------  
            if(str_contains($form->category_id, 'disclosure')) {
                $disclosure[] = $form;
            }
            if(str_contains($form->category_id, 'important')) {
                $important[] = $form;
            }
            if(str_contains($form->category_id, 'fundingStates')) {
                $fundingStates[] = $form;
            }
            if(str_contains($form->category_id, 'policies')) {
                $policies[] = $form;
            }
            if(str_contains($form->category_id, 'deptContacts')) {
                $deptContacts[] = $form;
            }
            //--------
            //Funding
            // -------
            if(str_contains($form->category_id, 'fundingCompliance')) {
                $fundingCompliance[] = $form;
            }
            if(str_contains($form->category_id, 'fundingForms')) {
                $fundingForms[] = $form;
            }
            if(str_contains($form->category_id, 'fundingSystems')) {
                $fundingSystems[] = $form;
            }
            if(str_contains($form->category_id, 'fundingTisp')) {
                $fundingTisp[] = $form;
            }
            if(str_contains($form->category_id, 'fundingVetting')) {
                $fundingVetting[] = $form;
            }
            //-----------
            //CD Doc Drawer
            //-----------
            if(str_contains($form->category_id, 'docDrawerCompliance')) {
                $docDrawerCompliance[] = $form;
            }
            if(str_contains($form->category_id, 'docDrawerForms')) {
                $docDrawerForms[] = $form;
            }
            if(str_contains($form->category_id, 'docDrawerSystems')) {
                $docDrawerSystems[] = $form;
            }
            if(str_contains($form->category_id, 'docDrawerTisp')) {
                $docDrawerTisp[] = $form;
            }
            if(str_contains($form->category_id, 'docDrawerTisp')) {
                $docDrawerTisp[] = $form;
            }
            if(str_contains($form->category_id, 'docDrawerVetting')) {
                $docDrawerVetting[] = $form;
            }
            //-------
            //Funder-Closer
            //-------
            if(str_contains($form->category_id, 'funderCompliance')) {
                $funderCompliance[] = $form;
            }
            if(str_contains($form->category_id, 'funderEscrow')) {
                $funderEscrow[] = $form;
            }
            if(str_contains($form->category_id, 'funderForms')) {
                $funderForms[] = $form;
            }
            if(str_contains($form->category_id, 'funderPOA')) {
                $funderPOA[] = $form;
            }
            if(str_contains($form->category_id, 'funderSystems')) {
                $funderSystems[] = $form;
            }
            if(str_contains($form->category_id, 'funderTisp')) {
                $funderTisp[] = $form;
            }
            if(str_contains($form->category_id, 'funderVetting')) {
                $funderVetting[] = $form;
            }
            //---------------
            //Funding Forms
            //---------------
            if(str_contains($form->category_id, 'fundingFormsCompliance')) {
                $fundingFormsCompliance[] = $form;
            }
            if(str_contains($form->category_id, 'fundingFormsForms')) {
                $fundingFormsForms[] = $form;
            }
            if(str_contains($form->category_id, 'fundingFormsSystems')) {
                $fundingFormsSystems[] = $form;
            }
            if(str_contains($form->category_id, 'fundingFormsTisp')) {
                $fundingFormsTisp[] = $form;
            }
            if(str_contains($form->category_id, 'fundingFormsVetting')) {
                $fundingFormsVetting[] = $form;
            }
            //-----------------
            //Funding Assitant
            //-----------------
            if(str_contains($form->category_id, 'fundingAssistantCompliance')) {
                $fundingAssistantCompliance[] = $form;
            }
            if(str_contains($form->category_id, 'fundingAssistantSystems')) {
                $fundingAssistantSystems[] = $form;
            }
            if(str_contains($form->category_id, 'fundingAssistantTisp')) {
                $fundingAssistantTisp[] = $form;
            }
            if(str_contains($form->category_id, 'fundingAssistantVetting')) {
                $fundingAssistantVetting[] = $form;
            }
            //------------
            //Loan Set Up
            //------------
            if(str_contains($form->category_id, 'lsuAttachments')) {
                $lsuAttachments[] = $form;
            }
            if(str_contains($form->category_id, 'lsuCompliance')) {
                $lsuCompliance[] = $form;
            }
            if(str_contains($form->category_id, 'lsuForms')) {
                $lsuForms[] = $form;
            }
            if(str_contains($form->category_id, 'lsuFloodCerts')) {
                $lsuFloodCerts[] = $form;
            }
            if(str_contains($form->category_id, 'lsuSsaAnd4506T')) {
                $lsuSsaAnd4506T[] = $form;
            }
            if(str_contains($form->category_id, 'lsuSystems')) {
                $lsuSystems[] = $form;
            }
            if(str_contains($form->category_id, 'lsuValuation')) {
                $lsuValuation[] = $form;
            }
            if(str_contains($form->category_id, 'lsuVetting')) {
                $lsuVetting[] = $form;
            }
            if(str_contains($form->category_id, 'lsuJobAides')) {
                $lsuJobAides[] = $form;
            }
            //--------------------
            //Transaction Manager
            //--------------------
            if(str_contains($form->category_id, 'tmCompliance')) {
                $tmCompliance[] = $form;
            }
            if(str_contains($form->category_id, 'tmFormsForBrokers')) {
                $tmFormsForBrokers[] = $form;
            }
            if(str_contains($form->category_id, 'tmProgramGuides')) {
                $tmProgramGuides[] = $form;
            }
            if(str_contains($form->category_id, 'tmInternalForms')) {
                $tmInternalForms[] = $form;
            }
            if(str_contains($form->category_id, 'tmSystems')) {
                $tmSystems[] = $form;
            }
            if(str_contains($form->category_id, 'tmTools')) {
                $tmTools[] = $form;
            }
            if(str_contains($form->category_id, 'tmTisp')) {
                $tmTisp[] = $form;
            }
            if(str_contains($form->category_id, 'tmVetting')) {
                $tmVetting[] = $form;
            }
            //-------------
            //Underwriting
            //-------------
            if(str_contains($form->category_id, 'uwCompliance')) {
                $uwCompliance[] = $form;
            }
            if(str_contains($form->category_id, 'uwSystems')) {
                $uwSystems[] = $form;
            }
            if(str_contains($form->category_id, 'uwTisp')) {
                $uwTisp[] = $form;
            }
            if(str_contains($form->category_id, 'uwGuidelines')) {
                $uwGuidelines[] = $form;
            }
            if(str_contains($form->category_id, 'uwGuidelinesPast')) {
                $uwGuidelinesPast[] = $form;
            }
            if(str_contains($form->category_id, 'uwTools')) {
                $uwTools[] = $form;
            }
            if(str_contains($form->category_id, 'uwVetting')) {
                $uwVetting[] = $form;
            }
            // if(str_contains($form->category_id, 'uwVideos')) {
            //     $uwVideos[] = $form;
            // }
            //-------------
            //Jr Processor
            //-------------
            if(str_contains($form->category_id, 'jrProcessorForms')) {
                $jrProcessorForms[] = $form;
            }
            if(str_contains($form->category_id, 'jrProcessorVendorContacts')) {
                $jrProcessorVendorContacts[] = $form;
            }
            //-------------
            //Processor
            //-------------
            if(str_contains($form->category_id, 'processorForms')) {
                $processorForms[] = $form;
            }
            if(str_contains($form->category_id, 'processorTools')) {
                $processorTools[] = $form;
            }
            if(str_contains($form->category_id, 'processorVendorContacts')) {
                $processorVendorContacts[] = $form;
            }
            //-------------
            //NDA
            //-------------
            if(str_contains($form->category_id, 'nda')) {
                $nda[] = $form;
            }
            //-------------
            //Concierge Services
            //-------------
            if(str_contains($form->category_id, 'conciergeProcessing')) {
                $conciergeProcessing[] = $form;
            }
            if(str_contains($form->category_id, 'conciergeVendorContacts')) {
                $conciergeVendorContacts[] = $form;
            }
            if(str_contains($form->category_id, 'conciergeJobAides')) {
                $conciergeJobAides[] = $form;
            }
            if(str_contains($form->category_id, 'conciergeTisp')) {
                $conciergeTisp[] = $form;
            }
            if(str_contains($form->category_id, 'conciergeTisp')) {
                $conciergeTisp[] = $form;
            }
            if(str_contains($form->category_id, 'conciergeVetting')) {
                $conciergeVetting[] = $form;
            }
            //-------------
            //Fix And Flip
            //-------------
            if(str_contains($form->category_id, 'fixAndFlipSystems')) {
                $fixAndFlipSystems[] = $form;
            }
            if(str_contains($form->category_id, 'fixAndFlipInternalForms')) {
                $fixAndFlipInternalForms[] = $form;
            }
            if(str_contains($form->category_id, 'fixAndFlipVetting')) {
                $fixAndFlipVetting[] = $form;
            }
            if(str_contains($form->category_id, 'fixAndFlipIntake')) {
                $fixAndFlipIntake[] = $form;
            }
            if(str_contains($form->category_id, 'fixAndFlipUw')) {
                $fixAndFlipUw[] = $form;
            }
            if(str_contains($form->category_id, 'fixAndFlipFunding')) {
                $fixAndFlipFunding[] = $form;
            }
            if(str_contains($form->category_id, 'fixAndFlipWelcomeForms')) {
                $fixAndFlipWelcomeForms[] = $form;
            }
            //-------------
            //Small Balance Multifamily
            //-------------
            if(str_contains($form->category_id, 'sbmfSystems')) {
                $sbmfSystems[] = $form;
            }
            if(str_contains($form->category_id, 'sbmfInternalForms')) {
                $sbmfInternalForms[] = $form;
            }
            if(str_contains($form->category_id, 'sbmfGuidelines')) {
                $sbmfGuidelines[] = $form;
            }
            //-------------
            //Jr Underwriter
            //-------------
            if(str_contains($form->category_id, 'jrUW')) {
                $jrUW[] = $form;
            }
            //-------------
            //Pre-Screen
            //-------------
            if(str_contains($form->category_id, 'prescreen')) {
                $prescreen[] = $form;
            }
            //-------------
            //Vetting Clerk
            //-------------
            if(str_contains($form->category_id, 'vettingClerk')) {
                $vettingClerk[] = $form;
            }
            //-------------
            //Post Close-Funding
            //-------------
            if(str_contains($form->category_id, 'postCloseFunding')) {
                $postCloseFunding[] = $form;
            }
            //-------------
            //Post Close-Shipping
            //-------------
            if(str_contains($form->category_id, 'sbmfGuidelines')) {
                $sbmfGuidelines[] = $form;
            }
        }

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
            // 'fundingAssistantForms'          => $fundingAssistantForms,
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
            'uwGuidelinesPast' => $uwGuidelinesPast,
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
            'fixAndFlipWelcomeForms'    => $fixAndFlipWelcomeForms,
            'sbmfSystems'           => $sbmfSystems,
            'sbmfInternalForms'     => $sbmfInternalForms,
            'sbmfGuidelines'        => $sbmfGuidelines,
            'jrUW'                  => $jrUW,
            'prescreen'             => $prescreen,
            'vettingClerk'          => $vettingClerk,
            'postCloseFunding'      => $postCloseFunding,
            'postCloseShipping'     => $postCloseShipping,
        ]);
    }
}
