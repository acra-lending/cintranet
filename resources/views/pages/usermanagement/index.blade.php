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
                          <th>Name</th>
                          <th>Email</th>
                          <th>Role(s)</th>
                          <th>Registration Date</th>
                          <th>Last Login</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($users as $user)
                        <tr>
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                          <td>{{$user->created_at}}</td>
                          <td>{{$user->lastvisitDate}}</td>
                          <td>
                            <a href="{{ route('admin.user.edit', $user->id)}}"><button class="btn btn-primary">Edit</button></a>
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
