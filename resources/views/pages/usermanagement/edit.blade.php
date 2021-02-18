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
                <li class="breadcrumb-item"><a href="/usermanagement/user">User Management</a></li>
                <li class="breadcrumb-item active">Edit</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <style>
        .card-danger:not(.card-outline) .card-header {
        background: var(--linear-gradient);
        }
      </style>

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

                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>First Name</b>
                      <input type="text" class="form-control float-right" name="firstname" value="{{$contact->firstname}}" style="width:50%; text-align:right;">
                    </li>
                    <li class="list-group-item">
                      <b>Last Name</b>
                      <input type="text" class="form-control float-right" name="lastname" value="{{$contact->lastname}}" style="width:50%; text-align:right;">
                    </li>
                    <li class="list-group-item">
                      <b>Position</b>
                      <input type="text" class="form-control float-right" name="position" value="{{$contact->position}}" style="width:50%; text-align:right;">
                    </li>

                    <li class="list-group-item">
                      <b>Email</b> 
                        <input type="text" class="form-control float-right" name="email" value="{{$contact->email}}" style="width:50%; text-align:right;">
                    </li>
                    <li class="list-group-item">
                      <b>Direct Phone</b> 
                      <input type="text" class="form-control float-right" name="directphone" value="{{$contact->directphone}}" style="width:50%; text-align:right;">
                    </li>
                    <li class="list-group-item">
                      <b>Ext</b>
                      <input type="text" class="form-control float-right" name="extension" value="{{$contact->extension}}" style="width:50%; text-align:right;">
                    </li>
                    <li class="list-group-item">
                      <b>Department</b> 
                      <input type="text" class="form-control float-right" name="departments" value="{{str_replace(array('[', '"', ']',), '',$contact->departments)}}" style="width:50%; text-align:right;">
                      <label class="control-label" for="department">Department</label>
                      {{ Form::select('departments', str_replace(array('[', '"', ']'), '', $departments), null, ['class' => 'form-control', 'name' => 'department', 'placeholder' => $contact->departments, 'style' => 'width:100%'])  }}
                      {{-- <a class="float-right">{{str_replace(array('[', '"', ']',), '',$contact->departments)}}</a> --}}
                    </li>
                  </ul>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

  
              <!-- About Me Box -->
              <div class="card card-danger card-outline">
                <div class="card-header">
                  <h3 class="card-title">About Me</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <strong><i class="fas fa-users mr-1"></i> Team</strong>
                    <input type="text" class="form-control float-right" name="team" value="{{$contact->team}}" style="width:50%; text-align:right;">
                  <hr>
                  <strong><i class="fas fa-phone mr-1"></i> Cell Phone</strong>
                  <input type="text" class="form-control float-right" name="cell" value="{{$contact->cell}}" style="width:50%; text-align:right;">
                </div>
                <!-- /.card-body -->
              </div>
            </div>
            <!-- /.col -->
            <div class="col-sm-8 col-md-6 col-lg-6 col-xl-4">
              <div class="card card-danger">
                <div class="card-header">
                  @can('edit-users')
                  <h3 class="card-title">Edit Roles for {{ $user->name }}</h3>
                  @endcan
                </div>
                <div class="card-body table-responsive p-0">



                    {{ method_field('PUT') }}
                    @can('edit-users')
                    @foreach($roles as $role)
                      <div class="form-check">
                        <input type="checkbox" name="roles[]" value=" {{ $role->id }}"
                        @if($user->roles()->pluck('role_id')->contains($role->id)) checked 
                        @endif>
                        <label>{{ $role->name }}</label>
                      </div>
                    @endforeach
                    @endcan
                </div>
              </div>

              <div class="form-group">
                @can('manage-users')
                {{ Form::label('Profile Picture ') }}
                {{ Form::file('avatar') }}
                @endcan
                <button type="submit" class="btn btn-danger float-right">Update</button>
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