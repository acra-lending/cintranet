@extends('layouts.default')

@section('content')
<body class="hold-transition sidebar-mini">    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Sales</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <style>

      .card-danger:not(.card-outline) .card-header {
      background: var(--linear-gradient);
      }
      
      </style>


      <section class="content">
        @include('pages.modals.modal-forms')
        <div class="container">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-10">
            <div class="card card-danger card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fab fa-wpforms"></i>
                  Sales Forms
                </h3>
              </div>
              <div class="card-body">
                @include('pages.sales.partials.forms.navtabs')
                <br/>
                <!-- General Forms -->
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-wholesale" role="tabpanel" aria-labelledby="nav-wholesale-tab">
                    <div class="row">
                      @include('pages.sales.partials.forms.wholesale.wholesaletabs')
                      <!-- General Forms Content -->
                      <div class="col-sm-10">
                        <div class="tab-content" id="vert-tabs-tabContent">
                          @include('pages.sales.partials.forms.wholesale.numbers')
                          @include('pages.sales.partials.forms.wholesale.ad')
                          @include('pages.sales.partials.forms.wholesale.eh')
                          @include('pages.sales.partials.forms.wholesale.il')
                          @include('pages.sales.partials.forms.wholesale.mp')
                          @include('pages.sales.partials.forms.wholesale.qt')                        
                          @include('pages.sales.partials.forms.wholesale.ux')                        
                          @include('pages.sales.partials.forms.wholesale.yz')                        
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Training Materials -->
                  <div class="tab-pane fade show" id="nav-training" role="tabpanel" aria-labelledby="nav-training-tab">
                    <div class="row">
                      @include('pages.sales.partials.forms.trainingmaterial.trainingtabs')
                      <!-- Training Materials Content -->
                      <div class="col-sm-10">
                        <div class="tab-content" id="vert-tabs-tabContent">
                          @include('pages.sales.partials.forms.trainingmaterial.accountexecutive')
                          @include('pages.sales.partials.forms.trainingmaterial.systems')
                          @include('pages.sales.partials.forms.trainingmaterial.vetting')
                          @include('pages.sales.partials.forms.trainingmaterial.trainingops')
                          @include('pages.sales.partials.forms.trainingmaterial.trainingvideos')
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Admin -->
                  <div class="tab-pane fade show" id="nav-admin" role="tabpanel" aria-labelledby="nav-admin-tab">
                    <div class="row">
                      @include('pages.sales.partials.forms.admin.admintabs')
                      <!-- Admin Content -->
                      <div class="col-sm-10">
                        <div class="tab-content" id="vert-tabs-tabContent">
                          @include('pages.sales.partials.forms.admin.adminforms')
                        </div>
                      </div>
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
