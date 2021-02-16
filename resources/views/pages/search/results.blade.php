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
      <style>
        .cell-breakWord{
          word-wrap: break-word;
          min-width: 100px;
          max-width: 100px;
          white-space: normal;
        }

        .card-danger:not(.card-outline) .card-header {
        background: var(--linear-gradient);
        }
      </style>


      <section class="content">
        @include('pages.modals.modal-forms')
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
                        @if(count($users) > 0)
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role(s)</th>
                            <th>Created At</th>
                            <th>Last Visit Date</th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                            <td><a href="/directory/user/{{$user->id}}">{{$user->name}}</a></td>
                            <td><a href="mailto:{{$user->email}}">{{$user->email}}</a></td>
                            <td>{{implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->lastvisitDate}}</td>
                            @can('edit-users')
                            <td>
                              <a href="{{ route('admin.user.edit', $user->id)}}"><button class="btn btn-outline-dark">Edit</button></a>
                            </td>
                            @endcan
                          </tr>
                          @endforeach
                          @else 
                            <tr>
                              {{-- show nothing --}}
                            </tr>
                          @endif
                        </tbody>
                        <thead>
                          @if(count($posts) > 0)
                          <tr>
                            <th>File Name</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Category Id</th>
                            <th>File Size</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                          <tr>
                            <td class="cell-breakWord">{{$post->filename}}</td>
                            <td>{{$post->created_at}}</td>
                            <td>{{$post->updated_at }}</td>
                            @can('manage-users')
                            <td class="cell-breakWord">{{$post->category_id }}</td>
                            @endcan
                            <td>{{$post->filesize}} KB</td>
                            <td>
                              <a href="{{ route('show', $post->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                              @can('edit-users')
                              <a href="#" class="btn btn-warning" data-filename="{{ $post->filename}}" data-category_id="{{ $post->category_id }}" data-file_id="{{ $post->id }}"  data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
                              @endcan
                              <a href="/download/{{$post->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                            </td>
                          </tr>
                          @endforeach
                          @else
                          <tr>
                            {{-- show nothing --}}
                          </tr>
                          @endif
                        </tbody>
                        <thead>
                          @if(count($announcements) > 0)
                          <tr>
                            <th>Title</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Resource Files</th>
                          </tr>
                        </thead>                            
                        <tbody>
                          @foreach($announcements as $announcement)
                        <tr>
                          <td><a href="/learning/announcements/{{$announcement->id}}" class="cell-breakWord">{{$announcement->title}}</a></td>
                          <td>{{$announcement->created_at}}</td>
                          <td>{{$announcement->updated_at }}</td>
                          <td>
                            @foreach($files as $file)
                            @if($file->announcement_id == $announcement->id)
                            <a href="{{ route('view', $file->file) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                            @endif
                            @endforeach 
                          </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                          {{-- show nothing --}}
                        </tr>
                        @endif
                      </tbody>
                      <thead>
                        @if(count($learningPosts) > 0)
                        <tr>
                          <th>Title</th>
                          <th>Created At</th>
                          <th>Updated At</th>
                        </tr>
                      </thead>                            
                      <tbody>
                        @foreach($learningPosts as $learningPost)
                      <tr>
                        <td><a href="/learning/posts/{{$learningPost->id}}" class="cell-breakWord">{{$learningPost->title}}</a></td>
                        <td>{{$learningPost->created_at}}</td>
                        <td>{{$learningPost->updated_at }}</td>
                      </tr>
                      @endforeach
                      @else
                      <tr>
                        {{-- show nothing --}}
                      </tr>
                      @endif
                    </tbody>
                      <thead>
                        @if(count($events) > 0)
                        <tr>
                          <th>Title</th>
                          <th>Start</th>
                          <th>End</th>
                          <th>Description</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($events as $event)
                      <tr>
                        <td><a href="/learning/courses/fullcalendar" class="cell-breakWord">{{$event->title}}</a></td>
                        <td>{{$event->start}}</td>
                        <td>{{$event->end}}</td>
                        <td>{{$event->description}}</td>
                      </tr>
                      @endforeach
                      @else
                      <tr>
                        {{-- show nothing --}}
                      </tr>
                      @endif
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