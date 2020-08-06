@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Paylocity</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="/">Human Resources</a></li>
                <li class="breadcrumb-item">Paylocity</a></li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
            <!-- Main content -->

        <section class="content">
            <div class="row">
                <div class="float-left">
                    <div class="container">
                        <div class="card" style="width: 18rem;">
                            <button class="btn btn-outline-default"><img class="card-img-top" src="{{ asset ('img/hr/cintranet-items_paylocity-login-portal.svg') }}" data-toggle="modal" data-target="#modal-default" alt="paylocity"></button>
                            <div class="card-body">
                            {{-- <h5 class="card-title">Paylocity Portal</h5> --}}
                            {{-- <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#modal-default">Login Portal</button> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="float-left">
                    <div class="container">
                        <div class="card" style="width: 18rem;">
                            <button class="btn btn-outline-default"><a href="{{ asset ('storage/upload/' .$loginGuide->filename) }}" target="_blank"><img class="card-img-top" src="{{ asset ('img/hr/cintranet-items_paylocity-login-guide.svg') }}" alt="paylocity-guide"></a></button>
                            <div class="card-body">
                                {{-- <h5 class="card-title">Paylocity Login Guide</h5> --}}
                                {{-- <p class="card-text">Instructions to Log In to Paylocity (www.paylocity.com).</p> --}}
                                {{-- <a href="#" class="btn btn-danger float-right">Open</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="float-left">
                    <div class="container">
                        <div class="card" style="width: 18rem;">
                            <button class="btn btn-outline-default"><a href="{{ asset ('storage/upload/' .$webPayGuide->filename) }}" target="_blank"><img class="card-img-top" src="{{ asset ('img/hr/cintranet-items_paylocity-webpay-login-guide.svg') }}" alt="webpay"></a></button>
                            <div class="card-body">
                                {{-- <h5 class="card-title" style="padding-top: 5px;">Web Pay Login Guide</h5> --}}
                                {{-- <p class="card-text">Access Web Pay at (loginpaylocity.com).</p> --}}
                                {{-- <a href="#" class="btn btn-danger float-right">Open</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
          <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Paylocity Login Portal</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <img class="img-thumbnail float-right" src="https://cdn.paylocity.com/cdn/branding/paylocity-logo.svg">
                    <p>Go to Paylocity Portal (opens in new tab)</p>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <a href="https://access.paylocity.com/" target="_blank" class="btn btn-danger">Go</a>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->

  </div>
  <!-- /.col -->
<!-- /.control-sidebar -->
<!-- ./wrapper -->
@stop