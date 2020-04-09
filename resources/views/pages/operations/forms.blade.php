@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Operations</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="#">Operations</a></li>
                <li class="breadcrumb-item">Forms</a></li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
            <!-- Main content -->

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
                        <a class="nav-item nav-link active" id="nav-corr-tab" data-toggle="tab" href="#nav-corr" role="tab" aria-controls="nav-corr" aria-selected="true">Compliance</a>
                        <a class="nav-item nav-link" id="nav-funding-tab" data-toggle="tab" href="#nav-funding" role="tab" aria-controls="nav-funding" aria-selected="false">Funding</a>
                        <a class="nav-item nav-link" id="nav-lsu-tab" data-toggle="tab" href="#nav-lsu" role="tab" aria-controls="nav-lsu" aria-selected="false">Loan Set Up</a>
                        <a class="nav-item nav-link" id="nav-tm-tab" data-toggle="tab" href="#nav-tm" role="tab" aria-controls="nav-tm" aria-selected="false">Transaction Manager</a>
                        <a class="nav-item nav-link" id="nav-uw-tab" data-toggle="tab" href="#nav-uw" role="tab" aria-controls="nav-uw" aria-selected="false">Underwriting</a>
                        </div>
                      </nav>
                      <br/>
    
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-corr" role="tabpanel" aria-labelledby="nav-corr-tab">
                          <div class="row">
                            <div class="col-sm-4 col-md-3 col-lg-3">
                              <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="vert-tabs-disclosure-tab" data-toggle="pill" href="#vert-tabs-disclosure" role="tab" aria-controls="vert-tabs-disclosure" aria-selected="true">Disclosure</a>
                                <a class="nav-link" id="vert-tabs-funding-states-tab" data-toggle="pill" href="#vert-tabs-funding-states" role="tab" aria-controls="vert-tabs-funding-states" aria-selected="false">Funding States</a>
                                <a class="nav-link" id="vert-tabs-important-tab" data-toggle="pill" href="#vert-tabs-important" role="tab" aria-controls="vert-tabs-important" aria-selected="false">Important Things to Know</a>
                                <a class="nav-link" id="vert-tabs-marketing-tab" data-toggle="pill" href="#vert-tabs-marketing" role="tab" aria-controls="vert-tabs-marketing" aria-selected="false">Marketing</a>
                                <a class="nav-link" id="vert-tabs-policies-tab" data-toggle="pill" href="#vert-tabs-policies" role="tab" aria-controls="vert-tabs-policies" aria-selected="false">Policies</a>
                              </div>
                            </div>
                            <div class="col-sm-12 col-md-9 col-lg-9">
                              <div class="tab-content" id="vert-tabs-tabContent">
                                <div class="tab-pane text-left fade show active" id="vert-tabs-disclosure" role="tabpanel" aria-labelledby="vert-tabs-disclosure-tab">
                                  
                                  <!-- /.content-header -->        
                                  <div class="col">
                                    <div class="card card-danger">
                                      <div class="card-header border-0">
                                        <h3 class="card-title">Disclosure</h3>
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
                                <div class="tab-pane text-left fade show" id="vert-tabs-funding-states" role="tabpanel" aria-labelledby="vert-tabs-funding-states-tab">
                                  
                                    <!-- /.content-header -->        
                                    <div class="col">
                                      <div class="card card-danger">
                                        <div class="card-header border-0">
                                          <h3 class="card-title">Funding States</h3>
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
                                  <div class="tab-pane text-left fade show" id="vert-tabs-important" role="tabpanel" aria-labelledby="vert-tabs-important-tab">
                                  
                                    <!-- /.content-header -->        
                                    <div class="col">
                                      <div class="card card-danger">
                                        <div class="card-header border-0">
                                          <h3 class="card-title">Important Things To Know</h3>
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
                                  <div class="tab-pane text-left fade show" id="vert-tabs-marketing" role="tabpanel" aria-labelledby="vert-tabs-marketing-tab">
                                  
                                    <!-- /.content-header -->        
                                    <div class="col">
                                      <div class="card card-danger">
                                        <div class="card-header border-0">
                                          <h3 class="card-title">Marketing</h3>
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
                                  <div class="tab-pane text-left fade show" id="vert-tabs-policies" role="tabpanel" aria-labelledby="vert-tabs-policies-tab">
                                  
                                    <!-- /.content-header -->        
                                    <div class="col">
                                      <div class="card card-danger">
                                        <div class="card-header border-0">
                                          <h3 class="card-title">Funding States</h3>
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

                        
                        <div class="tab-pane fade show" id="nav-funding" role="tabpanel" aria-labelledby="nav-funding-tab">
                          <div class="row">
                            <div class="col-sm-4 col-md-3 col-lg-3">
                              <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="vert-tabs-doc-drawer-tab" data-toggle="pill" href="#vert-tabs-doc-drawer" role="tab" aria-controls="vert-tabs-doc-drawer" aria-selected="true">Doc Drawer</a>
                                <a class="nav-link" id="vert-tabs-funder-tab" data-toggle="pill" href="#vert-tabs-funder" role="tab" aria-controls="vert-tabs-funder" aria-selected="false">Funder</a>
                                <a class="nav-link" id="vert-tabs-funding-tab" data-toggle="pill" href="#vert-tabs-funding" role="tab" aria-controls="vert-tabs-funding" aria-selected="false">Funding</a>
                                <a class="nav-link" id="vert-tabs-funding-assistant-tab" data-toggle="pill" href="#vert-tabs-funding-assistant" role="tab" aria-controls="vert-tabs-funding-assistant" aria-selected="false">Funding Assistant</a>
                                <a class="nav-link" id="vert-tabs-funding-forms-tab" data-toggle="pill" href="#vert-tabs-funding-forms" role="tab" aria-controls="vert-tabs-funding-forms" aria-selected="false">Funding Forms</a>
                              </div>
                            </div>
                            <div class="col-sm-12 col-md-9 col-lg-9">
                              <div class="tab-content" id="vert-tabs-tabContent">
                                <div class="tab-pane text-left fade show active" id="vert-tabs-doc-drawer" role="tabpanel" aria-labelledby="vert-tabs-doc-drawer-tab">
                                  
                                  <!-- /.content-header -->        
                                  <div class="col">
                                    <div class="card card-danger">
                                      <div class="card-header border-0">
                                        <h3 class="card-title">Doc Drawer</h3>
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

                                <div class="tab-pane text-left fade show" id="vert-tabs-funder" role="tabpanel" aria-labelledby="vert-tabs-funder-tab">
                                  <!-- /.content-header -->        
                                  <div class="col">
                                    <div class="card card-danger">
                                      <div class="card-header border-0">
                                        <h3 class="card-title">Funder</h3>
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
                                <div class="tab-pane text-left fade show" id="vert-tabs-funding" role="tabpanel" aria-labelledby="vert-tabs-funding-tab">
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
                                  <div class="tab-pane text-left fade show" id="vert-tabs-funding-assistant" role="tabpanel" aria-labelledby="vert-tabs-funding-assistant-tab">
                                    <!-- /.content-header -->        
                                    <div class="col">
                                      <div class="card card-danger">
                                        <div class="card-header border-0">
                                          <h3 class="card-title">Funding Assistant</h3>
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
                                  <div class="tab-pane text-left fade show" id="vert-tabs-funding-forms" role="tabpanel" aria-labelledby="vert-tabs-funding-forms-tab">
                                    <!-- /.content-header -->        
                                    <div class="col">
                                      <div class="card card-danger">
                                        <div class="card-header border-0">
                                          <h3 class="card-title">Funding Forms</h3>
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
                      <div class="tab-pane fade show" id="nav-lsu" role="tabpanel" aria-labelledby="nav-lsu-tab">
                        <div class="row">
                          <div class="col-sm-4 col-md-3 col-lg-3">
                            <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                              <a class="nav-link active" id="vert-tabs-attachments-tab" data-toggle="pill" href="#vert-tabs-attachments" role="tab" aria-controls="vert-tabs-attachments" aria-selected="true">Attachments To Send with Welcome Letter</a>
                              <a class="nav-link" id="vert-tabs-dept-tab" data-toggle="pill" href="#vert-tabs-dept" role="tab" aria-controls="vert-tabs-dept" aria-selected="false">Deparment Contacts</a>
                              <a class="nav-link" id="vert-tabs-doc-velocity-tab" data-toggle="pill" href="#vert-tabs-doc-velocity" role="tab" aria-controls="vert-tabs-doc-velocity" aria-selected="false">Doc Velocity</a>
                              <a class="nav-link" id="vert-tabs-flood-tab" data-toggle="pill" href="#vert-tabs-flood" role="tab" aria-controls="vert-tabs-flood" aria-selected="false">Flood Certs</a>
                              <a class="nav-link" id="vert-tabs-lsu-forms-tab" data-toggle="pill" href="#vert-tabs-lsu-forms" role="tab" aria-controls="vert-tabs-lsu-forms" aria-selected="false">Forms</a>
                              <a class="nav-link" id="vert-tabs-loan-setup-tab" data-toggle="pill" href="#vert-tabs-loan-setup" role="tab" aria-controls="vert-tabs-loan-setup" aria-selected="false">Loan Set Up</a>
                              <a class="nav-link" id="vert-tabs-ssa-tab" data-toggle="pill" href="#vert-tabs-ssa" role="tab" aria-controls="vert-tabs-ssa" aria-selected="false">SSA-89 And 4506T</a>
                              <a class="nav-link" id="vert-tabs-trid-calendar-tab" data-toggle="pill" href="#vert-tabs-trid-calendar" role="tab" aria-controls="vert-tabs-trid-calendar" aria-selected="false">TRID Calendars</a>
                              <a class="nav-link" id="vert-tabs-valuation-tab" data-toggle="pill" href="#vert-tabs-valuation" role="tab" aria-controls="vert-tabs-valuation" aria-selected="false">Valuation Delivery</a>
                              <a class="nav-link" id="vert-tabs-vetting-tab" data-toggle="pill" href="#vert-tabs-vetting" role="tab" aria-controls="vert-tabs-vetting" aria-selected="false">Vetting</a>
                            </div>
                          </div>
                          <div class="col-sm-12 col-md-9 col-lg-9">
                            <div class="tab-content" id="vert-tabs-tabContent">
                              <div class="tab-pane text-left fade show active" id="vert-tabs-attachments" role="tabpanel" aria-labelledby="vert-tabs-attachments-tab">
                                
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-danger">
                                    <div class="card-header border-0">
                                      <h3 class="card-title">Attachments To Send With Welcome Letter</h3>
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

                              <div class="tab-pane text-left fade show" id="vert-tabs-dept" role="tabpanel" aria-labelledby="vert-tabs-dept-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-danger">
                                    <div class="card-header border-0">
                                      <h3 class="card-title">Department Contacts</h3>
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
                              <div class="tab-pane text-left fade show" id="vert-tabs-doc-velocity" role="tabpanel" aria-labelledby="vert-tabs-doc-velocity-tab">
                                  <!-- /.content-header -->        
                                  <div class="col">
                                    <div class="card card-danger">
                                      <div class="card-header border-0">
                                        <h3 class="card-title">Doc Velocity</h3>
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
                                <div class="tab-pane text-left fade show" id="vert-tabs-flood" role="tabpanel" aria-labelledby="vert-tabs-flood-tab">
                                  <!-- /.content-header -->        
                                  <div class="col">
                                    <div class="card card-danger">
                                      <div class="card-header border-0">
                                        <h3 class="card-title">Flood Certs</h3>
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
                                <div class="tab-pane text-left fade show" id="vert-tabs-lsu-forms" role="tabpanel" aria-labelledby="vert-tabs-lsu-forms-tab">
                                  <!-- /.content-header -->        
                                  <div class="col">
                                    <div class="card card-danger">
                                      <div class="card-header border-0">
                                        <h3 class="card-title">Loan Set Up Forms</h3>
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
                                <div class="tab-pane text-left fade show" id="vert-tabs-loan-setup" role="tabpanel" aria-labelledby="vert-tabs-loan-setup-tab">
                                    <!-- /.content-header -->        
                                    <div class="col">
                                      <div class="card card-danger">
                                        <div class="card-header border-0">
                                          <h3 class="card-title">Loan Set Up</h3>
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
                                  <div class="tab-pane text-left fade show" id="vert-tabs-ssa" role="tabpanel" aria-labelledby="vert-tabs-ssa-tab">
                                    <!-- /.content-header -->        
                                    <div class="col">
                                      <div class="card card-danger">
                                        <div class="card-header border-0">
                                          <h3 class="card-title">SSA-89 And 4506T</h3>
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
                                  <div class="tab-pane text-left fade show" id="vert-tabs-trid-calendar" role="tabpanel" aria-labelledby="vert-tabs-trid-calendar-tab">
                                    <!-- /.content-header -->        
                                    <div class="col">
                                      <div class="card card-danger">
                                        <div class="card-header border-0">
                                          <h3 class="card-title">TRID Calendars</h3>
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
                                  <div class="tab-pane text-left fade show" id="vert-tabs-valuation" role="tabpanel" aria-labelledby="vert-tabs-valuation-tab">
                                    <!-- /.content-header -->        
                                    <div class="col">
                                      <div class="card card-danger">
                                        <div class="card-header border-0">
                                          <h3 class="card-title">Valuation Delivery</h3>
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
                                  <div class="tab-pane text-left fade show" id="vert-tabs-vetting" role="tabpanel" aria-labelledby="vert-tabs-vetting-tab">
                                    <!-- /.content-header -->        
                                    <div class="col">
                                      <div class="card card-danger">
                                        <div class="card-header border-0">
                                          <h3 class="card-title">Vetting</h3>
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


                    <div class="tab-pane fade show" id="nav-tm" role="tabpanel" aria-labelledby="nav-tm-tab">
                        <div class="row">
                          <div class="col-sm-4 col-md-3 col-lg-3">
                            <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                              <a class="nav-link active" id="vert-tabs-forms-to-send-tab" data-toggle="pill" href="#vert-tabs-forms-to-send" role="tab" aria-controls="vert-tabs-forms-to-send" aria-selected="true">Forms To Send To Brokers</a>
                              <a class="nav-link" id="vert-tabs-internal-tab" data-toggle="pill" href="#vert-tabs-internal" role="tab" aria-controls="vert-tabs-internal" aria-selected="false">Internal</a>
                              <a class="nav-link" id="vert-tabs-program-guides-tab" data-toggle="pill" href="#vert-tabs-program-guides" role="tab" aria-controls="vert-tabs-program-guides" aria-selected="false">Program Guides</a>
                            </div>
                          </div>
                          <div class="col-sm-12 col-md-9 col-lg-9">
                            <div class="tab-content" id="vert-tabs-tabContent">
                              <div class="tab-pane text-left fade show active" id="vert-tabs-forms-to-send" role="tabpanel" aria-labelledby="vert-tabs-forms-to-send-tab">
                                
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-danger">
                                    <div class="card-header border-0">
                                      <h3 class="card-title">Forms To Send To Brokers</h3>
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

                              <div class="tab-pane text-left fade show" id="vert-tabs-internal" role="tabpanel" aria-labelledby="vert-tabs-internal-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-danger">
                                    <div class="card-header border-0">
                                      <h3 class="card-title">Internal</h3>
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
                              <div class="tab-pane text-left fade show" id="vert-tabs-program-guides" role="tabpanel" aria-labelledby="vert-tabs-program-guides-tab">
                                  <!-- /.content-header -->        
                                  <div class="col">
                                    <div class="card card-danger">
                                      <div class="card-header border-0">
                                        <h3 class="card-title">Program Guides</h3>
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

                    
                    <div class="tab-pane fade show" id="nav-uw" role="tabpanel" aria-labelledby="nav-uw-tab">
                        <div class="row">
                          <div class="col-sm-4 col-md-3 col-lg-3">
                            <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                              <a class="nav-link active" id="vert-tabs-guidelines-tab" data-toggle="pill" href="#vert-tabs-guidelines" role="tab" aria-controls="vert-tabs-guidelines" aria-selected="true">Guidelines</a>
                              <a class="nav-link" id="vert-tabs-uw-internal-tab" data-toggle="pill" href="#vert-tabs-uw-internal" role="tab" aria-controls="vert-tabs-uw-internal" aria-selected="false">Internal Forms</a>
                              <a class="nav-link" id="vert-tabs-uw-videos-tab" data-toggle="pill" href="#vert-tabs-uw-videos" role="tab" aria-controls="vert-tabs-uw-videos" aria-selected="false">Videos</a>
                            </div>
                          </div>
                          <div class="col-sm-12 col-md-9 col-lg-9">
                            <div class="tab-content" id="vert-tabs-tabContent">
                              <div class="tab-pane text-left fade show active" id="vert-tabs-guidelines" role="tabpanel" aria-labelledby="vert-tabs-guidelines-tab">
                                
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-danger">
                                    <div class="card-header border-0">
                                      <h3 class="card-title">Guidelines</h3>
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

                              <div class="tab-pane text-left fade show" id="vert-tabs-uw-internal" role="tabpanel" aria-labelledby="vert-tabs-uw-internal-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-danger">
                                    <div class="card-header border-0">
                                      <h3 class="card-title">Internal Forms</h3>
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
                              <div class="tab-pane text-left fade show" id="vert-tabs-uw-videos" role="tabpanel" aria-labelledby="vert-tabs-uw-videos-tab">
                                  <!-- /.content-header -->        
                                  <div class="col">
                                    <div class="card card-danger">
                                      <div class="card-header border-0">
                                        <h3 class="card-title">Videos</h3>
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





  </div>
  <!-- /.col -->
<!-- /.control-sidebar -->
<!-- ./wrapper -->
@stop