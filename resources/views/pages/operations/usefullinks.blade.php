@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Useful Links</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="/">Operations</a></li>
                <li class="breadcrumb-item">Useful Links</a></li>
                </ol>
            </div>
            </div>
        </div>
        </div>
        <!-- /.content-header -->
            <!-- Main content -->

        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="float-left">
                        <div class="container">
                            <div class="card" style="width: 18rem;">
                                <a class="btn btn-outline-default" href="https://www.xe.com/currencyconverter/" target="_blank"><img class="card-img-top" src="{{ asset ('img/links/xe.jpg') }}" alt="xe-currency-converter"></a>
                                {{-- <div class="card-body">
                                <h5 class="card-title">Currency Converter</h5>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="float-left">
                        <div class="container">
                            <div class="card" style="width: 18rem;">
                                <a class="btn btn-outline-default" href="https://www.disasterassistance.gov/" target="_blank"><img class="card-img-top" src="{{ asset ('img/links/disaster-assistance.jpg') }}" alt="xe-currency-converter"></a>
                                {{-- <div class="card-body">
                                <h5 class="card-title">Currency Converter</h5>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="float-left">
                        <div class="container">
                            <div class="card" style="width: 18rem;">
                                <a class="btn btn-outline-default" href="https://www.nmlsconsumeraccess.org/" target="_blank"><img class="card-img-top" src="{{ asset ('img/links/nmls.jpg') }}" alt="xe-currency-converter"></a>
                                {{-- <div class="card-body">
                                <h5 class="card-title">Currency Converter</h5>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="float-left">
                        <div class="container">
                            <div class="card" style="width: 18rem;">
                                <a class="btn btn-outline-default" href="https://www.convertunits.com/dates/" target="_blank"><img class="card-img-top" src="{{ asset ('img/links/date-difference-calc.jpg') }}" alt="xe-currency-converter"></a>
                                {{-- <div class="card-body">
                                <h5 class="card-title">Currency Converter</h5>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="float-left">
                        <div class="container">
                            <div class="card" style="width: 18rem;">
                                <a class="btn btn-outline-default" href="https://www.proteckservices.com/" target="_blank"><img class="card-img-top" src="{{ asset ('img/links/proteck.jpg') }}" alt="xe-currency-converter"></a>
                                {{-- <div class="card-body">
                                <h5 class="card-title">Currency Converter</h5>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="float-left">
                        <div class="container">
                            <div class="card" style="width: 18rem;">
                                <a class="btn btn-outline-default" href="https://lender.secureinsight.com/user/login" target="_blank"><img class="card-img-top" src="{{ asset ('img/links/secure-insight.jpg') }}" alt="xe-currency-converter"></a>
                                {{-- <div class="card-body">
                                <h5 class="card-title">Currency Converter</h5>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="float-left">
                        <div class="container">
                            <div class="card" style="width: 18rem;">
                                <a class="btn btn-outline-default" href="https://citadelservicing.app.box.com/" target="_blank"><img class="card-img-top" src="{{ asset ('img/links/box.jpg') }}" alt="xe-currency-converter"></a>
                                {{-- <div class="card-body">
                                <h5 class="card-title">Currency Converter</h5>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Container -->
        </section>
    </div>

@stop