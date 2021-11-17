@extends('layouts.default')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Profile</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/directory/directory">Directory</a></li>
                <li class="breadcrumb-item active">User Profile</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          @foreach($profile as $contact)  
          <div class="row">
            <div class="col-sm-8 col-md-6 col-lg-6 col-xl-4">
              <!-- Profile Image -->
              <div class="card card-danger card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                         src="{{ ($info->avatar) ? url('storage/avatars/' .$info->avatar) : url('img/avatar1.png') }}"
                         alt="User profile picture">
                  </div>
                  <h3 class="profile-username text-center">{{$contact->firstname}} {{$contact->lastname}}</h3>
  
                  <p class="text-muted text-center">{{$contact->position}}</p>
  
                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Email</b> <a class="float-right" href="mailto:{{$contact->email}}">{{$contact->email}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Direct Phone</b> <a class="float-right">{{$contact->directphone}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Ext</b> <a class="float-right">{{$contact->extension}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Department</b> <a class="float-right">{{str_replace(array('[', '"', ']',), '',$contact->departments)}}</a>
                    </li>
                  </ul>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

  
              <!-- About Me Box -->
              <div class="card card-dark card-outline">
                <div class="card-header">
                  <h3 class="card-title">About Me</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b><i class="fas fa-users mr-1"></i> Team</b><a class="float-right">{{$contact->team}}</a>
                    </li>
                    @can('edit-users')
                    <li class="list-group-item">
                      <b><i class="fas fa-phone mr-1"></i> Cell Phone</b><a class="float-right">{{$contact->cell}}</a>
                    </li>
                    <li class="list-group-item">
                      <b><i class="fas fa-box mr-1"></i> Box Folder ID</b><a class="float-right">{{$contact->folderID}}</a>
                    </li>
                    @endcan
                  {{-- <strong><i class="fas fa-users mr-1"></i> Team</strong>
                  <p class="text-muted">
                    {{$contact->team}}
                  </p>
                  @can('edit-users')
                  <hr>
                  <strong><i class="fas fa-phone mr-1"></i> Cell Phone</strong>
                  <p class="text-muted">{{$contact->cell}}</p>
                  @endcan --}}
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              
            </div>
            @can('edit-users')
            <div class="col-sm-8 col-md-6 col-lg-6 col-xl-4">
              <a href="{{ route('admin.user.edit', $contact->id)}}"><button class="float-left btn btn-outline-dark">Edit</button></a>
            </div>
            @endcan
            <!-- /.col -->
            <!-- /.col -->
          </div>
          <!-- /.row -->
          @endforeach  
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<!-- ./wrapper -->

@stop