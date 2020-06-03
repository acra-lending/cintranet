@extends('layouts.default')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Edit User</h1>
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
          <div class="row">

            <div class="col-12">
                <div class="card card-danger">
                  <div class="card-header">
                    <h3 class="card-title">Edit user {{ $user->name }}</h3>
    
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    <form action="{{ route('admin.user.update', $user) }}" method="POST">
                      @csrf
                      {{ method_field('PUT') }}
                      @foreach($roles as $role)
                        <div class="form-check">
                          <input type="checkbox" name="roles[]" value=" {{ $role->id }}"
                          @if($user->roles()->pluck('role_id')->contains($role->id)) checked 
                          @endif>
                          <label>{{ $role->name }}</label>
                        </div>
                      @endforeach
                      <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>

          </div>
        </div>
      </section>
    </div> <!-- end content-wrapper -->

@stop