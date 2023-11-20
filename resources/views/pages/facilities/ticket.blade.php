@extends('layouts.default')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Facilities</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-10">
                <div class="card card-danger card-outline">
                    <div class="card-header">
                        <h4 class="card-title">
                            <i class="fas fa-ticket-alt"></i>
                            Submit A Ticket</h4>
                    </div>
                    <div class="card-body">

                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-issues-tab" data-toggle="tab" href="#nav-issues" role="tab" aria-controls="nav-issues" aria-selected="false">Facilities Request</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            
                            <div class="tab-pane fade show active" id="nav-issues" role="tabpanel" aria-labelledby="nav-issues-tab">
                                <div class="card-body">
                                    {{ Form::open(['action' => 'FacilitiesController@submitTicket', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group required">
                                                    <label class="control-label" for="requestorName">Name</label>
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
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group required">
                                                    <label class="control-label" for="subject">Subject</label>
                                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="" required>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label class="control-label" for="priority">Priority</label>
                                                    <div>
                                                        <select class="form-control" name="priority">
                                                            <option value="Low">Low</option>
                                                            <option value="Normal">Normal</option>
                                                            <option value="High">High</option>
                                                            <option value="Urgent">Urgent</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-lg-6">
                                                <div class="form-group required">
                                                    <label class="control-label" for="bodyMessage">Message</label>
                                                    <textarea class="form-control" rows="4" name="bodyMessage" id="bodyMessage" placeholder="" required></textarea> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            {{ Form::submit('Submit', ['class' => 'btn btn-outline-danger ']) }}
                                        </div>
                                    {{ Form::close() }}
                                </div>
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