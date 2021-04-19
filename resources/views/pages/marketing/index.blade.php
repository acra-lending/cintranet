@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Marketing</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="/marketing">Marketing</a></li>
                <li class="breadcrumb-item">Requests & Materials</a></li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        
        <style>

        .card-danger:not(.card-outline) .card-header {
        background: var(--linear-gradient);
        }
        
        </style>
        <!-- Main content -->
        <section class="content">
            @include('pages.modals.modal-forms')
            <div class="container">
                <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-10">
                    <div class="card card-danger card-outline">
                        <div class="card-header">
                            <h4 class="card-title">
                            <i class="fas fa-toolbox"></i>    
                                Marketing Resources</h4>
                        </div>
                        <div class="card-body">

                            @include('pages.marketing.partials.navtabs')

                            <div class="tab-content" id="nav-tabContent">
                                
                                @include('pages.marketing.partials.requestform')
                                @include('pages.marketing.partials.materials')
                                @include('pages.marketing.partials.emailsigresources')

                            </div>
                        </div>
                    </div><!-- /.card -->
                </div> <!-- /.col -->
            </div><!-- /.row -->
            </div><!-- Container -->
        </section>
    </div>
@push('includes.scripts')
<script src="{{ asset('js/pages/datepicker.js') }}"></script>
@endpush
@stop