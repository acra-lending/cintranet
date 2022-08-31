@extends('layouts.default')

@section('content')
    <div class="content-wrapper">
      <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Edit User Details</h1>
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
                        {{-- <b>Department</b> 
                        <input type="text" class="form-control float-right" name="departments" value="{{str_replace(array('[', '"', ']',), '',$contact->departments)}}" style="width:50%; text-align:right;"> --}}
                        <label class="control-label" for="department">Division</label>
                        {{ Form::select('division', str_replace(array('[', '"', ']'), '', $division), $contact->division, ['class' => 'form-control float-right', 'name' => 'division', 'style' => 'width:65%'])  }}
                      </li>
                      <li class="list-group-item">
                        {{-- <b>Department</b> 
                        <input type="text" class="form-control float-right" name="departments" value="{{str_replace(array('[', '"', ']',), '',$contact->departments)}}" style="width:50%; text-align:right;"> --}}
                        <label class="control-label" for="department">Department</label>
                        {{ Form::select('departments', str_replace(array('[', '"', ']'), '', $departments), $contact->departments, ['class' => 'form-control float-right', 'name' => 'departments', 'style' => 'width:65%'])  }}
                      </li>
                    </ul>
                  </div>
                </div>  
                <!-- About Me Box -->
                <div class="card card-danger card-outline">
                  <div class="card-header">
                    <h3 class="card-title">About Me</h3>
                  </div>
                  <div class="card-body">
                    <ul class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item">
                        <b><i class="fas fa-users mr-1"></i> Team</b>
                        <input type="text" class="form-control float-right" name="team" value="{{$contact->team}}" style="width:50%; text-align:right;">
                      </li>
                      <li class="list-group-item">
                        <b><i class="fas fa-phone mr-1"></i> Cell Phone</b>
                        <input type="text" class="form-control float-right" name="cell" value="{{$contact->cell}}" style="width:50%; text-align:right;">
                      </li>
                      @can('edit-users')
                      <li class="list-group-item">
                        <b><i class="fas fa-box mr-1"></i> Box Folder ID</b>
                        <input type="text" class="form-control float-right" name="folderID" value="{{$contact->folderID}}" style="width:50%; text-align:right;">
                      </li>
                      @endcan
                  </div>
                </div>
              </div>
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
                  {{-- @can('edit-users')
                    <div class="card card-danger">
                      <div class="card-header">
                        <h3 class="card-title">POD Details</h3>
                      </div>
                      <div class="card-body">
    
                        <ul class="list-group list-group-unbordered mb-3">
                          <li class="list-group-item">
                            <b>POD:</b>
                            {{ Form::select('pod_id', $pods, $contact->pod_id, ['placeholder' => '', 'class' => 'form-control float-right', 'name' => 'pod_id', 'style' => 'width:65%'])  }}
                          </li>
                        </ul>

                        <div class="mb-2">
                          <div class="form-check">
                            <input type="checkbox" name="pod_lead" value="1"
                            @if($contact->pod_lead == "1") checked
                            @endif>
                            <label>POD Lead</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" name="pod_tm_lead" value="1"
                            @if($contact->pod_tm_lead == "1") checked
                            @endif>
                            <label>TM Lead</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" name="pod_uw_lead" value="1"
                            @if($contact->pod_uw_lead == "1") checked
                            @endif>
                            <label>UW Lead</label>
                          </div>
                        </div>
                        <ul class="list-group list-group-unbordered mb-3">
                          <li class="list-group-item">
                            <b>POD TM Team:</b>
                            {{ Form::select('pod_tm_lead_name', $tmPodTeam, $contact->pod_tm_lead_name, ['placeholder' => '', 'class' => 'form-control float-right', 'name' => 'pod_tm_lead_name', 'style' => 'width:65%'])  }}
                          </li>
                          <li class="list-group-item">
                            <b>POD UW Team:</b>
                            {{ Form::select('pod_uw_lead_name', $uwPodTeam, $contact->pod_uw_lead_name, ['placeholder' => '', 'class' => 'form-control float-right', 'name' => 'pod_uw_lead_name', 'style' => 'width:65%'])  }}
                          </li>
                        </ul>
    
                      </div>
                    </div> 
                  @endcan --}}
                  @can('manage-users')
                  {{ Form::label('Profile Picture ') }}
                  {{ Form::file('avatar') }}
                  @endcan
                  <button type="submit" class="btn btn-danger float-right">Update</button>
                </div>
          </form>
                  @can('delete-users')
                  {{ Form::open(['action' => ['Admin\UsersController@delete_avatar', $user], 'method' => 'PUT']) }}
                    {{ Form::button('Delete Picture', ['type' => 'submit', 'class' => 'btn btn-secondary btn-sm mb-3', 'onclick' => "return confirm('Are you sure?')"])}}
                  {{ Form::close()}}
                  @endcan
              </div>

            </div> <!--End Row -->
            @endforeach  
      </section>
    </div>

@stop