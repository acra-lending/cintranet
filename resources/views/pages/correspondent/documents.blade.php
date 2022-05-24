@extends('layouts.default')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Correspondent</h1>
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
                    Documents
                  </h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-4 col-md-3 col-lg-2">
                      @include('pages.correspondent.partials.documents.navtabs')
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-10">
                      <div class="tab-content" id="vert-tabs-tabContent">
                        @include('pages.correspondent.partials.documents.documents')
                        @include('pages.correspondent.partials.documents.forms')
                        @include('pages.correspondent.partials.documents.jobaides')
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