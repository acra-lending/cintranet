@extends('layouts.default')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Manage Users</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">User Management</a></li>
                <li class="breadcrumb-item active">Manage Users</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">

            <div class="col-12">
                <div class="card card-danger">
                  <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-user"></i> Users</h3>
    
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th class="w-25">Name</th>
                          <th class="w-0">Email</th>
                          <th class="w-0">Role(s)</th>
                          <th class="w-0">Registration Date</th>
                          <th class="w-0">Last Login</th>
                          <th class="w-0">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($users as $user)
                        <tr>
                          <td><div class="col-2 image float-left"><img src="{{ ($user->avatar) ? url($user->avatar) : asset('img/avatar1.png') }}" alt="user-photo" class="img-circle img-fluid"></div><p class="pt-2 mb-0">{{$user->name}}</p></td>
                          <td>{{$user->email}}</td>
                          <td>{{implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                          <td>{{$user->created_at}}</td>
                          <td>{{$user->lastvisitDate}}</td>
                          <td>
                            <a href="{{ route('admin.user.edit', $user->id)}}"><button class="float-left btn btn-outline-dark">Edit</button></a>
                            {{ Form::open(['action' => ['Admin\UsersController@destroy', $user], 'method' => 'DELETE', 'class' => 'float-left pl-1']) }}
                            {{ Form::submit('Delete', ['class' => 'btn btn-outline-danger', 'onclick' => "return confirm('Are you sure?')"]) }}
                            {{ Form::close() }}
                            {{-- <a href="{{ route('admin.user.destroy', $user->id)}}" method="POST"><button class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</button></a> --}}
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                {{$users->links()}}
                <!-- /.card -->
              </div>

          </div>
        </div>
      </section>
    </div> <!-- end content-wrapper -->

@stop
