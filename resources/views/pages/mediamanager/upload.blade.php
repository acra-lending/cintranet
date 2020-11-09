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
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="/mediamanager/upload">File Manager</a></li>
                <li class="breadcrumb-item">Upload</a></li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <style>

        .card-danger:not(.card-outline) .card-header {
        background: linear-gradient(138deg, rgba(171,35,40,1) 0%, rgba(52,58,64,1) 45%);
        }

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
                                {{-- <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Operations</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Human Resources</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Servicing</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Resources</a> --}}
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
                                                                        'fundingVetting'    => 'Vetting',
                                                                            'Doc Drawer' => [
                                                                                'docDrawerCompliance'   => 'Compliance',
                                                                                'docDrawerForms'        => 'Forms',
                                                                                'docDrawerProcesses'    => 'Processes',
                                                                                'docDrawerSystems'      => 'Systems',
                                                                                'docDrawerTisp'         => 'Taxes/Insurance/Subject Property',
                                                                                'docDrawerVetting'      => 'Vetting',
                                                                            ],
                                                                            'Funder' => [
                                                                                'funderCompliance'   => 'Compliance',
                                                                                'funderEscrow'       => 'Escrow Holdback',
                                                                                'funderForms'        => 'Forms',
                                                                                'funderPOA'          => 'Power of Attorney',
                                                                                'funderProcesses'    => 'Processes',
                                                                                'funderSystems'      => 'Systems',
                                                                                'funderTisp'         => 'Taxes/Insurance/Subject Property',
                                                                                'funderVetting'      => 'Vetting',
                                                                            ],
                                                                            'Funding Forms' => [
                                                                                'fundingFormsCompliance'   => 'Compliance',
                                                                                'fundingFormsForms'        => 'Forms',
                                                                                'fundingFormsProcesses'    => 'Processes',
                                                                                'fundingFormsSystems'      => 'Systems',
                                                                                'fundingFormsTisp'         => 'Taxes/Insurance/Subject Property',
                                                                                'fundingFormsVetting'      => 'Vetting',
                                                                            ],
                                                                            'Funding Assistant' => [
                                                                                'fundingAssistantCompliance'   => 'Compliance',
                                                                                'fundingAssistantForms'        => 'Forms',
                                                                                'fundingAssistantProcesses'    => 'Processes',
                                                                                'fundingAssistantSystems'      => 'Systems',
                                                                                'fundingAssistantTisp'         => 'Taxes/Insurance/Subject Property',
                                                                                'fundingAssistantVetting'      => 'Vetting',
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
                                                                        'lsuVetting'        => 'Vetting',
                                                                    ],
                                                                    'Transaction Manager' => [
                                                                        'tmCompliance'      => 'Compliance',
                                                                        'tmFormsForBrokers' => 'Forms to Send to Brokers',
                                                                        'tmProgramGuides'   => 'Program Guides',
                                                                        'tmInternalForms'   => 'Internal Forms',
                                                                        'tmProcesses'       => 'Processes',
                                                                        'tmSystems'         => 'Systems',
                                                                        'tmTisp'            => 'Taxes/Insurance/Subject Property',
                                                                        'tmVetting'         => 'Vetting',
                                                                        
                                                                    ],
                                                                    'Underwriting' => [
                                                                        'uwCompliance'      => 'Compliance',
                                                                        'uwProcesses'       => 'Processes',
                                                                        'uwSystems'         => 'Systems',
                                                                        'uwTisp'            => 'Taxes/Insurance/Subject Property',
                                                                        'uwGuidelines'      => 'Underwriting Guidelines',
                                                                        'uwTools'           => 'UW Tools',
                                                                        'uwVetting'         => 'Vetting',
                                                                        'uwVideos'          => 'Videos',
                                                                    ]
                                                                ],
                                                                'Ratesheets AE' => [
                                                                    'Wholesale' => [
                                                                        'wsOmbsvoeAE'     => 'OMBS & VOE', 
                                                                        'ws3mbsAE'        => '3-Month Bank Statement', 
                                                                        'wsNonprimeAE'    => 'Non-Prime Wholesale', 
                                                                        'wsOdfAE'         => 'Outside Dodd-Frank', 
                                                                        'wsOdfPlusAE'     => 'Outside Dodd-Frank Plus'
                                                                    ],
                                                                    'Correspondent' => [
                                                                        'PDF' => [
                                                                            'corrOmbsvoePdf'    => 'OMBS & VOE (PDF)', 
                                                                            'corr3mbsPdf'       => '3-Month Bank Statement (PDF)', 
                                                                            'corrNonprimePdf'   => 'Non-Prime Wholesale (PDF)', 
                                                                            'corrOdfPdf'        => 'Outside Dodd-Frank (PDF)', 
                                                                            'corrOdfPlusPdf'    => 'Outside Dodd-Frank Plus (PDF)',
                                                                        ],
                                                                        'Excel' => [
                                                                            'corrOmbsvoeXlsx'   => 'OMBS & VOE (Excel)',
                                                                            'corr3mbsXlsx'      => '3-Month Bank Statement (Excel)',
                                                                            'corrNonprimeXlsx'  => 'Non-Prime Wholesale (Excel)',
                                                                            'corrOdfXlsx'       => 'Outside Dodd-Frank (Excel)', 
                                                                            'corrOdfPlusXlsx'   => 'Outside Dodd-Frank Plus (Excel)'
                                                                        ]
                                                                    ]                                                
                                                                ],
                                                                'Sales' => [
                                                                    'Wholesale' => [
                                                                        'wholesaleDocs'     => 'Documents',
                                                                    ],
                                                                    'Correspondents' => [
                                                                        'corrDocs'          => 'Documents',
                                                                        // 'flyersForBrokers'  => 'Flyers',
                                                                        // 'corrIncentive'     => 'Incentive Program',
                                                                        // 'social'            => 'LinkedIn/Social Posting Images',
                                                                        // 'corrPrograms'      => 'Programs & Guidelines'
                                                                    ],
                                                                    'Flyers & Programs' => [
                                                                        'aboutCsc'      => 'About CSC',
                                                                        'AEFlyers'      => 'AE Flyers',
                                                                        'automation'    => 'Automation',
                                                                        'cscPrograms'   => 'CSC Programs',
                                                                        'social'        => 'LinkedIn/Social Posting Images',
                                                                        'standards'     => 'Standard Flyers',
                                                                        'vertFlyers'    => 'Vertical Integration Flyer'
                                                                    ],
                                                                    'Retail' => [
                                                                        'retailDocs'    => 'Documents',
                                                                        'retailMLO'     => 'MLO Licenses'
                                                                    ],
                                                                    'Flyers For Brokers' => [
                                                                        'flyersForBrokers'  => 'Flyers'
                                                                    ],
                                                                    'General Forms' => [
                                                                        'generalForms'  => 'Forms'
                                                                    ],
                                                                    'Training Material' => [
                                                                        'trainingAe'        => 'Account Executives',
                                                                        'trainingOps'       => 'OPS Meetings',
                                                                        'trainingSystems'   => 'Systems',
                                                                        'trainingVetting'   => 'Vetting',
                                                                        'trainingVideos'    => 'Videos'
                                                                    ],
                                                                    'Marketing' => [
                                                                        'marketingForms'        => 'Marketing Forms',
                                                                        'marketingMaterials'    => 'Marketing Materials',
                                                                        'salesTools'            => 'Sales Tool'
                                                                    ]
                                                                ],
                                                                'Servicing' => [
                                                                    'callScripts'           => 'Call Scripts',
                                                                    'watchlist'             => 'CSC Watchlist',
                                                                    'servicingDocs'         => 'Documents',
                                                                    'servicingForeclosure'  => 'Foreclosure'
                                                                ],
                                                                'Human Resources' => [
                                                                    'hrPaylocity'           => 'Paylocity',
                                                                    'hrSchedules'           => 'Schedules',
                                                                    'hrSuggestions'         => 'Suggestions and Referrals',
                                                                    'hrNewHire'             => 'New Hire Forms and Notices',
                                                                    'hrStateAndFedTaxForms' => 'State and Federal Tax Forms',
                                                                    'hrHealthTopics'        => 'Health Topics and Suggestions',
                                                                    'hrManagerTools'        => 'Manager Tools',
                                                                    'hrBenefits'            => 'Benefits',
                                                                    'hrHealthPlanDocs'      => 'Health Plan Documents',
                                                                    'hr401k'                => '401(k) Summary Booklet',
                                                                    
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
                                                                'Learning & Development' => [
                                                                    'learning' => 'Learning',
                                                                    'Guides' => [
                                                                        'generalGuides'   => 'General',
                                                                        'operationGuides' => 'Operations',
                                                                        'servicingGuides' => 'Servicing'
                                                                    ]
                                                                ]
                                                        ], null, ['multiple' => 'multiple', 'size' => '15', 'placeholder' => 'Pick a category', 'style' => 'width:90%']) }}
                                                        </div>
                                                    </div>
                                                    <div class="input-group">
                                                        <div class="form-group">
                                                            {{ Form::file('file[]', array('multiple' => true, 'accept'=> 'doc,docx,ppt,pptx,xls,xlsx,xls,pdf,jpeg,bmp,png,gif')) }}
                                                        </div>
                                                    </div>
                                                </div>
                                                {{ Form::submit('Submit', ['class' => 'btn btn-danger']) }}
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
  <!-- /.col -->
<!-- /.control-sidebar -->
<!-- ./wrapper -->
@stop





                            {{-- <div class="input-group">
                            <form method="POST" action="/uploads" id="upload" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">File Name</label>
                                    <input type="text" class="form-control" id="title" placeholder="ie. csc-ratematrix-1stTDs-ODF">
                                    </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile" name="file[]" multiple>
                                    <label class="custom-file-label" for="upload">Choose File</label>
                                </div> 
                                <div class="input-group-append pt-2">
                                    <button class="btn btn-danger" type="submit">Upload</button>
                                </div>                               
                            </form>
                            <div class="float-left">
                                <div class="container pl-5">
                                    <div>
                                        <ul id="selectedFiles" class="list-group">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            </div> --}}