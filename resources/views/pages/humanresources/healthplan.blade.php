@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Health Plan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="#">Human Resources</a></li>
                <li class="breadcrumb-item">Health Plan</a></li>
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
                            <button class="btn btn-outline-default"><img class="card-img-top" src="{{ asset ('img/hr/cintranet-items_benefits-login-portal.svg') }}" data-toggle="modal" data-target="#modal-default" alt="login-portal"></button>
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
                            <button class="btn btn-outline-default"><a href="{{ asset ('storage/upload/' .$welfare->filename) }}" target="_blank"><img class="card-img-top" src="{{ asset ('img/hr/cintranet-items_benefits-health-welfare.svg') }}" alt="csc-health-welfare"></a></button>
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
                            <button class="btn btn-outline-default"><a href="{{ asset ('storage/upload/' .$planDescription->filename) }}" target="_blank"><img class="card-img-top" src="{{ asset ('img/hr/cintranet-items_benefits-health-welfare-alt.svg') }}" alt="csc-health-welfare-alt"></a></button>
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
                            <button class="btn btn-outline-default"><a href="{{ asset ('storage/upload/' .$premium->filename) }}" target="_blank"><img class="card-img-top" src="{{ asset ('img/hr/cintranet-items_benefits-POP.svg') }}" alt="csc-pop"></a></button>
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
                            <button class="btn btn-outline-default"><a href="{{ asset ('storage/upload/' .$pop->filename) }}" target="_blank"><img class="card-img-top" src="{{ asset ('img/hr/cintranet-items_benefits-POP-alt.svg') }}" alt="csc-pop-alt"></a></button>
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
                            <button class="btn btn-outline-default"><a href="{{ asset ('storage/upload/' .$qmcso->filename) }}" target="_blank"><img class="card-img-top" src="{{ asset ('img/hr/cintranet-items_benefits-QMCSO.svg') }}" alt="csc-qmcso"></a></button>
                            <div class="card-body">
                                {{-- <h5 class="card-title">Paylocity Login Guide</h5> --}}
                                {{-- <p class="card-text">Instructions to Log In to Paylocity (www.paylocity.com).</p> --}}
                                {{-- <a href="#" class="btn btn-danger float-right">Open</a> --}}
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