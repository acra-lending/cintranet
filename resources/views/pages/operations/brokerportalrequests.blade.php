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
                                <a class="nav-item nav-link active" id="nav-request-tab" data-toggle="tab" href="#nav-request" role="tab" aria-controls="nav-request" aria-selected="true">Add User</a>
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
                            </div>
                        </div>
                    </div><!-- /.card -->
                </div> <!-- /.col -->
            </div><!-- /.row -->
            </div><!-- Container -->
        </section>
    </div>
@stop