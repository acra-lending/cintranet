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
                'lsuJobAides'       => 'Job Aides',
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
            'Valuation Waterfall' => [
                'valuations'      => 'Valuation Waterfall',
            ],
            'Jr Processor' => [
                'jrProcessorForms'      => 'Internal Forms',
                'jrProcessorVendorContacts'      => 'Vendor Contacts',
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
                'processorVendorContacts'      => 'Processor Vendor Contacts',
            ],
            'NDA' => [
                'nda'      => 'NDA',
            ],
            'ILD' => [
                'fixAndFlipSystems'         => 'Systems',
                'fixAndFlipInternalForms'   => 'Internal Forms',
                'fixAndFlipVetting'         => 'Agent Verification',
                'fixAndFlipIntake'          => 'Loan Set Up',
                'fixAndFlipProcessing'      => 'Processing',
                'fixAndFlipUw'              => 'Underwriting',
                'fixAndFlipFunding'         => 'Closing/Funding',
                'fixAndFlipVendorContacts'  => 'Vendor Contacts',
                // 'fixAndFlipWelcomeForms'    => 'Welcome Letter & Required Forms',
            ],
            'Small Balance Multifamily' => [
                'sbmfSystems'         => 'Systems',
                'sbmfInternalForms'   => 'Internal Forms',
                'sbmfGuidelines'      => 'Guidelines',
            ],
            'Concierge Services' => [
                'conciergeProcessing'         => 'Processing Forms',
                'conciergeVendorContacts'     => 'Vendor Contacts',
                'conciergeJobAides'           => 'Job Aids',
                'conciergeTisp'               => 'Taxes/Insurance/Subject Property',
                'conciergeVetting'            => 'Agent Verification',
            ]
        ],
        'Ratesheets AE' => [
            'Wholesale' => [
                'wsOmbsvoeAE'     => 'OMBS & VOE', 
                'ws3mbsAE'        => '3-Month Bank Statement', 
                'wsDscrAE'        => 'Business Purpose / DSCR', 
                'nonOwnerOccu'    => 'Non-Owner Occupied',
                'wsItinAE'        => 'ITIN', 
                'wsNonprimeAE'    => 'Non-Prime Wholesale', 
                'wsJumboPrimeAE'  => 'Jumbo Prime Wholesale', 
                'wsOdfAE'         => 'Outside Dodd-Frank', 
                'wsOdfPlusAE'     => 'Outside Dodd-Frank Plus'
            ],
            'ILD' => [
                'ffMain'                     => 'Main sheet',
                'ffDscr'                     => 'DSCR',
                'smallBalanceMultifamily'    => 'Small Balance Multifamily', 
                'ffSingleFamily'             => 'SFR Bridge',
                'ffMultiFamily'              => 'MF Bridge',
                'ffMultiFamilyLongTerm'      => 'MF Long Term',
                'ffNonOwnerOccu'             => 'Non Owner Occupied',
            ],
            'Correspondent' => [
                'PDF' => [
                    'corrOmbsvoePdf'    => 'OMBS & VOE (PDF)', 
                    'corr3mbsPdf'       => '3-Month Bank Statement (PDF)', 
                    'corrDscrPdf'       => 'Business Purpose / DSCR (PDF)', 
                    'corrItinPdf'       => 'ITIN (PDF)', 
                    'corrNonprimePdf'   => 'Non-Prime Correspondent (PDF)', 
                    'corrJumboPrimePdf' => 'Jumbo Prime Correspondent(PDF)', 
                    'corrOdfPdf'        => 'Outside Dodd-Frank (PDF)', 
                    'corrOdfPlusPdf'    => 'Outside Dodd-Frank Plus (PDF)',
                ],
                'Excel' => [
                    'corrOmbsvoeXlsx'    => 'OMBS & VOE (Excel)',
                    'corr3mbsXlsx'       => '3-Month Bank Statement (Excel)',
                    'corrDscrXlsx'       => 'Business Purpose / DSCR (Excel)',
                    'corrItinXlsx'       => 'ITIN (Excel)',
                    'corrNonocuXlsx'      => 'Non-Owner Occupied(Excel)',
                    'corrNonprimeXlsx'   => 'Non-Prime Correspondent (Excel)',
                    'corrJumboPrimeXlsx' => 'Jumbo Prime Correspondent (Excel)',
                    'corrOdfXlsx'        => 'Outside Dodd-Frank (Excel)', 
                    'corrOdfPlusXlsx'    => 'Outside Dodd-Frank Plus (Excel)'
                ]
            ]                                                
        ],
        'Marketing' => [
                'marketingForms'        => 'Marketing Forms',
                'marketingMaterials'    => 'Marketing Materials',
                'marketingEmailSignaturesAndResources'    => 'Email Signatures And Resources',
        ],
        'Sales' => [
            'Wholesale' => [
                'wholesaleDocs'     => 'Documents',
                    'Flyers & Programs' => [
                        'Flyers'  => [
                            'onescorenoscore' => 'One Score No Score',
                            'selfemp'       =>  'Self Emplyoed',
                            'only1099'      =>  '1099 Only',
                            'bankstmt'      =>  'Bank Statements',
                            'allprgms'      =>  'All Programs',
                            'atr'           =>  'ATR',
                            'busiprps'      =>  'Business Purpose',
                            'expandguid'      =>  'Expanding Guidlines',
                            'forinnat'      =>  'Foreign National',
                            'invessol'      =>  'Investment Solutions',
                            'dscrfly'      =>  'DSCR',
                            'itinfly'      =>  'ITIN',
                            'wvoefly'       =>   'WVOE',
                            'bridgefly'      =>  'Bridge',
                            'cashout'      =>  'Cashout',
                            'uniqpro'      =>  'Unique Properties',
                            'iofly'      =>  'IO',
                            'condjum'      =>  'Condotel And Jumbo',
                            'nqmniche'      =>  'NQM Niche',
                            'plpro'      =>  'P&L Programs',
                            'sbmffly'      =>  'SBMF'
                            
                        ],
                            'Social Material'  => [
                            'onescore'        =>  'One Score No Score',
                            'selfempsm'       =>  'Self Emplyoed',
                            'only1099sm'      =>  '1099 Only',
                            'bankstmtsm'      =>  'Bank Statements',
                            'allprgms'      =>  'All Programs',
                            'atrsm'           =>  'ATR',
                            'busipur'      =>  'Business Purpose',
                            'expndguidsm'      =>  'Expanding Guidlines',
                            'fornatsm'      =>  'Foreign National',
                            'invsolsm'      =>  'Investment Solutions',
                            'bridgesm'      =>  'Bridge',
                            'cashout'      =>  'Cashout',
                            'uniqprosm'      =>  'Unique Properties',
                            'condjumsm'      =>  'Condotel And Jumbo',
                            'dscrsm'      =>  'DSCR',
                            'iosm'      =>  'IO',
                            'itinsm'      =>  'ITIN',
                            'wvoesm'      =>  'WVOE',
                            'nqmnichesm'      =>  'NQM Niche',
                            'plpro'      =>  'P&L Programs',
                            'smbfsm'      =>  'SBMF',
                            'brokersm'      =>  'New Broker',
                            'fundeal'      =>  'Funded deals',
                            'specials'      =>  'Specials',
                            'others'      =>  'Others',
                            'rateupdate'      =>  'Rate Update'
                        ],
                    ],

                    // 'Flyers For Brokers' => [
                        // 'flyersForBrokers'  => 'Flyers'
                    // ],
                    'General Forms' => [
                        'generalForms'  => 'Forms'
                    ],
                    'Sales Tool Kit' => [
                        'salesTools'        => 'Sales Tool Kit',
                        'salesVideos'       => 'Sales Videos',
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
            ],
            'Correspondent' => [
                'corrDocs'              => 'Documents',
                'corrForms'             => 'Forms',
                'corrJobaides'          => 'Training References',
                // 'flyersForBrokers'  => 'Flyers',
                // 'corrIncentive'     => 'Incentive Program',
                // 'social'            => 'LinkedIn/Social Posting Images',
                // 'corrPrograms'      => 'Programs & Guidelines'
            ],
            'Fix & Flip' => [
                'Documents' => [
                    'fixAndFlipBulletins'       => 'Bulletins',
                    'fixAndFlipSystems'         => 'Systems',
                    'fixAndFlipDocs'            => 'Documents',
                    'fixAndFlipInternalForms'   => 'Internal Forms',
                    'fixAndFlipProcessing'      => 'Processing',
                    'fixAndFlipUw'              => 'Underwriting',
                    'fixAndFlipFunding'         => 'Closing/Funding',
                    'fixAndFlipWelcomeForms'    => 'Welcome Letter & Required Forms',
                    'fixAndFlipDrawForms'       => 'Draw Forms'
                ],
                'Sales Tool Kit' => [
                    'fixAndFlipFlyers'          => 'Flyers',
                ],
                
            ],
            'Small Balance Multifamily' => [
                'sbmfForms'  => 'Forms'
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
                    'retailJrProcessorEmailTemplates' => 'Email Templates',
                ],
                'Processor' => [
                    'retailProcessorForms'    => 'Forms',
                    'retailProcessorChecklists'    => 'Checklists',
                ],
                'Loan Officer' => [
                    'retailLoanOfficerForms'    => 'Forms',
                    'retailLoanOfficerChecklists'    => 'Checklists',
                    'retailLoanOfficerTraining'    => 'Training',
                ],
                'Forms' => [
                    'retailForms' => 'Forms'
                ],
                'Processes' => [
                    'retailProcessorTools' => 'Processor Tools',
                    'retailVendorContacts' => 'Vendor Contacts',
                    'retailProcessingGuides' => 'Processing Guides',
                    'retailSystemGuides' => 'System Guides',
                    'retailJrProcessingGuides' => 'Jr Processor Guides',
                    'retailJrSystemGuides' => 'Jr System Guides'
                ]

            ],
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
                'hsa'                   => 'HSA',
                'additionalInfo'        => 'Additional Information',
            ],
            'BetterVet' => [
                'better'                => 'Documents',
            ],
            'Paylocity' => [
                'hrPaylocity'           => 'Paylocity',
                'hrHowTo'               => 'How To\'s',
            ],
            'Dayforce' => [
                'hrDayforceGuides'      => 'Guides',
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
                'arkansas'      => 'Arkansas',
                'california'    => 'California',
                'colorado'      => 'Colorado',
                'connecticut'   => 'Connecticut',
                'delaware'      => 'Delaware',
                'florida'       => 'Florida',
                'georgia'       => 'Georgia',
                'hawaii'        => 'Hawaii',
                'idaho'         => 'Idaho',
                'illinois'      => 'Illinois',
                'indiana'       => 'Indiana',
                'kansas'        => 'Kansas',
                'kentucky'      => 'Kentucky',
                'louisiana'     => 'Louisiana',
                'maryland'      => 'Maryland',
                'massachusetts' => 'Massachusetts',
                'minnesota'     => 'Minnesota',
                'missouri'      => 'Missouri',
                'montana'       => 'Montana',
                'nevada'        => 'Nevada',
                'newJersey'     => 'New Jersey',
                'northCarolina' => 'North Carolina',
                'ohio'          => 'Ohio',
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