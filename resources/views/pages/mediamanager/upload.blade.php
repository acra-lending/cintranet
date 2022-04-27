@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">File Manager</h1>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <style>

        .card-danger:not(.card-outline) .card-header {
        background: var(--linear-gradient);
        }

        .progress { position:relative; width:100%; background-color: var(--gray-color); height: 20px; }
        .bar { background-color: var(--primary-color); width:0%; height:40px; }
        .percent { position:absolute; display:inline-block; left:50%; color: #fff;}

        </style>
        <!-- Main content -->
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h4 class="card-title">Upload File(s)</h4>
                        </div>

                        <div class="card-body">

                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Select</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="card-body">
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                            <div class="card-body">
                                                {{ Form::open(['action' => 'UploadController@upload', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
                                                <div class="input-group">
                                                    <div class="input-group">
                                                        <div class="form-group">
                                                            {{ Form::label('category_id[]', 'Category (hold ctrl for multiple)')}}
                                                            {{ Form::select('category_id[]', [
                                                                'Operations' => [
                                                                    'deptContacts'  => 'Department Contacts',
                                                                    'salesDeptContacts'  => 'Sales Department Contacts',
                                                                    'Empower' => [
                                                                        'empowerBrokerPortal'           => 'Broker Portal',
                                                                        'empowerLoanSetUp'              => 'Loan Set Up',
                                                                        'empowerDisclosures'            => 'Disclosures',
                                                                        'empowerAccountManagement'      => 'Account Management',
                                                                        'empowerUnderwriting'           => 'Underwriting',
                                                                        'empowerValuationSpecialist'    => 'Valuation Specialist',
                                                                        'empowerClosingFunding'         => 'Closing/Funding',
                                                                        'empowerPostClosing'            => 'Post Closing',
                                                                        'empowerShipping'               => 'Shipping',
                                                                    ],
                                                                    'Compliance' => [
                                                                        'disclosure'        => 'Disclosure',
                                                                        'important'         => 'Important',
                                                                        'fundingStates'     => 'Funding States',
                                                                        'policies'          => 'Policies'
                                                                    ],
                                                                    'Funding' => [
                                                                        'fundingCompliance' => 'Compliance',
                                                                        'fundingForms'      => 'Forms',
                                                                        'fundingProcesses'  => 'Processes',
                                                                        'fundingSystems'    => 'Systems',
                                                                        'fundingTisp'       => 'Taxes/Insurance/Subject Property',
                                                                        'fundingVetting'    => 'Agent Verification',
                                                                            'Doc Drawer' => [
                                                                                'docDrawerCompliance'   => 'Compliance',
                                                                                'docDrawerForms'        => 'Forms',
                                                                                'docDrawerProcesses'    => 'Processes',
                                                                                'docDrawerSystems'      => 'Systems',
                                                                                'docDrawerTisp'         => 'Taxes/Insurance/Subject Property',
                                                                                'docDrawerVetting'      => 'Agent Verification',
                                                                            ],
                                                                            'Funder' => [
                                                                                'funderCompliance'   => 'Compliance',
                                                                                'funderEscrow'       => 'Escrow Holdback',
                                                                                'funderForms'        => 'Forms',
                                                                                'funderPOA'          => 'Power of Attorney',
                                                                                'funderProcesses'    => 'Processes',
                                                                                'funderSystems'      => 'Systems',
                                                                                'funderTisp'         => 'Taxes/Insurance/Subject Property',
                                                                                'funderVetting'      => 'Agent Verification',
                                                                            ],
                                                                            'Funding Forms' => [
                                                                                'fundingFormsCompliance'   => 'Compliance',
                                                                                'fundingFormsForms'        => 'Forms',
                                                                                'fundingFormsProcesses'    => 'Processes',
                                                                                'fundingFormsSystems'      => 'Systems',
                                                                                'fundingFormsTisp'         => 'Taxes/Insurance/Subject Property',
                                                                                'fundingFormsVetting'      => 'Agent Verification',
                                                                            ],
                                                                            'Funding Assistant' => [
                                                                                'fundingAssistantCompliance'   => 'Compliance',
                                                                                'fundingAssistantForms'        => 'Forms',
                                                                                'fundingAssistantProcesses'    => 'Processes',
                                                                                'fundingAssistantSystems'      => 'Systems',
                                                                                'fundingAssistantTisp'         => 'Taxes/Insurance/Subject Property',
                                                                                'fundingAssistantVetting'      => 'Agent Verification',
                                                                            ]
                                                                    ],
                                                                    'Loan Set Up' => [
                                                                        'lsuAttachments'    => 'Attachments to Send with Welcome Letter',    
                                                                        'lsuCompliance'     => 'Compliance',
                                                                        'lsuForms'          => 'Forms',
                                                                        'lsuFloodCerts'     => 'Flood Certs',
                                                                        'lsuProcesses'      => 'Processes',
                                                                        'lsuSsaAnd4506T'    => 'SSA-89 And 4506T',
                                                                        'lsuSystems'        => 'Systems',
                                                                        'lsuValuation'      => 'Valuation Delivery',
                                                                        'lsuVetting'        => 'Agent Verification',
                                                                    ],
                                                                    'Transaction Manager' => [
                                                                        'tmCompliance'      => 'Compliance',
                                                                        'tmFormsForBrokers' => 'Forms to Send to Brokers',
                                                                        'tmProgramGuides'   => 'Program Guides',
                                                                        'tmInternalForms'   => 'Internal Forms',
                                                                        'tmProcesses'       => 'Processes',
                                                                        'tmSystems'         => 'Systems',
                                                                        'tmTools'           => 'TM Tools',
                                                                        'tmTisp'            => 'Taxes/Insurance/Subject Property',
                                                                        'tmVetting'         => 'Agent Verification',
                                                                        
                                                                    ],
                                                                    'Underwriting' => [
                                                                        'uwCompliance'          => 'Compliance',
                                                                        'uwProcesses'           => 'Processes',
                                                                        'uwProcessesNew'        => 'New Submission Review Process',
                                                                        'uwProcessesCondition'  => 'Condition Review Process',
                                                                        'uwSystems'             => 'Systems',
                                                                        'uwTisp'                => 'Taxes/Insurance/Subject Property',
                                                                        'uwGuidelines'          => 'Underwriting Guidelines',
                                                                        'uwGuidelinesPast'      => 'Old Underwriting Guidelines',
                                                                        'uwTools'               => 'UW Tools',
                                                                        'uwVetting'             => 'Agent Verification',
                                                                        'uwVideos'              => 'Videos',
                                                                    ],
                                                                    'Jr Processor' => [
                                                                        'jrProcessorForms'      => 'Internal Forms',
                                                                    ],
                                                                    'Jr Underwriter' => [
                                                                        'jrUW'                => 'Jr Underwriter',
                                                                    ],
                                                                    'Pre-Screen' => [
                                                                        'prescreen'         => 'Pre-Screen',
                                                                    ],
                                                                    'Post Close-Funding' => [
                                                                        'postCloseFunding'  => 'Post Close-Funding',
                                                                    ],
                                                                    'Post Close-Shipping' => [
                                                                        'postCloseShipping' => 'Post Close-Shipping',
                                                                    ],
                                                                    'Processor' => [
                                                                        'processorForms'      => 'Internal Forms',
                                                                        'processorTools'      => 'Processor Tools',
                                                                    ],
                                                                    'NDA' => [
                                                                        'nda'      => 'NDA',
                                                                    ],
                                                                    'Fix & Flip' => [
                                                                        'fixAndFlipSystems'         => 'Systems',
                                                                        'fixAndFlipInternalForms'   => 'Internal Forms',
                                                                        'fixAndFlipVetting'         => 'Agent Verification',
                                                                        'fixAndFlipIntake'          => 'Loan Set Up',
                                                                        'fixAndFlipProcessing'      => 'Processing',
                                                                        'fixAndFlipUw'              => 'Underwriting',
                                                                        'fixAndFlipFunding'         => 'Closing/Funding',
                                                                        'fixAndFlipWelcomeForms'    => 'Welcome Letter & Required Forms',
                                                                    ],
                                                                    'Small Balance Multifamily' => [
                                                                        'sbmfSystems'         => 'Systems',
                                                                        'sbmfInternalForms'   => 'Internal Forms',
                                                                        'sbmfGuidelines'      => 'Guidelines',
                                                                    ]
                                                                ],
                                                                'Ratesheets AE' => [
                                                                    'Wholesale' => [
                                                                        'wsOmbsvoeAE'     => 'OMBS & VOE', 
                                                                        'ws3mbsAE'        => '3-Month Bank Statement', 
                                                                        'wsDscrAE'        => 'Business Purpose / DSCR', 
                                                                        'wsNonprimeAE'    => 'Non-Prime Wholesale', 
                                                                        'wsJumboPrimeAE'    => 'Jumbo Prime Wholesale', 
                                                                        'wsOdfAE'         => 'Outside Dodd-Frank', 
                                                                        'wsOdfPlusAE'     => 'Outside Dodd-Frank Plus'
                                                                    ],
                                                                    'Fix & Flip' => [
                                                                        'smallBalanceMultifamily'    => 'Small Balance Multifamily', 
                                                                    ],
                                                                    'Correspondent' => [
                                                                        'PDF' => [
                                                                            'corrOmbsvoePdf'    => 'OMBS & VOE (PDF)', 
                                                                            'corr3mbsPdf'       => '3-Month Bank Statement (PDF)', 
                                                                            'corrDscrPdf'       => 'Business Purpose / DSCR (PDF)', 
                                                                            'corrNonprimePdf'   => 'Non-Prime Correspondent (PDF)', 
                                                                            'corrJumboPrimePdf'   => 'Jumbo Prime Correspondent(PDF)', 
                                                                            'corrOdfPdf'        => 'Outside Dodd-Frank (PDF)', 
                                                                            'corrOdfPlusPdf'    => 'Outside Dodd-Frank Plus (PDF)',
                                                                        ],
                                                                        'Excel' => [
                                                                            'corrOmbsvoeXlsx'   => 'OMBS & VOE (Excel)',
                                                                            'corr3mbsXlsx'      => '3-Month Bank Statement (Excel)',
                                                                            'corrDscrXlsx'      => 'Business Purpose / DSCR (Excel)',
                                                                            'corrNonprimeXlsx'  => 'Non-Prime Correspondent (Excel)',
                                                                            'corrJumboPrimeXlsx'  => 'Jumbo Prime Correspondent (Excel)',
                                                                            'corrOdfXlsx'       => 'Outside Dodd-Frank (Excel)', 
                                                                            'corrOdfPlusXlsx'   => 'Outside Dodd-Frank Plus (Excel)'
                                                                        ]
                                                                    ]                                                
                                                                ],
                                                                'Sales' => [
                                                                    'Wholesale' => [
                                                                        'wholesaleDocs'     => 'Documents',
                                                                    ],
                                                                    'Correspondent' => [
                                                                        'corrDocs'              => 'Documents',
                                                                        'corrForms'             => 'Forms',
                                                                        'corrJobaides'          => 'Job Aides',
                                                                        // 'flyersForBrokers'  => 'Flyers',
                                                                        // 'corrIncentive'     => 'Incentive Program',
                                                                        // 'social'            => 'LinkedIn/Social Posting Images',
                                                                        // 'corrPrograms'      => 'Programs & Guidelines'
                                                                    ],
                                                                    'Fix & Flip' => [
                                                                        'fixAndFlipSystems'         => 'Systems',
                                                                        'fixAndFlipDocs'            => 'Documents',
                                                                        'fixAndFlipInternalForms'   => 'Internal Forms',
                                                                        'fixAndFlipProcessing'      => 'Processing',
                                                                        'fixAndFlipUw'              => 'Underwriting',
                                                                        'fixAndFlipFunding'         => 'Closing/Funding',
                                                                        'fixAndFlipWelcomeForms'    => 'Welcome Letter & Required Forms',
                                                                    ],
                                                                    'Sales Tool Kit' => [
                                                                        'salesTools'        => 'Sales Tool Kit',
                                                                        'salesVideos'       => 'Sales Videos',
                                                                    ],
                                                                    'Flyers & Programs' => [
                                                                        'aboutCsc'      => 'About CSC',
                                                                        'AEFlyers'      => 'AE Flyers',
                                                                        'automation'    => 'Automation',
                                                                        'cscPrograms'   => 'CSC Programs',
                                                                        'social'        => 'LinkedIn/Social Posting Images',
                                                                        'standards'     => 'Standard Flyers',
                                                                        'vertFlyers'    => 'Vertical Integration Flyers'
                                                                        // 'sbmfFlyers'    => 'Small Balance Multifamily Flyers'
                                                                    ],
                                                                    'Flyers For Brokers' => [
                                                                        'flyersForBrokers'  => 'Flyers'
                                                                    ],
                                                                    'General Forms' => [
                                                                        'generalForms'  => 'Forms'
                                                                    ],
                                                                    'Small Balance Multifamily' => [
                                                                        'sbmfForms'  => 'Forms'
                                                                    ],
                                                                    'Training Material' => [
                                                                        'trainingAe'        => 'Account Executives',
                                                                        'trainingOps'       => 'OPS Meetings',
                                                                        'trainingSystems'   => 'Systems',
                                                                        'trainingVetting'   => 'Vetting',
                                                                        'trainingVideos'    => 'Videos'
                                                                    ],
                                                                    'Admin' => [
                                                                        'adminForms'  => 'Forms'
                                                                    ],
                                                                    'Marketing' => [
                                                                        'marketingForms'        => 'Marketing Forms',
                                                                        'marketingMaterials'    => 'Marketing Materials',
                                                                        'marketingEmailSignaturesAndResources'    => 'Email Signatures And Resources',
                                                                    ]
                                                                ],
                                                                'Consumer Direct' => [
                                                                    'References' => [
                                                                        'retailDocs'            => 'Documents',
                                                                        'retailMLO'             => 'MLO Licenses',
                                                                    ],
                                                                    'Marketing' => [
                                                                        'retailEmailTemplates'  => 'Email Templates',
                                                                        'retailSocialMedia'    => 'Social Media',
                                                                    ],
                                                                    'Jr Processor' => [
                                                                        'retailJrProcessorForms'    => 'Forms',
                                                                        'retailJrProcessorChecklists'    => 'Checklists',
                                                                    ],
                                                                    'Processor' => [
                                                                        'retailProcessorForms'    => 'Forms',
                                                                        'retailProcessorChecklists'    => 'Checklists',
                                                                    ],
                                                                    'Loan Officer' => [
                                                                        'retailLoanOfficerForms'    => 'Forms',
                                                                        'retailLoanOfficerChecklists'    => 'Checklists',
                                                                        'retailLoanOfficerTraining'    => 'Training',
                                                                    ]
                                                                ],
                                                                'Servicing' => [
                                                                    'callScripts'           => 'Call Scripts',
                                                                    'watchlist'             => 'CSC Watchlist',
                                                                    'servicingDocs'         => 'Documents',
                                                                    'servicingForeclosure'  => 'Foreclosure'
                                                                ],
                                                                'Human Resources' => [
                                                                    '401k' => [
                                                                        'hr401k'    => '401(k) Summary Booklet',
                                                                    ],
                                                                    'Documents' => [
                                                                        'hrPolicies'     => 'Company Policies',
                                                                    ],
                                                                    'Schedules & Forms' => [
                                                                        'hrSchedules'           => 'Schedules',
                                                                        'hrSuggestions'         => 'Suggestions and Referrals',
                                                                        'hrNewHire'             => 'New Hire Forms and Notices',
                                                                        'hrPerformance'         => 'Performance',
                                                                        'hrHiringProcess'       => 'Hiring Process',
                                                                        'hrStateAndFedTaxForms' => 'State and Federal Tax Forms',
                                                                        'hrHealthTopics'        => 'Health Topics and Suggestions',
                                                                        'hrManagerTools'        => 'Manager Tools',
                                                                        'hrBenefits'            => 'Benefits',
                                                                    ],
                                                                    'Expense Reporting' => [
                                                                        'hrExpenseReporting'    => 'Concur Expense Report Training',
                                                                        'hrExpenseGuide'        => 'Paylocity Expense Report',
                                                                        'hrExpenseGuideMobile'  => 'Paylocity Expense Report Mobile',
                                                                        'hrExpenseCellInternet' => 'Paylocity Cell Phone and Internet Reimbursement',
                                                                    ],
                                                                    'Health Plan' => [
                                                                        'hrHealthPlanDocs'      => 'Health Plan Documents',
                                                                    ],
                                                                    'Paylocity' => [
                                                                        'hrPaylocity'           => 'Paylocity',
                                                                        'hrHowTo'               => 'How To\'s',
                                                                    ],
                                                                    'Recruitment' => [
                                                                        'hrSocialMedia'         => 'Social Media',
                                                                        'hrFlyers'              => 'Flyers',
                                                                        'hrVideos'              => 'Videos',
                                                                    ],
                                                                    'State Workplace Posters' => [
                                                                        'federal'       => 'Federal',
                                                                        'alabama'       => 'Alabama',
                                                                        'arizona'       => 'Arizona',
                                                                        'california'    => 'California',
                                                                        'colorado'      => 'Colorado',
                                                                        'delaware'      => 'Delaware',
                                                                        'florida'       => 'Florida',
                                                                        'georgia'       => 'Georgia',
                                                                        'idaho'         => 'Idaho',
                                                                        'illinois'      => 'Illinois',
                                                                        'indiana'       => 'Indiana',
                                                                        'kentucky'      => 'Kentucky',
                                                                        'louisiana'     => 'Louisiana',
                                                                        'maryland'      => 'Maryland',
                                                                        'massachusetts' => 'Massachusetts',
                                                                        'minnesota'     => 'Minnesota',
                                                                        'nevada'        => 'Nevada',
                                                                        'newJersey'     => 'New Jersey',
                                                                        'northCarolina' => 'North Carolina',
                                                                        'oregon'        => 'Oregon',
                                                                        'pennsylvania'  => 'Pennsylvania',
                                                                        'southCarolina' => 'South Carolina',
                                                                        'tennessee'     => 'Tennessee',
                                                                        'texas'         => 'Texas',
                                                                        'utah'          => 'Utah',
                                                                        'virginia'      => 'Virginia',
                                                                        'washington'    => 'Washington',
                                                                        'washingtonDc'  => 'Washington D.C.',
                                                                        'wisconsin'     => 'Wisconsin',
                                                                    ]
                                                                ],
                                                                'IT Dept' => [
                                                                    'itDocs' => 'Documents',
                                                                ],
                                                                'Legal' => [
                                                                    'legalDocs' => 'Documents',
                                                                ],
                                                                'Learning & Development' => [
                                                                    'learning' => 'Learning',
                                                                    'Guides' => [
                                                                        'generalGuides'     => 'General',
                                                                        'operationGuides'   => 'Operations',
                                                                        'servicingGuides'   => 'Servicing',
                                                                        'jumboPrimeGuides'  => 'Jumbo Prime',
                                                                    ]
                                                                ]
                                                        ], null, ['multiple' => 'multiple', 'size' => '15', 'placeholder' => 'Pick a category', 'style' => 'width:90%']) }}
                                                        </div>
                                                    </div>
                                                    <div class="input-group">
                                                        <div class="form-group">
                                                            {{ Form::file('file[]', array('multiple' => true, 'accept'=> 'msg,doc,docx,ppt,pptx,xls,xlsx,xls,pdf,jpg,jpeg,bmp,png,gif,eml')) }}
                                                        </div>
                                                    </div>
                                                </div>
                                                {{ Form::submit('Submit', ['class' => 'btn btn-danger']) }}
                                                <div class="progress mt-3" hidden>
                                                    <div class="bar"></div>
                                                    <div class="percent">0%</div>
                                                </div>
                                                <div class="complete"></div>
                                            {{ Form::close() }}
                                            </div>
                                            <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                            </div>
                            </div>
                    
                        </div>
                    </div>
                </div>
                </div>
        </section>
        </div>
  </div>
  @push('includes.scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
  <script type="text/javascript">
    var SITEURL = "{{URL('/mediamanager')}}";
    $(function() {
        $(document).ready(function()
        {
            // $('.progress').hide();
            var bar = $('.bar');
            var percent = $('.percent');
              $('form').ajaxForm({
                beforeSend: function() {
                    var percentVal = '0%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                },
                uploadProgress: function(event, position, total, percentComplete) {
                    $('.progress').removeAttr('hidden');
                    var percentVal = percentComplete + '%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                    $('.complete').html('Uploading');
                },
                complete: function(data) {
                    $('.complete').html(data.responseJSON.success);
                    
                }
              });
        }); 
     });
    </script>
    @endpush
@stop