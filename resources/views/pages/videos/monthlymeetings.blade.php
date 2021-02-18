@extends('layouts.default')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Videos</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">Videos</a></li>
                <li class="breadcrumb-item active">Monthly Meetings</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

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

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">


          <div class="col-12">
            <div class="card card-danger">
              <div class="card-header">
                <div class="card-title">
                  Monthly Meetings
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                    @foreach($monthlyMeetings as $data)
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
        </div>
    </div>
    </section>
    </div>
<!-- ./wrapper -->
@stop