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
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active"><a href="/">Learning</a></li>
            <li class="breadcrumb-item">Announcements</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
 <!--POST TEMPLATE -->
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Box Comment -->
            <div class="card card-widget">
            <!-- /.card-header -->
            <div class="card-body">
                <!-- post text -->
                <h4>{{$post->title}}</h4>
                <!-- Attachment -->
                <div class="col-md-3">
                    <h6>Resource Files: </h6>
                    @foreach($files as $file)
                    @if($file->announcement_id == $post->id)
                    <a href="{{ route('view', $file->file) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                    @endif
                    @endforeach 
                </div>
                <p>{!!$post->body!!}</p>
                <span class="description" style="font-size: 10pt"><em>~{{Carbon\Carbon::parse($post->created_at)->format('Y-m-d')}}</em></span>
            </div>   
            <!-- /.card-body -->
            </div>
            <a href="/learning/announcements" class="btn btn-outline-danger">Back</a>
            @can('edit-posts')
            <a href="/learning/announcements/{{$post->id}}/edit" class="btn btn-outline-dark">Edit</a>
            @endcan
            @can('manage-users')
            {{ Form::open(['action' => ['AnnouncementPostsController@destroy', $post->id], 'method' => 'DELETE', 'class' => 'float-right']) }}
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
