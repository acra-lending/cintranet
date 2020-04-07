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
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="#">Sales</a></li>
                <li class="breadcrumb-item">Flyers</a></li>
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
                    <i class="fas fa-book-open"></i>
                    Flyers
                  </h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-3 col-sm-2">
                      <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="vert-tabs-aboutcsc-tab" data-toggle="pill" href="#vert-tabs-aboutcsc" role="tab" aria-controls="vert-tabs-aboutcsc" aria-selected="true">About CSC</a>
                        <a class="nav-link" id="vert-tabs-automation-tab" data-toggle="pill" href="#vert-tabs-automation" role="tab" aria-controls="vert-tabs-automation" aria-selected="true">Automation</a>
                        <a class="nav-link" id="vert-tabs-brokers-tab" data-toggle="pill" href="#vert-tabs-brokers" role="tab" aria-controls="vert-tabs-brokers" aria-selected="true">Brokers</a>
                        <a class="nav-link" id="vert-tabs-corr-tab" data-toggle="pill" href="#vert-tabs-corr" role="tab" aria-controls="vert-tabs-corr" aria-selected="true">Correspondent</a>
                        <a class="nav-link" id="vert-tabs-cscprograms-tab" data-toggle="pill" href="#vert-tabs-cscprograms" role="tab" aria-controls="vert-tabs-cscprograms" aria-selected="true">CSC Programs</a>
                        <a class="nav-link" id="vert-tabs-social-tab" data-toggle="pill" href="#vert-tabs-social" role="tab" aria-controls="vert-tabs-social" aria-selected="true">LinkedIn/Social Images</a>
                        <a class="nav-link" id="vert-tabs-niche-tab" data-toggle="pill" href="#vert-tabs-niche" role="tab" aria-controls="vert-tabs-niche" aria-selected="true">Niche Flyers</a>
                        <a class="nav-link" id="vert-tabs-retail-tab" data-toggle="pill" href="#vert-tabs-retail" role="tab" aria-controls="vert-tabs-retail" aria-selected="true">Retail Flyers</a>
                        <a class="nav-link" id="vert-tabs-vertical-tab" data-toggle="pill" href="#vert-tabs-vertical" role="tab" aria-controls="vert-tabs-vertical" aria-selected="true">Vertical Integration</a>
                      </div>
                    </div>
                    <div class="col-7 col-sm-10">
                      <div class="tab-content" id="vert-tabs-tabContent">
                        <div class="tab-pane text-left fade show active" id="vert-tabs-aboutcsc" role="tabpanel" aria-labelledby="vert-tabs-aboutcsc-tab">
                          
                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">About CSC Flyers</h3>
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
                                        @foreach($aboutCsc as $category)
                                          <tr>
                                          <td>{{$category->filename}}</td>
                                          <td>{{$category->filesize}} KB</td>
                                          <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                          <td class="text-right py-0 align-middle">
                                              <div class="btn-group btn-group-sm">
                                                <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                              </div>
                                          </td>
                                        @endforeach
                                      </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="vert-tabs-automation" role="tabpanel" aria-labelledby="vert-tabs-automation-tab">
                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">Automation Flyers</h3>
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
                                    @foreach($automation as $category)
                                      <tr>
                                        <td>{{$category->filename}}</td>
                                        <td>{{$category->filesize}} KB</td>
                                        <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                      <td class="text-right py-0 align-middle">
                                          <div class="btn-group btn-group-sm">
                                            <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                            <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                          </div>
                                      </td>
                                    @endforeach
                                  </tbody>
                                  </table>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="vert-tabs-brokers" role="tabpanel" aria-labelledby="vert-tabs-brokers-tab">
                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">Flyers for Brokers</h3>
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
                                    @foreach($brokerFlyers as $category)
                                      <tr>
                                        <td>{{$category->filename}}</td>
                                        <td>{{$category->filesize}} KB</td>
                                        <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                      <td class="text-right py-0 align-middle">
                                          <div class="btn-group btn-group-sm">
                                            <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                            <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                          </div>
                                      </td>
                                    @endforeach
                                  </tbody>
                                  </table>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="vert-tabs-corr" role="tabpanel" aria-labelledby="vert-tabs-corr-tab">
                            <!-- /.content-header -->        
                            <div class="col">
                              <div class="card card-danger">
                                <div class="card-header border-0">
                                  <h3 class="card-title">Flyers For Correspondents</h3>
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
                                      @foreach($corrFlyers as $category)
                                        <tr>
                                          <td>{{$category->filename}}</td>
                                          <td>{{$category->filesize}} KB</td>
                                          <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                              <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                              <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                            </div>
                                        </td>
                                      @endforeach
                                    </tbody>
                                    </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="vert-tabs-cscprograms" role="tabpanel" aria-labelledby="vert-tabs-cscprograms-tab">
                            <!-- /.content-header -->        
                            <div class="col">
                              <div class="card card-danger">
                                <div class="card-header border-0">
                                  <h3 class="card-title">CSC Program Flyers</h3>
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
                                      @foreach($cscPrograms as $category)
                                        <tr>
                                          <td>{{$category->filename}}</td>
                                          <td>{{$category->filesize}} KB</td>
                                          <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                              <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                              <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                            </div>
                                        </td>
                                      @endforeach
                                    </tbody>
                                    </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="vert-tabs-social" role="tabpanel" aria-labelledby="vert-tabs-social-tab">
                            <!-- /.content-header -->        
                            <div class="col">
                              <div class="card card-danger">
                                <div class="card-header border-0">
                                  <h3 class="card-title">LinkedIn and Social Images</h3>
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
                                      @foreach($social as $category)
                                        <tr>
                                          <td>{{$category->filename}}</td>
                                          <td>{{$category->filesize}} KB</td>
                                          <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                              <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                              <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                            </div>
                                        </td>
                                      @endforeach
                                    </tbody>
                                    </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="vert-tabs-niche" role="tabpanel" aria-labelledby="vert-tabs-niche-tab">
                            <!-- /.content-header -->        
                            <div class="col">
                              <div class="card card-danger">
                                <div class="card-header border-0">
                                  <h3 class="card-title">Niche Flyers</h3>
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
                                      @foreach($niche as $category)
                                        <tr>
                                          <td>{{$category->filename}}</td>
                                          <td>{{$category->filesize}} KB</td>
                                          <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                              <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                              <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                            </div>
                                        </td>
                                      @endforeach
                                    </tbody>
                                    </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="vert-tabs-retail" role="tabpanel" aria-labelledby="vert-tabs-retail-tab">
                            <!-- /.content-header -->        
                            <div class="col">
                              <div class="card card-danger">
                                <div class="card-header border-0">
                                  <h3 class="card-title">Retail Flyers</h3>
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
                                      @foreach($retail as $category)
                                        <tr>
                                          <td>{{$category->filename}}</td>
                                          <td>{{$category->filesize}} KB</td>
                                          <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                              <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                              <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                            </div>
                                        </td>
                                      @endforeach
                                    </tbody>
                                    </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="vert-tabs-vertical" role="tabpanel" aria-labelledby="vert-tabs-vertical-tab">
                            <!-- /.content-header -->        
                            <div class="col">
                              <div class="card card-danger">
                                <div class="card-header border-0">
                                  <h3 class="card-title">Vertical Integration Flyers</h3>
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
                                      @foreach($vert as $category)
                                        <tr>
                                          <td>{{$category->filename}}</td>
                                          <td>{{$category->filesize}} KB</td>
                                          <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                              <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                              <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                            </div>
                                        </td>
                                      @endforeach
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