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
                              <a class="nav-link active" id="vert-tabs-lsu-dept-tab" data-toggle="pill" href="#vert-tabs-lsu-dept" role="tab" aria-controls="vert-tabs-lsu-dept" aria-selected="true">Deparment Contacts</a>
                              <a class="nav-link" id="vert-tabs-lsu-processes-tab" data-toggle="pill" href="#vert-tabs-lsu-processes" role="tab" aria-controls="vert-tabs-lsu-processes" aria-selected="false">Processes</a>
                              <a class="nav-link" id="vert-tabs-lsu-forms-tab" data-toggle="pill" href="#vert-tabs-lsu-forms" role="tab" aria-controls="vert-tabs-lsu-forms" aria-selected="false">Forms</a>
                              <a class="nav-link" id="vert-tabs-lsu-systems-tab" data-toggle="pill" href="#vert-tabs-lsu-systems" role="tab" aria-controls="vert-tabs-lsu-systems" aria-selected="false">Systems</a>
                              <a class="nav-link" id="vert-tabs-lsu-attachments-tab" data-toggle="pill" href="#vert-tabs-lsu-attachments" role="tab" aria-controls="vert-tabs-lsu-attachments" aria-selected="false">Attachments To Send with Welcome Letter</a>
                              <a class="nav-link" id="vert-tabs-lsu-flood-tab" data-toggle="pill" href="#vert-tabs-lsu-flood" role="tab" aria-controls="vert-tabs-lsu-flood" aria-selected="false">Flood Certs</a>
                              <a class="nav-link" id="vert-tabs-lsu-valuation-tab" data-toggle="pill" href="#vert-tabs-lsu-valuation" role="tab" aria-controls="vert-tabs-lsu-valuation" aria-selected="false">Valuation Delivery</a>
                              <a class="nav-link" id="vert-tabs-lsu-vetting-tab" data-toggle="pill" href="#vert-tabs-lsu-vetting" role="tab" aria-controls="vert-tabs-lsu-vetting" aria-selected="false">Vetting</a>
                              <a class="nav-link" id="vert-tabs-lsu-compliance-tab" data-toggle="pill" href="#vert-tabs-lsu-compliance" role="tab" aria-controls="vert-tabs-lsu-compliance" aria-selected="false">Compliance</a>
                              <a class="nav-link" id="vert-tabs-lsu-ssa-tab" data-toggle="pill" href="#vert-tabs-lsu-ssa" role="tab" aria-controls="vert-tabs-lsu-ssa" aria-selected="false">SSA-89 & 4506T</a>



                            </div>
                          </div>
                          <div class="col-sm-12 col-md-9 col-lg-9">
                            <div class="tab-content" id="vert-tabs-tabContent">
                              <div class="tab-pane text-left fade show active" id="vert-tabs-lsu-dept" role="tabpanel" aria-labelledby="vert-tabs-lsu-dept-tab">
                                
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

                              <div class="tab-pane text-left fade show" id="vert-tabs-lsu-processes" role="tabpanel" aria-labelledby="vert-tabs-lsu-processes-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-danger">
                                    <div class="card-header border-0">
                                      <h3 class="card-title">Processes</h3>
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
                                        <h3 class="card-title">Forms</h3>
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
                                <div class="tab-pane text-left fade show" id="vert-tabs-lsu-systems" role="tabpanel" aria-labelledby="vert-tabs-lsu-systems-tab">
                                  <!-- /.content-header -->        
                                  <div class="col">
                                    <div class="card card-danger">
                                      <div class="card-header border-0">
                                        <h3 class="card-title">Systems</h3>
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
                                <div class="tab-pane text-left fade show" id="vert-tabs-lsu-attachments" role="tabpanel" aria-labelledby="vert-tabs-lsu-attachments-tab">
                                  <!-- /.content-header -->        
                                  <div class="col">
                                    <div class="card card-danger">
                                      <div class="card-header border-0">
                                        <h3 class="card-title">Attachments to Send with Welcome Letter</h3>
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
                                <div class="tab-pane text-left fade show" id="vert-tabs-lsu-flood" role="tabpanel" aria-labelledby="vert-tabs-lsu-flood-tab">
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
                                  <div class="tab-pane text-left fade show" id="vert-tabs-lsu-valuation" role="tabpanel" aria-labelledby="vert-tabs-lsu-valuation-tab">
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
                                  <div class="tab-pane text-left fade show" id="vert-tabs-lsu-vetting" role="tabpanel" aria-labelledby="vert-tabs-lsu-vetting-tab">
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
                                  <div class="tab-pane text-left fade show" id="vert-tabs-lsu-compliance" role="tabpanel" aria-labelledby="vert-tabs-lsu-compliance-tab">
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
                                  <div class="tab-pane text-left fade show" id="vert-tabs-lsu-ssa" role="tabpanel" aria-labelledby="vert-tabs-lsu-ssa-tab">
                                    <!-- /.content-header -->        
                                    <div class="col">
                                      <div class="card card-danger">
                                        <div class="card-header border-0">
                                          <h3 class="card-title">SSA-89 & 4506Ts</h3>
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
                              <a class="nav-link active" id="vert-tabs-tm-forms-to-send-tab" data-toggle="pill" href="#vert-tabs-tm-forms-to-send" role="tab" aria-controls="vert-tabs-tm-forms-to-send" aria-selected="true">Forms To Send To Brokers</a>
                              <a class="nav-link" id="vert-tabs-tm-dept-tab" data-toggle="pill" href="#vert-tabs-tm-dept" role="tab" aria-controls="vert-tabs-tm-dept" aria-selected="false">Department Contacts</a>
                              <a class="nav-link" id="vert-tabs-tm-internal-tab" data-toggle="pill" href="#vert-tabs-tm-internal" role="tab" aria-controls="vert-tabs-tm-internal" aria-selected="false">Internal Forms</a>
                              <a class="nav-link" id="vert-tabs-tm-systems-tab" data-toggle="pill" href="#vert-tabs-tm-systems" role="tab" aria-controls="vert-tabs-tm-systems" aria-selected="false">Systems</a>
                              <a class="nav-link" id="vert-tabs-tm-tisp-tab" data-toggle="pill" href="#vert-tabs-tm-tisp" role="tab" aria-controls="vert-tabs-tm-tisp" aria-selected="false">Taxes/Insurance/Subject Property</a>
                              <a class="nav-link" id="vert-tabs-tm-vetting-tab" data-toggle="pill" href="#vert-tabs-tm-vetting" role="tab" aria-controls="vert-tabs-tm-vetting" aria-selected="false">Vetting</a>
                              <a class="nav-link" id="vert-tabs-tm-compliance-tab" data-toggle="pill" href="#vert-tabs-tm-compliance" role="tab" aria-controls="vert-tabs-tm-compliance" aria-selected="false">Compliance</a>
                              <a class="nav-link" id="vert-tabs-tm-processes-tab" data-toggle="pill" href="#vert-tabs-tm-processes" role="tab" aria-controls="vert-tabs-tm-processes" aria-selected="false">Processes</a>
                              <a class="nav-link" id="vert-tabs-tm-program-guides-tab" data-toggle="pill" href="#vert-tabs-tm-program-guides" role="tab" aria-controls="vert-tabs-tm-program-guides" aria-selected="false">Program Guides</a>
                            </div>
                          </div>
                          <div class="col-sm-12 col-md-9 col-lg-9">
                            <div class="tab-content" id="vert-tabs-tabContent">
                              <div class="tab-pane text-left fade show active" id="vert-tabs-tm-forms-to-send" role="tabpanel" aria-labelledby="vert-tabs-tm-forms-to-send-tab">
                                
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
                              <div class="tab-pane text-left fade show" id="vert-tabs-tm-dept" role="tabpanel" aria-labelledby="vert-tabs-tm-dept-tab">
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
                              <div class="tab-pane text-left fade show" id="vert-tabs-tm-internal" role="tabpanel" aria-labelledby="vert-tabs-tm-internal-tab">
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
                              <div class="tab-pane text-left fade show" id="vert-tabs-tm-systems" role="tabpanel" aria-labelledby="vert-tabs-tm-systems-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-danger">
                                    <div class="card-header border-0">
                                      <h3 class="card-title">Systems</h3>
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
                              <div class="tab-pane text-left fade show" id="vert-tabs-tm-tisp" role="tabpanel" aria-labelledby="vert-tabs-tm-tisp-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-danger">
                                    <div class="card-header border-0">
                                      <h3 class="card-title">Taxes/Insurance/Subject Property</h3>
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
                              <div class="tab-pane text-left fade show" id="vert-tabs-tm-vetting" role="tabpanel" aria-labelledby="vert-tabs-tm-vetting-tab">
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
                              <div class="tab-pane text-left fade show" id="vert-tabs-tm-compliance" role="tabpanel" aria-labelledby="vert-tabs-tm-compliance-tab">
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
                              <div class="tab-pane text-left fade show" id="vert-tabs-tm-processes" role="tabpanel" aria-labelledby="vert-tabs-tm-processes-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-danger">
                                    <div class="card-header border-0">
                                      <h3 class="card-title">Processes</h3>
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
                              <div class="tab-pane text-left fade show" id="vert-tabs-tm-program-guides" role="tabpanel" aria-labelledby="vert-tabs-tm-program-guides-tab">
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
                              <a class="nav-link active" id="vert-tabs-uw-dept-tab" data-toggle="pill" href="#vert-tabs-uw-dept" role="tab" aria-controls="vert-tabs-uw-dept" aria-selected="true">Department Contacts</a>
                              <a class="nav-link" id="vert-tabs-uw-internal-tab" data-toggle="pill" href="#vert-tabs-uw-internal" role="tab" aria-controls="vert-tabs-uw-internal" aria-selected="false">Internal Forms</a>
                              <a class="nav-link" id="vert-tabs-uw-systems-tab" data-toggle="pill" href="#vert-tabs-uw-systems" role="tab" aria-controls="vert-tabs-uw-systems" aria-selected="false">Systems</a>
                              <a class="nav-link" id="vert-tabs-uw-compliance-tab" data-toggle="pill" href="#vert-tabs-uw-compliance" role="tab" aria-controls="vert-tabs-uw-compliance" aria-selected="false">Compliance</a>
                              <a class="nav-link" id="vert-tabs-uw-tisp-tab" data-toggle="pill" href="#vert-tabs-uw-tisp" role="tab" aria-controls="vert-tabs-uw-tisp" aria-selected="false">Taxes/Insurance/Subject Property</a>
                              <a class="nav-link" id="vert-tabs-uw-vetting-tab" data-toggle="pill" href="#vert-tabs-uw-vetting" role="tab" aria-controls="vert-tabs-uw-vetting" aria-selected="false">Vetting</a>
                              <a class="nav-link" id="vert-tabs-uw-processes-tab" data-toggle="pill" href="#vert-tabs-uw-processes" role="tab" aria-controls="vert-tabs-uw-processes" aria-selected="false">Processes</a>
                              <a class="nav-link" id="vert-tabs-uw-guidelines-tab" data-toggle="pill" href="#vert-tabs-uw-guidelines" role="tab" aria-controls="vert-tabs-uw-guidelines" aria-selected="false">Underwriting Guidelines</a>
                              <a class="nav-link" id="vert-tabs-uw-tools-tab" data-toggle="pill" href="#vert-tabs-uw-tools" role="tab" aria-controls="vert-tabs-uw-tools" aria-selected="false">UW Tools</a>
                              <a class="nav-link" id="vert-tabs-uw-videos-tab" data-toggle="pill" href="#vert-tabs-uw-videos" role="tab" aria-controls="vert-tabs-uw-videos" aria-selected="false">Training Videos</a>
                            </div>
                          </div>
                          <div class="col-sm-12 col-md-9 col-lg-9">
                            <div class="tab-content" id="vert-tabs-tabContent">

                              <div class="tab-pane text-left fade show" id="vert-tabs-uw-dept" role="tabpanel" aria-labelledby="vert-tabs-uw-dept-tab">
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
                              <div class="tab-pane text-left fade show active" id="vert-tabs-uw-internal" role="tabpanel" aria-labelledby="vert-tabs-uw-internal-tab">
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
                              <div class="tab-pane text-left fade show" id="vert-tabs-uw-systems" role="tabpanel" aria-labelledby="vert-tabs-uw-systems-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-danger">
                                    <div class="card-header border-0">
                                      <h3 class="card-title">Systems</h3>
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
                              <div class="tab-pane text-left fade show" id="vert-tabs-uw-compliance" role="tabpanel" aria-labelledby="vert-tabs-uw-compliance-tab">
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
                              <div class="tab-pane text-left fade show" id="vert-tabs-uw-tisp" role="tabpanel" aria-labelledby="vert-tabs-uw-tisp-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-danger">
                                    <div class="card-header border-0">
                                      <h3 class="card-title">Taxes/Insurance/Subject Property</h3>
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
                              <div class="tab-pane text-left fade show" id="vert-tabs-uw-vetting" role="tabpanel" aria-labelledby="vert-tabs-uw-vetting-tab">
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
                              <div class="tab-pane text-left fade show" id="vert-tabs-uw-processes" role="tabpanel" aria-labelledby="vert-tabs-uw-processes-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-danger">
                                    <div class="card-header border-0">
                                      <h3 class="card-title">Processes</h3>
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
                              <div class="tab-pane text-left fade show" id="vert-tabs-uw-guidelines" role="tabpanel" aria-labelledby="vert-tabs-uw-guidelines-tab">
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
                              <div class="tab-pane text-left fade show" id="vert-tabs-uw-tools" role="tabpanel" aria-labelledby="vert-tabs-uw-tools-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-danger">
                                    <div class="card-header border-0">
                                      <h3 class="card-title">UW Tools</h3>
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