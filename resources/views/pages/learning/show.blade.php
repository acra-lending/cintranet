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
                    <!-- /.card-header -->
                    <div class="card-body">
                        <!-- Attachment -->
                        <div class="img">
                            <img class="img-responsive img-thumbnail card-img-top float-left" src="{{ asset ('storage/cover_images/' .$post->cover_image) }}" alt="cover-image">
                        </div>
                        <div class="card-body px-1">
                            <!-- post text -->
                            <h4>{{$post->title}}</h4>
    
                            <p>{!!$post->body!!}</p>
    
    
                            <span class="description" style="font-size: 10pt"><em>~{{Carbon\Carbon::parse($post->created_at)->format('Y-m-d')}}</em></span>
                        </div>   
                        <!-- /.card-body -->     
                    </div>

                    </div>
                    <a href="/learning/posts" class="btn btn-outline-danger">Back</a>
                    @can('edit-posts')
                    <a href="/learning/posts/{{$post->id}}/edit" class="btn btn-outline-dark">Edit</a>
                    @endcan
                    @can('delete-posts')
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
