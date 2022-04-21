@extends('layouts.default')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Operations</h1>
            </div>
          </div>
      </div>
    </div>
    <style>

    .card-dark:not(.card-outline) .card-header {
    background: var(--linear-gradient);
    }
    
    </style>
        <!-- Main content -->
        <section class="content">
          @include('pages.modals.modal-forms')
          <div class="container">
            <div class="col-md-12 col-lg-12 col-xl-10">
              <div class="card card-dark card-outline">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-folder"></i>
                    Processes
                  </h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-4 col-md-3">
                      @include('pages.operations.partials.processes.navtabs')
                    </div>
                    <div class="col-sm-10 col-md-9">
                      <div class="tab-content" id="vert-tabs-tabContent">
                        @include('pages.operations.partials.processes.funding')
                        @include('pages.operations.partials.processes.docdrawer')  
                        @include('pages.operations.partials.processes.funder')
                        @include('pages.operations.partials.processes.fundingforms')  
                        @include('pages.operations.partials.processes.fundingasst')
                        @include('pages.operations.partials.processes.loansetup')
                        @include('pages.operations.partials.processes.tm')
                        @include('pages.operations.partials.processes.uw')
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