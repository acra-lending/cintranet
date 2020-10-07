@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Broker Portal Requests</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="/">Operations</a></li>
                <li class="breadcrumb-item">Broker Portal Requests</a></li>
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
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-10">
                    <div class="card card-danger card-outline">
                        <div class="card-header">
                            <h4 class="card-title">
                            <i class="fas fa-user-plus"></i>
                                Broker Portal Request</h4>
                        </div>
                        <div class="card-body">

                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-request-tab" data-toggle="tab" href="#nav-request" role="tab" aria-controls="nav-request" aria-selected="true">Request Form</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-request" role="tabpanel" aria-labelledby="nav-request-tab">
                                    <div class="card-body">
                                        <hr/>
                                        <!-- form start -->
                                        {{ Form::open(['action' => 'BrokerPortalRequestsController@submit', 'method' => 'POST']) }}
                                                <h4>Broker Portal Requests Details</h4>
                                                <hr/>
                                                <div class="row card-footer">
                                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="requestDueDate">Date</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                    <i class="far fa-calendar-alt"></i>
                                                                    </span>
                                                                </div>
                                                                <input type="text" class="form-control float-right" name="requestDueDate" id="requestDate" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row card-footer">
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="firstname">First Name</label>
                                                            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="lastname">Last Name</label>
                                                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row card-footer">
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="email">Email</label>
                                                            <input type="email" class="form-control" name="email" id="email" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="company">Company</label>
                                                            <input type="text" class="form-control" name="company" id="company" placeholder="" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row card-footer">
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="nmlsid">NMLS ID</label>
                                                            <input type="text" class="form-control" name="nmlsid" id="nmlsid" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="selectType" required>Select Type</label>
                                                            <div>
                                                                <select class="form-control" name="selectType">
                                                                    <option value="Broker">Broker</option>
                                                                    <option value="Correspondent">Correspondent</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr/>
                                                <h4>Additional Info</h4>
                                                <hr/>
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-6">
                                                        <div class="form-group">
                                                            <label for="specialInstructions">Special Instructions</label>
                                                            <textarea class="form-control" rows="4" name="specialInstructions" id="specialInstructions" placeholder=""></textarea> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr/>
                                                <h4>Submitter Details</h4>
                                                <hr/>
                                                <div class="row card-footer">
                                                    <div class="col">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="submittedBy">Submitted By:</label>
                                                            <input type="text" class="form-control" name="submittedBy" id="submittedBy" required> 
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="email2">Submitter's Email</label>
                                                            <input type="email" class="form-control" name="email2" id="email2" placeholder="" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr/>
                                            <!-- /.card-body -->
                            
                                            <div class="card-footer">
                                                {{ Form::submit('Submit', ['class' => 'btn btn-outline-danger ']) }}
                                            </div>
                                        {{ Form::close() }}
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