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
    
        <!--POST TEMPLATE -->
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <!-- Box Comment -->
                    <div class="card card-widget">
                    {{-- <div class="card-header">
                        <div class="user-block">
                        <img class="img-circle" src="{{ asset ('img/avatar1.png') }}" alt="User Image">
                        <span class="username">Learing and Development</span>
                        <span class="description">{{$post->created_at}}</span>
                        </div>
                        <!-- /.user-block -->
                    </div> --}}
                    <!-- /.card-header -->
                    <div class="card-body">
                        <!-- Attachment -->
                        <div class="img">
                            <img class="img-responsive card-img-top float-left" src="{{ asset ('img/attach5.jpg') }}" alt="Attachment Image">
                        </div>     
                    </div>
                    <div class="card-body">
                        <!-- post text -->
                        <h4>{{$post->title}}</h4>

                        <p>{!!$post->body!!}</p>


                        <span class="description">{{$post->created_at}}</span>
                    </div>   
                    <!-- /.card-body -->
                    </div>
                    <a href="/learning/posts" class="btn btn-outline-danger">Back</a>
                    @can('edit-users')

                    <a href="/learning/posts/{{$post->id}}/edit" class="btn btn-outline-dark">Edit</a>
                    {{ Form::open(['action' => ['LearningPostsController@destroy', $post->id], 'method' => 'DELETE', 'class' => 'float-right']) }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"]) }}
                    {{ Form::close() }}
                    
                    @endcan
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        </div><!-- /.container-fluid -->

</div>


@stop
