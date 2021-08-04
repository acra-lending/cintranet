@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Reminders</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="/">Management</a></li>
                <li class="breadcrumb-item">Reminders</a></li>
                </ol>
            </div>
            </div>
        </div>
        </div>
        <section class="content">
            <div class="container">
                <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-10">
                    <div class="card card-danger card-outline">
                        <div class="card-header">
                            <h4 class="card-title">
                            <i class="fas fa-user-check"></i>
                                Reminders Form</h4>
                        </div>
                        <div class="card-body">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-request-tab" data-toggle="tab" href="#nav-request" role="tab" aria-controls="nav-request" aria-selected="true">Reminders</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-request" role="tabpanel" aria-labelledby="nav-request-tab">
                                    <div class="card-body">
                                        <hr/>
                                        @include('pages.reminder.partials.reminderform')
                                    </div>
                                </div>
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