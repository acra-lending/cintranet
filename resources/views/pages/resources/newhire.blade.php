@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Resources</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="/">Resources</a></li>
                <li class="breadcrumb-item">New Employee Form</a></li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
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
                                New Employee Form</h4>
                        </div>
                        <div class="card-body">

                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-request-tab" data-toggle="tab" href="#nav-request" role="tab" aria-controls="nav-request" aria-selected="true">New Hire</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-request" role="tabpanel" aria-labelledby="nav-request-tab">
                                    <div class="card-body">
                                        <hr/>
                                        <!-- form start -->
                                        {{ Form::open(['action' => 'EmployeeNewHireController@submit', 'method' => 'POST']) }}
                                                <h4>New Employee</h4>
                                                <hr/>
                                                <div class="row card-footer">
                                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="requestDueDate">Start Date</label>
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
                                                    <div class="col">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="name">Employee Name</label>
                                                            <input type="text" class="form-control" name="name" id="name" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="email">Email</label>
                                                            <input type="email" class="form-control" name="email" id="email" placeholder="" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row card-footer">
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label" for="phone">Phone</label>
                                                            <input type="text" class="form-control" name="phone" id="phone" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label" for="extension">Ext</label>
                                                            <input type="text" class="form-control" name="extension" id="extension" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="cellPhone">Cell</label>
                                                            <input type="text" class="form-control" name="cellPhone" id="cellPhone" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label" for="territory">Territory</label>
                                                            <input type="text" class="form-control" name="territory" id="territory" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row card-footer">
                                                    <div class="col-sm-6">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="department">Department</label>
                                                            {{ Form::select('departments', str_replace(array('[', '"', ']'), '', $departments), null, ['class' => 'form-control', 'name' => 'department', 'placeholder' => '', 'style' => 'width:100%']) }}
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="position">Position</label>
                                                            <input type="text" class="form-control" name="position" id="position" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="manager">Manager</label>
                                                            <input type="text" class="form-control" name="manager" id="manager" placeholder="" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row card-footer">
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label" for="experience">Industry Experience:</label>
                                                            <div class="">
                                                                <select class="form-control" name="experience">
                                                                    <option value="Not Needed">Not Needed</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label" for="training">Requires Sales Training Enrollment:</label>
                                                            <div class="">
                                                                <select class="form-control" name="training">
                                                                    <option value="No">No</option>
                                                                    <option value="Yes: 4-Day">Yes: 4-Day</option>
                                                                    <option value="Yes: 5-Day">Yes: 5-Day</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr/>
                                                <h4>Access</h4>
                                                <hr/>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label class="control-label" for="accessType">Access Type:</label>
                                                            <div class="">
                                                                <select class="form-control" name="selectAccess">
                                                                    <option value="None"></option>
                                                                    <option value="Manager">Manager</option>
                                                                    <option value="Executive">Executive</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label class="control-label" for="fob">FOB #</label>
                                                            <input type="text" class="form-control" name="fob" id="fob" placeholder="">   
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-6">
                                                        <div class="form-group">
                                                            <label for="specialInstructions">Special Instructions</label>
                                                            <textarea class="form-control" rows="4" name="specialInstructions" id="specialInstructions" placeholder=""></textarea> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr/>
                                                <h4>Additional Info</h4>
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
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label class="control-label" for="email3">Additional Recipient Email:</label>
                                                            <input type="email" class="form-control" name="email3" id="email3"> 
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label class="control-label" for="email4">Additional Recipient Email (2):</label>
                                                            <input type="email" class="form-control" name="email4" id="email4" placeholder="">
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