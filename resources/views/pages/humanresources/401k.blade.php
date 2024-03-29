@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">401(k)</h1>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
            <!-- Main content -->

        <section class="content">
            <div class="row">
                <!-- <div class="float-left">
                    <div class="container">
                        <div class="card" style="width: 18rem;">
                            <button class="btn btn-outline-default"><img class="card-img-top" src="{{ asset ('img/hr/cintranet-items_principal-login-portal.svg') }}" data-toggle="modal" data-target="#modal-default" alt="principal"></button>
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                </div> -->
                @if(count($hr401k) > 0)
                @foreach ($hr401k as $doc)
                <div class="float-left">
                    <div class="container">
                        <div class="card" style="width: 18rem;">
                        <button class="btn btn-outline-default"><a href="{{ asset ('storage/upload/' .$doc->filename) }}" target="_blank"><img class="card-img-top" src="{{ asset ('img/hr/'.str_replace('pdf', 'jpg', $doc->filename)) }}" alt="{{str_replace('pdf', 'jpg', $doc->filename)}}"></a></button>
                            <div class="card-body">
                              <h5 class="card-title">{{$doc->filename}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </section>
        </div>
          <!-- <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Principal Login Portal</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <img class="img-thumbnail float-right" src="{{ asset ('img/logo-onecolor-right.svg') }}">
                    <p>Go to Principal Portal (opens in new tab)</p>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <a href="https://login.principal.com/login" target="_blank" class="btn btn-danger">Go</a>
                </div>
              </div> -->
              <!-- /.modal-content -->
            <!-- </div> -->
            <!-- /.modal-dialog -->
          <!-- </div> -->
          <!-- /.modal -->

  </div>
  <!-- /.col -->
<!-- ./wrapper -->
@stop