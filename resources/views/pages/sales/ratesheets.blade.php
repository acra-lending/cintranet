@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Rate Sheets</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="#">Sales</a></li>
                <li class="breadcrumb-item">Ratesheets</a></li>
                </ol>
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
        <section class="content">
            <div class="col-md-9">
  
              <div class="card card-danger card-outline">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-table"></i>
                    Current Rate Sheets
                  </h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-5 col-sm-3">
                      <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="vert-tabs-ombs-tab" data-toggle="pill" href="#vert-tabs-ombs" role="tab" aria-controls="vert-tabs-ombs" aria-selected="true">OMBS & VOE</a>
                        <a class="nav-link" id="vert-tabs-non-prime-ws-tab" data-toggle="pill" href="#vert-tabs-non-prime-ws" role="tab" aria-controls="vert-tabs-non-prime-ws" aria-selected="false">Non-Prime Wholesale</a>
                        <a class="nav-link" id="vert-tabs-odf-tab" data-toggle="pill" href="#vert-tabs-odf" role="tab" aria-controls="vert-tabs-odf" aria-selected="false">Outside Dodd-Frank<sup>®</sup></a>
                        <a class="nav-link" id="vert-tabs-odfplus-tab" data-toggle="pill" href="#vert-tabs-odfplus" role="tab" aria-controls="vert-tabs-odfplus" aria-selected="false">Outside Dodd-Frank<sup>®</sup>Plus</a>
                      </div>
                    </div>
                    <div class="col-7 col-sm-9">
                      <div class="tab-content" id="vert-tabs-tabContent">
                        <div class="tab-pane text-left fade show active" id="vert-tabs-ombs" role="tabpanel" aria-labelledby="vert-tabs-ombs-tab">
                          
                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">One Month Bank Statement & VOE</h3>
                                <div class="card-tools">
                                  </a>
                                </div>
                              </div>
                              <div class="card-body table-responsive p-0">
                                <table class="table">
                                  <thead>
                                      <tr>
                                      <th>File Name</th>
                                      <th>File Size</th>
                                      <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
          
                                      <tr>
                                      <td>One Month Bank Statement & VOE Rate Sheet.pdf</td>
                                      <td>49.8 kb</td>
                                      <td class="text-right py-0 align-middle">
                                          <div class="btn-group btn-group-sm">
                                          <a href="#" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                          <a href="#" class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                          </div>
                                      </td>
                  
                                  </tbody>
                                  </table>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="vert-tabs-non-prime-ws" role="tabpanel" aria-labelledby="vert-tabs-non-prime-ws-tab">
                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">Non-Prime Wholesale</h3>
                                <div class="card-tools">
                                  </a>
                                </div>
                              </div>
                              <div class="card-body table-responsive p-0">
                                <table class="table">
                                  <thead>
                                      <tr>
                                      <th>File Name</th>
                                      <th>File Size</th>
                                      <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
          
                                      <tr>
                                      <td>Non-Prime Wholesale Rate Sheet.pdf</td>
                                      <td>49.8 kb</td>
                                      <td class="text-right py-0 align-middle">
                                          <div class="btn-group btn-group-sm">
                                          <a href="#" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                          <a href="#" class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                          </div>
                                      </td>
                  
                                  </tbody>
                                  </table>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="vert-tabs-odf" role="tabpanel" aria-labelledby="vert-tabs-odf-tab">
                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">Outside Dodd-Frank<sup>®</sup></h3>
                                <div class="card-tools">
                                  </a>
                                </div>
                              </div>
                              <div class="card-body table-responsive p-0">
                                <table class="table">
                                  <thead>
                                      <tr>
                                      <th>File Name</th>
                                      <th>File Size</th>
                                      <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
          
                                      <tr>
                                      <td>Outside Dodd-Frank Rate Sheet.pdf</td>
                                      <td>49.8 kb</td>
                                      <td class="text-right py-0 align-middle">
                                          <div class="btn-group btn-group-sm">
                                          <a href="#" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                          <a href="#" class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                          </div>
                                      </td>
                  
                                  </tbody>
                                  </table>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="vert-tabs-odfplus" role="tabpanel" aria-labelledby="vert-tabs-odfplus-tab">
                            <!-- /.content-header -->        
                            <div class="col">
                              <div class="card card-danger">
                                <div class="card-header border-0">
                                  <h3 class="card-title">Outside Dodd-Frank<sup>®</sup>Plus</h3>
                                  <div class="card-tools">
                                    </a>
                                  </div>
                                </div>
                                <div class="card-body table-responsive p-0">
                                  <table class="table">
                                    <thead>
                                        <tr>
                                        <th>File Name</th>
                                        <th>File Size</th>
                                        <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
            
                                        <tr>
                                        <td>Outside Dodd-Frank Plus Rate Sheet.pdf</td>
                                        <td>49.8 kb</td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                            <a href="#" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                            </div>
                                        </td>
                    
                                    </tbody>
                                    </table>
                                </div>
                              </div>
                            </div>
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
    <!-- /.col -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
<!-- ./wrapper -->
@stop