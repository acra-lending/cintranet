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
            <style>
                .color-palette {
                height: 35px;
                line-height: 35px;
                text-align: right;
                padding-right: .75rem;
                }

                .color-palette.disabled {
                text-align: center;
                padding-right: 0;
                display: block;
                }

                .color-palette-set {
                margin-bottom: 15px;
                }

                .color-palette span {
                display: none;
                font-size: 12px;
                }

                .color-palette:hover span {
                display: block;
                }

                .color-palette.disabled span {
                display: block;
                text-align: left;
                padding-left: .75rem;
                }

                .color-palette-box h4 {
                position: absolute;
                left: 1.25rem;
                margin-top: .75rem;
                color: rgba(255, 255, 255, 0.8);
                font-size: 12px;
                display: block;
                z-index: 7;
                }

                .card-danger:not(.card-outline) .card-header {
                background: var(--linear-gradient);
                }

                .modal-dialog {
                    max-width: 70rem !important;
                }
                .modal-content {
                    height: 45rem !important;
                }

                @media screen and (max-width: 1099px) {
                    .modal-dialog {
                    max-width: 68rem !important;
                    }
                    .modal-content {
                        height: 43rem !important;
                    }
                }
                @media screen and (max-width: 1032px) {
                    .modal-dialog {
                    max-width: 67rem !important;
                    }
                    .modal-content {
                        height: 42rem !important;
                    }
                }
                @media screen and (max-width: 968px) {
                    .modal-dialog {
                    max-width: 65rem !important;
                    }
                    .modal-content {
                        height: 40rem !important;
                    }
                }
                @media screen and (max-width: 899px) {
                    .modal-dialog {
                    max-width: 64rem !important;
                    }
                    .modal-content {
                        height: 39rem !important;
                    }
                }
                @media screen and (max-width: 799px) {
                    .modal-dialog {
                    max-width: 62rem !important;
                    }
                    .modal-content {
                        height: 33rem !important;
                    }
                }
                @media screen and (max-width: 599px) {
                    .modal-dialog {
                    max-width: 58rem !important;
                    }
                    .modal-content {
                        height: 26rem !important;
                    }
                }
                @media screen and (max-width: 532px) {
                    .modal-dialog {
                    max-width: 58rem !important;
                    }
                    .modal-content {
                        height: 23rem !important;
                    }
                }
            </style>

        <section class="content">
            {{-- <div class="row">
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
            </div> --}}
            <div class="col-12">
                <div class="card card-danger">
                  <div class="card-header">
                    <div class="card-title">
                      Documents
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row">
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
                  </div>
                </div>
              </div>
            <div class="col-12">
                <div class="card card-danger">
                  <div class="card-header">
                    <div class="card-title">
                      Videos
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                        @foreach($video401k as $data)
                            <div class="col-sm-2">
                                <a href="{{ URL::to('https://player.vimeo.com' .str_replace("s", "", $data['uri'])) }}" data-toggle="lightbox" data-title="{{ $data['name'] }}" data-gallery="gallery">
                                    <img src="{{ ($data['pictures']['sizes'][4]['link_with_play_button']) }}" class="img-fluid mb-2" alt="{{ $data['name'] }}" /></a>
                                </a>
                                <h6>{{ $data['name'] }}</h6>
                                <p>{{ Carbon\Carbon::parse($data['created_time'])->format('F d, Y') }}</p>
                            </div>
                        @endforeach
                    </div>
                  </div>
                </div>
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
