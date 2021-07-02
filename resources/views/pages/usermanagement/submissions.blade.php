@extends('layouts.default')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>AE Submission Goals</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/usermanagement/user">User Management</a></li>
                <li class="breadcrumb-item active">Submission Goals</li>
              </ol>
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
        @include('pages.modals.modal-submissions')
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
                <div class="card card-danger">
                  <div class="card-header">
                      <div class="row">
                      <h3 class="card-title"><i class="fas fa-user"></i> Users Per Page: &nbsp;</h3>
                      <div class="col-xs-2 float-left form-inline">
                          <select wire:model="perPage" class="form-control">
                              <option>25</option>
                              <option>50</option>
                              <option>75</option>
                              <option>100</option>
                          </select>
                      </div>
                      <!-- SEARCH FORM -->
                      {{-- <div class="col float-right">
                        <div class="input-group input-group">
                          <input class="form-control form-control-navbar" wire:model="searchTerm" type="text" placeholder="Search Name or Email" aria-label="Search" autofocus="autofocus">
                          <div class="input-group-append">
                              <button class="btn btn-navbar" type="submit" style="right: 40px;">
                              <i class="fas fa-search"></i>
                              </button>
                          </div>
                        </div>
                      </div> --}}
                  </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    @if(count($users) > 0)
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th class="w-25">Name</th>
                          {{-- <th class="w-25">Email</th> --}}
                          <th class="w-25">Submission Goals</th>
                          <th class="w-25">Funding Goals</th>
                          {{-- <th class="w-0">Role(s)</th> --}}
                          {{-- <th class="w-0"><a wire:click.prevent="sortBy('created_at')" role="button" href="#">
                              Register Date 
                              @include('includes._sort-icon', ['field' => 'created_at'])
                          </a></th> --}}
                          {{-- <th class="w-0"><a wire:click.prevent="sortBy('lastvisitDate')" role="button" href="#">
                              Last Login 
                              @include('includes._sort-icon', ['field' => 'lastvisitDate'])
                          </a></th> --}}
                          <th class="w-0">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($users as $user)
                        <tr>
                          <td><div class="col-sm-2 col-md-6 col-lg-3 col-xl-2 image float-left"><img src="{{ ($user->avatar) ? url('/storage/avatars/' .$user->avatar) : asset('img/avatar1.png') }}" alt="user-photo" class="img-circle img-fluid"></div><p class="pt-2 mb-0 float-left">{{$user->name}}</p></td>
                          {{-- <td>{{$user->email}}</td> --}}
                          {{-- <td>{{implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td> --}}
                          {{-- <td>{{ Carbon\Carbon::parse($user->created_at)->format('Y-m-d') }}</td> --}}
                          {{-- <td>{{ Carbon\Carbon::parse($user->lastvisitDate)->format('Y-m-d') }}</td> --}}
                          <td>{{$user->submission_goal}}</td>
                          <td>{{$user->funding_goal}}</td>
                          <td>
                            @can('edit-users')
                            {{-- <a href="{{ route('admin.user.edit', $user->id)}}"><button class="float-left btn btn-outline-dark">Edit</button></a> --}}
                            <a 
                            href="#" 
                            class="btn btn-warning" 
                            data-submission_goal="{{ $user->submission_goal }}" 
                            data-funding_goal="{{ $user->funding_goal }}" 
                            data-ae_name="{{ $user->name }}" 
                            data-submission_id="{{ $user->id }}" 
                            data-user_id="{{ $user->user_id }}" 
                            data-toggle="modal" 
                            data-target="#submissions">
                            <i class="fas fa-edit"></i>
                        </a>
                            @endcan
                            {{-- <a href="{{ route('admin.user.destroy', $user->id)}}" method="POST"><button class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</button></a> --}}
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    @else
                    <div class="container pt-2">
                      <p>No Users Found</p>
                    </div>
                    @endif
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                      {{-- {{$users->links()}} --}}
                  </div>
                  <div class="col text-right text-muted">
                      {{-- Showing {{$users->firstItem()}} to {{$users->lastItem()}} out of {{$users->total()}} results --}}
                </div>
              </div>
          </div>
        </div>
      </div>
      </section>
    </div> <!-- end content-wrapper -->

@stop
