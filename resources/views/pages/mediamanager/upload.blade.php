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
                <li class="breadcrumb-item active"><a href="#">File Manager</a></li>
                <li class="breadcrumb-item">Upload</a></li>
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
                            <h4 class="card-title">Upload File(s)</h4>
                        </div>
                        <div class="card-body">
                            {{ Form::open(['action' => 'UploadController@upload', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
                                <div class="input-group">
                                    {{-- <div class="form-group" style="width:50%;">
                                        {{ Form::label('title', 'Title')}}
                                        {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'ie. csc-ratematrix-1stTDs-ODF'])}}
                                    </div> --}}
                                    <div class="input-group">
                                        <div class="form-group" style="width:50%;">
                                            {{ Form::label('category_id', 'Category')}}
                                            {{ Form::select('category_id', ['OMBS & VOE', 'Non-Prime Wholesale', 'Outside Dodd-Frank', 'Outside Dodd-Frank Plus'])}}
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <div class="form-group">
                                            {{ Form::file('file') }}
                                        </div>
                                    </div>
                                </div>
                                {{ Form::submit('Submit', ['class' => 'btn btn-danger']) }}
                            {{ Form::close() }}












                            {{-- <div class="input-group">
                            <form method="POST" action="/uploads" id="upload" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">File Name</label>
                                    <input type="text" class="form-control" id="title" placeholder="ie. csc-ratematrix-1stTDs-ODF">
                                    </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile" name="file[]" multiple>
                                    <label class="custom-file-label" for="upload">Choose File</label>
                                </div> 
                                <div class="input-group-append pt-2">
                                    <button class="btn btn-danger" type="submit">Upload</button>
                                </div>                               
                            </form>
                            <div class="float-left">
                                <div class="container pl-5">
                                    <div>
                                        <ul id="selectedFiles" class="list-group">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            </div> --}}
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