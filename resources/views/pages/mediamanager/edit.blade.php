@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">File Manager</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="/">File Manager</a></li>
                <li class="breadcrumb-item">Edit</a></li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
            <!-- Main content -->

        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h4 class="card-title">Edit File</h4>
                        </div>

                        <div class="card-body">

                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Edit</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="card-body">
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                            <div class="card-body">
                                                {{ Form::open(['action' => ['UploadController@update', $file->id], 'method' => 'PUT']) }}
                                                <div class="input-group">
                                                    <div class="input-group">
                                                        <div class="form-group col-sm-12">
                                                            {{ Form::label('filename', 'Filename')}}
                                                            {{ Form::text('filename', $file->filename, ['class' => 'form-control', 'placeholder' => 'Filename']) }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-3 col-sm-6">
                                                            {{ link_to(URL::previous(),'Cancel', ['class' => 'btn btn-outline-danger btn-block mb-2'])}}
                                                        </div>
                                                        <div class="col-md-3 col-sm-6">
                                                            {{ Form::submit('Submit', ['class' => 'btn btn-danger btn-block' ]) }}
                                                            {{ Form::close() }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                            
                                    </div>
                                    <!-- /.card -->
                                </div>
                            </div>
                            </div>
                    
                        </div>
                    </div>
                </div>
                </div>
        </section>
        </div>
  </div>
  <!-- /.col -->
<!-- /.control-sidebar -->
<!-- ./wrapper -->
@stop