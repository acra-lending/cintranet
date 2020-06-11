@extends('layouts.default')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Edit User Details</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">User Management</a></li>
                <li class="breadcrumb-item active">Edit</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <form action="{{ route('admin.user.update', $user) }}" method="POST" enctype="multipart/form-data">
            @csrf
          @foreach($profile as $contact)  
          <div class="row">
            <div class="col-sm-8 col-md-6 col-lg-6 col-xl-4">
              <!-- Profile Image -->
              <div class="card card-danger card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <div class="form-group">
                      <img class="profile-user-img img-fluid img-circle"
                      src="{{ ($contact->avatar) ? url('storage/avatars/' .$contact->avatar) : asset('img/avatar1.png') }}"
                      alt="User profile picture">
                    </div>

                  </div>
                  <h3 class="profile-username text-center">{{$contact->firstname}} {{$contact->lastname}}</h3>
  
                  <p class="text-muted text-center">{{$contact->position}}</p>
  
                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Email</b> 
                        <input type="text" class="float-right" name="email" value="{{$contact->email}}" style="width:50%; text-align:right;">
                    </li>
                    <li class="list-group-item">
                      <b>Direct Phone</b> 
                      <input type="text" class="float-right" name="directphone" value="{{$contact->directphone}}" style="width:50%; text-align:right;">
                    </li>
                    <li class="list-group-item">
                      <b>Ext</b>
                      <input type="text" class="float-right" name="extension" value="{{$contact->extension}}" style="width:50%; text-align:right;">
                    </li>
                    <li class="list-group-item">
                      <b>Department</b> 
                      <input type="text" class="float-right" name="departments" value="{{$contact->departments}}" style="width:50%; text-align:right;">
                      {{-- <a class="float-right">{{str_replace(array('[', '"', ']',), '',$contact->departments)}}</a> --}}
                    </li>
                  </ul>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

  
              <!-- About Me Box -->
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">About Me</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <strong><i class="fas fa-users mr-1"></i> Team</strong>
  

                    <input type="text" class="float-right" name="team" value="{{$contact->team}}" style="width:50%; text-align:right;">

  
                  <hr>
  
                  <strong><i class="fas fa-map-marker-alt mr-1"></i> Team Region</strong>
  
                  <input type="text" class="float-right" name="teamregion" value="{{$contact->teamregion}}" style="width:50%; text-align:right;">
  
                  <hr>
  
                  <strong><i class="fas fa-clock mr-1"></i> Member Since</strong>
  
                  <p class="text-muted">
                    <span class="tag tag-danger">{{ date('F jS, Y', strtotime($contact->created_at)) }}</span>
                  </p>
  
                  <hr>
  
                  <strong><i class="fas fa-phone mr-1"></i> Cell Phone</strong>
  
                  <input type="text" class="float-right" name="cell" value="{{$contact->cell}}" style="width:50%; text-align:right;">
                </div>
                <!-- /.card-body -->
              </div>
            </div>
            <!-- /.col -->

            <div class="col-sm-8 col-md-6 col-lg-6 col-xl-4">
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Edit Roles for {{ $user->name }}</h3>
                </div>
                <div class="card-body table-responsive p-0">


                    {{ method_field('PUT') }}
                    @foreach($roles as $role)
                      <div class="form-check">
                        <input type="checkbox" name="roles[]" value=" {{ $role->id }}"
                        @if($user->roles()->pluck('role_id')->contains($role->id)) checked 
                        @endif>
                        <label>{{ $role->name }}</label>
                      </div>
                    @endforeach
                </div>
              </div>
              <div class="form-group">
                {{ Form::label('Profile Picture ') }}
                {{ Form::file('avatar') }}
                <button type="submit" class="btn btn-primary float-right">Update</button>
            </div>

            </form>
            </div>

          </div>
          <!-- /.row -->
          @endforeach  
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div> <!-- end content-wrapper -->

@stop