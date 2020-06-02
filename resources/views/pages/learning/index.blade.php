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
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Learning</li>
            <li class="breadcrumb-item"><a href="/">Building Relationships</a></li>
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
                        <img class="img-circle" src="{{ asset ('img/avatar1.png') }}" alt="User Image">
                        <span class="username"><a href="/learning/posts/{{$post->id}}">Learing and Development</a></span>
                        <span class="description">{{$post->created_at}}</span>
                        </div>
                        <!-- /.user-block -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <!-- Attachment -->
                        <div class="img">
                            <a href="/learning/posts/{{$post->id}}">
                            <img class="img-responsive img-thumbnail float-left" src="{{ asset ('img/attach5.jpg') }}" alt="Attachment Image"></a>
                        </div>                    
                        <!-- post text -->
                        <a href="/learning/posts/{{$post->id}}"><h4>{{$post->title}}</h4></a>
                        
                        <p>{!!$post->body!!}</p>

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

    @else <p>No Posts Found</p>
    @endif

</div>


@stop
