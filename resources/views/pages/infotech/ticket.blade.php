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
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="#">IT Department</a></li>
                <li class="breadcrumb-item">Servicing</a></li>
                </ol>
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
                                <a class="nav-item nav-link" id="nav-system-access-tab" data-toggle="tab" href="#nav-system-access" role="tab" aria-controls="nav-system-access" aria-selected="false">System or Folder Access</a>
                                <a class="nav-item nav-link active" id="nav-issues-tab" data-toggle="tab" href="#nav-issues" role="tab" aria-controls="nav-issues" aria-selected="false">Phone or Computer Issues</a>
                                <a class="nav-item nav-link" id="nav-report-request-tab" data-toggle="tab" href="#nav-report-request" role="tab" aria-controls="nav-report-request" aria-selected="false">Report Request</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show" id="nav-system-access" role="tabpanel" aria-labelledby="nav-system-access-tab">
                                        {{ Form::open(['action' => 'ITSupportController@submitForm', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
                                            <div class="card-body">
                                                <hr/>
                                                <h4>New System or Folder Access Request</h4>
                                                <hr/>
                                                <div class="row card-footer">
                                                    <div class="col-lg-6">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="requestDueDate">Effective Date</label>
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
                                                <hr/>
                                                <h4>Contact Information</h4>
                                                <hr/>
                                                <div class="row card-footer">
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
                                                    <div class="col-sm-6 col-md-4">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="position">Position</label>
                                                            {{ Form::select('position', $position, null, ['class' => 'form-control', 'name' => 'position', 'placeholder' => 'Select', 'required', 'style' => 'width:100%']) }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row card-footer">
                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="Manager">Manager</label>
                                                            <input type="text" class="form-control" name="manager" id="manager" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="managerEmail">Manager's Email</label>
                                                            <input type="email" class="form-control" name="managerEmail" id="ManagerEmail" placeholder="" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr/>
                                                <h4>Items Requested</h4>
                                                <hr/>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="itemRequest">Select Item(s)</label>
                                                            <div>
                                                                <select class="selectpicker" name="itemRequest[]" multiple required>
                                                                    <option value="Box">Box</option>
                                                                    <option value="BytePro">BytePro</option>
                                                                    <option value="CBC Innovis">CBC Innovis</option>
                                                                    <option value="Cintranet">Cintranet</option>
                                                                    <option value="Collateral Analytics">Collateral Analytics</option>
                                                                    <option value="Computer Profile">Computer Profile</option>
                                                                    <option value="Consolidated Analytics">Consolidated Analytics</option>
                                                                    <option value="DataTree">DataTree</option>
                                                                    <option value="Doc Magic">Doc Magic</option>
                                                                    <option value="Doc Velocity">Doc Velocity</option>
                                                                    <option value="D + H">D + H</option>
                                                                    <option value="Email">Email</option>
                                                                    <option value="FraudGuard">FraudGuard</option>
                                                                    <option value="Informative Research">Informative Research</option>
                                                                    <option value="Linear Title">Linear Title</option>
                                                                    <option value="ProTeck">ProTeck</option>
                                                                    <option value="Salesforce">Salesforce</option>
                                                                    <option value="ServiceLink">ServiceLink</option>
                                                                    <option value="SiteX">SiteX</option>
                                                                    <option value="Solidifi">Solidifi</option>
                                                                    <option value="Velocify">Velocify</option>
                                                                    <option value="Zoom">Zoom</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label class="control-label" for="adminAccess">Admin Access</label>
                                                            <div>
                                                                <select class="selectpicker" name="adminAccess">
                                                                    <option value="None"></option>
                                                                    <option value="Full">Full</option>
                                                                    <option value="Partial for Deparment">Partial for Deparment</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label class="control-label" for="bytePro">Byte Pro</label>
                                                            <div>
                                                                <select class="selectpicker" name="bytePro">
                                                                    <option value="None"></option>
                                                                    <option value="Sales">Sales</option>
                                                                    <option value="TM">TM</option>
                                                                    <option value="OPS">OPS</option>
                                                                    <option value="Admin">Admin</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label class="control-label" for="docVelocity">Doc Velocity</label>
                                                            <div>
                                                                <select class="selectpicker" name="docVelocity">
                                                                    <option value="None"></option>
                                                                    <option value="Sales">Sales</option>
                                                                    <option value="TM">TM</option>
                                                                    <option value="OPS">OPS</option>
                                                                    <option value="Admin">Admin</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="control-label" for="folderName">Folder Name / Location</label>
                                                            <input type="text" class="form-control" name="folderName" id="folderName" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="control-label" for="additionalInfo">Additional Instructions</label>
                                                            <textarea class="form-control" rows="3" name="additionalInfo" id="additionalInfo" placeholder="e.g., Need VPN access to Byte Pro"></textarea> 
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            <div class="card-footer">
                                                {{ Form::submit('Submit', ['class' => 'btn btn-outline-danger ']) }}
                                            </div>
                                        {{ Form::close() }}
                                    </div>
                                    <div class="tab-pane fade show active" id="nav-issues" role="tabpanel" aria-labelledby="nav-issues-tab">
                                        <div class="card-body">
                                            <p>
                                                Include details in ticket:
                                            </p>
                                                <em>e.g,</em>
                                                <ul><em>
                                                    <li>Hardware or software issues</li>
                                                    <li>Users impacted</li>
                                                    <li>Attach screenshots</li></em>
                                                </ul>
                                            {{ Form::open(['action' => 'ITSupportController@submitIssues', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}

                                                <hr/>
                                                <h4>Phone or Computer Issues</h4>
                                                <hr/>
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
                                                            <textarea class="form-control" rows="4" name="bodyMessage" id="bodyMessage" placeholder="e.g., Can't access phone voicemail" required></textarea> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label for="attachFiles">Attach File(s)</label>
                                                <div class="input-group">
                                                    <div class="form-group">
                                                        {{ Form::file('attachment[]', array('multiple' => true, 'accept'=> 'pdf,jpeg,jpg,bmp,png,gif')) }}
                                                    </div>
                                                </div>
                                                </div>

                                            <div class="card-footer">
                                                {{ Form::submit('Submit', ['class' => 'btn btn-outline-danger ']) }}
                                            </div>
                                            {{ Form::close() }}
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-report-request" role="tabpanel" aria-labelledby="nav-report-request-tab">
                                        <div class="card-body">
                                            <p>Include all that applies:</p>
                                            <div class="row">
                                                <div class="col-sm-6 col-lg-3">
                                                    <ul>
                                                        <li>source application</li>
                                                        <li>new or updated report</li>
                                                        <li>inclusion/exclusion criteria</li>
                                                        <li>calculations needed</li>
                                                        <li>output format(Excel, etc)</li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6 col-lg-3">
                                                    <ul>
                                                        <li>frequency</li>
                                                        <li>report title</li>
                                                        <li>distribution</li>
                                                        <li>upload any mockups, samples of error, similar reports if available</li>
                                                    </ul>
                                                </div>
                                            </div> 
                                            {{ Form::open(['action' => 'ITSupportController@submitRequests', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}

                                                <hr/>
                                                <h4>Report Request</h4>
                                                <hr/>
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
                                                            <textarea class="form-control" rows="4" name="bodyMessage" id="bodyMessage" placeholder="e.g., Can't access phone voicemail" required></textarea> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label for="attachFiles">Attach File(s)</label>
                                                <div class="input-group">
                                                    <div class="form-group">
                                                        {{ Form::file('attachment[]', array('multiple' => true, 'accept'=> 'pdf,jpeg,jpg,bmp,png,gif')) }}
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





  </div>
@push('includes.scripts')
<script src="{{ asset('js/pages/datepicker.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script>
    $('.select').selectpicker();
    </script>
@endpush
@stop