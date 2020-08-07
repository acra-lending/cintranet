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
            <li class="breadcrumb-item"><a href="/">Learning</a></li>
            <li class="breadcrumb-item"><a href="/">Courses</a></li>
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
                                                            Assessment
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading10">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A local tax levied against a property for a specific purpose such as a sewer or
                                                            streetlights.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading11">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="true" aria-controls="collapse11">
                                                            Assignment
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The transfer of a mortgage from one person to another.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading12">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="true" aria-controls="collapse12">
                                                            Balloon Mortgage
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading12">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading13">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="true" aria-controls="collapse13">
                                                            Balloon Payment
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading13">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The final lump sum paid at the maturity date of a balloon mortgage.
                                                        </p>
                                                    </div>
                                                    </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading14">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse14" aria-expanded="true" aria-controls="collapse14">
                                                            Blanket Mortgage
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading14">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A mortgage covering at least two pieces of real estate as security for the same
                                                            mortgage.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading15">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse15" aria-expanded="true" aria-controls="collapse15">
                                                            Borrower (Mortgagor)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading15">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            One who applies for and receives a loan in the form of a mortgage with the intention of
                                                            repaying the loan in full.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading16">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse16" aria-expanded="true" aria-controls="collapse16">
                                                            Bridge Loan
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading16">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading17">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse17" aria-expanded="true" aria-controls="collapse17">
                                                            Broker
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading17">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading18">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse18" aria-expanded="true" aria-controls="collapse18">
                                                            Buy Down
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading18">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading19">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse19" aria-expanded="true" aria-controls="collapse19">
                                                            Cash Flow
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading19">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading20">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse20" aria-expanded="true" aria-controls="collapse20">
                                                            Caps (interest)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse20" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading20">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Consumer safeguards, which limit the amount of change to the interest rate for an
                                                            adjustable rate mortgage.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading21">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse21" aria-expanded="true" aria-controls="collapse21">
                                                            Change Frequency
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse21" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading21">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The frequency (in months) of payment and/or interest rate changes in an adjustable rate
                                                            mortgage (ARM).
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading22">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse22" aria-expanded="true" aria-controls="collapse22">
                                                            Closing
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse22" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading22">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading23">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse23" aria-expanded="true" aria-controls="collapse23">
                                                            Closing Costs
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse23" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading23">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading24">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse24" aria-expanded="true" aria-controls="collapse24">
                                                            Consumer Reporting Agency (or Bureau)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse24" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading24">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading25">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse25" aria-expanded="true" aria-controls="collapse25">
                                                            Contract Sale or Deed:
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse25" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading25">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A contract between purchaser and a seller of real estate to convey title after certain
                                                            conditions have been met. It is a form of installment sale.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading26">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse26" aria-expanded="true" aria-controls="collapse26">
                                                            Conventional Loan
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse26" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading26">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A mortgage not insured by FHA or guaranteed by VA.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading27">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse27" aria-expanded="true" aria-controls="collapse27">
                                                            Conversion Clause
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse27" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading27">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading28">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse28" aria-expanded="true" aria-controls="collapse28">
                                                            Credit Report
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse28" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading28">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A report documenting the credit history and current status of a borrower's credit
                                                            standing.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading29">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse29" aria-expanded="true" aria-controls="collapse29">
                                                            Credit Risk Score
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse29" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading29">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading30">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse30" aria-expanded="true" aria-controls="collapse30">
                                                            Debt-to-Income Ratio
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse30" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading30">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading31">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse31" aria-expanded="true" aria-controls="collapse31">
                                                            Deed of Trust
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse31" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading31">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            In many states, this document is used in place of a mortgage to secure the payment of
                                                            a note.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading32">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse32" aria-expanded="true" aria-controls="collapse32">
                                                            Default
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse32" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading32">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Failure to meet legal obligations in a contract specifically failure to make the monthly
                                                            payments on a mortgage.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading33">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse33" aria-expanded="true" aria-controls="collapse33">
                                                            Deferred Interest
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse33" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading33">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading34">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse34" aria-expanded="true" aria-controls="collapse34">
                                                            Delinquency
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse34" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading34">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Failure to make payments on time. This can lead to foreclosure.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading35">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse35" aria-expanded="true" aria-controls="collapse35">
                                                            Department of Veterans Affairs (VA)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse35" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading35">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            An independent agency of the federal government, which guarantees long-term low-orno-down payment, mortgages to eligible veterans.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading36">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse36" aria-expanded="true" aria-controls="collapse36">
                                                            Down Payment
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse36" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading36">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Money paid to make up the difference between the purchase price and the mortgage
                                                            amount.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading37">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse37" aria-expanded="true" aria-controls="collapse37">
                                                            Earnest Money
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse37" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading37">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Money given by a buyer to a seller as part of the purchase price to bind a transaction or
                                                            assure payment.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading38">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse38" aria-expanded="true" aria-controls="collapse38">
                                                            Entitlement
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse38" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading38">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The VA home loan benefit is called an entitlement (i.e. entitlement for a VA guaranteed
                                                            home loan). This is also known as eligibility.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading39">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse39" aria-expanded="true" aria-controls="collapse39">
                                                            Equal Credit Opportunity Act (ECOA)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse39" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading39">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading40">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse40" aria-expanded="true" aria-controls="collapse40">
                                                            Equity
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse40" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading40">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading41">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse41" aria-expanded="true" aria-controls="collapse41">
                                                            Escrow
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse41" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading41">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            An account held by the lender into which the homebuyer pays money for tax or
                                                            insurance payments. Also earnest deposits held pending loan closing.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading42">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse42" aria-expanded="true" aria-controls="collapse42">
                                                            Escrow Disbursements
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse42" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading42">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The use of escrow funds to pay real estate taxes hazard insurance mortgage insurance
                                                            and other property expenses as they become due.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading43">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse43" aria-expanded="true" aria-controls="collapse43">
                                                            Escrow Payment
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse43" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading43">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The part of a mortgagor hazard insurance mortgage insurance lease payments and
                                                            other items as they become due.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading44">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse44" aria-expanded="true" aria-controls="collapse44">
                                                            Federal Home Loan Mortgage Corporation (FHLMC) "Freddie Mac"
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse44" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading44">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A government sponsored entity that purchases conventional mortgage from insured
                                                            depository institutions and HUD-approved mortgage bankers.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading45">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse45" aria-expanded="true" aria-controls="collapse45">
                                                            Federal Housing Administration (FHA)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse45" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading45">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading46">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse46" aria-expanded="true" aria-controls="collapse46">
                                                            Federal National Mortgage Association (FNMA) "Fannie Mae"
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse46" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading46">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading47">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse47" aria-expanded="true" aria-controls="collapse47">
                                                            FHA Loan
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse47" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading47">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading48">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse48" aria-expanded="true" aria-controls="collapse48">
                                                            FHA Mortgage Insurance
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse48" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading48">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading49">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse49" aria-expanded="true" aria-controls="collapse49">
                                                            FHLMC
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse49" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading49">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading50">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse50" aria-expanded="true" aria-controls="collapse50">
                                                            First Mortgage

                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse50" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading50">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The primary lien against a property.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading51">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse51" aria-expanded="true" aria-controls="collapse51">
                                                            Fixed Installment
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse51" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading51">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The monthly payment due on a mortgage loan including payment of both principal and
                                                            interest.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading52">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse52" aria-expanded="true" aria-controls="collapse52">
                                                            Fixed Rate Mortgage
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse52" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading52">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The mortgage interest rate will remain the same on these mortgages throughout the
                                                            term of the mortgage for the original borrower.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading53">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse53" aria-expanded="true" aria-controls="collapse53">
                                                            Fully Amortized ARM
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse53" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading53">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            An adjustable rate mortgage (ARM) with a monthly payment that is sufficient to amortize
                                                            the remaining balance at the interest accrual rate over the amortization term.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading54">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse54" aria-expanded="true" aria-controls="collapse54">
                                                            FNMA
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse54" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading54">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading55">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse55" aria-expanded="true" aria-controls="collapse55">
                                                            Foreclosure
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse55" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading55">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading56">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse56" aria-expanded="true" aria-controls="collapse56">
                                                            Guaranty
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse56" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading56">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A promise by one party to pay a debt or perform an obligation contracted by another if
                                                            the original party fails to pay or perform according to a contract.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading57">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse56" aria-expanded="true" aria-controls="collapse56">
                                                            Guarantee Mortgage
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse56" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading56">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A mortgage that is guaranteed by a third party.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading58">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse58" aria-expanded="true" aria-controls="collapse58">
                                                            Hazard Insurance
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse58" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading58">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A form of insurance in which the insurance company protects the insured from specified
                                                            losses such as fire windstorm and the like.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading59">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse59" aria-expanded="true" aria-controls="collapse59">
                                                            Housing Expenses-to-Income Ratio
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse59" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading59">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The ratio expressed as a percentage which results when a borrower's housing
                                                            expenses are divided by his/her gross monthly income. See <a href="#heading30"><em>debt-to-income ratio.</em></a>
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading60">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse60" aria-expanded="true" aria-controls="collapse60">
                                                            HUD-1 Statement
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse60" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading60">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading61">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse61" aria-expanded="true" aria-controls="collapse61">
                                                            Impound
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse61" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading61">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading62">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse62" aria-expanded="true" aria-controls="collapse62">
                                                            Index
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse62" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading62">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading63">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse63" aria-expanded="true" aria-controls="collapse63">
                                                            Indexed Rate
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse63" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading63">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading64">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse64" aria-expanded="true" aria-controls="collapse64">
                                                            Initial Interest Rate
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse64" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading64">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading65">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse65" aria-expanded="true" aria-controls="collapse65">
                                                            Installment
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse65" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading65">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The regular periodic payment that a borrower agrees to make to a lender.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading66">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse66" aria-expanded="true" aria-controls="collapse66">
                                                            Insured Mortgage
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse66" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading66">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A mortgage that is protected by the Federal Housing Administration (FHA) or by private
                                                            mortgage insurance (MI).                                                            
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading67">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse67" aria-expanded="true" aria-controls="collapse67">
                                                            Interest
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse67" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading67">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The fee charged for borrowing money.                                                          
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading68">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse68" aria-expanded="true" aria-controls="collapse68">
                                                            Interest Accrual Rate
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse68" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading68">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The percentage rate at which interest accrues on the mortgage. In most cases it is also,
                                                            the rate used to calculate the monthly payments.                                                   
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading69">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse69" aria-expanded="true" aria-controls="collapse69">
                                                            Interest Rate Buy down Plan
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse69" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading69">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading70">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse70" aria-expanded="true" aria-controls="collapse70">
                                                            Interest Rate Ceiling
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse70" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading70">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            For an adjustable rate mortgage, (ARM) the maximum interest rate as specified in
                                                            the mortgage note.                                               
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading71">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse71" aria-expanded="true" aria-controls="collapse71">
                                                            Interest Rate Floor
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse71" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading71">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            For an adjustable rate mortgage, (ARM) the minimum interest rate as specified in the
                                                            mortgage note.                                             
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading72">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse72" aria-expanded="true" aria-controls="collapse72">
                                                            Investor
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse72" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading72">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A money source for a lender.                                            
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading73">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse73" aria-expanded="true" aria-controls="collapse73">
                                                            Jumbo Loan
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse73" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading73">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading74">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse74" aria-expanded="true" aria-controls="collapse74">
                                                            Late Charge
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse74" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading74">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The penalty a borrower must pay when a payment is made a stated number of days
                                                            after the due date.                                              
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading75">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse75" aria-expanded="true" aria-controls="collapse75">
                                                            Liabilities
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse75" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading75">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A person's financial obligations. Liabilities include long term and short-term debt.                                            
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading75">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse75" aria-expanded="true" aria-controls="collapse75">
                                                            Lien
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse75" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading75">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A claim upon a piece of property for the payment or satisfaction of a debt or obligation.                                          
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading76">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse76" aria-expanded="true" aria-controls="collapse76">
                                                            Lifetime Payment Cap
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse76" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading76">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            For an adjustable rate mortgage, (ARM) a limit on the amount that payments can
                                                            increase or decrease over the life of the mortgage.                                         
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading77">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse77" aria-expanded="true" aria-controls="collapse77">
                                                            Lifetime Rate Cap
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse77" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading77">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            For an adjustable rate mortgage, (ARM) a limit on the amount that the interest rate can
                                                            increase or decrease over the life of the loan. See <a href="#heading20"><em>caps.</em></a>                                      
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading78">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse78" aria-expanded="true" aria-controls="collapse78">
                                                            Loan
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse78" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading78">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A sum of borrowed money (principal) that is generally repaid with interest.                                    
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading79">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse79" aria-expanded="true" aria-controls="collapse79">
                                                            Loan to Value Ratio
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse79" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading79">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The relationship between the amount of the mortgage loan and the appraised value of
                                                            the property expressed as a percentage.                                 
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading80">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse80" aria-expanded="true" aria-controls="collapse80">
                                                            Lock
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse80" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading80">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A lender's guarantee that the mortgage rate quoted will be good for a specific number of
                                                            days from the day of application.                               
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading81">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse81" aria-expanded="true" aria-controls="collapse81">
                                                            Margin
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse81" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading81">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The amount a lender adds to the index on an adjustable rate mortgage to establish the
                                                            adjusted interest rate.                          
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading82">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse82" aria-expanded="true" aria-controls="collapse82">
                                                            Market Value
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse82" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading82">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading83">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse83" aria-expanded="true" aria-controls="collapse83">
                                                            Maturity
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse83" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading83">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The date on which the principal balance of a loan becomes due and payable.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading84">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse84" aria-expanded="true" aria-controls="collapse84">
                                                            Monthly Fixed Installment
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse84" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading84">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading85">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse85" aria-expanded="true" aria-controls="collapse85">
                                                            Mortgage
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse85" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading85">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A legal document that pledges a property to the lender as security for payment of a
                                                            debt.                  
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading86">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse86" aria-expanded="true" aria-controls="collapse86">
                                                            Mortgage Banker
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse86" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading86">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A company that originates mortgages for resale in the secondary mortgage market.               
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading87">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse87" aria-expanded="true" aria-controls="collapse87">
                                                            Mortgage Broker
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse87" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading87">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            An individual or company that charges a service fee to bring borrowers and lenders
                                                            together for the purpose of loan origination.            
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading88">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse88" aria-expanded="true" aria-controls="collapse88">
                                                            Mortgagee
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse88" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading88">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The lender.          
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading89">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse89" aria-expanded="true" aria-controls="collapse89">
                                                            Mortgage Insurance
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse89" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading89">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Money paid to insure the mortgage when the down payment is less than 20 percent.       
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading90">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse90" aria-expanded="true" aria-controls="collapse90">
                                                            Negative Amortization
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse90" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading90">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading91">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse91" aria-expanded="true" aria-controls="collapse91">
                                                            One Year Adjustable Rate Mortgage
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse91" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading91">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Mortgage where the annual rate changes yearly. The rate is usually based on
                                                            movements of a published index plus a specified margin chosen by the lender.  
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading92">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse92" aria-expanded="true" aria-controls="collapse92">
                                                            Origination Fee
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse92" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading92">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading93">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse93" aria-expanded="true" aria-controls="collapse93">
                                                            Payment Change Date
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse93" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading93">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading94">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse94" aria-expanded="true" aria-controls="collapse94">
                                                            Periodic Payment Cap
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse94" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading94">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A limit on the amount that payments can increase or decrease during any oneadjustment period.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading95">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse95" aria-expanded="true" aria-controls="collapse95">
                                                            Periodic Rate Cap
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse95" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading95">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A limit on the amount that the interest rate can increase or decrease during any one
                                                            adjustment period regardless of how high or low the index might be.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading96">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse96" aria-expanded="true" aria-controls="collapse96">
                                                            PITI
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse96" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading96">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Principal interest taxes and insurance. Also called monthly housing expense.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading97">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse97" aria-expanded="true" aria-controls="collapse97">
                                                            Points (Loan Discount Points)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse97" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading97">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Prepaid interest assessed at closing by the lender. Each point is equal to 1 percent of
                                                            the loan amount (e.g. two points on a $100000 mortgage would cost $2000).
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading98">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse98" aria-expanded="true" aria-controls="collapse98">
                                                            Power of Attorney
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse98" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading98">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A legal document authorizing one person to act on behalf of another.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading99">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse99" aria-expanded="true" aria-controls="collapse99">
                                                            Preapproval
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse99" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading99">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The process of determining how much money you will be eligible to borrow before you
                                                            apply for a loan.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading100">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse100" aria-expanded="true" aria-controls="collapse100">
                                                            Prepayment
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse100" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading100">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A privilege in a mortgage permitting the borrower to make payments in advance of their
                                                            due date.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading101">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse101" aria-expanded="true" aria-controls="collapse101">
                                                            Prepayment Penalty
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse101" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading101">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Money charged for an early repayment of debt. Prepayment penalties are allowed in
                                                            some form (but not necessarily imposed) in many states. 
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading102">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse102" aria-expanded="true" aria-controls="collapse102">
                                                            Private Mortgage Insurance (PMI)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse102" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading102">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading103">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse103" aria-expanded="true" aria-controls="collapse103">
                                                            Rate Lock
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse103" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading103">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A commitment issued by a lender to a borrower or another mortgage originator
                                                            guaranteeing a specified interest rate and lender costs for a specified period of time.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading104">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse104" aria-expanded="true" aria-controls="collapse104">
                                                            Realtor®
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse104" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading104">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A real estate broker or an associate holding active membership in a local real estate
                                                            board affiliated with the National Association of Realtors.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading105">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse105" aria-expanded="true" aria-controls="collapse105">
                                                            Real Estate Agent
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse105" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading105">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A person licensed to negotiate and transact the sale of real estate on behalf of the
                                                            property owner.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading106">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse106" aria-expanded="true" aria-controls="collapse106">
                                                            Real Estate Settlement Procedures Act (RESPA)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse106" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading106">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A consumer protection law that requires lenders to give borrowers advance notice of
                                                            closing costs.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading107">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse107" aria-expanded="true" aria-controls="collapse107">
                                                            Rescission
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse107" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading107">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading108">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse108" aria-expanded="true" aria-controls="collapse108">
                                                            Recording Fees
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse108" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading108">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Money paid to the lender for recording a home sale with the local authorities thereby
                                                            making it part of the public records.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading109">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse109" aria-expanded="true" aria-controls="collapse109">
                                                            Refinance
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse109" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading109">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Obtaining a new mortgage loan on a property already owned often to replace existing
                                                            loans on the property.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading110">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse110" aria-expanded="true" aria-controls="collapse110">
                                                            RESPA
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse110" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading110">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading111">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse111" aria-expanded="true" aria-controls="collapse111">
                                                            Revolving Liability
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse111" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading111">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A credit arrangement such as a credit card that allows a customer to borrow against a
                                                            pre-approved line of credit when purchasing goods and services.  
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading112">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse112" aria-expanded="true" aria-controls="collapse112">
                                                            Satisfaction of Mortgage
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse112" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading112">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The document issued by the mortgagee when the mortgage loan is paid in full. Also
                                                            called a "release of mortgage." 
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading113">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse113" aria-expanded="true" aria-controls="collapse113">
                                                            Second Mortgage
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse113" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading113">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A mortgage made subsequent to another mortgage and subordinate to the first one.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading114">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse114" aria-expanded="true" aria-controls="collapse114">
                                                            Secondary Mortgage Market
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse114" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading114">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The place where primary mortgage lenders sell the mortgages they make to obtain
                                                            more funds to originate more new loans. It provides liquidity for the lenders.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading115">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse115" aria-expanded="true" aria-controls="collapse115">
                                                            Security
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse115" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading115">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            The property that will be pledged as collateral for a loan.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading116">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse116" aria-expanded="true" aria-controls="collapse116">
                                                            Servicer
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse116" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading116">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading117">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse117" aria-expanded="true" aria-controls="collapse117">
                                                            Servicing
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse117" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading117">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            All the steps and operations a lender performs to keep a loan in good standing such as
                                                            collection of payments payment of taxes insurance property inspections and the like.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading118">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse118" aria-expanded="true" aria-controls="collapse118">
                                                            Sweat Equity
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse118" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading118">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Equity created by a purchaser performing work on a property being purchased.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading119">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse119" aria-expanded="true" aria-controls="collapse119">
                                                            Third Party Origination
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse119" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading119">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading120">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse120" aria-expanded="true" aria-controls="collapse120">
                                                            Title
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse120" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading120">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A document that gives evidence of an individual's ownership of property.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading121">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse121" aria-expanded="true" aria-controls="collapse121">
                                                            Title Insurance
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse121" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading121">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading121">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse121" aria-expanded="true" aria-controls="collapse121">
                                                            Title Search
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse121" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading121">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            An examination of municipal records to determine the legal ownership of property.
                                                            Usually is performed by a title company.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading122">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse122" aria-expanded="true" aria-controls="collapse122">
                                                            Total Expense Ratio
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse122" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading122">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            Total obligations as a percentage of gross monthly income including monthly housing
                                                            expenses plus other monthly debts.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading123">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse123" aria-expanded="true" aria-controls="collapse123">
                                                            Truth in Lending
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse123" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading123">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A federal law requiring disclosure of the Annual Percentage Rate to homebuyers shortly
                                                            after they apply for the loan. Also known as Regulation Z.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading124">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse124" aria-expanded="true" aria-controls="collapse124">
                                                            Underwriting
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse124" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading124">
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
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading125">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse125" aria-expanded="true" aria-controls="collapse125">
                                                            VA Loan
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse125" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading125">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A long-term low-or-no down payment loan guaranteed by the Department of Veterans
                                                            Affairs. Restricted to individuals qualified by military service or other entitlements.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading126">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse126" aria-expanded="true" aria-controls="collapse126">
                                                            Verification of Deposit (VOD)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse126" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading126">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A document signed by the borrower's financial institution verifying the status and
                                                            balance of his/her financial accounts.
                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading127">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse127" aria-expanded="true" aria-controls="collapse127">
                                                            Verification of Employment (VOE)
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse127" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading127">
                                                    <div class="panel-body px-3 mb-4">
                                                        <p>
                                                            A document signed by the borrower's employer verifying his/her position and salary.
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
                                
                                <div class="tab-pane fade" id="nav-finance-terms" role="tabpanel" aria-labelledby="nav-finance-terms-tab">
                                    <div class="card-body">
                                        <!-- /.card-header -->
                                        <!-- Mortgage Finance Terms -->
                                        <section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
                                            <div class="container">
                                        
                                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading128">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse128" aria-expanded="true" aria-controls="collapse128">
                                                                20-20 Mortgages
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse128" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading128">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading129">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse129" aria-expanded="true" aria-controls="collapse129">
                                                                40-Year Mortgages
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse129" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading129">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading130">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse130" aria-expanded="true" aria-controls="collapse130">
                                                                Agency Market
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse130" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading130">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Supply and demand of mortgage securitization activity by Fannie
                                                                Mae, Freddie Mac and Ginnie Mae.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading131">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse131" aria-expanded="true" aria-controls="collapse131">
                                                                Agency Securities
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse131" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading131">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading132">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse132" aria-expanded="true" aria-controls="collapse132">
                                                                Alt A (Alternative A) Loans
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse132" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading132">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading133">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse133" aria-expanded="true" aria-controls="collapse133">
                                                                Asset-Backed Securities
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse133" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading133">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading134">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse134" aria-expanded="true" aria-controls="collapse134">
                                                                Asset-Backed Securities Index 
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse134" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading134">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading135">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse135" aria-expanded="true" aria-controls="collapse135">
                                                                Basis Point (often denoted as bp, bps or ‱) 
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse135" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading135">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading136">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse136" aria-expanded="true" aria-controls="collapse136">
                                                                B&C (subprime) Credit 
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse136" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading136">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading137">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse137" aria-expanded="true" aria-controls="collapse137">
                                                                B&C Loan 
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse137" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading137">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                See <a href="#heading209"><em>Subprime Loan</em></a>
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading138">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse138" aria-expanded="true" aria-controls="collapse138">
                                                                CMBS – Commercial Mortgage-Backed Security 
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse138" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading138">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading139">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse139" aria-expanded="true" aria-controls="collapse139">
                                                                CMO – Collateralized Mortgage Obligation 
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse139" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading139">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                MBS where payments on the underlying
                                                                collateral are partitioned to provide for different maturity classes, called tranches.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading140">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse140" aria-expanded="true" aria-controls="collapse140">
                                                                Co-Issuance 
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse140" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading140">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading141">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse141" aria-expanded="true" aria-controls="collapse141">
                                                                Collateralized Debt Obligations (CDOs)  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse141" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading141">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading142">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse142" aria-expanded="true" aria-controls="collapse142">
                                                                Collateralized Mortgage Obligation (CMO)  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse142" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading142">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading143">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse143" aria-expanded="true" aria-controls="collapse143">
                                                                Combined Loan-to-Value (ratio) (CLTV)  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse143" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading143">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading144">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse144" aria-expanded="true" aria-controls="collapse144">
                                                                Conduits  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse144" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading144">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Firms that purchase or package nonconforming mortgages in non-agency
                                                                MBS and ABS.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading145">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse145" aria-expanded="true" aria-controls="collapse145">
                                                                Conforming Loan  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse145" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading145">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading146">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse146" aria-expanded="true" aria-controls="collapse146">
                                                                Correspondent Lender  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse146" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading146">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading147">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse147" aria-expanded="true" aria-controls="collapse147">
                                                                Credit Default Swap (CDS) 
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse147" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading147">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading148">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse148" aria-expanded="true" aria-controls="collapse148">
                                                                Credit Derivative
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse148" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading148">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading149">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse149" aria-expanded="true" aria-controls="collapse149">
                                                                Credit Enhancement
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse149" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading149">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading150">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse150" aria-expanded="true" aria-controls="collapse150">
                                                                Credit Rating
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse150" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading150">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading151">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse151" aria-expanded="true" aria-controls="collapse151">
                                                                Dealer
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse151" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading151">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                An investment banker or firm in the business of buying and selling MBS not as
                                                                an agent, but as a principal. Unlike brokers, dealers hold inventories of securities.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading152">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse152" aria-expanded="true" aria-controls="collapse152">
                                                                Delinquency Ratio (or rates)
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse152" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading152">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                The ratio of the number of past due loans to total
                                                                number of loans serviced.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading153">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse153" aria-expanded="true" aria-controls="collapse153">
                                                                FASB – Financial Accounting Standards Board
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse153" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading153">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading154">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse154" aria-expanded="true" aria-controls="collapse154">
                                                                FHLB System
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse154" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading154">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading155">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse155" aria-expanded="true" aria-controls="collapse155">
                                                                Government Loans
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse155" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading155">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Loans insured or guaranteed by the government (VA/FHA).
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading156">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse156" aria-expanded="true" aria-controls="collapse156">
                                                                GSEs – Government-Sponsored Enterprises
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse156" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading156">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading157">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse157" aria-expanded="true" aria-controls="collapse157">
                                                                Guarantee Fee
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse157" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading157">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading158">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse158" aria-expanded="true" aria-controls="collapse158">
                                                                HEL (Home-Equity Loan)
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse158" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading158">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading159">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse159" aria-expanded="true" aria-controls="collapse159">
                                                                HELOC (home-equity line of credit)
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse159" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading159">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading161">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse161" aria-expanded="true" aria-controls="collapse161">
                                                                HMDA (Home Mortgage Disclosure Act)
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse161" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading161">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading162">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse162" aria-expanded="true" aria-controls="collapse162">
                                                                HUD – Department of Housing and Urban Development
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse162" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading162">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading163">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse163" aria-expanded="true" aria-controls="collapse163">
                                                                Hybrid ARMs
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse163" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading163">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading164">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse164" aria-expanded="true" aria-controls="collapse164">
                                                                Interest-Only Mortgages (IOs)
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse164" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading164">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading165">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse165" aria-expanded="true" aria-controls="collapse165">
                                                                Issuer
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse165" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading165">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                One who packages mortgages into securities and sells them to investors.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading166">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse166" aria-expanded="true" aria-controls="collapse166">
                                                                Loan Origination
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse166" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading166">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading167">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse167" aria-expanded="true" aria-controls="collapse167">
                                                                Loan Servicing
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse167" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading167">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading168">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse168" aria-expanded="true" aria-controls="collapse168">
                                                                Loan Modification
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse168" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading168">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading169">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse169" aria-expanded="true" aria-controls="collapse169">
                                                                Loss Mitigation
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse169" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading169">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading170">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse170" aria-expanded="true" aria-controls="collapse170">
                                                                Mark to Market
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse170" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading170">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading171">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse171" aria-expanded="true" aria-controls="collapse171">
                                                                MBS – Mortgage Backed Security 
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse171" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading171">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading172">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse172" aria-expanded="true" aria-controls="collapse172">
                                                                Mortgage Pool 
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse172" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading172">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A group of mortgage loans with similar characteristics that are
                                                                combined to form mortgage-backed securities.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading173">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse173" aria-expanded="true" aria-controls="collapse173">
                                                                Mortgage Servicing Rights (MSR)  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse173" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading173">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                The right of a servicer to collect payments from
                                                                borrowers.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading174">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse174" aria-expanded="true" aria-controls="collapse174">
                                                                MRS  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse174" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading174">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Mortgage-Related Securities.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading175">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse175" aria-expanded="true" aria-controls="collapse175">
                                                                Non-Agency Market  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse175" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading175">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Supply and demand of mortgage securities issued by nongovernment-related firms.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading176">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse176" aria-expanded="true" aria-controls="collapse176">
                                                                Nonconforming Loan  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse176" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading176">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading177">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse177" aria-expanded="true" aria-controls="collapse177">
                                                                Non-Recourse Debt  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse177" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading177">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A mortgage, often the case with residential mortgages, where
                                                                the lender may not go after borrower's assets to recoup his losses.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading178">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse178" aria-expanded="true" aria-controls="collapse178">
                                                                Origination (Loan)  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse178" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading178">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                The process of preparing, submitting and evaluating a loan
                                                                application, and then funding the mortgage.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading179">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse179" aria-expanded="true" aria-controls="collapse179">
                                                                Originator  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse179" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading179">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A lender who makes a loan to a borrower.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading180">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse180" aria-expanded="true" aria-controls="collapse180">
                                                                Outstanding Securities  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse180" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading180">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                The dollar volume of securities, usually MBS that are backed
                                                                by loans where borrowers are making payments.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading181">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse181" aria-expanded="true" aria-controls="collapse181">
                                                                Payment Option Mortgages   
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse181" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading181">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading182">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse182" aria-expanded="true" aria-controls="collapse182">
                                                                PC   
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse182" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading182">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Freddie Mac’s brand for MBS.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading183">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse183" aria-expanded="true" aria-controls="collapse183">
                                                                Piggyback Loans   
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse183" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading183">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Two loans taken out at one time on a property—the first lien and a
                                                                second, usually taken to avoid payment of mortgage insurance.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading184">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse184" aria-expanded="true" aria-controls="collapse184">
                                                                Portfolio Lender   
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse184" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading184">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A lender who makes loans to keep in its portfolio and does not sell
                                                                to investors in the secondary market.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading185">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse185" aria-expanded="true" aria-controls="collapse185">
                                                                Private Conduit   
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse185" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading185">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A private market entity that purchases mortgages and issues
                                                                mortgage-backed securities.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading186">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse186" aria-expanded="true" aria-controls="collapse186">
                                                                Private Label Securities   
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse186" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading186">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Another term for “Non-Agency” securities.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading187">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse187" aria-expanded="true" aria-controls="collapse187">
                                                                Purchase-Money Loan   
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse187" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading187">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A loan used to purchase a home.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading188">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse188" aria-expanded="true" aria-controls="collapse188">
                                                                Real Estate Mortgage Investment Conduit (REMIC)  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse188" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading188">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading189">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse189" aria-expanded="true" aria-controls="collapse189">
                                                                Real Estate Owned (REO)  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse189" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading189">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading190">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse190" aria-expanded="true" aria-controls="collapse190">
                                                                Reg. AB (SEC regulation) MBS or ABS Sponsor  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse190" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading190">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading190">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse190" aria-expanded="true" aria-controls="collapse190">
                                                                REIT – Real Estate Investment Trust  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse190" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading190">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading191">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse191" aria-expanded="true" aria-controls="collapse191">
                                                                Re-MBS  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse191" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading191">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Re-securitizations of previously issued MBS.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading192">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse192" aria-expanded="true" aria-controls="collapse192">
                                                                Re-performing Loans  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse192" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading192">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                Delinquent loans that have been “cured” or made current.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading193">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse193" aria-expanded="true" aria-controls="collapse193">
                                                                Replenishment Rates  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse193" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading193">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                The pace or rate at which lenders are able to add loans to
                                                                their servicing portfolios to replace runoff or loans paying off.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading194">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse194" aria-expanded="true" aria-controls="collapse194">
                                                                Residential Mortgage-Backed Securities (RMBS)  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse194" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading194">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                The type of MBS, which are
                                                                backed by mortgages on residential rather than commercial real estate.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading195">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse195" aria-expanded="true" aria-controls="collapse195">
                                                                Retail Lenders  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse195" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading195">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A lender who offers mortgage loans directly to the public, as distinct
                                                                from a wholesale lender who operates through mortgage brokers and correspondents.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading196">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse196" aria-expanded="true" aria-controls="collapse196">
                                                                Reverse Mortgage  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse196" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading196">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading197">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse197" aria-expanded="true" aria-controls="collapse197">
                                                                Risk-Based Pricing  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse197" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading197">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading198">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse198" aria-expanded="true" aria-controls="collapse198">
                                                                Scratch & Dent Loans  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse198" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading198">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading199">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse199" aria-expanded="true" aria-controls="collapse199">
                                                                Secondary/Mezzanine Financing  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse199" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading199">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading200">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse200" aria-expanded="true" aria-controls="collapse200">
                                                                Securitization  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse200" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading200">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                The process of pooling loans into mortgage-backed securities for sale
                                                                into the secondary market.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading201">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse201" aria-expanded="true" aria-controls="collapse201">
                                                                Securitization Rates  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse201" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading201">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                The percentage or share of new mortgage originations that are
                                                                funneled into securities.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading202">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse202" aria-expanded="true" aria-controls="collapse202">
                                                                Seller-Servicer  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse202" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading202">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading203">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse203" aria-expanded="true" aria-controls="collapse203">
                                                                Servicing Outstanding  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse203" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading203">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                The unpaid portion (principle) of serviced loans.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading204">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse204" aria-expanded="true" aria-controls="collapse204">
                                                                Shelf Registration  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse204" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading204">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading205">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse205" aria-expanded="true" aria-controls="collapse205">
                                                                Short Sale  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse205" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading205">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading206">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse206" aria-expanded="true" aria-controls="collapse206">
                                                                Stated Income Loan  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse206" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading206">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading207">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse207" aria-expanded="true" aria-controls="collapse207">
                                                                Stripped Securities (SMBS)  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse207" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading207">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading208">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse208" aria-expanded="true" aria-controls="collapse208">
                                                                Structured Finance  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse208" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading208">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A broad term used to describe a sector of finance that was
                                                                created to help transfer risk using complex legal and corporate entities.
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading209">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse209" aria-expanded="true" aria-controls="collapse209">
                                                                Subprime Loans  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse209" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading209">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading210">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse210" aria-expanded="true" aria-controls="collapse210">
                                                                Sub-Servicer (or Primary Servicer)  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse210" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading210">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading211">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse211" aria-expanded="true" aria-controls="collapse211">
                                                                Tranche  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse211" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading211">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A level or class of investment interest in a CMO or REMIC security,
                                                                differentiated by maturity, interest rate, and/or accrual structure.                                                         
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading212">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse212" aria-expanded="true" aria-controls="collapse212">
                                                                Upside-Down Mortgage (also “Underwater”)  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse212" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading212">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                When the remaining mortgage
                                                                balance is higher than the actual value of a property backing the loan.                                                     
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading213">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse213" aria-expanded="true" aria-controls="collapse213">
                                                                VA (Department of Veterans Affairs) Loan  
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse213" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading213">
                                                        <div class="panel-body px-3 mb-4">
                                                            <p>
                                                                A mortgage with no down payment
                                                                requirement, available only to ex-servicemen and women, on which the VA-approvedlender is insured against loss by the Veterans Administration.                                                 
                                                            </p>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading214">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse214" aria-expanded="true" aria-controls="collapse214">
                                                                Warehouse Lender
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse214" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading214">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading215">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse215" aria-expanded="true" aria-controls="collapse215">
                                                                Wholesale Lender
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse215" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading215">
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
                                                        <div class="panel-heading p-0 mb-0" role="tab" id="heading216">
                                                        <h5 class="panel-title">
                                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse216" aria-expanded="true" aria-controls="collapse216">
                                                                Wholesale Origination
                                                            </a>
                                                        </h5>
                                                        <hr class="p-0"/>
                                                        </div>
                                                        <div id="collapse216" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading216">
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
