@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">State Workplace Posters</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active"><a href="/">Human Resources</a></li>
            <li class="breadcrumb-item">State Workplace Posters</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <style>
        .accordion-section .panel-default > .panel-heading {
            border: 0;
            padding: 0;
        }
        .accordion-section .panel-default .panel-title a {
            display: block;

        }
        .accordion-section .panel-default .panel-title a:after {
            font-family: 'FontAwesome';
            content: "\f106";
            color: #212529;
            float: right;
            margin-top: -2px;
        }
        .accordion-section .panel-default .panel-title a.collapsed:after {
            content: "\f107";
        }
        .accordion-section .panel-default .panel-body {
        }
    </style>
    <section class="content">
      @include('pages.modals.modal-forms')
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-danger card-outline">
                        <div class="card-header">
                            <h4 class="card-title">
                              <i class="fas fa-info-circle"></i>
                               Workplace Posters</h4>
                        </div>
                        <div class="card-body">
                          @include('pages.humanresources.stateposters.navtabs')
                            <div class="tab-content" id="nav-tabContent">
                              @include('pages.humanresources.stateposters.page1')
                              @include('pages.humanresources.stateposters.page2')
                              @include('pages.humanresources.stateposters.page3')                                          
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </div>
</div>

@stop
