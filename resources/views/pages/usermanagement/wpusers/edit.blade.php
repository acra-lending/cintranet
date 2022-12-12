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
          </div>
        </div>

      </section>
      <style>
        .card-danger:not(.card-outline) .card-header {
        background: var(--linear-gradient);
        }
      </style>
  
      <!-- Main content -->
      <section class="content">
        {{-- <livewire:usermanagement.w-p-users /> --}}
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
                          <a class="nav-item nav-link active" id="nav-request-tab" data-toggle="tab" href="#nav-request" role="tab" aria-controls="nav-request" aria-selected="true">Edit User</a>
                          </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="nav-request" role="tabpanel" aria-labelledby="nav-request-tab">
                              <div class="card-body">
                                  <hr/>
                                  <!-- form start -->
                                  {{ Form::open(['action' => ['BrokerPortalRequestsController@update', $wp_users[0]->id], 'method' => 'PUT']) }}
                                  {{-- {{ Form::open(['action' => ['BrokerPortalRequestsController@update', $wp_users[0]->ID], 'method' => 'PUT']) }} --}}
                                          <h4>Broker Portal Requests Details</h4>
                                          <hr/>
                                          @foreach($wp_users as $user)
                                          {{-- {{dd($wp_users)}} --}}
                                          <div class="row card-footer">
                                              <div class="col-sm-12 col-md-6 col-lg-6">
                                                  <div class="form-group required">
                                                      <label class="control-label" for="email">Email</label>
                                                      <input required type="email" class="form-control" name="email" id="email" placeholder="" value={{ $user->email }} >
                                                      {{-- <input required type="email" class="form-control" name="email" id="email" placeholder="" value={{ $user->user_email }} > --}}
                                                  </div>
                                              </div>

                                          </div>
                                          <div class="row card-footer">
                                              <div class="col-sm-12 col-md-6 col-lg-6">
                                                  <div class="form-group required">
                                                      <label class="control-label" for="firstname">First Name</label>
                                                      <input required type="text" class="form-control" name="firstname" id="firstname" placeholder="" 
                                                      {{-- value={{ $first_name }} > --}}
                                                      value={{ $user->firstname }} >
                                                  </div>
                                              </div>
                                              {{-- {{dd($last_name)}} --}}
                                              <div class="col-sm-12 col-md-6 col-lg-6">
                                                  <div class="form-group required">
                                                      <label class="control-label" for="lastname">Last Name</label>
                                                      <input requiredtype="text" class="form-control" name="lastname" id="lastname" placeholder="" 
                                                      value="{{ $user->lastname }}" >
                                                      {{-- value="{{ $last_name }}" > --}}
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="row card-footer">
                                              {{-- <div class="col-sm-12 col-md-6 col-lg-6">
                                                  <div class="form-group required">
                                                      <label class="control-label" for="username">Username</label>
                                                      <input required type="text" class="form-control" name="username" id="username" placeholder="" 
                                                      value={{ $user->user_login }} >
                                                  </div>
                                              </div> --}}
                                              <div class="col-sm-12 col-md-6 col-lg-6">
                                                  <div class="form-group">
                                                      <label class="control-label" for="selectType">Type</label>
                                                      <div>
                                                          <input class="form-control" name="selectType"
                                                          value="{{$user->role_type}}">
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          @endforeach
                                          <hr/>
                      
                                      <div class="card-footer">
                                          {{ Form::submit('Update', ['class' => 'btn btn-outline-danger ']) }}
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
    </div> <!-- end content-wrapper -->

@stop
