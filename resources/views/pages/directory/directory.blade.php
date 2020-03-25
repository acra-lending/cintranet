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
      {{$contacts->links()}}

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
                    <a href="/usermanagement/{{$contact->id}}" class="btn btn-sm btn-danger">
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