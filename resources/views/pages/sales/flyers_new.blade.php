@extends('layouts.default')

@section('content')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1 class="m-0 text-dark">Flyers & Programs</h1>
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
        </style>
      <section class="content">
          @include('pages.modals.modal-forms')
            <div class="container">
               <div class="col-md-12 col-lg-12 col-xl-10">
                  <div class="card card-danger card-outline">
                      <div class="card-header">
                        <h3 class="card-title">
                          <i class="fas fa-book-open"></i>
                          Marketing Material
                        </h3>
                      </div>
                      <div class="card-body">
                        @include('pages.sales.wholesale.flyers.navtabs')
                         <div class="tab-content  123" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-flyers" role="tabpanel" aria-labelledby="nav-flyers-tab">
                                <br>
                                @include('pages.sales.wholesale.flyers.flyerstabs')
                            </div>
                            <div class="tab-pane fade" id="nav-social-material" role="tabpanel" aria-labelledby="nav-social-material-tab">
                              <br>
                              @include('pages.sales.wholesale.flyers.flyers_socialmaterial')
                            </div>
                            <div class="tab-pane fade123" id="nav-othernew" role="tabpanel" aria-labelledby="nav-othernew-tab">
                              <br>
                              @include('pages.sales.wholesale.flyers.flyers_others')
                            </div>
                         </div>
                      </div>
                    <!-- /.card -->
                  </div>
                 <!-- /.card -->
               </div>
            </div>
      </section>
    </div>
    <!-- /.col -->
<!-- ./wrapper -->
@stop