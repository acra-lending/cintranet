@extends('layouts.default')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
          <div class="col-sm-6">
              <h1 class="m-0 text-dark">File Manager</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">File Manager</a></li>
              <li class="breadcrumb-item active">Upload</li>
              </ol>
          </div><!-- /.col -->
          </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-danger"><i class="far fa-hdd"></i></span>
        
                      <div class="info-box-content">
                        <span class="info-box-text">Total</span>
                        <span class="info-box-number">29GB</span>
                        
                            <div class="progress">
                                <div class="progress-bar" style="width: 15%"></div>
                            </div>
                            <span class="progress-description">
                                Storage Used of 1TB
                            </span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-danger"><i class="far fa-file-alt"></i></span>
        
                      <div class="info-box-content">
                        <span class="info-box-text">Documents</span>
                        <span class="info-box-number">12GB</span>
                        
                            <div class="progress">
                                <div class="progress-bar" style="width: 10%"></div>
                            </div>
                            <span class="progress-description">
                                Storage Used of 1TB
                            </span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-danger"><i class="far fa-file-audio"></i></span>
        
                      <div class="info-box-content">
                        <span class="info-box-text">Media</span>
                        <span class="info-box-number">2GB</span>
                        
                            <div class="progress">
                                <div class="progress-bar" style="width: 5%"></div>
                            </div>
                            <span class="progress-description">
                                Storage Used of 1TB
                            </span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-danger"><i class="far fa-file-image"></i></span>
        
                      <div class="info-box-content">
                        <span class="info-box-text">Images</span>
                        <span class="info-box-number">15GB</span>
                        
                            <div class="progress">
                                <div class="progress-bar" style="width: 10%"></div>
                            </div>
                            <span class="progress-description">
                                Storage Used of 1TB
                            </span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card card-danger card-outline">
                      <div class="card-header">
                        <h3 class="card-title">
                          <i class="far fa-folder"></i>
                          Browse Folders
                        </h3>
                        <nav class="float-right">
                            <ul class="pagination">
                              <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                              </li>
                            </ul>
                        </nav>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-5 col-sm-3">
                            <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                              <a class="nav-link active" id="vert-tabs-compliance-tab" data-toggle="pill" href="#vert-tabs-compliance" role="tab" aria-controls="vert-tabs-compliance" aria-selected="false"><i class="far fa-folder"></i> Compliance</a>
                              <a class="nav-link" id="vert-tabs-funding-tab" data-toggle="pill" href="#vert-tabs-funding" role="tab" aria-controls="vert-tabs-funding" aria-selected="false"><i class="far fa-folder"></i> Funding</a>
                              <a class="nav-link" id="vert-tabs-hr-tab" data-toggle="pill" href="#vert-tabs-hr" role="tab" aria-controls="vert-tabs-hr" aria-selected="false"><i class="far fa-folder"></i> HR</a>
                              <a class="nav-link" id="vert-tabs-learning-tab" data-toggle="pill" href="#vert-tabs-learning" role="tab" aria-controls="vert-tabs-learning" aria-selected="true"><i class="far fa-folder"></i> Learning</a>                              
                              <a class="nav-link" id="vert-tabs-loansetup-tab" data-toggle="pill" href="#vert-tabs-loansetup" role="tab" aria-controls="vert-tabs-loansetup" aria-selected="false"><i class="far fa-folder"></i> LoanSetUp</a>   
                              <a class="nav-link" id="vert-tabs-sales-tab" data-toggle="pill" href="#vert-tabs-sales" role="tab" aria-controls="vert-tabs-sales" aria-selected="false"><i class="far fa-folder"></i> Sales</a>
                              <a class="nav-link" id="vert-tabs-servicing-tab" data-toggle="pill" href="#vert-tabs-servicing" role="tab" aria-controls="vert-tabs-servicing" aria-selected="false"><i class="far fa-folder"></i> Servicing</a>  
                              <a class="nav-link" id="vert-tabs-tm-tab" data-toggle="pill" href="#vert-tabs-tm" role="tab" aria-controls="vert-tabs-tm" aria-selected="false"><i class="far fa-folder"></i> TM</a>                                                                                     
                              <a class="nav-link" id="vert-tabs-uw-tab" data-toggle="pill" href="#vert-tabs-uw" role="tab" aria-controls="vert-tabs-uw" aria-selected="true"><i class="far fa-folder"></i> Underwriting</a>
                            </div>
                          </div>
                          <div class="col-7 col-sm-9">
                            <div class="tab-content" id="vert-tabs-tabContent">
                              <div class="tab-pane text-left fade show active" id="vert-tabs-compliance" role="tabpanel" aria-labelledby="vert-tabs-compliance-tab">
                                
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-danger">
                                    <div class="card-header border-0">
                                      <h3 class="card-title">Compliance</h3>
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
                                            <th>Modified</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                
                                            <tr>
                                            <td>One Month Bank Statgement & VOE Rate Sheet.pdf</td>
                                            <td>49.8 kb</td>
                                            <td class="text-right py-0 align-middle">
                                                <div class="btn-group btn-group-sm">
                                                <a href="#" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                <a href="#" class="btn btn-info"><i class="fas fa-download"></i></a>
                                                <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                </div>
                                            </td>
                        
                                        </tbody>
                                        <tbody>
                
                                            <tr>
                                            <td>One Month Bank Statgement & VOE Rate Sheet.pdf</td>
                                            <td>49.8 kb</td>
                                            <td class="text-right py-0 align-middle">
                                                <div class="btn-group btn-group-sm">
                                                <a href="#" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                <a href="#" class="btn btn-info"><i class="fas fa-download"></i></a>
                                                <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                </div>
                                            </td>
                        
                                        </tbody>
                                        <tbody>
                
                                            <tr>
                                            <td>One Month Bank Statgement & VOE Rate Sheet.pdf</td>
                                            <td>49.8 kb</td>
                                            <td class="text-right py-0 align-middle">
                                                <div class="btn-group btn-group-sm">
                                                <a href="#" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                <a href="#" class="btn btn-info"><i class="fas fa-download"></i></a>
                                                <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                </div>
                                            </td>
                        
                                        </tbody>
                                        </table>
                                        
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="vert-tabs-funding" role="tabpanel" aria-labelledby="vert-tabs-funding-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-danger">
                                    <div class="card-header border-0">
                                      <h3 class="card-title">Funding</h3>
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
                                            <td>One Month Bank Statgement & VOE Rate Sheet.pdf</td>
                                            <td>49.8 kb</td>
                                            <td class="text-right py-0 align-middle">
                                                <div class="btn-group btn-group-sm">
                                                    <a href="#" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                    <a href="#" class="btn btn-info"><i class="fas fa-download"></i></a>
                                                    <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                </div>
                                            </td>
                        
                                        </tbody>
                                        </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="vert-tabs-hr" role="tabpanel" aria-labelledby="vert-tabs-hr-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-danger">
                                    <div class="card-header border-0">
                                      <h3 class="card-title">HR</h3>
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
                                            <td>One Month Bank Statgement & VOE Rate Sheet.pdf</td>
                                            <td>49.8 kb</td>
                                            <td class="text-right py-0 align-middle">
                                                <div class="btn-group btn-group-sm">
                                                    <a href="#" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                    <a href="#" class="btn btn-info"><i class="fas fa-download"></i></a>
                                                    <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                </div>
                                            </td>
                        
                                        </tbody>
                                        </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="vert-tabs-learning" role="tabpanel" aria-labelledby="vert-tabs-learning-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-danger">
                                    <div class="card-header border-0">
                                      <h3 class="card-title">Learning</h3>
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
                                            <td>One Month Bank Statgement & VOE Rate Sheet.pdf</td>
                                            <td>49.8 kb</td>
                                            <td class="text-right py-0 align-middle">
                                                <div class="btn-group btn-group-sm">
                                                    <a href="#" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                    <a href="#" class="btn btn-info"><i class="fas fa-download"></i></a>
                                                    <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                </div>
                                            </td>
                        
                                        </tbody>
                                        </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="vert-tabs-loansetup" role="tabpanel" aria-labelledby="vert-tabs-loansetup-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-danger">
                                    <div class="card-header border-0">
                                      <h3 class="card-title">LoanSetUp</h3>
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
                                            <td>One Month Bank Statgement & VOE Rate Sheet.pdf</td>
                                            <td>49.8 kb</td>
                                            <td class="text-right py-0 align-middle">
                                                <div class="btn-group btn-group-sm">
                                                    <a href="#" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                    <a href="#" class="btn btn-info"><i class="fas fa-download"></i></a>
                                                    <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                </div>
                                            </td>
                        
                                        </tbody>
                                        </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="vert-tabs-sales" role="tabpanel" aria-labelledby="vert-tabs-sales-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-danger">
                                    <div class="card-header border-0">
                                      <h3 class="card-title">Sales</h3>
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
                                            <td>One Month Bank Statgement & VOE Rate Sheet.pdf</td>
                                            <td>49.8 kb</td>
                                            <td class="text-right py-0 align-middle">
                                                <div class="btn-group btn-group-sm">
                                                    <a href="#" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                    <a href="#" class="btn btn-info"><i class="fas fa-download"></i></a>
                                                    <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                </div>
                                            </td>
                        
                                        </tbody>
                                        </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="vert-tabs-servicing" role="tabpanel" aria-labelledby="vert-tabs-servicing-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-danger">
                                    <div class="card-header border-0">
                                      <h3 class="card-title">Servicing</h3>
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
                                            <td>One Month Bank Statgement & VOE Rate Sheet.pdf</td>
                                            <td>49.8 kb</td>
                                            <td class="text-right py-0 align-middle">
                                                <div class="btn-group btn-group-sm">
                                                    <a href="#" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                    <a href="#" class="btn btn-info"><i class="fas fa-download"></i></a>
                                                    <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                </div>
                                            </td>
                        
                                        </tbody>
                                        </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="vert-tabs-tm" role="tabpanel" aria-labelledby="vert-tabs-tm-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-danger">
                                    <div class="card-header border-0">
                                      <h3 class="card-title">TM</h3>
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
                                            <td>One Month Bank Statgement & VOE Rate Sheet.pdf</td>
                                            <td>49.8 kb</td>
                                            <td class="text-right py-0 align-middle">
                                                <div class="btn-group btn-group-sm">
                                                    <a href="#" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                    <a href="#" class="btn btn-info"><i class="fas fa-download"></i></a>
                                                    <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                </div>
                                            </td>
                        
                                        </tbody>
                                        </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="vert-tabs-uw" role="tabpanel" aria-labelledby="vert-tabs-uw-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-danger">
                                    <div class="card-header border-0">
                                      <h3 class="card-title">Underwriting</h3>
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
                                            <td>One Month Bank Statgement & VOE Rate Sheet.pdf</td>
                                            <td>49.8 kb</td>
                                            <td class="text-right py-0 align-middle">
                                                <div class="btn-group btn-group-sm">
                                                    <a href="#" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                    <a href="#" class="btn btn-info"><i class="fas fa-download"></i></a>
                                                    <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                </div>
                                            </td>
                        
                                        </tbody>
                                        </table>
                                    </div>
                                  </div>
                                </div>
                              </div>

                                <div class="col-md-6 float-right">
                                <div class="input-group">
                                  <form method="POST" action="/uploads" id="upload" enctype="multipart/form-data" style="width: 100%">
                                    {{ csrf_field() }}
                                    <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile" name="file[]" multiple>
                                    <label class="custom-file-label" for="upload">Choose File</label>
                                    </div>
                                    <div class="input-group-append">
                                    <button class="btn btn-danger" type="submit">Upload</button>

                                    </div>
                                  </form>
                                </div>
                                </div>
                          </div><!-- end form cards -->
                        </div>
                      </div>
                      <!-- /.card -->
                    </div>
                    <!-- /.card -->
                  </div>
            </div>
        </div>

      </section>

    </div>
@stop