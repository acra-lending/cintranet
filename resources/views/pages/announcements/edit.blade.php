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
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <style>

    .card-danger:not(.card-outline) .card-header {
    background: var(--linear-gradient);
    }
    
    </style>
    
        <!--POST TEMPLATE -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h4 class="card-title">Edit Announcement</h4>
                        </div>
                        <div class="card-body">
                            {{ Form::open(['action' => ['AnnouncementPostsController@update', $post->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) }}
                                <div class="form-group">
                                    {{ Form::label('title', 'Title')}}
                                    {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('body', 'Body')}}
                                    {{ Form::textarea('body', $post->body, ['id' => 'editor1','class' => 'form-control', 'placeholder' => 'Body Text'])}}
                                </div>

                                <div class="form-group">
                                    {{ Form::label('Attach Resource Files:') }}
                                    {{ Form::file('file[]', array('multiple' => true, 'accept' => 'doc,docx,pdf')) }}
                                </div>
                                {{ Form::submit('Submit', ['class' => 'btn btn-danger']) }}
                            {{ Form::close() }}


                            <div class="card-body table-responsive p-0">
                                <table class="table">
                                  <thead>
                                      
                                        <th>Resources Files</th>
                                      
                                  </thead>
                                    <tbody>
                                      @foreach($files as $file)
                                    <tr>
                                        <td>
                                            <a href="{{ route('view', $file->file) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-file-alt"></i> {{$file->file}}</a>
                                            <div class="btn-group btn-group-sm">
                                                @can('edit-posts')
                                                {{ Form::open(['action' => ['AnnouncementPostsController@destroyFile', $file->id], 'method' => 'DELETE']) }}
                                                  {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                                {{ Form::close()}}
                                                @endcan
                                              </div>
                                        </td>

                                    </tr>
                                    
                                      @endforeach
                                    </tbody>
                                </table>
                              </div>



                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->

</div>

@endsection

@push('includes.scripts')
<!-- CKeditor -->
<script src="{{ asset('plugins/ckeditor/ckeditor.js') }}"></script>
<script>
    window.onload = function() {
        CKEDITOR.replace( 'editor1' );
    };
</script>
@endpush
