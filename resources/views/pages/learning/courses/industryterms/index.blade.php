@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Industry Terms</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/learning/courses/industryterms">Learning</a></li>
            <li class="breadcrumb-item">Courses</li>
            <li class="breadcrumb-item active">Industry Terms</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <style>
        .accordion-section .panel-default > .panel-heading {
            border: 0;
            padding: 0;
        }
        .accordion-section .panel-default .panel-title a {
            display: block;

        }
        .accordion-section .panel-default .panel-title a:after {
            font-family: 'FontAwesome';
            content: "\f106";
            color: #212529;
            float: right;
            margin-top: -2px;
        }
        .accordion-section .panel-default .panel-title a.collapsed:after {
            content: "\f107";
        }
        .accordion-section .panel-default .panel-body {
        }
    </style>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-danger card-outline">
                        <div class="card-header">
                            <h4 class="card-title">
                                <i class="fas fa-list-ul"></i>
                                 Industry Terms And Glossary
                            </h4>
                        </div>
                        <div class="card-body">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-industry-terms-tab" data-toggle="tab" href="#nav-industry-terms" role="tab" aria-controls="nav-industry-terms" aria-selected="true">Industry Terms</a>
                                <a class="nav-item nav-link" id="nav-finance-terms-tab" data-toggle="tab" href="#nav-finance-terms" role="tab" aria-controls="nav-finance-terms" aria-selected="false">Mortgage Finance Terms</a>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-industry-terms" role="tabpanel" aria-labelledby="nav-industry-terms-tab">
                                    <div class="card-body">
                                        <!-- /.card-header -->
                                        <!-- Industry Terms -->
                                        <section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
                                            <div class="container">
                                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading0">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
                                                            7/23 and 5/25 Mortgages
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>Mortgages with a one-time rate adjustment after seven years and five years respectively.</p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                                            3/1 5/1 7/1 and 10/1 ARMs
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Adjustable rate mortgages in which rate is fixed for three year five year seven year and 10-year periods respectively but may adjust annually after that.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading2">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                                            Adjustable Rate Mortgage (ARM)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A mortgage in which the interest rate is adjusted periodically based on a preselected index. Also sometimes known as a renegotiable rate variable rate mortgage or Canadian rollover mortgage.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading3">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                                            Adjustment Date
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The date that the interest rate changes on an adjustable rate mortgage (ARM).
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading4">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                                            Adjustment Interval
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            On an adjustable, rate mortgage the time between changes in the interest rate and/or
                                                            monthly payment typically one three or five years depending on the index.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading5">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                                            Adjustment Period
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The period elapsing between adjustment dates for an adjustable rate mortgage (ARM).
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading6">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="true" aria-controls="collapse6">
                                                            Amortization
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Loan payment divided into equal periodic payments calculated to pay off the debt at the
                                                            end of a fixed period including accrued interest on the outstanding balance.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading7">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="true" aria-controls="collapse7">
                                                            Amortization Term
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The length of time required to amortize the mortgage loan expressed as a number of
                                                            months. For example, 360 months is the amortization term for a 30-year fixed rate
                                                            mortgage.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading8">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="true" aria-controls="collapse8">
                                                            Annual Percentage Rate (APR)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The measurement of the full cost of a loan including interest and loan fees expressed as
                                                            a yearly percentage rate. Because all lenders apply the same rules in calculating the
                                                            annual percentage rate it provides consumers with a good basis for comparing the cost
                                                            of different loans.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading9">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="true" aria-controls="collapse9">
                                                            Appraisal
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading9">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            An estimate of the value of property made by a qualified professional called an
                                                            "appraiser.” Based on an appraiser's knowledge experience and analysis of the
                                                            property.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading10">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="true" aria-controls="collapse10">
                                                            AMC (Appraisal Management Company) 
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading10">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            An independent real estate appraisal company hired by a lender to perform valuations on potentially mortgaged properties. AMCs select state-licensed or state-qualified appraisers to valuate properties and deliver appraisal reports to lenders.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading11">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="true" aria-controls="collapse11">
                                                            Assessment
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A local tax levied against a property for a specific purpose such as a sewer or
                                                            streetlights.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading12">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="true" aria-controls="collapse12">
                                                            Asset Depletion
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading12">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A method for calculating monthly income by dividing a borrower's total assets by a set number of months. The borrower is not required to cash in their assets as they're only used to demonstrate an ability to make the mortgage and housing payments.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading13">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="true" aria-controls="collapse13">
                                                            Assignment
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading13">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The transfer of a mortgage from one person to another.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading14">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse14" aria-expanded="true" aria-controls="collapse14">
                                                            ATR in Full
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading14">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Part of the 2010 Dodd-Frank Act, the ATR rule was established to set minimum standards that a lender must use to determine that consumers have the ability to repay the mortgages they get. After January 10, 2014, lenders will be required to verify a borrower’s ability to repay a mortgage or risk legal liability if it turns out that a customer is unable to repay. The ATR rule contains eight underwriting factors that lenders will be expected to consider and verify:
                                                                <ul>
                                                                    <li>Your current or reasonably expected income or assets that you will rely on to repay the loan</li>
                                                                    <li>Your employment status, if that income is needed to repay the mortgage</li>
                                                                    <li>The monthly payment for the loan</li>
                                                                    <li>Your monthly payment on any simultaneous loans secured by the same property, such as a home equity line of credit</li>
                                                                    <li>Your monthly payments for property taxes and insurance, and certain other property-related costs, such as homeowners’ association fees</li>
                                                                    <li>Debts, alimony, and child-support obligations</li>
                                                                    <li>Credit history</li>
                                                                    <li>Your monthly debt-to-income ratio or residual income, calculated using the total of all of the mortgage and non-mortgage obligations, as a ratio of gross monthly income</li>
                                                                </ul>
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading15">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse15" aria-expanded="true" aria-controls="collapse15">
                                                            Balloon Mortgage
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading15">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A loan, which is amortized for a longer period than the term of the loan. Usually this
                                                            refers to a thirty-year amortization and a five or seven year term. At the end of the term
                                                            of the loan, the remaining outstanding principal on the loan is due. This final payment is
                                                            known as a balloon payment.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading16">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse16" aria-expanded="true" aria-controls="collapse16">
                                                            Balloon Payment
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading16">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The final lump sum paid at the maturity date of a balloon mortgage.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading266">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse266" aria-expanded="true" aria-controls="collapse266">
                                                            Bankruptcy
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse266" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading266">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A individual or entity who is insolvent; unable to pay outstanding obligations. 
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading17">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse17" aria-expanded="true" aria-controls="collapse17">
                                                            Blanket Mortgage
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading17">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A mortgage covering at least two pieces of real estate as security for the same
                                                            mortgage.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading18">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse18" aria-expanded="true" aria-controls="collapse18">
                                                            Borrower (Mortgagor)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading18">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            One who applies for and receives a loan in the form of a mortgage with the intention of
                                                            repaying the loan in full.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading19">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse19" aria-expanded="true" aria-controls="collapse19">
                                                            BPO (Broker Price Opinion)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading19">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The estimated value of a property as determined by a real estate broker or other qualified individual or firm. A broker price opinion is based on the characteristics of the property being considered.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading20">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse20" aria-expanded="true" aria-controls="collapse20">
                                                            Bridge Loan
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse20" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading20">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A second trust that is collateralized by the borrower's present home allowing the
                                                            proceeds to be used to close on a new house before the present home is sold. Also
                                                            known as "swing loan."
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading21">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse21" aria-expanded="true" aria-controls="collapse21">
                                                            Broker
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse21" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading21">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            An individual in the business of assisting in arranging funding or negotiating contracts
                                                            for a client but who does not loan the money himself. Brokers usually charge a fee or
                                                            receive a commission for their services.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading22">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse22" aria-expanded="true" aria-controls="collapse22">
                                                            Buy Down
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse22" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading22">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            When the lender and/or the homebuilder subsidized the mortgage by lowering the
                                                            interest rate during the first few years of the loan. While the payments are initially low,
                                                            they will increase when the subsidy expires.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading262">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse262" aria-expanded="true" aria-controls="collapse262">
                                                            C6 / Appraisal Condition
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse262" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading262">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The improvements have substantial damage or deferred maintenance with deficiencies or defects that are severe enough to affect the safety, soundness, or structural integrity of the improvements. The improvements are in need of substantial repairs and rehabilitation, including man or most major components.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading23">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse23" aria-expanded="true" aria-controls="collapse23">
                                                            California Per Diem
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse23" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading23">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The per diem statute generally prohibits licensees from requiring borrowers to pay interest for more than one day prior to the disbursement of loan proceeds from an escrow account on a principal obligation under a promissory note secured by a mortgage or deed of trust on real property with up to four residential dwelling units. The per diem statute provides that compliance may be evidenced by a certification executed by the licensee or by evidence in the loan file that is acceptable to the Commissioner.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading24">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse24" aria-expanded="true" aria-controls="collapse24">
                                                            Cash Flow
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse24" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading24">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The amount of cash derived over a certain period of time from an income producing
                                                            property. The cash flow should be large enough to pay the expenses of the income
                                                            producing property (mortgage payment maintenance utilities etc...).
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading269">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse269" aria-expanded="true" aria-controls="collapse269">
                                                            Cash Out Refi
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse269" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading269">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Refinance of a home with removal of the existing equity. 
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading25">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse25" aria-expanded="true" aria-controls="collapse25">
                                                            Caps (interest)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse25" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading25">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Consumer safeguards, which limit the amount of change to the interest rate for an
                                                            adjustable rate mortgage.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading26">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse26" aria-expanded="true" aria-controls="collapse26">
                                                            CD (Closing Disclosure) 
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse26" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading26">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A five-page form that provides final details about the mortgage loan you have selected. It includes the loan terms, your projected monthly payments, and how much you will pay in fees and other costs to get your mortgage (closing costs). 
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading27">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse27" aria-expanded="true" aria-controls="collapse27">
                                                            Change Frequency
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse27" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading27">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The frequency (in months) of payment and/or interest rate changes in an adjustable rate
                                                            mortgage (ARM).
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading263">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse263" aria-expanded="true" aria-controls="collapse263">
                                                            Chapter 7 Bankruptcy
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse263" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading263">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Chapter 7 of Title 11 in the U.S. bankruptcy code controls the process of asset liquidation. A bankruptcy trustee is appointed to liquidate nonexempt assets to pay creditors; after the proceeds are exhausted, the remaining debt is discharged. There are eligibility requirements to file Chapter 7, such as the debtor must have had no Chapter 7 bankruptcy discharged in the preceding eight years and the applicant must pass a means test. This process is also known as “straight” or “liquidation” bankruptcy. Chapter 7 is utilized when an individual claims inability repay any outstanding debts. 
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading264">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse264" aria-expanded="true" aria-controls="collapse264">
                                                            Chapter 11 Bankruptcy
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse264" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading264">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            This chapter of the Bankruptcy Code generally provides for reorganization, usually involving a corporation or partnership. A Chapter 11 debtor usually proposes a plan of reorganization to keep its business alive and pay creditors over time. People in business or individuals can also seek relief in Chapter 11.This bankruptcy is in which a business declares ability to repay debts at a reduced rate of interest for an extended period of time. 
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading265">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse265" aria-expanded="true" aria-controls="collapse265">
                                                            Chapter 13 Bankruptcy
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse265" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading265">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A Chapter 13 bankruptcy is also called a wage earner's plan. It enables individuals with regular income to develop a plan to repay all or part of their debts. Under this chapter, debtors propose a repayment plan to make installments to creditors over three to five years. If the debtor's current monthly income is less than the applicable state median, the plan will be for three years unless the court approves a longer period "for cause." If the debtor's current monthly income is greater than the applicable state median, the plan generally must be for five years. In no case may a plan provide for payments over a period longer than five years. Chapter 13 bankruptcy allows an individual to repay debt at a reduced rate of interest for an extended period of time.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading28">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse28" aria-expanded="true" aria-controls="collapse28">
                                                            Closing
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse28" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading28">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The meeting between the buyer seller and lender or their agents where the property and
                                                            funds legally change hands also called settlement. Closing costs usually include an
                                                            origination fee discount points appraisal fee title search and insurance survey
                                                            taxes deed recording fee credit report charge and other costs assessed at settlement.
                                                            The cost of closing usually are about 3 percent to 6 percent of the mortgage amount.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading29">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse29" aria-expanded="true" aria-controls="collapse29">
                                                            Closing Costs
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse29" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading29">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Expenses over and above the price of the property that are incurred by buyers and
                                                            sellers when transferring ownership of a property. Closing costs normally include an
                                                            origination fee property taxes charges for title insurance and escrow costs appraisal
                                                            fees etc. Closing costs will vary according to the area country and the lenders used.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading30">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse30" aria-expanded="true" aria-controls="collapse30">
                                                            Closing/Settlement Agent
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse30" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading30">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A settlement agent is also referred to as a closing agent. The closing agent's role is to make sure all parties involved receive required documents during a mortgage loan closing. They provide escrow instructions to third parties like real estate agents, to receive funds such as fees and commissions.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading268">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse268" aria-expanded="true" aria-controls="collapse268">
                                                            Condotels
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse268" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading268">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A condotel is a condominium project that is operated as a hotel with a registration desk, cleaning service and more. The units are typically individually owned. Unit owners also have the option to place their unit in the hotel's rental program where it is rented out like any other hotel room to paying guests. Usually, a condo space in a resort area. 
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading31">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse31" aria-expanded="true" aria-controls="collapse31">
                                                            Consumer Reporting Agency (or Bureau)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse31" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading31">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            An organization that handles the preparation of reports used by lenders to determine a
                                                            potential borrower's credit history. The agency gets data for these reports from a credit
                                                            repository and other sources.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading32">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse32" aria-expanded="true" aria-controls="collapse32">
                                                            Contract Sale or Deed
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse32" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading32">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A contract between purchaser and a seller of real estate to convey title after certain
                                                            conditions have been met. It is a form of installment sale.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading33">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse33" aria-expanded="true" aria-controls="collapse33">
                                                            Conventional Loan
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse33" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading33">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A mortgage not insured by FHA or guaranteed by VA.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading34">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse34" aria-expanded="true" aria-controls="collapse34">
                                                            Conversion Clause
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse34" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading34">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A provision in an ARM allowing the loan to be converted to a fixed-rate at some point
                                                            during the term. Usually conversion is allowed at the end of the first adjustment period.
                                                            The conversion feature may cost extra.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading267">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse267" aria-expanded="true" aria-controls="collapse267">
                                                            Co-op
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse267" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading267">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A housing cooperative or "co-op" is a type of residential housing option that is actually a corporation whereby the owners do not own their units outright. Instead, each resident is a shareholder in the corporation based in part on the relative size of the unit that they live in. this type of cooperative requires permission from and Executive Counsel.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading35">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse35" aria-expanded="true" aria-controls="collapse35">
                                                            CPL (Closing Protection Letter)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse35" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading35">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Sometimes “insured closing letter” or “CPL” forms a contract between a title insurance underwriter and a lender, in which the underwriter agrees to indemnify the lender for actual losses caused by certain kinds of misconduct by the closing agent.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading36">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse36" aria-expanded="true" aria-controls="collapse36">
                                                            Credit Report
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse36" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading36">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A report documenting the credit history and current status of a borrower's credit
                                                            standing.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading37">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse37" aria-expanded="true" aria-controls="collapse37">
                                                            Credit Risk Score
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse37" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading37">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A credit risk score is a statistical summary of the information contained in a consumer's
                                                            credit report. The most well-known type of credit risk score is the Fair Isaac or FICO
                                                            score. This form of credit scoring is a mathematical summary calculation that assigns
                                                            numerical values to various pieces of information in the credit report. The overall credit
                                                            risk score is highly relative in the credit underwriting process for a mortgage loan.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading38">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse38" aria-expanded="true" aria-controls="collapse38">
                                                            Debt-to-Income Ratio
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse38" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading38">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The ratio expressed as a percentage, which results when a borrower's monthly payment
                                                            obligation on long-term debts is divided by his or her gross monthly income.
                                                            See housing expenses-to-income ratio.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading39">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse39" aria-expanded="true" aria-controls="collapse39">
                                                            Deed of Trust
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse39" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading39">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            In many states, this document is used in place of a mortgage to secure the payment of
                                                            a note.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading40">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse40" aria-expanded="true" aria-controls="collapse40">
                                                            Default
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse40" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading40">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Failure to meet legal obligations in a contract specifically failure to make the monthly
                                                            payments on a mortgage.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading41">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse41" aria-expanded="true" aria-controls="collapse41">
                                                            Deferred Interest
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse41" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading41">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            When a mortgage is written with a monthly payment that is less than required to satisfy
                                                            the note rate the unpaid interest is deferred by adding it to the loan balance.
                                                            See <a href="#heading90"><em>negative amortization</em></a>
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading42">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse42" aria-expanded="true" aria-controls="collapse42">
                                                            Delinquency
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse42" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading42">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Failure to make payments on time. This can lead to foreclosure.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading43">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse43" aria-expanded="true" aria-controls="collapse43">
                                                            Department of Veterans Affairs (VA)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse43" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading43">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            An independent agency of the federal government, which guarantees long-term low-orno-down payment, mortgages to eligible veterans.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading44">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse44" aria-expanded="true" aria-controls="collapse44">
                                                            Doc Drawer
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse44" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading44">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Prepare Closing Disclosure and Loan Documents within posted Turn Times and Cutoffs - Meet the minimum CD drawer rate metric as posted in the Closing Department Ensure Loans are Compliant. 
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading45">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse45" aria-expanded="true" aria-controls="collapse45">
                                                            Down Payment
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse45" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading45">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Money paid to make up the difference between the purchase price and the mortgage
                                                            amount.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading46">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse46" aria-expanded="true" aria-controls="collapse46">
                                                            DSCR+ (Debt Service Coverage Ratio)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse46" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading46">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A debt service coverage ratio of 1 or above indicates that a company is generating sufficient operating income to cover its annual debt and interest payments. As a general rule of thumb, an ideal ratio is 2 or higher. A ratio that high suggests that the company is capable of taking on more debt.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading47">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse47" aria-expanded="true" aria-controls="collapse47">
                                                            DTI (Debt to Income Ratio)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse47" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading47">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Your debt-to-income ratio is all your monthly debt payments divided by your gross monthly income. This number is one-way lenders measure your ability to manage the monthly payments to repay the money you plan to borrow.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading48">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse48" aria-expanded="true" aria-controls="collapse48">
                                                            Earnest Money
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse48" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading48">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Money given by a buyer to a seller as part of the purchase price to bind a transaction or
                                                            assure payment.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading49">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse49" aria-expanded="true" aria-controls="collapse49">
                                                            Entitlement
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse49" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading49">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The VA home loan benefit is called an entitlement (i.e. entitlement for a VA guaranteed
                                                            home loan). This is also known as eligibility.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading50">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse50" aria-expanded="true" aria-controls="collapse50">
                                                            Equal Credit Opportunity Act (ECOA)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse50" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading50">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A federal law that requires lenders and other creditors to make credit equally available
                                                            without discrimination based on race color religion national origin age sex marital status
                                                            or receipt of income from public assistance programs.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading51">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse51" aria-expanded="true" aria-controls="collapse51">
                                                            Equity
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse51" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading51">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The difference between the fair market value and current indebtedness also referred to
                                                            as the owner's interest. The value an owner has in real estate over and above the
                                                            obligation against the property.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading52">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse52" aria-expanded="true" aria-controls="collapse52">
                                                            Escrow
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse52" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading52">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            An account held by the lender into which the homebuyer pays money for tax or
                                                            insurance payments. Also earnest deposits held pending loan closing.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading53">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse53" aria-expanded="true" aria-controls="collapse53">
                                                            Escrow Disbursements
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse53" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading53">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The use of escrow funds to pay real estate taxes hazard insurance mortgage insurance
                                                            and other property expenses as they become due.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading54">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse54" aria-expanded="true" aria-controls="collapse54">
                                                            Escrow Payment
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse54" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading54">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The part of a mortgagor hazard insurance mortgage insurance lease payments and
                                                            other items as they become due.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading55">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse55" aria-expanded="true" aria-controls="collapse55">
                                                            Federal Home Loan Mortgage Corporation (FHLMC) "Freddie Mac"
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse55" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading55">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A government sponsored entity that purchases conventional mortgage from insured
                                                            depository institutions and HUD-approved mortgage bankers.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading56">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse56" aria-expanded="true" aria-controls="collapse56">
                                                            Federal Housing Administration (FHA)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse56" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading56">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A division of the Department of Housing and Urban Development. Its main activity is the
                                                            insuring of residential mortgage loans made by private lenders. FHA also sets
                                                            standards for underwriting mortgages.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading57">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse57" aria-expanded="true" aria-controls="collapse57">
                                                            Federal National Mortgage Association (FNMA) "Fannie Mae"
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse57" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading57">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A division of the Department of Housing and Urban Development. Its main activity is the
                                                            insuring of residential mortgage loans made by private lenders. FHA also sets
                                                            standards for underwriting mortgages.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading58">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse58" aria-expanded="true" aria-controls="collapse58">
                                                            FHA Loan
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse58" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading58">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A loan insured by the Federal Housing Administration open to all qualified home
                                                            purchasers. While there are limits to the size of FHA loans, they are generous enough
                                                            to handle moderately priced homes almost anywhere in the country.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading59">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse59" aria-expanded="true" aria-controls="collapse59">
                                                            FHA Mortgage Insurance
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse59" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading59">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Requires a fee (up to 2.25 percent of the loan amount) paid at closing to insure the loan
                                                            with FHA. In addition FHA mortgage insurance requires an annual fee of up to 0.5
                                                            percent of the current loan amount paid in monthly installments. The lower the down
                                                            payment the more years the fee must be paid.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading60">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse60" aria-expanded="true" aria-controls="collapse60">
                                                            FHLMC
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse60" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading60">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The Federal Home Loan Mortgage Corporation provides a secondary market for
                                                            savings and loans by purchasing their conventional loans. Also known as "Freddie
                                                            Mac."
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading61">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse61" aria-expanded="true" aria-controls="collapse61">
                                                            First Mortgage

                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse61" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading61">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The primary lien against a property.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading62">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse62" aria-expanded="true" aria-controls="collapse62">
                                                            Fixed Installment
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse62" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading62">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The monthly payment due on a mortgage loan including payment of both principal and
                                                            interest.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading63">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse63" aria-expanded="true" aria-controls="collapse63">
                                                            Fixed Rate Mortgage
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse63" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading63">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The mortgage interest rate will remain the same on these mortgages throughout the
                                                            term of the mortgage for the original borrower.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading64">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse64" aria-expanded="true" aria-controls="collapse64">
                                                            Fully Amortized ARM
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse64" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading64">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            An adjustable rate mortgage (ARM) with a monthly payment that is sufficient to amortize
                                                            the remaining balance at the interest accrual rate over the amortization term.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading65">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse65" aria-expanded="true" aria-controls="collapse65">
                                                            FNMA
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse65" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading65">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The Federal National Mortgage Association is a secondary mortgage institution. FNMA
                                                            buys VA FHA and conventional mortgages from primary lenders. Also known as "Fannie
                                                            Mae."
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading66">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse66" aria-expanded="true" aria-controls="collapse66">
                                                            Foreclosure
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse66" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading66">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A legal process by which the lender or the seller forces a sale of a mortgaged property
                                                            because the borrower has not met the terms of the mortgage. Also known as a
                                                            repossession of property. 
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading67">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse67" aria-expanded="true" aria-controls="collapse67">
                                                            Foreign National
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse67" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading67">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A non-resident of the United States will in many cases seek to own real estate.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading68">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse68" aria-expanded="true" aria-controls="collapse68">
                                                            Form 216 (Appraisal)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse68" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading68">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The lender uses this form to determine the amount of operating income that can be used in evaluating the applicant's credit on applications for conventional mortgages that are secured by one-family investment properties and all two- to four-family properties (including those in which the applicant occupies one of the units as a principal residence).
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading69">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse69" aria-expanded="true" aria-controls="collapse69">
                                                            Form 442 (Appraisal)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse69" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading69">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Form 442 is designed to report an update of an appraisal and whether a new appraisal must be obtained.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading70">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse70" aria-expanded="true" aria-controls="collapse70">
                                                            Form 1007 (Appraisal Rents)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse70" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading70">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The form is prepared by the appraiser as an attachment to the appraisal for a single-family investment property. The form is designed to present the information needed to determine the market rent for a single-family property. It calls for information on the physical structure, location, and lease terms.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading71">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse71" aria-expanded="true" aria-controls="collapse71">
                                                            Funder/Closer
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse71" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading71">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A person responsible for preparing loan packages for closing as well as funding loans. The position coordinates the closing of mortgage loans with the borrower, Title Company, and other related parties. The Funder/Closer is expected to provide high-quality customer service.  The position is responsible for ensuring timely management of assigned pipeline. 
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading72">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse72" aria-expanded="true" aria-controls="collapse72">
                                                            Guaranty
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse72" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading72">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A promise by one party to pay a debt or perform an obligation contracted by another if
                                                            the original party fails to pay or perform according to a contract.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading73">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse73" aria-expanded="true" aria-controls="collapse73">
                                                            Guarantee Mortgage
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse73" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading73">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A mortgage that is guaranteed by a third party.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading74">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse74" aria-expanded="true" aria-controls="collapse74">
                                                            Hazard Insurance
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse74" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading74">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A form of insurance in which the insurance company protects the insured from specified
                                                            losses such as fire windstorm and the like.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading75">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse75" aria-expanded="true" aria-controls="collapse75">
                                                            Housing Expenses-to-Income Ratio
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse75" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading75">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The ratio expressed as a percentage which results when a borrower's housing
                                                            expenses are divided by his/her gross monthly income. See <a href="#heading30"><em>debt-to-income ratio.</em></a>
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading76">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse76" aria-expanded="true" aria-controls="collapse76">
                                                            HUD-1 Statement
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse76" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading76">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A document that provides an itemized listing of the funds that are payable at closing.
                                                            Items that appear on the statement include real estate commission’s loan
                                                            fees points and initial escrow amounts. Each item on the statement is represented by a
                                                            separate number within a standardized numbering system. The totals at the bottom of
                                                            the HUD-1 statement define the seller's net proceeds and the buyer's net payment at
                                                            closing.                                                            
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading77">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse77" aria-expanded="true" aria-controls="collapse77">
                                                            Impound
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse77" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading77">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The portion of a borrower's monthly payments held by the lender or servicer to pay for
                                                            taxes hazard insurance mortgage insurance lease payments and other items as they
                                                            become due. Also known as reserves.                                                        
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading78">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse78" aria-expanded="true" aria-controls="collapse78">
                                                            Index
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse78" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading78">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A published interest rate against which lenders measure the difference between the
                                                            current interest rate on an adjustable rate mortgage and that earned by other
                                                            investments (such as one three and five year U.S. Treasury security yields the monthly
                                                            average interest rate on loans closed by savings and loan institutions and the monthly
                                                            average costs-of-funds incurred by savings and loans) which is then used to adjust the
                                                            interest rate on an adjustable mortgage up or down.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading79">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse79" aria-expanded="true" aria-controls="collapse79">
                                                            Indexed Rate
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse79" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading79">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The sum of the published index plus the margin. For example if the index is 4% and the
                                                            margin is 2.75% the indexed rate would be 6.75%. Often lenders charge less than the
                                                            indexed rate the first year of an adjustable rate mortgage.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading80">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse80" aria-expanded="true" aria-controls="collapse80">
                                                            Initial Interest Rate
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse80" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading80">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            This refers to the original interest rate of the mortgage at the time of closing. This rate
                                                            changes for an adjustable rate mortgage (ARM). It is also known as "start rate" or
                                                            "teaser."
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading81">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse81" aria-expanded="true" aria-controls="collapse81">
                                                            Installment
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse81" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading81">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The regular periodic payment that a borrower agrees to make to a lender.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading82">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse82" aria-expanded="true" aria-controls="collapse82">
                                                            Insured Mortgage
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse82" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading82">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A mortgage that is protected by the Federal Housing Administration (FHA) or by private
                                                            mortgage insurance (MI).                                                            
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading83">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse83" aria-expanded="true" aria-controls="collapse83">
                                                            Intent to Proceed
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse83" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading83">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A critical step in the home buying process after getting pre-approved by a mortgage lender. In simple terms, intending to proceed means that you've finally chosen a lender who you think offers you the most competitive rates.                                                           
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading84">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse84" aria-expanded="true" aria-controls="collapse84">
                                                            Interest
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse84" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading84">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The fee charged for borrowing money.                                                          
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading85">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse85" aria-expanded="true" aria-controls="collapse85">
                                                            Interest Accrual Rate
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse85" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading85">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The percentage rate at which interest accrues on the mortgage. In most cases it is also,
                                                            the rate used to calculate the monthly payments.                                                   
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading86">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse86" aria-expanded="true" aria-controls="collapse86">
                                                            Interest Rate Buy down Plan
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse86" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading86">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            An arrangement that allows the property seller to deposit money to an account. That
                                                            money is then released each month to reduce the mortgagor's monthly payments during
                                                            the early years of a mortgage.                                                  
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading87">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse87" aria-expanded="true" aria-controls="collapse87">
                                                            Interest Rate Ceiling
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse87" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading87">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            For an adjustable rate mortgage, (ARM) the maximum interest rate as specified in
                                                            the mortgage note.                                               
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading88">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse88" aria-expanded="true" aria-controls="collapse88">
                                                            Interest Rate Floor
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse88" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading88">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            For an adjustable rate mortgage, (ARM) the minimum interest rate as specified in the
                                                            mortgage note.                                             
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading89">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse89" aria-expanded="true" aria-controls="collapse89">
                                                            Investor
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse89" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading89">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A money source for a lender.                                            
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading90">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse90" aria-expanded="true" aria-controls="collapse90">
                                                            ITIN
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse90" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading90">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Individual Taxpayer Identification Number, is a tax processing number only available for certain nonresident and resident aliens, their spouses, and dependents who cannot get a Social Security Number (SSN). It is a 9-digit number, beginning with the number "9", formatted like an SSN (XXX-XX-XXXX).                                           
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading91">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse91" aria-expanded="true" aria-controls="collapse91">
                                                            Jumbo Loan
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse91" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading91">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A loan, which is larger than the limits, set by the Federal National Mortgage
                                                            Association and the Federal Home Loan Mortgage Corporation. Because jumbo loans
                                                            cannot be funded by these two agencies, they usually carry a higher interest rate.                                            
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading92">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse92" aria-expanded="true" aria-controls="collapse92">
                                                            Late Charge
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse92" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading92">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The penalty a borrower must pay when a payment is made a stated number of days
                                                            after the due date.                                              
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading93">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse93" aria-expanded="true" aria-controls="collapse93">
                                                            LE (Loan Estimate)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse93" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading93">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A three-page form that you receive after applying for a mortgage. The Loan Estimate tells you important details about the loan you have requested. ... The form provides you with important information, including the estimated interest rate, monthly payment, and total closing costs for the loan.                                             
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading94">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse94" aria-expanded="true" aria-controls="collapse94">
                                                            Liabilities
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse94" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading94">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A person's financial obligations. Liabilities include long term and short-term debt.                                            
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading95">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse95" aria-expanded="true" aria-controls="collapse95">
                                                            Lien
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse95" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading95">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A claim upon a piece of property for the payment or satisfaction of a debt or obligation.                                          
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading96">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse96" aria-expanded="true" aria-controls="collapse96">
                                                            Lifetime Payment Cap
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse96" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading96">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            For an adjustable rate mortgage, (ARM) a limit on the amount that payments can
                                                            increase or decrease over the life of the mortgage.                                         
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading97">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse97" aria-expanded="true" aria-controls="collapse97">
                                                            Lifetime Rate Cap
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse97" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading97">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            For an adjustable rate mortgage, (ARM) a limit on the amount that the interest rate can
                                                            increase or decrease over the life of the loan. See <a href="#heading20"><em>caps.</em></a>                                      
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading98">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse98" aria-expanded="true" aria-controls="collapse98">
                                                            LO (Loan Originator)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse98" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading98">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A mortgage loan originator helps a borrower choose the correct mortgage product and complete the application process. Mortgage loan origination is the first step in the mortgage process.                                   
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading99">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse99" aria-expanded="true" aria-controls="collapse99">
                                                            Loan
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse99" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading99">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A sum of borrowed money (principal) that is generally repaid with interest.                                    
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading100">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse100" aria-expanded="true" aria-controls="collapse100">
                                                            Loan Processor
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse100" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading100">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A mortgage <strong>processor</strong>, also sometimes known as a <strong>loan processor</strong>, is the person responsible for preparing your mortgage application and other paperwork for delivery to the mortgage underwriter. The documentation a mortgage processor collects includes employment and income information, bank statements, and monthly bills.                                   
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading101">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse101" aria-expanded="true" aria-controls="collapse101">
                                                            Loan to Value Ratio
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse101" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading101">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The relationship between the amount of the mortgage loan and the appraised value of
                                                            the property expressed as a percentage.                                 
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading102">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse102" aria-expanded="true" aria-controls="collapse102">
                                                            Lock
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse102" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading102">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A lender's guarantee that the mortgage rate quoted will be good for a specific number of
                                                            days from the day of application.                               
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading103">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse103" aria-expanded="true" aria-controls="collapse103">
                                                            Margin
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse103" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading103">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The amount a lender adds to the index on an adjustable rate mortgage to establish the
                                                            adjusted interest rate.                          
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading104">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse104" aria-expanded="true" aria-controls="collapse104">
                                                            Market Value
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse104" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading104">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The highest price that a buyer would pay and the lowest price a seller would accept on
                                                            a property. Market value may be different from the price a property could actually be
                                                            sold for at a given time.                       
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading105">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse105" aria-expanded="true" aria-controls="collapse105">
                                                            Maturity
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse105" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading105">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The date on which the principal balance of a loan becomes due and payable.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading271">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse271" aria-expanded="true" aria-controls="collapse271">
                                                            Mello-Roos
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse271" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading271">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A Mello-Roos is an ad hoc California tax district created to finance an infrastructure project. A district may be created only with the approval of two-thirds of voters and permits a special tax to be assessed on its residents. The state law allowing such districts was implemented in 1982 as a way for local governments to bypass the state's 1978 cap on property tax increases. These are infrastructure payments utilized for Schools, roads, utilities, etc. 
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading270">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse270" aria-expanded="true" aria-controls="collapse270">
                                                            Module Home
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse270" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading270">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A modular home is simply a home built offsite, in an indoor factory setting, to a local state code. In most cases, states have adopted the International Residential Code, or IRC. These homes are often called “factory-built,” “systems-built” or “prefab homes.” Since they are factory made, there are no wheels. 
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading106">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse106" aria-expanded="true" aria-controls="collapse106">
                                                            Monthly Fixed Installment
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse106" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading106">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The portion of the total monthly payment that is applied toward principal and interest.
                                                            When a mortgage negatively amortizes the monthly fixed installment does not include
                                                            any amount for principal reduction and does not cover all of the interest. The loan
                                                            balance therefore increases instead of decreasing.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading107">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse107" aria-expanded="true" aria-controls="collapse107">
                                                            Mortgage
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse107" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading107">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A legal document that pledges a property to the lender as security for payment of a
                                                            debt.                  
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading108">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse108" aria-expanded="true" aria-controls="collapse108">
                                                            Mortgage Banker
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse108" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading108">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A company that originates mortgages for resale in the secondary mortgage market.               
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading109">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse109" aria-expanded="true" aria-controls="collapse109">
                                                            Mortgage Broker
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse109" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading109">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            An individual or company that charges a service fee to bring borrowers and lenders
                                                            together for the purpose of loan origination.            
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading110">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse110" aria-expanded="true" aria-controls="collapse110">
                                                            Mortgagee
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse110" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading110">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The lender.          
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading111">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse111" aria-expanded="true" aria-controls="collapse111">
                                                            Mortgage Insurance
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse111" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading111">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Money paid to insure the mortgage when the down payment is less than 20 percent.       
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading112">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse112" aria-expanded="true" aria-controls="collapse112">
                                                            Negative Amortization
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse112" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading112">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            When your monthly payments are not large enough to pay all the interest due on the
                                                            loan. This unpaid interest is added to the unpaid balance of the loan. The homebuyer
                                                            ends up owing more than the original amount of the loan.     
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading272">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse272" aria-expanded="true" aria-controls="collapse272">
                                                            NOO
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse272" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading272">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Non Owner Occupied property    
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading113">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse113" aria-expanded="true" aria-controls="collapse113">
                                                            Notice of Default
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse113" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading113">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A notification given to a borrower stating that he or she has not made their payments by the predetermined deadline, or is otherwise in default on the mortgage contract.  
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading114">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse114" aria-expanded="true" aria-controls="collapse114">
                                                            One Year Adjustable Rate Mortgage
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse114" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading114">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Mortgage where the annual rate changes yearly. The rate is usually based on
                                                            movements of a published index plus a specified margin chosen by the lender.  
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading115">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse115" aria-expanded="true" aria-controls="collapse115">
                                                            Origination Fee
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse115" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading115">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The fee charged by a lender to prepare loan documents make credit checks inspect and
                                                            sometimes appraise a property; usually computed as a percentage of the face value of
                                                            the loan. 
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading116">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse116" aria-expanded="true" aria-controls="collapse116">
                                                            Payment Change Date
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse116" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading116">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The date when a new monthly payment amount takes effect on an adjustable rate
                                                            mortgage (ARM) or a graduated-payment mortgage (GPM). Generally, the payment
                                                            change date occurs in the month immediately after the adjustment date.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading117">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse117" aria-expanded="true" aria-controls="collapse117">
                                                            Payment History
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse117" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading117">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A record of your past debt payments. With the most commonly used scoring model, the FICO Score, it's the most influential factor in how your credit is assessed, making up 35% of your credit score.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading118">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse118" aria-expanded="true" aria-controls="collapse118">
                                                            Payoff Demand
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse118" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading118">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A written statement that is prepared in response to a written demand made by an entitled person or that person's authorized agent that sets forth the amounts required by the secured lender to fully satisfy all of the obligations secured by the loan that is the subject of the demand.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading119">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse119" aria-expanded="true" aria-controls="collapse119">
                                                            Periodic Payment Cap
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse119" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading119">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A limit on the amount that payments can increase or decrease during any oneadjustment period.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading120">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse120" aria-expanded="true" aria-controls="collapse120">
                                                            Periodic Rate Cap
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse120" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading120">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A limit on the amount that the interest rate can increase or decrease during any one
                                                            adjustment period regardless of how high or low the index might be.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading121">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse121" aria-expanded="true" aria-controls="collapse121">
                                                            PITI
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse121" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading121">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Principal interest taxes and insurance. Also called monthly housing expense.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading273">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse273" aria-expanded="true" aria-controls="collapse273">
                                                            Planned Unit Development (PUD)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
{{-- Last Number --}}                               <div id="collapse273" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading273">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A planned unit development (PUD) is a type of building development and also a regulatory process. As a building development, it is a designed grouping of both varied and compatible land uses, such as housing, recreation, commercial centers, and industrial parks, all within one contained development or subdivision.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading122">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse122" aria-expanded="true" aria-controls="collapse122">
                                                            Plat Map
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse122" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading122">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A plat map, also known as a "plat," shows you how a tract of land is divided into lots in your county. It is drawn to scale and records the land's size, boundary locations, nearby streets, flood zones, and any easements or rights of way.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading123">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse123" aria-expanded="true" aria-controls="collapse123">
                                                            Points (Loan Discount Points)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse123" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading123">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Prepaid interest assessed at closing by the lender. Each point is equal to 1 percent of
                                                            the loan amount (e.g. two points on a $100000 mortgage would cost $2000).
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading124">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse124" aria-expanded="true" aria-controls="collapse124">
                                                            Power of Attorney
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse124" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading124">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A legal document authorizing one person to act on behalf of another.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading125">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse125" aria-expanded="true" aria-controls="collapse125">
                                                            Preapproval
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse125" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading125">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The process of determining how much money you will be eligible to borrow before you
                                                            apply for a loan.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1260">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse126" aria-expanded="true" aria-controls="collapse126">
                                                            Prepayment
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse126" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading126">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A privilege in a mortgage permitting the borrower to make payments in advance of their
                                                            due date.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1271">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse127" aria-expanded="true" aria-controls="collapse127">
                                                            Prepayment Penalty
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse127" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading127">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Money charged for an early repayment of debt. Prepayment penalties are allowed in
                                                            some form (but not necessarily imposed) in many states. 
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1281">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse128" aria-expanded="true" aria-controls="collapse128">
                                                            Prior to Doc (PTD)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse128" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading128">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Documents the underwriter requires before the loan documents can be ordered. They will communicate this with your loan officer who will work with you to make sure the documents are all in order for underwriting. Sometimes referred to as "Prior to Documents".
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1291">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse129" aria-expanded="true" aria-controls="collapse129">
                                                            Prior to Funding (PTF)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse129" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading129">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Typically these are conditions that the underwriter believes will be easy for the borrower to meet, thus they are not required to order the loan documents. They tend to be reserved for procedural matters and are taken care of by the escrow officer and loan funder.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1302">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse130" aria-expanded="true" aria-controls="collapse130">
                                                            Private Mortgage Insurance (PMI)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse130" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading130">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            In the event that you do not have a 20 percent, down payment lenders will allow a
                                                            smaller down payment - as low as 3 percent in some cases. With the smaller down
                                                            payment loans, however borrowers are usually required to carry private mortgage
                                                            insurance. Private mortgage insurance will usually require an initial premium payment
                                                            and may require an additional monthly fee depending on your loan's structure.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1313">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse131" aria-expanded="true" aria-controls="collapse131">
                                                            Rate Lock
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse131" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading131">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A commitment issued by a lender to a borrower or another mortgage originator
                                                            guaranteeing a specified interest rate and lender costs for a specified period of time.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1324">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse132" aria-expanded="true" aria-controls="collapse132">
                                                            Realtor®
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse132" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading132">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A real estate broker or an associate holding active membership in a local real estate
                                                            board affiliated with the National Association of Realtors.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1335">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse133" aria-expanded="true" aria-controls="collapse133">
                                                            Real Estate Agent
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse133" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading133">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A person licensed to negotiate and transact the sale of real estate on behalf of the
                                                            property owner.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1346">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse134" aria-expanded="true" aria-controls="collapse134">
                                                            Real Estate Settlement Procedures Act (RESPA)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse134" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading134">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A consumer protection law that requires lenders to give borrowers advance notice of
                                                            closing costs.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1356">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse135" aria-expanded="true" aria-controls="collapse135">
                                                            Recertification of Value (Recert - Appraisal)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse135" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading135">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A final inspection or completion certificate. If the client wants a current value, it is an “Update of an Appraisal”. A “Recertification of Value” is often used when an appraisal is done using plans and specs or when the house is partially complete.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1368">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse136" aria-expanded="true" aria-controls="collapse136">
                                                            Recording Fees
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse136" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading136">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Money paid to the lender for recording a home sale with the local authorities thereby
                                                            making it part of the public records.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1379">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse137" aria-expanded="true" aria-controls="collapse137">
                                                            Refinance
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse137" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading137">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Obtaining a new mortgage loan on a property already owned often to replace existing
                                                            loans on the property.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1387">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse138" aria-expanded="true" aria-controls="collapse138">
                                                            Rescission
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse138" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading138">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The cancellation of a contract. With respect to mortgage, refinancing the law that gives
                                                            the homeowner three days to cancel a contract in some cases once it is signed if the
                                                            transaction uses equity in the home as security.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1390">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse139" aria-expanded="true" aria-controls="collapse139">
                                                            RESPA
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse139" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading139">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Short for the Real Estate Settlement Procedures Act. RESPA is a federal law that
                                                            allows consumers to review information on known or estimated settlement costs once
                                                            after application and once prior to or at settlement. The law requires lenders to furnish
                                                            the information after application only.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1400">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse140" aria-expanded="true" aria-controls="collapse140">
                                                            RESPA Cure
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse140" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading140">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Curing a tolerance violation involves: 
                                                            <ul>
                                                                <li>Reimbursing the borrower</li>
                                                                <li>Revising the HUD-1</li>
                                                            </ul>
                                                            It is the loan originator's responsibility to reimburse the borrower the amount by which the actual settlement charges exceed the permitted tolerances.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1411">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse141" aria-expanded="true" aria-controls="collapse141">
                                                            Revolving Liability
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse141" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading141">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A credit arrangement such as a credit card that allows a customer to borrow against a
                                                            pre-approved line of credit when purchasing goods and services.  
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1422">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse142" aria-expanded="true" aria-controls="collapse142">
                                                            Satisfaction of Mortgage
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse142" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading142">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The document issued by the mortgagee when the mortgage loan is paid in full. Also
                                                            called a "release of mortgage." 
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1433">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse143" aria-expanded="true" aria-controls="collapse143">
                                                            Second Mortgage
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse143" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading143">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A mortgage made subsequent to another mortgage and subordinate to the first one.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1444">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse144" aria-expanded="true" aria-controls="collapse144">
                                                            Secondary Mortgage Market
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse144" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading144">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The place where primary mortgage lenders sell the mortgages they make to obtain
                                                            more funds to originate more new loans. It provides liquidity for the lenders.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1455">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse145" aria-expanded="true" aria-controls="collapse145">
                                                            Security
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse145" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading145">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The property that will be pledged as collateral for a loan.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1466">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse146" aria-expanded="true" aria-controls="collapse146">
                                                            Servicer
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse146" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading146">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            An organization that collects principal and interest payments from borrowers and
                                                            manages borrower escrow accounts. The servicer often services mortgages that have
                                                            been purchased by an investor in the secondary mortgage market.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1477">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse147" aria-expanded="true" aria-controls="collapse147">
                                                            Servicing
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse147" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading147">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            All the steps and operations a lender performs to keep a loan in good standing such as
                                                            collection of payments payment of taxes insurance property inspections and the like.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1487">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse148" aria-expanded="true" aria-controls="collapse148">
                                                            Subordinate Financing
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse148" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading148">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Debt financing that is ranked behind those held by secured lenders in terms of the order in which the debt is repaid. "Subordinate" financing implies that the debt ranks behind the first secured lender, and means that the secured lenders will be paid back before subordinate debt holders.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1497">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse149" aria-expanded="true" aria-controls="collapse149">
                                                            Subordination Agreement
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse149" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading149">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A legal document that establishes one debt as ranking behind another in priority for collecting repayment from a debtor. The priority of debts can become extremely important when a debtor defaults on payments or declares bankruptcy.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1507">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse150" aria-expanded="true" aria-controls="collapse150">
                                                            Survey
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse150" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading150">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            To examine and record the area and features of (an area of land) so as to construct a map, plan, or description.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1518">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse151" aria-expanded="true" aria-controls="collapse151">
                                                            Sweat Equity
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse151" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading151">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Equity created by a purchaser performing work on a property being purchased.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1528">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse152" aria-expanded="true" aria-controls="collapse152">
                                                            Tax Bill
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse152" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading152">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A bill based on the assessed value of your property, any exemptions for which you qualify, and a property tax rate. Your property tax assessment is determined on a certain date. The taxes you owe for each item are totaled to determine your final property tax bill. Also known as a property tax bill.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1538">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse153" aria-expanded="true" aria-controls="collapse153">
                                                            Tax Certificate
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse153" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading153">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A report detailing the individual taxing authorities for a property. This report provides a comprehensive description of the assessed value of the property, taxes imposed on a property, any tax liens place on the property, and any exemptions currently applied.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1549">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse154" aria-expanded="true" aria-controls="collapse154">
                                                            Third Party Origination
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse154" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading154">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            When a lender uses another party to completely or partially originate process underwrite
                                                            close fund or package the mortgages it plans to deliver to the secondary mortgage
                                                            market.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1550">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse155" aria-expanded="true" aria-controls="collapse155">
                                                            Title
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse155" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading155">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A document that gives evidence of an individual's ownership of property.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1561">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse156" aria-expanded="true" aria-controls="collapse156">
                                                            Title Insurance
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse156" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading156">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A policy usually issued by a title insurance company which insures a home buyer
                                                            against errors in the title search. The cost of the policy is usually a function of the value
                                                            of the property and is often borne by the purchaser and/or seller. Policies are also
                                                            available to protect the lender's interests.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1571">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse157" aria-expanded="true" aria-controls="collapse157">
                                                            Title Search
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse157" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading157">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            An examination of municipal records to determine the legal ownership of property.
                                                            Usually is performed by a title company.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1582">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse158" aria-expanded="true" aria-controls="collapse158">
                                                            Total Expense Ratio
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse158" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading158">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Total obligations as a percentage of gross monthly income including monthly housing
                                                            expenses plus other monthly debts.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1592">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse159" aria-expanded="true" aria-controls="collapse159">
                                                            Transaction Manager
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse159" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading159">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            CSC team member, who acts as the liaison between the Broker / Account Executive and our internal OPS teams. Responsible for gathering the conditions and verifying that they meet the Underwriter’s request. Receives the file AFTER it is decisioned by Underwriting and is the primary contact throughout the file flow process. Works pipeline to move files to Docs/Funding.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1602">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse160" aria-expanded="true" aria-controls="collapse160">
                                                            TRID
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse160" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading160">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            An acronym that stands for “TILA-RESPA Integrated Disclosure.” A federal regulation, it was enacted to help protect consumers. Whether consumers are looking to buy their first home in the city or a second home in the mountains, they'll come across a TRID from their lender.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1613">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse161" aria-expanded="true" aria-controls="collapse161">
                                                            Truth in Lending
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse161" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading161">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A federal law requiring disclosure of the Annual Percentage Rate to homebuyers shortly
                                                            after they apply for the loan. Also known as Regulation Z.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1623">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse162" aria-expanded="true" aria-controls="collapse162">
                                                            Underwriter
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse162" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading162">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            An underwriter is a financial expert who takes a look at finances and assesses how much risk a lender will take on if they decide to give a loan. More specifically, underwriters evaluate credit history, assets, the size of the loan request and how well they anticipate the pay back of a loan.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1634">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse163" aria-expanded="true" aria-controls="collapse163">
                                                            Underwriting
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse163" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading163">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The decision whether to make a loan to a potential home buyer based on credit
                                                            employment assets and other factors and the matching of this risk to an appropriate rate
                                                            and term or loan amount.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1645">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse164" aria-expanded="true" aria-controls="collapse164">
                                                            VA Loan
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse164" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading164">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A long-term low-or-no down payment loan guaranteed by the Department of Veterans
                                                            Affairs. Restricted to individuals qualified by military service or other entitlements.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1655">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse165" aria-expanded="true" aria-controls="collapse165">
                                                            Valuation Specialist
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse165" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading165">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            An appraisal specialist that works to estimate the value of real estate or other assets. Duties in this career vary depending on the type of asset and the reason for the valuation. A valuation specialist could appraise assets that the owner is using as collateral for credit.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1666">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse166" aria-expanded="true" aria-controls="collapse166">
                                                            Verification of Deposit (VOD)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse166" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading166">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A document signed by the borrower's financial institution verifying the status and
                                                            balance of his/her financial accounts.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1677">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse167" aria-expanded="true" aria-controls="collapse167">
                                                            Verification of Employment (VOE)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse167" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading167">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A process used by banks and mortgage lenders in the United States to review the employment history of a borrower, to determine the borrower's job stability and cross-reference income history with that stated on the Uniform Residential Loan Application.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1687">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse168" aria-expanded="true" aria-controls="collapse168">
                                                            Verification of Mortgage (VOM)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse168" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading168">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Documentation of your mortgage payment history. The verification of mortgage, which is often required when applying for a loan, is used to verify your existing balance and monthly payments, and to check for any late payments on the account.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1697">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse169" aria-expanded="true" aria-controls="collapse169">
                                                            Verification of Rent (VOR)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse169" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading169">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Proof that a renter has been making timely payments to his or her landlord for the past 12 months. Many renters do not realize the importance of verification of rent until it’s time to purchase a home and qualify for mortgage.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1707">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse170" aria-expanded="true" aria-controls="collapse170">
                                                            Vetting
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse170" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading170">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The process of performing a background check on someone before offering them employment, conferring an award, or doing fact-checking prior to making any decision. In addition, in intelligence gathering, assets are vetted to determine their usefulness. 
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1717">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse171" aria-expanded="true" aria-controls="collapse171">
                                                            WET State
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse171" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading171">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            States that have "Wet Settlement" laws, require lending banks to disburse funds within a period of time. Depending on the states' Wet Settlement laws, some require the disbursement of funds to the sellers and other involved parties on the day of the settlement, others within 2 days of closing. Wet Settlement laws are in place to curb the bank practice of delaying funding after closing documents have been signed by the borrowers. All of the prior to funding conditions must be met in order for the lender to allow doc to go to closing in Wet States.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1727">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse172" aria-expanded="true" aria-controls="collapse172">
                                                            Wire Transfer (to Settlement Agent)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse172" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading172">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A method of transmitting money electronically between people or businesses in which no physical money is exchanged. The sender is the one who provides all the instructions for the transfer, which may include the recipient's name, bank, account number and amount. 
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </section>
                                    </div>
                                    <!-- /.card -->
                                </div>
                                
                                <div class="tab-pane fade" id="nav-finance-terms" role="tabpanel" aria-labelledby="nav-finance-terms-t">
                                    <div class="card-body">
                                        <!-- /.card-header -->
                                        <!-- Mortgage Finance Terms -->
                                        <section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
                                            <div class="container">
                                        
                                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading1738">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse173" aria-expanded="true" aria-controls="collapse173">
                                                                20-20 Mortgages
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse173" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading173">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A variation of a 40-year mortgage, with the loan’s interest rate
                                                                resetting after 20 years. The loan runs 40 years and carries an initial interest rate
                                                                slightly lower than a traditional 30-year loan.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading1749">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse174" aria-expanded="true" aria-controls="collapse174">
                                                                40-Year Mortgages
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse174" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading174">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                These mortgages have payments calculated on a 40-year term,
                                                                but most of them must be paid off in 30 years. Lengthening the term cuts the monthly
                                                                payment, but the loan carries a slightly higher interest rate than a 30-year loan.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading1750">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse175" aria-expanded="true" aria-controls="collapse175">
                                                                Agency Market
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse175" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading175">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Supply and demand of mortgage securitization activity by Fannie
                                                                Mae, Freddie Mac and Ginnie Mae.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading1761">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse176" aria-expanded="true" aria-controls="collapse176">
                                                                Agency Securities
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse176" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading176">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Specific securities that are issued by either Ginnie Mae, Fannie
                                                                Mae, Freddie Mac or the Federal Home Loan Banks. They are backed by mortgage
                                                                loans and these companies enjoy credit protection based on an explicit guarantee from
                                                                the U.S. Government in the case of Ginnie Mae securities, or an implicit guarantee from
                                                                the U.S. government in the case of Fannie Mae and Freddie Mac, giving them high
                                                                ratings.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading1772">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse177" aria-expanded="true" aria-controls="collapse177">
                                                                Alt A (Alternative A) Loans
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse177" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading177">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Loans to prime-credit borrowers that have some
                                                                combination of nontraditional documentation, non-standard product structure, or more
                                                                liberal underwriting. Alt A pools generally have higher proportions of investor loans and
                                                                lower average credit scores (690 to 715) than conventional conforming or prime jumbo
                                                                pools.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading1783">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse178" aria-expanded="true" aria-controls="collapse178">
                                                                Asset-Backed Securities
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse178" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading178">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Types of bonds or notes that are based on pools of assets,
                                                                or collateralized by the cash flows from a specified pool of underlying assets.
                                                                Securitization makes these assets available for investment to a broader set of investors.
                                                                These asset pools can be made of any type of receivable from the common, like credit
                                                                card payments, auto loans, and mortgages, to esoteric cash flows.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading1794">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse179" aria-expanded="true" aria-controls="collapse179">
                                                                Asset-Backed Securities Index 
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse179" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading179">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                The ABS index is a key point of reference for
                                                                investors navigating the world of risky mortgage debt. The ABX, launched in January
                                                                2007, a credit derivative instrument, serves as a benchmark of the market for securities
                                                                backed by subprime mortgages made to borrowers with weak credit.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading1805">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse180" aria-expanded="true" aria-controls="collapse180">
                                                                Basis Point (often denoted as bp, bps or ‱) 
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse180" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading180">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A unit that is equal to 1/100th of 1%. It
                                                                is commonly used to denote the change in a financial instrument, or the difference
                                                                (spread) between two interest rates. Although it may be used in any case where
                                                                percentages are used, for convenience, it is most often used when quantities in
                                                                percentage points are small. It avoids the ambiguity between relative and absolute
                                                                discussions about rates.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading1816">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse181" aria-expanded="true" aria-controls="collapse181">
                                                                B&C (subprime) Credit 
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse181" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading181">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Borrower credit that generally does not meet the credit
                                                                underwriting guidelines of Fannie Mae or Freddie Mac, who purchase mostly “A” credit
                                                                loans. B&C credit is part of a grading system that ranges from A to D or F.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading1827">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse182" aria-expanded="true" aria-controls="collapse182">
                                                                B&C Loan 
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse182" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading182">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                See <a href="#heading209"><em>Subprime Loan</em></a>
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading1838">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse183" aria-expanded="true" aria-controls="collapse183">
                                                                CMBS – Commercial Mortgage-Backed Security 
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse183" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading183">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A type of mortgage-backed
                                                                security backed by mortgages on commercial rather than residential real estate. CMBS
                                                                issues are usually structured as multiple tranches, similar to CMOs, rather than typical
                                                                residential "pass-through."
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading1849">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse184" aria-expanded="true" aria-controls="collapse184">
                                                                CMO – Collateralized Mortgage Obligation 
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse184" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading184">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                MBS where payments on the underlying
                                                                collateral are partitioned to provide for different maturity classes, called tranches.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading1850">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse185" aria-expanded="true" aria-controls="collapse185">
                                                                Co-Issuance 
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse185" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading185">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                The practice of acquiring the servicing of a mortgage simultaneously
                                                                with the origination and sale of a loan. It is associated with the correspondent channel,
                                                                and thus considered a wholesale transaction and not strictly an origination. Some
                                                                lenders/originators report co-issuance as an origination, which can inflate that entity’s
                                                                loan volume.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading1861">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse186" aria-expanded="true" aria-controls="collapse186">
                                                                Collateralized Debt Obligations (CDOs)  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse186" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading186">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Types of asset-backed securities and
                                                                structured credit products, constructed from a portfolio of fixed-income assets. These
                                                                assets are divided into different tranches: senior tranches (rated AAA), mezzanine
                                                                tranches (AA to BB), and equity tranches (unrated). Losses are applied in reverse order
                                                                of seniority and so junior tranches offer higher coupons (interest rates) to compensate
                                                                for the added default risk. CDOs serve as an important funding vehicle for fixed-income
                                                                assets such as mortgage securities.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading1872">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse187" aria-expanded="true" aria-controls="collapse187">
                                                                Collateralized Mortgage Obligation (CMO)  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse187" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading187">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A financial debt vehicle, legally a special
                                                                purpose entity that is wholly separate from the institution(s) that create it. The entity is
                                                                the legal owner of a set of mortgages, called a pool. Investors in a CMO buy bonds
                                                                issued by the entity, and receive payments according to a defined set of rules. The
                                                                mortgages themselves are called the collateral, the bonds are called tranches (also
                                                                called classes), and the set of rules that dictates how money received from the collateral
                                                                will be distributed is called the structure. The legal entity, collateral, and structure are
                                                                collectively referred to as the deal.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading1883">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse188" aria-expanded="true" aria-controls="collapse188">
                                                                Combined Loan-to-Value (ratio) (CLTV)  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse188" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading188">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                The proportion of loans (secured by a
                                                                property) in relation to its value. When "Combined" is added, it indicates that all loans –
                                                                first and second lien – on the property have been considered in the calculation of the
                                                                percentage ratio. (See Loan-to-Value Ratio.)
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading1894">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse189" aria-expanded="true" aria-controls="collapse189">
                                                                Conduits  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse189" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading189">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Firms that purchase or package nonconforming mortgages in non-agency
                                                                MBS and ABS.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading1905">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse190" aria-expanded="true" aria-controls="collapse190">
                                                                Conforming Loan  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse190" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading190">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A loan that meets the requirements to be eligible for purchase or
                                                                securitization by Fannie Mae and Freddie Mac. These limits have temporarily been
                                                                increased in 2008 from $417,000 to $729,750 in some high priced markets.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading1916">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse191" aria-expanded="true" aria-controls="collapse191">
                                                                Correspondent Lender  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse191" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading191">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A lender who delivers loans to a (usually larger) lender
                                                                against prior price commitments. Unlike a broker, the correspondent lender funds the
                                                                loans with its own money.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading1927">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse192" aria-expanded="true" aria-controls="collapse192">
                                                                Credit Default Swap (CDS) 
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse192" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading192">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                The most widely traded credit derivative product, as a
                                                                bilateral contract under which two counterparties agree to isolate and separately trade
                                                                the credit risk of at least one third-party reference entity. Credit default swaps resemble
                                                                an insurance policy, as they can be used by debt owners to hedge, or insure—or
                                                                speculate—against credit events such as a default.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading1938">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse193" aria-expanded="true" aria-controls="collapse193">
                                                                Credit Derivative
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse193" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading193">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A financial instrument or derivative whose price and value derives
                                                                from the creditworthiness of the obligations of a third party, which is isolated and traded.
                                                                Credit default products are the most commonly traded credit derivative product and
                                                                include unfunded products such as credit default swaps and funded products such as
                                                                synthetic CDOs.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading1949">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse194" aria-expanded="true" aria-controls="collapse194">
                                                                Credit Enhancement
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse194" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading194">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A method to reduce credit risk by requiring collateral, letters of
                                                                credit, bond or mortgage insurance, corporate guarantees, or other arrangements to
                                                                provide an entity with some assurance that it will be recompensed to some degree in
                                                                the event of a financial loss.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading1950">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse195" aria-expanded="true" aria-controls="collapse195">
                                                                Credit Rating
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse195" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading195">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Borrowers are rated by lenders according to their credit-worthiness or
                                                                risk profile. Ratings are expressed as letter grades such as A, A-, B, C, D, based on
                                                                various factors such as payment history, foreclosures, and bankruptcies. Different
                                                                lenders may assign different ratings to the same borrower.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading1961">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse196" aria-expanded="true" aria-controls="collapse196">
                                                                Dealer
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse196" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading196">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                An investment banker or firm in the business of buying and selling MBS not as
                                                                an agent, but as a principal. Unlike brokers, dealers hold inventories of securities.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading1972">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse197" aria-expanded="true" aria-controls="collapse197">
                                                                Delinquency Ratio (or rates)
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse197" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading197">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                The ratio of the number of past due loans to total
                                                                number of loans serviced.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading1983">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse198" aria-expanded="true" aria-controls="collapse198">
                                                                FASB – Financial Accounting Standards Board
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse198" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading198">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A private entity created by the
                                                                accounting profession to develop and promulgate financial accounting standards and
                                                                practices. It derives authority from official recognition by the SEC and the American
                                                                Institute of CPAs.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading1994">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse199" aria-expanded="true" aria-controls="collapse199">
                                                                FHLB System
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse199" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading199">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                The three basic parts of the FHLBank System are the 12 banks, the
                                                                Federal Housing Finance Board, which regulates them, and the Office of Finance, which
                                                                acts as a liaison with Wall Street. Over 8,000 financial institutions are
                                                                member/shareholders in the FHLBank system.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2005">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse200" aria-expanded="true" aria-controls="collapse200">
                                                                Government Loans
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse200" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading200">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Loans insured or guaranteed by the government (VA/FHA).
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2016">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse201" aria-expanded="true" aria-controls="collapse201">
                                                                GSEs – Government-Sponsored Enterprises
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse201" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading201">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Privately owned organizations with
                                                                government charters and backing. The housing GSEs are Freddie Mac, Fannie Mae
                                                                and the Federal Home Loan Banks.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2027">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse202" aria-expanded="true" aria-controls="collapse202">
                                                                Guarantee Fee
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse202" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading202">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Compensation paid by a lender to Fannie Mae or Freddie Mac to the
                                                                guarantee of timely payments of principal and interest on mortgage-backed securities
                                                                (MBS) backed by the lender’s mortgage collateral.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2038">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse203" aria-expanded="true" aria-controls="collapse203">
                                                                HEL (Home-Equity Loan)
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse203" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading203">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A loan with a second-priority (2nd Trust) claim against a
                                                                property in the event that the borrower defaults. The lender who holds the second
                                                                mortgage gets paid only after the lender holding the first mortgage is paid.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2049">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse204" aria-expanded="true" aria-controls="collapse204">
                                                                HELOC (home-equity line of credit)
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse204" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading204">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A mortgage loan, usually in second position,
                                                                that allows the borrower to obtain cash drawn against the equity of his home, up to a
                                                                predetermined amount.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2051">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse205" aria-expanded="true" aria-controls="collapse205">
                                                                HMDA (Home Mortgage Disclosure Act)
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse205" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading205">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Federal legislation passed in 1989 that
                                                                requires certain lenders to compile and disclose demographic information on mortgage
                                                                and home improvement loans.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2062">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse206" aria-expanded="true" aria-controls="collapse206">
                                                                HUD – Department of Housing and Urban Development
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse206" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading206">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Government entity
                                                                responsible for the implementation and administration of housing and urban
                                                                development programs. Established 1965.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2073">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse207" aria-expanded="true" aria-controls="collapse207">
                                                                Hybrid ARMs
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse207" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading207">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Mortgages with an initial fixed rate period of 2 or 3 years (e.g. 2/28s
                                                                and 3/27s) and then turn into an adjustable rate loan with an annual adjustment in rate
                                                                and/or payment. Some allow an interest-only payment during the initial fixed rate period.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2084">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse208" aria-expanded="true" aria-controls="collapse208">
                                                                Interest-Only Mortgages (IOs)
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse208" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading208">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Mortgages on which for some period the monthly
                                                                mortgage payment consists of interest only. During that period, the loan balance
                                                                remains unchanged. These loans are also called deferred amortization mortgages. After
                                                                the interest-only period ends, the payment jumps to cover both the interest owned and
                                                                the principal and the interest rate may adjust based on a particular index, if it is an ARM.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2095">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse209" aria-expanded="true" aria-controls="collapse209">
                                                                Issuer
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse209" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading209">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                One who packages mortgages into securities and sells them to investors.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2106">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse210" aria-expanded="true" aria-controls="collapse210">
                                                                Loan Origination
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse210" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading210">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                The process by which a borrower applies for a new loan and a
                                                                lender processes that application. Origination generally includes all the steps from
                                                                taking a loan application through disbursal of funds (or declining the application).
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2117">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse211" aria-expanded="true" aria-controls="collapse211">
                                                                Loan Servicing
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse211" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading211">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Generally covers everything after disbursing the funds until the loan
                                                                is fully paid off, and is the process by which a mortgage servicer or subservicing firm
                                                                collects payments from borrowers. The level of service varies depending on the type
                                                                loan and the terms negotiated between the firm and the investor seeking its services.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2128">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse212" aria-expanded="true" aria-controls="collapse212">
                                                                Loan Modification
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse212" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading212">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A modification to an existing loan made by a lender in response to
                                                                a borrower's inability to repay the loan. Loan modifications can involve a reduction in the
                                                                interest rate on the loan, an extension of the length of the term of the loan, a different
                                                                type of loan or any combination of the three. A lender might be open to modifying a loan
                                                                because the cost of doing so is less than the cost of default.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2139">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse213" aria-expanded="true" aria-controls="collapse213">
                                                                Loss Mitigation
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse213" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading213">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Activities designed to reduce the likelihood of a mortgage investor or
                                                                insurer suffering financial losses on a mortgage, or the final dollar value of those losses
                                                                in the event of a borrower defaulting.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2140">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse214" aria-expanded="true" aria-controls="collapse214">
                                                                Mark to Market
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse214" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading214">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                The act of assigning a value to a position held in a financial
                                                                instrument based on the current market price for that instrument or similar instruments.
                                                                For example, the final value of a futures contract that expires in 9 months will not be
                                                                known until it expires. If it is marked to market, for accounting purposes it is assigned
                                                                the value that it would fetch in the open market currently.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2151">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse215" aria-expanded="true" aria-controls="collapse215">
                                                                MBS – Mortgage Backed Security 
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse215" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading215">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A security that represents an undivided interest in
                                                                a group of mortgages. Principal and interest payments from the individual mortgage
                                                                loans are grouped and paid out to the MBS holders.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2162">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse216" aria-expanded="true" aria-controls="collapse216">
                                                                Mortgage Pool 
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse216" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading216">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A group of mortgage loans with similar characteristics that are
                                                                combined to form mortgage-backed securities.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2173">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse217" aria-expanded="true" aria-controls="collapse217">
                                                                Mortgage Servicing Rights (MSR)  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse217" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading217">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                The right of a servicer to collect payments from
                                                                borrowers.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2184">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse218" aria-expanded="true" aria-controls="collapse218">
                                                                MRS  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse218" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading218">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Mortgage-Related Securities.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2195">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse219" aria-expanded="true" aria-controls="collapse219">
                                                                Non-Agency Market  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse219" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading219">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Supply and demand of mortgage securities issued by nongovernment-related firms.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2206">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse220" aria-expanded="true" aria-controls="collapse220">
                                                                Nonconforming Loan  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse220" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading220">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A mortgage that does not meet the purchase requirements of
                                                                Fannie Mae and Freddie Mac, because it is too large, has too high an LTV or for other
                                                                reasons such as poor credit or inadequate documentation.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2217">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse221" aria-expanded="true" aria-controls="collapse221">
                                                                Non-Recourse Debt  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse221" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading221">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A mortgage, often the case with residential mortgages, where
                                                                the lender may not go after borrower's assets to recoup his losses.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2228">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse222" aria-expanded="true" aria-controls="collapse222">
                                                                Origination (Loan)  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse222" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading222">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                The process of preparing, submitting and evaluating a loan
                                                                application, and then funding the mortgage.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2239">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse223" aria-expanded="true" aria-controls="collapse223">
                                                                Originator  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse223" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading223">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A lender who makes a loan to a borrower.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2240">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse224" aria-expanded="true" aria-controls="collapse224">
                                                                Outstanding Securities  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse224" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading224">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                The dollar volume of securities, usually MBS that are backed
                                                                by loans where borrowers are making payments.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2251">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse225" aria-expanded="true" aria-controls="collapse225">
                                                                Payment Option Mortgages   
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse225" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading225">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Adjustable-rate mortgages that allow borrowers to set
                                                                their own payment terms, on a monthly basis, such as:
                                                                <ul>
                                                                    <li> make a minimum payment lower than the amount needed to cover interest,</li>
                                                                    <li> pay only interest, deferring payment of the principal,</li>
                                                                    <li> make payments calculated to have the loan amortize in 15 or 30 years.</li>
                                                                </ul>
                                                                Interest typically is reset every month, and deferred interest payments are added
                                                                to principal through negative amortization.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2262">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse226" aria-expanded="true" aria-controls="collapse226">
                                                                PC   
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse226" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading226">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Freddie Mac’s brand for MBS.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2273">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse227" aria-expanded="true" aria-controls="collapse227">
                                                                Piggyback Loans   
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse227" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading227">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Two loans taken out at one time on a property—the first lien and a
                                                                second, usually taken to avoid payment of mortgage insurance.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2284">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse228" aria-expanded="true" aria-controls="collapse228">
                                                                Portfolio Lender   
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse228" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading228">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A lender who makes loans to keep in its portfolio and does not sell
                                                                to investors in the secondary market.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2295">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse229" aria-expanded="true" aria-controls="collapse229">
                                                                Private Conduit   
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse229" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading229">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A private market entity that purchases mortgages and issues
                                                                mortgage-backed securities.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2306">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse230" aria-expanded="true" aria-controls="collapse230">
                                                                Private Label Securities   
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse230" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading230">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Another term for “Non-Agency” securities.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2317">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse231" aria-expanded="true" aria-controls="collapse231">
                                                                Purchase-Money Loan   
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse231" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading231">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A loan used to purchase a home.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2328">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse232" aria-expanded="true" aria-controls="collapse232">
                                                                Real Estate Mortgage Investment Conduit (REMIC)  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse232" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading232">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A tax election used to create
                                                                investment-grade mortgage security that separates mortgage pools into different
                                                                maturity and risk classes. The securities of each class entitle investors to cash flows
                                                                structured differently from the payments on the underlying mortgages.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2339">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse233" aria-expanded="true" aria-controls="collapse233">
                                                                Real Estate Owned (REO)  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse233" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading233">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A class of property owned by a lender, typically a bank,
                                                                after an unsuccessful sale at a foreclosure auction. This is common because most of
                                                                the properties up for sale at these auctions are worth less than the total amount owed to
                                                                the bank.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2340">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse234" aria-expanded="true" aria-controls="collapse234">
                                                                Reg. AB (SEC regulation) MBS or ABS Sponsor  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse234" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading234">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                The party that “organizes and
                                                                initiates” a transaction by selling assets to the actual issuing entity, which is usually
                                                                created under a shelf registration.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2350">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse235" aria-expanded="true" aria-controls="collapse235">
                                                                REIT – Real Estate Investment Trust  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse235" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading235">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                An investment vehicle where title to real estate
                                                                assets is held and managed by one or more trustees who control acquisitions and
                                                                investments, similar to a mutual fund.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2361">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse236" aria-expanded="true" aria-controls="collapse236">
                                                                Re-MBS  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse236" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading236">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Re-securitizations of previously issued MBS.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2372">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse237" aria-expanded="true" aria-controls="collapse237">
                                                                Re-performing Loans  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse237" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading237">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Delinquent loans that have been “cured” or made current.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2383">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse238" aria-expanded="true" aria-controls="collapse238">
                                                                Replenishment Rates  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse238" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading238">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                The pace or rate at which lenders are able to add loans to
                                                                their servicing portfolios to replace runoff or loans paying off.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2394">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse239" aria-expanded="true" aria-controls="collapse239">
                                                                Residential Mortgage-Backed Securities (RMBS)  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse239" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading239">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                The type of MBS, which are
                                                                backed by mortgages on residential rather than commercial real estate.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2405">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse240" aria-expanded="true" aria-controls="collapse240">
                                                                Retail Lenders  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse240" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading240">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A lender who offers mortgage loans directly to the public, as distinct
                                                                from a wholesale lender who operates through mortgage brokers and correspondents.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2416">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse241" aria-expanded="true" aria-controls="collapse241">
                                                                Reverse Mortgage  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse241" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading241">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A loan available to seniors (62 and over), and is used to release
                                                                the home equity in the property as one lump sum or multiple payments. The
                                                                homeowner's obligation to repay the loan is deferred until the owner dies, the home is
                                                                sold, or the owner leaves (e.g., into aged care).
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2427">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse242" aria-expanded="true" aria-controls="collapse242">
                                                                Risk-Based Pricing  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse242" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading242">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A methodology where the interest rate on a loan is determined
                                                                not only by the time value of money, but also by the lender's estimate of the probability
                                                                that the borrower will default on the loan. This assumes that different borrowers will pay
                                                                different rates.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2438">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse243" aria-expanded="true" aria-controls="collapse243">
                                                                Scratch & Dent Loans  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse243" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading243">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Loans that did not meet investor criteria in another MBS
                                                                program (conduit fallout), re-performing and non-performing loans (usually repurchased
                                                                from previous transactions).
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2449">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse244" aria-expanded="true" aria-controls="collapse244">
                                                                Secondary/Mezzanine Financing  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse244" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading244">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A funding method using a loan secured by a
                                                                second mortgage or a property. Sometimes used to refer to any financing technique
                                                                other than equity and first mortgage debt.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2450">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse245" aria-expanded="true" aria-controls="collapse245">
                                                                Securitization  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse245" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading245">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                The process of pooling loans into mortgage-backed securities for sale
                                                                into the secondary market.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2461">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse246" aria-expanded="true" aria-controls="collapse246">
                                                                Securitization Rates  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse246" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading246">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                The percentage or share of new mortgage originations that are
                                                                funneled into securities.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2472">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse247" aria-expanded="true" aria-controls="collapse247">
                                                                Seller-Servicer  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse247" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading247">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A term used by Fannie Mae and Freddie Mac for a mortgage banker
                                                                or other entity that has met the requirements necessary to sell and service mortgages
                                                                for the GSEs.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2483">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse248" aria-expanded="true" aria-controls="collapse248">
                                                                Servicing Outstanding  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse248" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading248">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                The unpaid portion (principle) of serviced loans.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2494">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse249" aria-expanded="true" aria-controls="collapse249">
                                                                Shelf Registration  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse249" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading249">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Securities and Exchange Commission Rule 415 allowing
                                                                securities issuers to file registration statements and sell their securities at a later date.
                                                                Issuers are allowed to register securities they expect to sell within two years of the initial
                                                                effective date, without having to file additional registration statements with each offering.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2505">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse250" aria-expanded="true" aria-controls="collapse250">
                                                                Short Sale  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse250" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading250">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                When a bank or mortgage lender agrees to discount a loan balance due to
                                                                an economic hardship on the part of a borrower. The home owner/debtor sells the
                                                                mortgaged property for less than the outstanding balance of the loan, and turns over the
                                                                proceeds of the sale to the lender in full satisfaction of the debt.  
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2516">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse251" aria-expanded="true" aria-controls="collapse251">
                                                                Stated Income Loan  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse251" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading251">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A mortgage where the lender does not verify the borrower's
                                                                income but it is taken at their word. These loans are sometimes called "liar loans."
                                                                Stated income loans have been extended to customers with a wide range of credit
                                                                histories, including subprime borrowers. The lack of verification makes these loans
                                                                particularly simple targets for fraud. 
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2527">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse252" aria-expanded="true" aria-controls="collapse252">
                                                                Stripped Securities (SMBS)  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse252" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading252">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Securities created by “stripping” or separating the
                                                                principal and interest payments from the underlying pool of mortgages into classes of
                                                                securities, with each receiving a different proportion of the principal and interest
                                                                payments.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2538">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse253" aria-expanded="true" aria-controls="collapse253">
                                                                Structured Finance  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse253" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading253">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A broad term used to describe a sector of finance that was
                                                                created to help transfer risk using complex legal and corporate entities.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2549">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse254" aria-expanded="true" aria-controls="collapse254">
                                                                Subprime Loans  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse254" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading254">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Loans made to those who have impaired credit. Generally have
                                                                higher interest rates than prime loans. Such loans are tied to borrowers’ credit ratings,
                                                                expressed as letter grades, such as A-, B, D. Prime loans’ credit is most often A.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2550">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse255" aria-expanded="true" aria-controls="collapse255">
                                                                Sub-Servicer (or Primary Servicer)  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse255" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading255">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                In some cases the borrower may deal with a
                                                                primary servicer that may also be the loan originator or mortgage banker who sourced 
                                                                24 Mortgage 101 – Industry Terms
                                                                the loan. The primary servicer maintains the direct borrower contact, and the master
                                                                servicer may sub-contract certain loan administration duties to the primary or subservicer. Servicers are normally compensated by receiving a percentage of the unpaid
                                                                balance on the loans they service.                                                                
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2561">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse256" aria-expanded="true" aria-controls="collapse256">
                                                                Tranche  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse256" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading256">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A level or class of investment interest in a CMO or REMIC security,
                                                                differentiated by maturity, interest rate, and/or accrual structure.                                                         
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2572">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse257" aria-expanded="true" aria-controls="collapse257">
                                                                Upside-Down Mortgage (also “Underwater”)  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse257" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading257">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                When the remaining mortgage
                                                                balance is higher than the actual value of a property backing the loan.                                                     
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2583">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse258" aria-expanded="true" aria-controls="collapse258">
                                                                VA (Department of Veterans Affairs) Loan  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse258" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading258">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A mortgage with no down payment
                                                                requirement, available only to ex-servicemen and women, on which the VA-approvedlender is insured against loss by the Veterans Administration.                                                 
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2594">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse259" aria-expanded="true" aria-controls="collapse259">
                                                                Warehouse Lender
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse259" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading259">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A short-term lender for mortgage bankers. Using the note as
                                                                collateral the warehouse lender provides interim financing before a mortgage is sold to
                                                                a permanent investor.                                                     
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2605">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse260" aria-expanded="true" aria-controls="collapse260">
                                                                Wholesale Lender
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse260" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading260">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A lender who purchases loans from mortgage brokers or
                                                                correspondents. The mortgage broker or correspondent initiates the transaction, takes
                                                                the borrower’s application, and processes the loan.                                             
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading2616">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse261" aria-expanded="true" aria-controls="collapse261">
                                                                Wholesale Origination
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse261" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading261">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A loan origination strategy by which loans are purchased
                                                                from mortgage bankers or brokers, or other originators such as banks, thrifts, etc. The
                                                                loans may be purchased prior to closing, at or after closing, depending on the
                                                                arrangements the parties have made. This activity enables a lender to acquire
                                                                mortgage-servicing rights without incurring the fixed costs of retail or direct lending.                                           
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                        </section>   
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


@stop
