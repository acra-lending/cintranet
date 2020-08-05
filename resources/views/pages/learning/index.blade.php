@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Building Relationships</h1>
            @can('manage-posts')
                <a href="/learning/posts/create" class="mt-3 col-sm-2 btn btn-outline-dark">Create</a>
            @endcan
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Learning</a></li>
            <li class="breadcrumb-item active">Building Relationships</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    @if(count($posts) > 0)
        @foreach($posts as $post)
        <!--POST TEMPLATE -->
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <!-- Box Comment -->
                    <div class="card card-widget">
                    <div class="card-header">
                        <div class="user-block">
                        <img class="img-circle" src="{{ ($post->user->avatar) ? url('/storage/avatars/' .$post->user->avatar) : asset('img/avatar1.png') }}" alt="User Image">
                        <span class="username"><a href="/learning/posts/{{$post->id}}">Learning and Development</a></span>
                        <span class="description">{{$post->created_at}} by {{$post->user->name}}</span>

                        </div>
                        <!-- /.user-block -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <!-- Attachment -->
                        <div class="img">
                            <a href="/learning/posts/{{$post->id}}">
                            <img class="img-responsive img-thumbnail float-left" src="{{ asset ('storage/cover_images/' .$post->cover_image) }}" alt="cover-image"></a>
                        </div>                    
                        <!-- post text -->
                        <a href="/learning/posts/{{$post->id}}"><h4>{{$post->title}}</h4></a>
                        
                        <p>{!! Str::limit($post->body, 150) !!}</p>
                        <div class="float-right pr-3 pb-3">
                            <a href="/learning/posts/{{$post->id}}" class="small-box-footer float-right">Read More <i class="fas fa-chevron-circle-right"></i></a>
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
