@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contacts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="#">Directory</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
      <div class="container">
        <div class="card card-danger">
          <div class="card-header">
              <h4 class="card-title">Directory Search</h4>
          </div>
          <div class="card-body">

              <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Search</a>
                  </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                      <div class="card-body d-flex">
                        {{ Form::open(['action' => 'DirectoryController@index', 'method' => 'GET']) }}
                        <div class="d-flex flex-wrap">
                          <div class="order-1 col-md-6 col-lg-3 col-xl-3 pt-3">

                            {{ Form::text('firstname', null, ['class' => 'form-control', 'placeholder' => 'First Name', 'style' => 'width:100%']) }}
                          </div>
                          <div class="order-2 col-md-6 col-lg-3 col-xl-3 pt-3">
                            {{ Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Last Name', 'style' => 'width:100%']) }}
                          </div>
                          <div class="order-3 col-md-6 col-lg-3 col-xl-3 pt-3">
                            {{ Form::select('departments', str_replace(array('[', '"', ']'), '', $departments), null, ['class' => 'form-control', 'placeholder' => 'Department', 'style' => 'width:100%']) }}
                          </div>
                          <div class="order-4 col-md-6 col-lg-3 col-xl-3 pt-3">
                            {{ Form::select('position', $position, null, ['class' => 'form-control', 'placeholder' => 'Position', 'style' => 'width:100%']) }}
                          </div>
                          {{-- <div class="order-5 col-md-6 col-lg-3 col-xl-3 pt-3">
                            {{ Form::select('team', $team, null, ['class' => 'form-control', 'placeholder' => 'Team', 'style' => 'width:100%']) }}
                          </div> --}}
                          <div class="order-5 col-md-6 col-lg-3 col-xl-3 pt-3">
                          </div>
                          <div class="order-6 col-md-6 col-lg-3 col-xl-3 pt-3">
                          </div>
                          <div class="order-7 col-md-6 col-lg-3 col-xl-3 pt-3">
                          </div>
                          <div class="order-8 col-md-6-col-lg-3 col-xl-3 pt-3">
                            <div class="d-flex justify-content-end">
                              <input type="reset" class="btn btn-dark mr-3" value="Reset" />
                              {{ Form::submit('Submit', ['class' => 'btn btn-danger']) }}
                            </div>
                          </div>
                        </div>
 
                      {{ Form::close() }}
                      </div>
                      <!-- /.card -->
                  </div>
                
              </div>
              </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-sm-7 col-md-6 col-lg-4 col-xl-3">
            {{$contacts->onEachSide(2)->links()}}
        </div>
      </div>
      <br/>


      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">
            @foreach($contacts as $contact)
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  {{str_replace(array('[', '"', ']'), '',$contact->departments)}}
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>{{$contact->firstname}} {{$contact->lastname}}</b></h2>
                      <p class="text-muted text-sm"><b>Position: </b> {{$contact->position}} </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-envelope"></i></span><a href="mailto:{{$contact->email}}">{{$contact->email}}</a></li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: {{$contact->directphone}} ext {{$contact->extension}}</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="{{ ($contact->avatar) ? url($contact->avatar) : asset('img/avatar1.png') }}" alt="user-photo" class="img-circle img-fluid">
                      {{-- <img src="{{ asset($contact->avatar) }}" alt="user-photo" class="img-circle img-fluid"> --}}
                      {{-- <img src="{{ asset ('img/avatar1.png') }}" alt="user-photo" class="img-circle img-fluid"> --}}
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="/directory/user/{{$contact->id}}" class="btn btn-sm btn-danger">
                      <i class="fas fa-user"></i> View Profile
                    </a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <!-- /.card-body -->

      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@stop