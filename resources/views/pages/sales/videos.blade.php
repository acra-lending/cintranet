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
        .card-dark:not(.card-outline) .card-header {
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
          <div class="container-fluid">
              <div class="row justify-content-center">
  
                  @include('pages.sales.videos.partials.sales.nonqemmys')
                  @include('pages.sales.videos.partials.sales.webinar')
                  @include('pages.sales.videos.partials.sales.panel')
                  @include('pages.sales.videos.partials.sales.training')
                  @include('pages.sales.videos.partials.sales.newaeweeklyreview')
  
              </div>
          </div>
      </section>
      <section class="content">
        @include('pages.modals.modal-forms')
        <div class="container">
          <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card card-danger card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-video"></i>
                  Videos For Download
                </h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-4 col-md-3">
                    @include('pages.sales.videos.navtabs')
                  </div>
                  <div class="col-sm-10 col-md-9">
                    <div class="tab-content" id="vert-tabs-tabContent">
                      @include('pages.sales.videos.videos')
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
@stop