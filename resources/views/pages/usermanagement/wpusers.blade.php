@extends('layouts.default')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Wordpress Users</h1>
              @can('manage-posts')
                <a href="/usermanagement/brokerportalrequests" class="mt-3 col-sm-3 btn btn-outline-dark">Create User</a>
              @endcan
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/usermanagement/user">User Management</a></li>
                <li class="breadcrumb-item active">Manage Users</li>
              </ol>
            </div>
          </div>

      </section>
      <style>
        .card-danger:not(.card-outline) .card-header {
        background: linear-gradient(138deg, rgba(171,35,40,1) 0%, rgba(52,58,64,1) 85%);
        }
      </style>
  
      <!-- Main content -->
      <section class="content">
        <livewire:usermanagement.w-p-users />
      </section>
    </div> <!-- end content-wrapper -->

@stop
