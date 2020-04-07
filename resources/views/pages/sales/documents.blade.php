@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Documents</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="#">Sales</a></li>
                <li class="breadcrumb-item">Documents</a></li>
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
            <div class="col-md-10">
  
              <div class="card card-danger card-outline">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-folder"></i>
                    Documents
                  </h3>
                </div>
                <div class="card-body">

                  <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-corr-tab" data-toggle="tab" href="#nav-corr" role="tab" aria-controls="nav-corr" aria-selected="true">Correspondent</a>
                    <a class="nav-item nav-link" id="nav-retail-tab" data-toggle="tab" href="#nav-retail" role="tab" aria-controls="nav-retail" aria-selected="false">Retail</a>
                    </div>
                  </nav>
                  <br/>

                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-corr" role="tabpanel" aria-labelledby="nav-corr-tab">
                      <div class="row">
                        <div class="col-3 col-sm-2">
                          <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="vert-tabs-corr-docs-tab" data-toggle="pill" href="#vert-tabs-corr-docs" role="tab" aria-controls="vert-tabs-corr-docs" aria-selected="true">Documents</a>
                          </div>
                        </div>
                        <div class="col-7 col-sm-10">
                          <div class="tab-content" id="vert-tabs-tabContent">
                            <div class="tab-pane text-left fade show active" id="vert-tabs-corr-docs" role="tabpanel" aria-labelledby="vert-tabs-corr-docs-tab">
                              
                              <!-- /.content-header -->        
                              <div class="col">
                                <div class="card card-danger">
                                  <div class="card-header border-0">
                                    <h3 class="card-title">Correspondent Documents</h3>
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
                                          <th>Created At</th>
                                          </tr>
                                      </thead>
                                          <tbody>
    
                                              <tr>
                                              <td>file name</td>
                                              <td>file size KB</td>
                                              <td>date</td>
                                              <td class="text-right py-0 align-middle">
                                                  <div class="btn-group btn-group-sm">
                                                    <a href="#" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                    <a href="#" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
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
                    <div class="tab-pane fade show" id="nav-retail" role="tabpanel" aria-labelledby="nav-retail-tab">
                      <div class="row">
                        <div class="col-3 col-sm-2">
                          <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="vert-tabs-retail-docs-tab" data-toggle="pill" href="#vert-tabs-retail-docs" role="tab" aria-controls="vert-tabs-retail-docs" aria-selected="true">Documents</a>
                            <a class="nav-link" id="vert-tabs-retail-mlo-tab" data-toggle="pill" href="#vert-tabs-retail-mlo" role="tab" aria-controls="vert-tabs-retail-mlo" aria-selected="true">MLO Licenses</a>
                          </div>
                        </div>
                        <div class="col-7 col-sm-10">
                          <div class="tab-content" id="vert-tabs-tabContent">
                            <div class="tab-pane text-left fade show active" id="vert-tabs-retail-docs" role="tabpanel" aria-labelledby="vert-tabs-retail-docs-tab">
                              
                              <!-- /.content-header -->        
                              <div class="col">
                                <div class="card card-danger">
                                  <div class="card-header border-0">
                                    <h3 class="card-title">Retail Documents</h3>
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
                                          <th>Created At</th>
                                          </tr>
                                      </thead>
                                          <tbody>
    
                                              <tr>
                                              <td>file name</td>
                                              <td>file size KB</td>
                                              <td>date</td>
                                              <td class="text-right py-0 align-middle">
                                                  <div class="btn-group btn-group-sm">
                                                    <a href="#" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                    <a href="#" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                                  </div>
                                              </td>
                                          </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane text-left fade show" id="vert-tabs-retail-mlo" role="tabpanel" aria-labelledby="vert-tabs-retail-mlo-tab">
                              
                              <!-- /.content-header -->        
                              <div class="col">
                                <div class="card card-danger">
                                  <div class="card-header border-0">
                                    <h3 class="card-title">MLO Licenses</h3>
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
                                          <th>Created At</th>
                                          </tr>
                                      </thead>
                                          <tbody>
    
                                              <tr>
                                              <td>file name</td>
                                              <td>file size KB</td>
                                              <td>date</td>
                                              <td class="text-right py-0 align-middle">
                                                  <div class="btn-group btn-group-sm">
                                                    <a href="#" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                    <a href="#" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
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
                </div>
              </div>
            </div>
            <!-- /.card -->
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