@extends('layouts.default')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
          <div class="col-sm-6">
              <h1 class="m-0 text-dark">Search Results</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/search">Search</a></li>
              <li class="breadcrumb-item active">Results</li>
              </ol>
          </div><!-- /.col -->
          </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <section class="content">
        <div class="container-fluid">
            <div class="row">
  
              <div class="col-12">
                  <div class="card card-danger">
                    <div class="card-header">
                      <h3 class="card-title"><i class="fas fa-search"></i> Results</h3>
      
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap">
                        <thead>
                          <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
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
                        <tbody>
                            @foreach($posts as $post)
                          <tr>
                            <td>{{$post->filename}}</td>
                            <td>{{$post->created_at}}</td>
                            <td>{{$post->updated_at }}</td>
                            <td>{{$post->category_id}}</td>
                            <td>{{$post->filesize}} KB</td>
                            <td>
                              <a href="{{ route('show', $post->filename) }}" target="_blank"><button class="btn btn-primary">Show</button></a>
                              <a href="/download/{{$post->filename}}" download class="btn btn-info">Download</button></a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  {{-- {{$users->links()}} --}}
                  <!-- /.card -->
                </div>
  
            </div>
          </div>
      </section>

    </div>
@stop