@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Operations</h1>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <style>

        .card-dark:not(.card-outline) .card-header {
        background: var(--linear-gradient);
        }
        
        </style>
            <!-- Main content -->
            <section class="content">
              @include('pages.modals.modal-forms')
              <div class="container">
                <div class="col-md-12">
      
                  <div class="card card-dark card-outline">
                    <div class="card-header">
                      <h3 class="card-title">
                        <i class="fas fa-folder"></i>
                        Documents
                      </h3>
                    </div>
                    <div class="card-body">
                      @include('pages.operations.partials.navtabs')
                      <br/>
                      <div class="tab-content" id="nav-tabContent">
                        @include('pages.operations.partials.compliance')
                        @include('pages.operations.partials.funding')
                        @include('pages.operations.partials.docdrawer')  
                        @include('pages.operations.partials.funder')
                        @include('pages.operations.partials.fundingforms')  
                        @include('pages.operations.partials.fundingasst')
                        @include('pages.operations.partials.loansetup')
                        @include('pages.operations.partials.tm')
                        @include('pages.operations.partials.uw')
                        @include('pages.operations.partials.jrprocessor')
                        @include('pages.operations.partials.processor')
                        @include('pages.operations.partials.nda')
                        @include('pages.operations.partials.fixandflip')
                        @include('pages.operations.partials.sbmf')
                        @include('pages.operations.partials.jruw')
                        @include('pages.operations.partials.prescreen')
                        @include('pages.operations.partials.vettingclerk')
                        @include('pages.operations.partials.postclosefunding')
                        @include('pages.operations.partials.postcloseshipping')
                    </div>
                  </div>
                </div>
              </div>
              </section>
        </div>
  </div>
  <!-- /.col -->
<!-- ./wrapper -->
@stop