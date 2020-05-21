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
                <li class="breadcrumb-item active"><a href="#">Human Resources</a></li>
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
                            <img class="card-img-top px-3 mb-3" src="https://brightchoices.liazon.com/Home/GetImage?imageID=A6B40BB15F240A55880793E398333409" alt="brightchoices-liazon">
                            <img class="card-img-top px-4 mb-4" src="https://login.gallaghermarketplace.com/Home/GetImage?imageID=3B43902556438FABF00C3767DB7E29EB" alt="gallagher-marketplace">
                            <div class="card-body">
                            {{-- <h5 class="card-title">Paylocity Portal</h5> --}}
                            <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#modal-default">Login Portal</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="float-left">
                    <div class="container">
                        <div class="card" style="width: 18rem;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="card-img-top" src="{{ asset ('img/csc-logo-small2.png') }}" alt="csc-logo" style="width: 6rem;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4">Health And Welfare Plan</h5>
                                        <hr class="mt-5 mb-0">
                                        <p class="card-text" style="padding-top: 5px;">Citadel Servicing Health And Welfare Plan.</p>
                                        <a href="#" class="btn btn-danger float-right">Open</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="float-left">
                    <div class="container">
                        <div class="card" style="width: 18rem;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="card-img-top" src="{{ asset ('img/csc-logo-small2.png') }}" alt="csc-logo" style="width: 6rem;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4" style="padding-top: 5px;">Health And Welfare Plan Description</h5>
                                        <br/>
                                        <hr class="mt-4 mb-0">
                                        <p class="card-text" style="padding-top: 5px;">Citadel Servicing Health And Welfare Plan Summary Description.</p>
                                        <a href="#" class="btn btn-danger float-right">Open</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="float-left">
                    <div class="container">
                        <div class="card" style="width: 18rem;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="card-img-top" src="{{ asset ('img/csc-logo-small2.png') }}" alt="csc-logo" style="width: 6rem;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4" style="padding-top: 5px;">Premium Only Plan</h5>
                                        <br/>
                                        <hr class="mt-4 mb-0">
                                        <p class="card-text" style="padding-top: 5px;">Citadel Servicing Premium Only Plan (POP).</p>
                                        <a href="#" class="btn btn-danger float-right">Open</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="float-left">
                    <div class="container">
                        <div class="card" style="width: 18rem;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="card-img-top" src="{{ asset ('img/csc-logo-small2.png') }}" alt="csc-logo" style="width: 6rem;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4" style="padding-top: 5px;">Premium Only Plan Summary</h5>
                                        <br/>
                                        <hr class="mt-4 mb-0">
                                        <p class="card-text" style="padding-top: 5px;">Summary Of The Citadel Servicing Premium Only Plan (POP).</p>
                                        <a href="#" class="btn btn-danger float-right">Open</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="float-left">
                    <div class="container">
                        <div class="card" style="width: 18rem;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="card-img-top" src="{{ asset ('img/csc-logo-small2.png') }}" alt="csc-logo" style="width: 6rem;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4" style="padding-top: 5px;">QMCSO</h5>
                                        <br/>
                                        <hr class="mt-4 mb-0">
                                        <p class="card-text" style="padding-top: 5px;">Qualified Medical Child Support Order (QMCSO).</p>
                                        <a href="#" class="btn btn-danger float-right">Open</a>
                                    </div>
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
                  <h4 class="modal-title">Gallagher Marketplace Login Portal</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <img class="img-thumbnail float-right" src="https://login.gallaghermarketplace.com/Home/GetImage?imageID=3B43902556438FABF00C3767DB7E29EB">
                    <p>Go to Gallagher Marketplace (opens in new tab)</p>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <a href="https://login.gallaghermarketplace.com/" target="_blank" class="btn btn-danger">Go</a>
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