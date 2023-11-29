@extends('layouts.default')

@section('content')
@push('includes.head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
@endpush
    <div class="content-wrapper">
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">IT Department</h1>
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
                                New/Update Ratesheet Request</h4>
                        </div>
                        <div class="card-body">
                            {{ Form::open(['action' => 'ITSupportController@submitRatesheetUpdates', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group required">
                                            <label class="control-label" for="requestorName">Name</label>
                                            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group required">
                                            <label class="control-label" for="email">Email</label>
                                            <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group required">
                                            <label class="control-label" for="subject">Subject</label>
                                            <input type="text" class="form-control" name="subject" id="subject" value="{{ old('subject') }}"placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group required">
                                            <label class="control-label" for="effectiveDate">Ratesheet Effective Date</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text">
                                                    <i class="far fa-calendar-alt"></i>
                                                  </span>
                                                </div>
                                                <input type="text" class="form-control float-right" name="effectiveDate" value="{{ old('effectiveDate') }}" id="requestDate" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
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
                                    <div class="col">
                                        <div class="form-group required">
                                            <label class="control-label" for="systemRequest">Select System(s)</label>
                                            <div>
                                                <select class="selectpicker" name="systemRequest[]" multiple required>
                                                    <option value="BytePro">BytePro</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-6">
                                        <div class="form-group required">
                                            <label class="control-label" for="bodyMessage">Message</label>
                                            <textarea class="form-control" rows="4" name="bodyMessage" id="bodyMessage" placeholder="Enter any additional comments here" required></textarea> 
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                <label for="attachFiles">Attach File(s)</label>
                                <div class="input-group">
                                    <div class="form-group">
                                        {{ Form::file('attachment[]', array('multiple' => true, 'accept'=> 'pdf,jpeg,jpg,bmp,png,gif,pdf,xlsx')) }}
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
        </section>
    </div>
  </div>
@push('includes.scripts')
<script src="{{ asset('js/pages/datepicker.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script>
    $('.select').selectpicker();
    </script>
@endpush
@stop