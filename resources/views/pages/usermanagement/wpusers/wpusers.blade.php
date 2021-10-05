@extends('layouts.default')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Wordpress Users</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/usermanagement/user">User Management</a></li>
                <li class="breadcrumb-item active">Manage WP Users</li>
              </ol>
            </div>
          </div>
        </div>

      </section>
      <style>
        .card-danger:not(.card-outline) .card-header {
        background: var(--linear-gradient);
        }

        .progress { position:relative; width:100%; background-color: var(--gray-color); height: 20px; }
        .bar { background-color: var(--primary-color); width:0%; height:40px; }
        .percent { position:absolute; display:inline-block; left:50%; color: #fff;}

      </style>
  
      <!-- Main content -->
      <section class="content">
        <livewire:usermanagement.w-p-users />
        @can('edit-users')
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
                          <a class="nav-item nav-link active" id="nav-request-tab" data-toggle="tab" href="#nav-request" role="tab" aria-controls="nav-request" aria-selected="true">Add User</a>
                          <a class="nav-item nav-link" id="nav-broker-login-request-tab" data-toggle="tab" href="#nav-broker-login-request" role="tab" aria-controls="nav-broker-login-request" aria-selected="true">Broker Portal Login Email Parser</a>
                          <a class="nav-item nav-link" id="nav-priority-request-tab" data-toggle="tab" href="#nav-priority-request" role="tab" aria-controls="nav-priority-request" aria-selected="true">Priority Request Email Parser</a>
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
                                              <div class="col-sm-12 col-md-6 col-lg-6">
                                                  <div class="form-group required">
                                                      <label class="control-label" for="email">Email</label>
                                                      <input required type="email" class="form-control" name="email" id="email" placeholder="" value={{ old('email') }} >
                                                  </div>
                                              </div>

                                          </div>
                                          <div class="row card-footer">
                                              <div class="col-sm-12 col-md-6 col-lg-6">
                                                  <div class="form-group required">
                                                      <label class="control-label" for="firstname">First Name</label>
                                                      <input required type="text" class="form-control" name="firstname" id="firstname" placeholder="" 
                                                      value={{ old('firstname') }} >
                                                  </div>
                                              </div>
                                              <div class="col-sm-12 col-md-6 col-lg-6">
                                                  <div class="form-group required">
                                                      <label class="control-label" for="lastname">Last Name</label>
                                                      <input requiredtype="text" class="form-control" name="lastname" id="lastname" placeholder="" 
                                                      value={{ old('lastname') }} >
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="row card-footer">
                                              <div class="col-sm-12 col-md-6 col-lg-6">
                                                  <div class="form-group required">
                                                      <label class="control-label" for="username">Username</label>
                                                      <input required type="text" class="form-control" name="username" id="username" placeholder="" 
                                                      value={{ old('username') }} >
                                                  </div>
                                              </div>
                                              <div class="col-sm-12 col-md-6 col-lg-6">
                                                  <div class="form-group required">
                                                      <label class="control-label" for="selectType" required>Select Type</label>
                                                      <div>
                                                          <select class="form-control" name="selectType" >
                                                              <option value="um_broker" @if(old('selectType') == 'um_broker')selected @endif>Broker</option>
                                                              <option value="um_correspondent" @if(old('selectType') == 'um_correspondent') selected @endif>Correspondent</option>
                                                          </select>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <hr/>
                      
                                      <div class="card-footer">
                                          {{ Form::submit('Submit', ['class' => 'btn btn-outline-danger ']) }}
                                      </div>
                                  {{ Form::close() }}
                              </div>
                          </div>

                          <div class="tab-pane fade" id="nav-broker-login-request" role="tabpanel" aria-labelledby="nav-broker-login-request-tab">
                            {{ Form::open(['action' => 'UploadController@broker_login_request_parser', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
                            <div class="form-group">
                                <p class="mt-3">This is for emails with subject line: <strong>Broker Portal Login Request</strong></p>
                                <p class="py-2"><strong>Upload only .eml files</strong></p>
                                <p class="py-2"><strong>For Broker Credentials ONLY</strong></p>
                                <label for="attachFiles">Attach Email(s)</label>
                                <div class="input-group">
                                    <div class="form-group">
                                        {{ Form::file('file[]', array('multiple' => true, 'accept'=> 'eml')) }}
                                    </div>
                                </div>
                            </div>
                            <div>
                                {{ Form::submit('Submit', ['class' => 'btn btn-outline-danger ']) }}
                                {{-- <div class="progress mt-3" hidden>
                                    <div class="bar"></div>
                                    <div class="percent">0%</div>
                                </div>
                                <div class="complete"></div> --}}
                            </div>
                            {{ Form::close() }}
                          </div>
                          <div class="tab-pane fade" id="nav-priority-request" role="tabpanel" aria-labelledby="nav-priority-request-tab">
                            {{ Form::open(['action' => 'UploadController@priority_login_request_parser', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
                            <div class="form-group">
                                <p class="mt-3 py-2">This is for emails with subject line: <strong>Priority Request - New Submission</strong></p>
                                <p class="py-2"><strong>Upload only .eml files</strong></p>
                                <p class="py-2"><strong>For Broker Credentials ONLY</strong></p>
                                <label for="attachFiles">Attach Email(s)</label>
                                <div class="input-group">
                                    <div class="form-group">
                                        {{ Form::file('file[]', array('multiple' => true, 'accept'=> 'eml')) }}
                                    </div>
                                </div>
                            </div>
                            <div>
                                {{ Form::submit('Submit', ['class' => 'btn btn-outline-danger ']) }}
                                {{-- <div class="progress mt-3" hidden>
                                    <div class="bar"></div>
                                    <div class="percent">0%</div>
                                </div>
                                <div class="complete"></div> --}}
                            </div>
                            {{ Form::close() }}
                          </div>

                      </div>
                  </div>
              </div>
          </div> 
      </div>
      </div>
      @endcan
      </section>
    </div>

{{-- @push('includes.scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
<script type="text/javascript">
    var SITEURL = "{{URL('/mediamanager')}}";
    $(function() {
        $(document).ready(function()
        {
            // $('.progress').hide();
            var bar = $('.bar');
            var percent = $('.percent');
            $('form').ajaxForm({
                beforeSend: function() {
                    var percentVal = '0%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                },
                uploadProgress: function(event, position, total, percentComplete) {
                    $('.progress').removeAttr('hidden');
                    var percentVal = percentComplete + '%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                    $('.complete').html('Processing, please wait...');
                },
                complete: function(data) {
                    $('.complete').html(data.responseJSON.success);
                    
                }
            });
        }); 
    });
    </script>
    @endpush --}}
@stop
