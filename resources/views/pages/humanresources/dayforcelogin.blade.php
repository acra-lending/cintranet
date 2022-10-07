@extends('layouts.default')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dayforce</h1>
                </div>
                </div>
            </div>
        </div>
        <style>
            .card-dark:not(.card-outline) .card-header {
                background: var(--linear-gradient);
                }
        </style>
        <section class="content">
            @include('pages.modals.modal-forms')
            <div class="row">
                <div class="float-left">
                    <div class="container">
                        <div class="card" style="width: 18rem;">
                            <button class="btn btn-outline-default"><img class="card-img-top" src="{{ asset ('img/hr/cintranet-items_paylocity-login-portal.svg') }}" data-toggle="modal" data-target="#modal-default" alt="paylocity"></button>
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="float-left">
                    <div class="container">
                        <div class="card" style="width: 18rem;">
                            <button class="btn btn-outline-default"><a href="{{ asset ('storage/upload/' .$loginGuide->filename) }}" target="_blank"><img class="card-img-top" src="{{ asset ('img/hr/cintranet-items_paylocity-login-guide.svg') }}" alt="paylocity-guide"></a></button>
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="float-left">
                    <div class="container">
                        <div class="card" style="width: 18rem;">
                            <button class="btn btn-outline-default"><a href="{{ asset ('storage/upload/' .$webPayGuide->filename) }}" target="_blank"><img class="card-img-top" src="{{ asset ('img/hr/cintranet-items_paylocity-webpay-login-guide.svg') }}" alt="webpay"></a></button>
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="row">
              <div class="col-md-12 col-lg-12 col-xl-10">
                <div class="card card-danger card-outline">
                  <div class="card-header">
                    <h3 class="card-title">
                      <i class="fas fa-user-plus"></i>
                      How To's
                    </h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-4 col-md-3">
                        @include('pages.humanresources.howtos.navtabs')
                      </div>
                      <div class="col-sm-10 col-md-9">
                        <div class="tab-content" id="vert-tabs-tabContent">
                          @include('pages.humanresources.howtos.howto')
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}
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
<!-- ./wrapper -->
@stop