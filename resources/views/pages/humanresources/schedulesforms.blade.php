@extends('layouts.default')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Human Resources</h1>
                </div>
              </div>
          </div>
        </div>

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
            <div class="col-md-12 col-lg-12 col-xl-10">
              <div class="card card-danger card-outline">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fab fa-wpforms"></i>
                    Schedules & Forms
                  </h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-4 col-md-3">
                      @include('pages.humanresources.scheduleforms.navtabs')
                    </div>
                    <div class="col-sm-10 col-md-9">
                      <div class="tab-content" id="vert-tabs-tabContent">
                        @include('pages.humanresources.scheduleforms.schedules')
                        @include('pages.humanresources.scheduleforms.suggestions')
                        @include('pages.humanresources.scheduleforms.newhireforms')
                        @include('pages.humanresources.scheduleforms.performance')
                        @include('pages.humanresources.scheduleforms.hiringprocess')
                        @include('pages.humanresources.scheduleforms.statefederaltaxforms')
                        @include('pages.humanresources.scheduleforms.healthtopics')
                        @include('pages.humanresources.scheduleforms.managertools')
                        @include('pages.humanresources.scheduleforms.benefits')
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