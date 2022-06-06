@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Ratesheets Web Upload</h1>
                <p class=mt-2>This will update the ratesheets on the website</p>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <style>

        .card-danger:not(.card-outline) .card-header {
        background: var(--linear-gradient);
        }

        .progress { position:relative; width:100%; background-color: var(--gray-color); height: 20px; }
        .bar { background-color: var(--primary-color); width:0%; height:40px; }
        .percent { position:absolute; display:inline-block; left:50%; color: #fff;}

        </style>
        <!-- Main content -->
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4" style="display:inline-block;">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h4 class="card-title">Wholesale <b>Non-Prime</b> Ratesheet Upload</h4>
                        </div>

                        <div class="card-body">           
                            {{ Form::open(['action' => 'WebRatesheetUploadController@store_nonprime', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
                                <div class="input-group">
                                    <div class="input-group">
                                        <div class="form-group" style="width: 100%;">
                                            {{ Form::file('file', array('multiple' => false, 'accept'=> 'pdf', 'style' => 'width: 100%')) }}
                                        </div>
                                    </div>
                                </div>
                            {{ Form::submit('Upload', ['class' => 'btn btn-danger']) }}
                            {{ Form::close() }}
                        </div>
                    </div>
                    </div>

                    <div class="col-md-6 col-lg-4" style="display:inline-block;">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h4 class="card-title">Wholesale <b>Business Purpose / DSCR</b> Ratesheet Upload</h4>
                        </div>

                        <div class="card-body">           
                            {{ Form::open(['action' => 'WebRatesheetUploadController@store_dscr', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
                                <div class="input-group">
                                    <div class="input-group">
                                        <div class="form-group" style="width: 100%;">
                                            {{ Form::file('file', array('multiple' => false, 'accept'=> 'pdf', 'style' => 'width: 100%')) }}
                                        </div>
                                    </div>
                                </div>
                            {{ Form::submit('Upload', ['class' => 'btn btn-danger']) }}
                            {{ Form::close() }}
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4" style="display:inline-block;">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h4 class="card-title">Wholesale <b>3-Month Bank Statement</b> Ratesheet Upload</h4>
                        </div>

                        <div class="card-body">           
                            {{ Form::open(['action' => 'WebRatesheetUploadController@store_3mbs', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
                                <div class="input-group">
                                    <div class="input-group">
                                        <div class="form-group" style="width: 100%;">
                                            {{ Form::file('file', array('multiple' => false, 'accept'=> 'pdf', 'style' => 'width: 100%')) }}
                                        </div>
                                    </div>
                                </div>
                            {{ Form::submit('Upload', ['class' => 'btn btn-danger']) }}
                            {{ Form::close() }}
                        </div>
                    </div>
                    </div>
                
                    <div class="col-md-6 col-lg-4" style="display:inline-block;">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h4 class="card-title">Wholesale <b>Jumbo Prime</b> Ratesheet Upload</h4>
                        </div>

                        <div class="card-body">           
                            {{ Form::open(['action' => 'WebRatesheetUploadController@store_jumboprime', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
                                <div class="input-group">
                                    <div class="input-group">
                                        <div class="form-group" style="width: 100%;">
                                            {{ Form::file('file', array('multiple' => false, 'accept'=> 'pdf', 'style' => 'width: 100%')) }}
                                        </div>
                                    </div>
                                </div>
                            {{ Form::submit('Upload', ['class' => 'btn btn-danger']) }}
                            {{ Form::close() }}
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4" style="display:inline-block;">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h4 class="card-title"><b>ITIN</b> Ratesheet Upload</h4>
                        </div>

                        <div class="card-body">           
                            {{ Form::open(['action' => 'WebRatesheetUploadController@store_itin', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
                                <div class="input-group">
                                    <div class="input-group">
                                        <div class="form-group" style="width: 100%;">
                                            {{ Form::file('file', array('multiple' => false, 'accept'=> 'pdf', 'style' => 'width: 100%')) }}
                                        </div>
                                    </div>
                                </div>
                            {{ Form::submit('Upload', ['class' => 'btn btn-danger']) }}
                            {{ Form::close() }}
                        </div>
                    </div>
                    </div>

                    <div class="col-md-6 col-lg-4" style="display:inline-block;">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h4 class="card-title"><b>Small Balance Multifamily</b> Ratesheet Upload</h4>
                        </div>

                        <div class="card-body">           
                            {{ Form::open(['action' => 'WebRatesheetUploadController@store_sbmf', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
                                <div class="input-group">
                                    <div class="input-group">
                                        <div class="form-group" style="width: 100%;">
                                            {{ Form::file('file', array('multiple' => false, 'accept'=> 'pdf', 'style' => 'width: 100%')) }}
                                        </div>
                                    </div>
                                </div>
                            {{ Form::submit('Upload', ['class' => 'btn btn-danger']) }}
                            {{ Form::close() }}
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6 col-lg-4">
                        <div class="progress mt-3" hidden>
                            <div class="bar"></div>
                            <div class="percent">0%</div>
                        </div>
                        <div class="complete"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
  @push('includes.scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
  <script type="text/javascript">
    $(function() {
        $(document).ready(function()
        {
            // $('.progress').hide();
            var bar = $('.bar');
            var percent = $('.percent');
              $('form').ajaxForm({
                beforeSend: function() {
                    var percentVal = '0%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                },
                uploadProgress: function(event, position, total, percentComplete) {
                    $('.progress').removeAttr('hidden');
                    var percentVal = percentComplete + '%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                    $('.complete').html('Uploading...');
                },
                complete: function(data) {
                    $('.complete').html(data.responseJSON.success);
                    
                }
              });
        }); 
     });
    </script>
    @endpush
@stop