@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Consumer Direct Lending</h1>
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
    </style>
        <section class="content">
          @include('pages.modals.modal-forms')
          <div class="container">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-10">
  
              <div class="card card-dark card-outline">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-folder"></i>
                    Forms
                  </h3>
                </div>
                <div class="card-body">

                  @include('pages.direct.partials.forms.navtabs')
                  
                  <div class="tab-content" id="nav-tabContent">

                    @include('pages.direct.partials.forms')
                </div>
              </div>
            </div>
          </div>
          </section>
    </div>
@stop