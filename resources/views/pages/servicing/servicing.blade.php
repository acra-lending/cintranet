@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Loan Servicing</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="#">Servicing</a></li>
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
          <div class="col-md-12 col-lg-12 col-xl-9">

            <div class="card card-danger card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fab fa-wpforms"></i>
                  General Forms
                </h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                      <a class="nav-link active" id="vert-tabs-callscripts-tab" data-toggle="pill" href="#vert-tabs-callscripts" role="tab" aria-controls="vert-tabs-callscripts" aria-selected="true">Call Scripts</a>
                      <a class="nav-link" id="vert-tabs-documents-tab" data-toggle="pill" href="#vert-tabs-documents" role="tab" aria-controls="vert-tabs-documents" aria-selected="false">Documents</a>
                      <a class="nav-link" id="vert-tabs-cscwatchlist-tab" data-toggle="pill" href="#vert-tabs-cscwatchlist" role="tab" aria-controls="vert-tabs-cscwatchlist" aria-selected="false">CSC Watchlist</a>
                    </div>
                  </div>
                  <div class="col-sm-9">
                    <div class="tab-content" id="vert-tabs-tabContent">
                      <div class="tab-pane text-left fade show active" id="vert-tabs-callscripts" role="tabpanel" aria-labelledby="vert-tabs-callscripts-tab">
                        
                        <!-- /.content-header -->        
                        <div class="col">
                          <div class="card card-danger">
                            <div class="card-header border-0">
                              <h3 class="card-title">Call Scripts</h3>
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
                                    <td>Servicing Call Scripts.docx</td>
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
                      <div class="tab-pane fade" id="vert-tabs-documents" role="tabpanel" aria-labelledby="vert-tabs-documents-tab">
                        <!-- /.content-header -->        
                        <div class="col">
                          <div class="card card-danger">
                            <div class="card-header border-0">
                              <h3 class="card-title">Documents</h3>
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
                                    <td>Authorization Agreement for Automatic Mortgage Payment.pdf</td>
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
                      <div class="tab-pane fade" id="vert-tabs-cscwatchlist" role="tabpanel" aria-labelledby="vert-tabs-cscwatchlist-tab">
                        <!-- /.content-header -->        
                        <div class="col">
                          <div class="card card-danger">
                            <div class="card-header border-0">
                              <h3 class="card-title">CSC Watchlist</h3>
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
                                    <td>HOI Watchlist.pdf</td>
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