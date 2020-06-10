@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Announcements</h1>
            @can('manage-posts')
                <a href="/learning/announcements/create" class="mt-3 col-sm-2 btn btn-outline-dark">Create</a>
            @endcan
        </div><!-- /.col -->

        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Learning</li>
            <li class="breadcrumb-item"><a href="#">Announcements</a></li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    @if(count($posts) > 0)
        @foreach($posts as $post)
        <!--POST TEMPLATE -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <!-- Box Comment -->
                    <div class="card card-widget">
                    <div class="card-header">

                        <div class="user-block">
                        <img class="img-circle" src="{{ ($post->user->avatar) ? url($post->user->avatar) : asset('img/avatar1.png') }}" alt="User Image">
                        <span class="username"><a href="/learning/announcements/{{$post->id}}">Learning and Development</a></span>
                        <span class="description">{{$post->created_at}} by {{$post->user->name}}</span>

                        </div>
                        <!-- /.user-block -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <!-- Attachment -->
                        <div class="img">
                            <a href="/learning/announcements/{{$post->id}}">
                            {{-- <img class="img-responsive img-thumbnail float-left" src="{{ asset ('storage/files/' .$post->file) }}" alt="ga-file"></a> --}}
                        </div>                    
                        <!-- post text -->
                        <a href="/learning/announcements/{{$post->id}}">
                            <h4>{{$post->title}}
                                <!-- Attachment -->
                                <div class="pl-4 col-sm-10 col-md-3 float-right mr-4">
                                <h6>Resource Files: </h6>
                                @foreach($files as $file)
                                @if($file->announcement_id == $post->id)
                                <a href="{{ route('view', $file->file) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                                @endif
                                @endforeach   
                                </div>
                                
                            </h4>                        
                        </a>
                        <div class="col-md-3 float-right mr-4 p-0">
                            <ul class="list-unstyled">
                                {{-- @foreach($files as $file)
                                <a href="{{ route('show', $file->file) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                                @endforeach --}}

                            </ul>
                        </div>


                        <div class="image">
                            <p>{!!$post->body!!}</p>
                        </div>


                    </div>
                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        </div><!-- /.container-fluid -->
        @endforeach
        <div class="container-fluid">
            <div class="row justify-content-center">
                {{$posts->links()}}
            </div>
        </div>

    @else 
        <div class="container">
            <p>No Announcements Found</p>
        </div>
    @endif
</div>


@stop
