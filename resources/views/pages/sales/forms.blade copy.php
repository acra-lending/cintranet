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
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="/">Sales</a></li>
                  <li class="breadcrumb-item active">Forms</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>

        <section class="content">
          <div class="col-md-9">

            <div class="card card-danger card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fab fa-wpforms"></i>
                  General Forms
                </h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-5 col-sm-3">
                    <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                      <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="true">#</a>
                      <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile" aria-selected="false">A-D</a>
                      <a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill" href="#vert-tabs-messages" role="tab" aria-controls="vert-tabs-messages" aria-selected="false">E-H</a>
                      <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings" role="tab" aria-controls="vert-tabs-settings" aria-selected="false">I-L</a>
                      <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings" role="tab" aria-controls="vert-tabs-settings" aria-selected="false">M-P</a>
                      <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings" role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Q-T</a>
                      <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings" role="tab" aria-controls="vert-tabs-settings" aria-selected="false">U-X</a>
                      <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings" role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Y-Z</a>
                    </div>
                  </div>
                  <div class="col-7 col-sm-9">
                    <div class="tab-content" id="vert-tabs-tabContent">
                      <div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">
                        
                        <!-- /.content-header -->        
                        <div class="col">
                          <div class="card card-danger">
                            <div class="card-header border-0">
                              <h3 class="card-title">#</h3>
                              <div class="card-tools">
                                </a>
                              </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                              <table class="table table-striped table-valign-middle">
                                <thead>
                                <tr>
                                  <th>Doc Type</th>
                                  <th>Loan Amount</th>
                                  <th>LTV</th>
                                  <th>More</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                  <td>
                                    <img src="{{ asset ('img/csc-logo-small.png') }}" alt="Product 1" class="img-circle img-size-32 mr-2">
                                    Bank Statments
                                  </td>
                                  <td>$181,250 USD</td>
                                  <td>
                                    <div class="text-success mr-1">
                                      80%
                                    </div>
                                  </td>
                                  <td>
                                    <a href="#" class="text-muted">
                                      <i class="fas fa-file-alt"></i>
                                    </a>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <img src="{{ asset ('img/csc-logo-small.png') }}" alt="Product 1" class="img-circle img-size-32 mr-2">
                                    Full Doc
                                  </td>
                                  <td>$275,000 USD</td>
                                  <td>
                                    <div class="text-warning mr-1">
                                      70%
                                    </div>
                                  </td>
                                  <td>
                                    <a href="#" class="text-muted">
                                      <i class="fas fa-file-alt"></i>
                                    </a>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <img src="{{ asset ('img/csc-logo-small.png') }}" alt="Product 1" class="img-circle img-size-32 mr-2">
                                    Bank Statements
                                  </td>
                                  <td>$700,000 USD</td>
                                  <td>
                                    <div class="text-danger mr-1">
                                      57%
                                    </div>
                                  </td>
                                  <td>
                                    <a href="#" class="text-muted">
                                      <i class="fas fa-file-alt"></i>
                                    </a>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <img src="{{ asset ('img/csc-logo-small.png') }}" alt="Product 1" class="img-circle img-size-32 mr-2">
                                    Full Doc
                                    <span class="badge bg-danger">NEW</span>
                                  </td>
                                  <td>$1,400,000 USD</td>
                                  <td>
                                    <div class="text-success mr-1">
                                      90%
                                    </div>
                                  </td>
                                  <td>
                                    <a href="#" class="text-muted">
                                      <i class="fas fa-file-alt"></i>
                                    </a>
                                  </td>
                                </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
                        Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam. 
                      </div>
                      <div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel" aria-labelledby="vert-tabs-messages-tab">
                        Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna. 
                      </div>
                      <div class="tab-pane fade" id="vert-tabs-settings" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                        Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis. 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
            <!-- /.card -->
          </div>
        </section>
    </div>
@stop
