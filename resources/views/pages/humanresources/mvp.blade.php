@extends('layouts.default')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">MVP Spotlight</h1>
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
    </style>

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">


          <div class="col-12">
            <div class="card card-danger">
              <div class="card-header">
                <div class="card-title">
                  MVP Spotlight
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-2">
                    <a href="{{ asset ('img/mvp_spotlight_1.png') }}" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                      <img src="{{ asset ('img/mvp_spotlight_1.png') }}" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="{{ asset ('img/mvp_spotlight_2.jpg') }}" data-toggle="lightbox" data-title="sample 2 - black" data-gallery="gallery">
                      <img src="{{ asset ('img/mvp_spotlight_2.jpg') }}" class="img-fluid mb-2" alt="black sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="{{ asset ('img/mvp_spotlight_3.jpg') }}" data-toggle="lightbox" data-title="sample 3 - red" data-gallery="gallery">
                      <img src="{{ asset ('img/mvp_spotlight_3.jpg') }}" class="img-fluid mb-2" alt="red sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="{{ asset ('img/mvp_spotlight_4.jpg') }}" data-toggle="lightbox" data-title="sample 4 - red" data-gallery="gallery">
                      <img src="{{ asset ('img/mvp_spotlight_4.jpg') }}" class="img-fluid mb-2" alt="red sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="{{ asset ('img/mvp_spotlight_5.jpg') }}" data-toggle="lightbox" data-title="sample 5 - black" data-gallery="gallery">
                      <img src="{{ asset ('img/mvp_spotlight_5.jpg') }}" class="img-fluid mb-2" alt="black sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="{{ asset ('img/mvp_spotlight_6.jpg') }}" data-toggle="lightbox" data-title="sample 6 - white" data-gallery="gallery">
                      <img src="{{ asset ('img/mvp_spotlight_6.jpg') }}" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="{{ asset ('img/mvp_spotlight_7.jpg') }}" data-toggle="lightbox" data-title="sample 7 - white" data-gallery="gallery">
                      <img src="{{ asset ('img/mvp_spotlight_7.jpg') }}" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="{{ asset ('img/mvp_spotlight_8.jpg') }}" data-toggle="lightbox" data-title="sample 8 - black" data-gallery="gallery">
                      <img src="{{ asset ('img/mvp_spotlight_8.jpg') }}" class="img-fluid mb-2" alt="black sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="{{ asset ('img/mvp_spotlight_9.jpg') }}" data-toggle="lightbox" data-title="sample 9 - red" data-gallery="gallery">
                      <img src="{{ asset ('img/mvp_spotlight_9.jpg') }}" class="img-fluid mb-2" alt="red sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="{{ asset ('img/mvp_spotlight_10.jpg') }}" data-toggle="lightbox" data-title="sample 10 - white" data-gallery="gallery">
                      <img src="{{ asset ('img/mvp_spotlight_10.jpg') }}" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="{{ asset ('img/mvp_spotlight_11.png') }}" data-toggle="lightbox" data-title="sample 10 - white" data-gallery="gallery">
                      <img src="{{ asset ('img/mvp_spotlight_11.png') }}" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="{{ asset ('img/mvp_spotlight_12.jpg') }}" data-toggle="lightbox" data-title="sample 10 - white" data-gallery="gallery">
                      <img src="{{ asset ('img/mvp_spotlight_12.jpg') }}" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.row -->
    </div>
    </section>
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Anniversaries</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="position-relative p-3 bg-gray" style="height: 180px">
                        <div class="ribbon-wrapper">
                          <div class="ribbon bg-primary">
                            1 Year
                          </div>
                        </div>
                        <ul class="list-unstyled">
                          <li><h6><i class="fas fa-award"></i>  James Hawkins, Underwriter - GA</h6></li>
                          <li><h6><i class="fas fa-award"></i>  Kimberla Talley, Transaction Manager- GA</h6></li>
                          <li><h6><i class="fas fa-award"></i>  Rachelle Morales, Loan Service Default Specialist</h6></li>
                        </ul>                     
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="position-relative p-3 bg-gray" style="height: 180px">
                        <div class="ribbon-wrapper ribbon-lg">
                          <div class="ribbon bg-info">
                            3 Year
                          </div>
                        </div>
                        <ul class="list-unstyled">
                          <li><h6><i class="fas fa-award"></i>  Nathalie Gomez, Hybrid LSU Clerk/Asst TM</h6></li>
                          <li><h6><i class="fas fa-award"></i>  Andrea Olson, Transaction Management Team Lead</h6></li>
                        </ul> 
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="position-relative p-3 bg-gray" style="height: 180px">
                        <div class="ribbon-wrapper ribbon-xl">
                          <div class="ribbon bg-success">
                            5 Year
                          </div>
                        </div>
                        <ul class="list-unstyled">
                          <li><h6><i class="fas fa-award"></i>  Timothy Doyle, CFO and Treasurer</h6></li>
                          <li><h6><i class="fas fa-award"></i>  Paula Risetter, VP, Human Resources</h6></li>
                          <li><h6><i class="fas fa-award"></i>  Tony Guidicessi, Sales Manager</h6></li>
                          <li><h6><i class="fas fa-award"></i>  Nicholas Harvey, Sales Manager</h6></li>
                        </ul>  
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.row -->
          <div class="row">
            <div class="col-12">
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Gift Card Awards</h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="position-relative p-3 bg-gray" style="height: 180px">
                        <div class="ribbon-wrapper ribbon-lg">
                          <div class="ribbon bg-success text-lg">
                            $150
                          </div>
                        </div>
                        <ul class="list-unstyled">
                          <li><h5><i class="fas fa-medal"></i>  Robert Romero</h5></li>
                        </ul> 
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="position-relative p-3 bg-gray" style="height: 180px">
                        <div class="ribbon-wrapper ribbon-xl">
                          <div class="ribbon bg-warning text-lg">
                            $350
                          </div>
                        </div>
                        <ul class="list-unstyled">
                          <li><h5><i class="fas fa-medal"></i>  Rigo Cruz</h5></li>
                        </ul> 
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="position-relative p-3 bg-gray" style="height: 180px">
                        <div class="ribbon-wrapper ribbon-xl">
                          <div class="ribbon bg-danger text-xl">
                            $500
                          </div>
                        </div>
                        <ul class="list-unstyled">
                          <li><h5><i class="fas fa-medal"></i>  Sergio Loza</h5></li>
                        </ul> 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
      </div>
        </div>
      </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
<!-- ./wrapper -->
@stop