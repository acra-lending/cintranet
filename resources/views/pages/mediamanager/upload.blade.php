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
                    <div class="col">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h4 class="card-title">Upload File(s)</h4>
                        </div>

                        <div class="card-body">

                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Select</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="card-body">
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                            <div class="card-body">
                                                {{ Form::open(['action' => 'UploadController@upload', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
                                                <div class="input-group">
                                                    <div class="input-group">
                                                        @include('pages.mediamanager.partials.categories')
                                                    </div>
                                                    <div class="input-group">
                                                        <div class="form-group">
                                                            {{ Form::file('file[]', array('multiple' => true, 'accept'=> 'msg,doc,docx,ppt,pptx,xls,xlsx,xls,pdf,jpg,jpeg,bmp,png,gif,eml')) }}
                                                        </div>
                                                    </div>
                                                </div>
                                                {{ Form::submit('Submit', ['class' => 'btn btn-danger']) }}
                                                <div class="progress mt-3" hidden>
                                                    <div class="bar"></div>
                                                    <div class="percent">0%</div>
                                                </div>
                                                <div class="complete"></div>
                                            {{ Form::close() }}
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
  @push('includes.scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
  <script type="text/javascript">
    var SITEURL = "{{URL('/mediamanager')}}";
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
                    $('.complete').html('Uploading');
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