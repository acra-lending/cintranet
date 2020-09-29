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
                <li class="breadcrumb-item active"><a href="/sales/flyers">Sales</a></li>
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

        .card-danger:not(.card-outline) .card-header {
          background: linear-gradient(138deg, rgba(171,35,40,1) 0%, rgba(52,58,64,1) 45%);
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
                    Flyers
                  </h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-4 col-md-3">
                      <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="vert-tabs-aboutcsc-tab" data-toggle="pill" href="#vert-tabs-aboutcsc" role="tab" aria-controls="vert-tabs-aboutcsc" aria-selected="true">About CSC</a>
                        <a class="nav-link" id="vert-tabs-aeflyer-tab" data-toggle="pill" href="#vert-tabs-aeflyer" role="tab" aria-controls="vert-tabs-aeflyer" aria-selected="false">AE Flyers</a>
                        <a class="nav-link" id="vert-tabs-automation-tab" data-toggle="pill" href="#vert-tabs-automation" role="tab" aria-controls="vert-tabs-automation" aria-selected="false">Automation</a>
                        <a class="nav-link" id="vert-tabs-brokers-tab" data-toggle="pill" href="#vert-tabs-brokers" role="tab" aria-controls="vert-tabs-brokers" aria-selected="false">Broker Flyers</a>
                        <a class="nav-link" id="vert-tabs-corr-tab" data-toggle="pill" href="#vert-tabs-corr" role="tab" aria-controls="vert-tabs-corr" aria-selected="false">Correspondent</a>
                        <a class="nav-link" id="vert-tabs-cscprograms-tab" data-toggle="pill" href="#vert-tabs-cscprograms" role="tab" aria-controls="vert-tabs-cscprograms" aria-selected="false">CSC Programs</a>
                        <a class="nav-link" id="vert-tabs-social-tab" data-toggle="pill" href="#vert-tabs-social" role="tab" aria-controls="vert-tabs-social" aria-selected="false">LinkedIn/Social Images</a>
                        {{-- <a class="nav-link" id="vert-tabs-retail-tab" data-toggle="pill" href="#vert-tabs-retail" role="tab" aria-controls="vert-tabs-retail" aria-selected="false">Retail Flyers</a> --}}
                        <a class="nav-link" id="vert-tabs-standards-tab" data-toggle="pill" href="#vert-tabs-standards" role="tab" aria-controls="vert-tabs-standards" aria-selected="false">Standard Flyers</a>
                        <a class="nav-link" id="vert-tabs-vertical-tab" data-toggle="pill" href="#vert-tabs-vertical" role="tab" aria-controls="vert-tabs-vertical" aria-selected="false">Vertical Integration</a>
                      </div>
                    </div>
                    <div class="col-sm-10 col-md-9">
                      <div class="tab-content" id="vert-tabs-tabContent">
                        <div class="tab-pane text-left fade show active" id="vert-tabs-aboutcsc" role="tabpanel" aria-labelledby="vert-tabs-aboutcsc-tab">
                          
                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">About CSC Flyers</h3>
                                <div class="card-tools">
                                </div>
                              </div>
                              <div class="card-body table-responsive p-0">
                                <table class="table">
                                  <thead>
                                      <tr>
                                        <th>@sortablelink('filename', 'File Name')</th>
                                        <th>@sortablelink('filesize', 'File Size')</th>
                                        <th>@sortablelink('created_at', 'Created At')</th>
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
                                              @can('edit-users')
                                              <a href="#" class="btn btn-warning" data-filename="{{ $category->filename}}" data-category_id="{{ $category->id }}" data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
                                              @endcan
                                              <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                              @can('delete-users')
                                              {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                                {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                              {{ Form::close()}}
                                              @endcan
                                            </div>
                                          </td>
                                        @endforeach
                                      </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="vert-tabs-aeflyer" role="tabpanel" aria-labelledby="vert-tabs-aeflyer-tab">
                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">AE Flyers</h3>
                                <div class="card-tools">
                                </div>
                              </div>
                              <div class="card-body table-responsive p-0">
                                <table class="table">
                                  <thead>
                                      <tr>
                                        <th>@sortablelink('filename', 'File Name')</th>
                                        <th>@sortablelink('filesize', 'File Size')</th>
                                        <th>@sortablelink('created_at', 'Created At')</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($aeFlyers as $category)
                                      <tr>
                                        <td>{{$category->filename}}</td>
                                        <td>{{$category->filesize}} KB</td>
                                        <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                      <td class="text-right py-0 align-middle">
                                        <div class="btn-group btn-group-sm">
                                          <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                          @can('edit-users')
                                          <a href="#" class="btn btn-warning" data-filename="{{ $category->filename}}" data-category_id="{{ $category->id }}" data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
                                          @endcan
                                          <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                          @can('delete-users')
                                          {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                            {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                          {{ Form::close()}}
                                          @endcan
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
                                </div>
                              </div>
                              <div class="card-body table-responsive p-0">
                                <table class="table">
                                  <thead>
                                      <tr>
                                        <th>@sortablelink('filename', 'File Name')</th>
                                        <th>@sortablelink('filesize', 'File Size')</th>
                                        <th>@sortablelink('created_at', 'Created At')</th>
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
                                          @can('edit-users')
                                          <a href="#" class="btn btn-warning" data-filename="{{ $category->filename}}" data-category_id="{{ $category->id }}" data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
                                          @endcan
                                          <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                          @can('delete-users')
                                          {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                            {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                          {{ Form::close()}}
                                          @endcan
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
                                </div>
                              </div>
                              <div class="card-body table-responsive p-0">
                                <table class="table">
                                  <thead>
                                      <tr>
                                        <th>@sortablelink('filename', 'File Name')</th>
                                        <th>@sortablelink('filesize', 'File Size')</th>
                                        <th>@sortablelink('created_at', 'Created At')</th>
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
                                          @can('edit-users')
                                          <a href="#" class="btn btn-warning" data-filename="{{ $category->filename}}" data-category_id="{{ $category->id }}" data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
                                          @endcan
                                          <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                          @can('delete-users')
                                          {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                            {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                          {{ Form::close()}}
                                          @endcan
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
                                  </div>
                                </div>
                                <div class="card-body table-responsive p-0">
                                  <table class="table">
                                    <thead>
                                        <tr>
                                          <th>@sortablelink('filename', 'File Name')</th>
                                          <th>@sortablelink('filesize', 'File Size')</th>
                                          <th>@sortablelink('created_at', 'Created At')</th>
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
                                            @can('edit-users')
                                            <a href="#" class="btn btn-warning" data-filename="{{ $category->filename}}" data-category_id="{{ $category->id }}" data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
                                            @endcan
                                            <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                            @can('delete-users')
                                            {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                              {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                            {{ Form::close()}}
                                            @endcan
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
                                  <h3 class="card-title">CSC Programs</h3>
                                  <div class="card-tools">
                                  </div>
                                </div>
                                <div class="card-body table-responsive p-0">
                                  <table class="table">
                                    <thead>
                                        <tr>
                                          <th>@sortablelink('filename', 'File Name')</th>
                                          <th>@sortablelink('filesize', 'File Size')</th>
                                          <th>@sortablelink('created_at', 'Created At')</th>
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
                                            @can('edit-users')
                                            <a href="#" class="btn btn-warning" data-filename="{{ $category->filename}}" data-category_id="{{ $category->id }}" data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
                                            @endcan
                                            <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                            @can('delete-users')
                                            {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                              {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                            {{ Form::close()}}
                                            @endcan
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
                                          <th>@sortablelink('filename', 'File Name')</th>
                                          <th>@sortablelink('filesize', 'File Size')</th>
                                          <th>@sortablelink('created_at', 'Created At')</th>
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
                                            @can('edit-users')
                                            <a href="#" class="btn btn-warning" data-filename="{{ $category->filename}}" data-category_id="{{ $category->id }}" data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
                                            @endcan
                                            <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                            @can('delete-users')
                                            {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                              {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                            {{ Form::close()}}
                                            @endcan
                                          </div>
                                        </td>
                                      @endforeach
                                    </tbody>
                                    </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          {{-- <div class="tab-pane fade" id="vert-tabs-retail" role="tabpanel" aria-labelledby="vert-tabs-retail-tab">
                            <!-- /.content-header -->        
                            <div class="col">
                              <div class="card card-danger">
                                <div class="card-header border-0">
                                  <h3 class="card-title">Retail Flyers</h3>
                                  <div class="card-tools">
                                  </div>
                                </div>
                                <div class="card-body table-responsive p-0">
                                  <table class="table">
                                    <thead>
                                        <tr>
                                          <th>@sortablelink('filename', 'File Name')</th>
                                          <th>@sortablelink('filesize', 'File Size')</th>
                                          <th>@sortablelink('created_at', 'Created At')</th>
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
                                            @can('edit-users')
                                            <a href="#" class="btn btn-warning" data-filename="{{ $category->filename}}" data-category_id="{{ $category->id }}" data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
                                            @endcan
                                            <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                            @can('delete-users')
                                            {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                              {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                            {{ Form::close()}}
                                            @endcan
                                          </div>
                                        </td>
                                      @endforeach
                                    </tbody>
                                    </table>
                                </div>
                              </div>
                            </div>
                          </div> --}}
                          <div class="tab-pane fade" id="vert-tabs-standards" role="tabpanel" aria-labelledby="vert-tabs-standards-tab">
                            <!-- /.content-header -->        
                            <div class="col">
                              <div class="card card-danger">
                                <div class="card-header border-0">
                                  <h3 class="card-title">Standard Flyers</h3>
                                  <div class="card-tools">
                                  </div>
                                </div>
                                <div class="card-body table-responsive p-0">
                                  <table class="table">
                                    <thead>
                                        <tr>
                                          <th>@sortablelink('filename', 'File Name')</th>
                                          <th>@sortablelink('filesize', 'File Size')</th>
                                          <th>@sortablelink('created_at', 'Created At')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($standards as $category)
                                        <tr>
                                          <td>{{$category->filename}}</td>
                                          <td>{{$category->filesize}} KB</td>
                                          <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                        <td class="text-right py-0 align-middle">
                                          <div class="btn-group btn-group-sm">
                                            <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                            @can('edit-users')
                                            <a href="#" class="btn btn-warning" data-filename="{{ $category->filename}}" data-category_id="{{ $category->id }}" data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
                                            @endcan
                                            <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                            @can('delete-users')
                                            {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                              {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                            {{ Form::close()}}
                                            @endcan
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
                                  </div>
                                </div>
                                <div class="card-body table-responsive p-0">
                                  <table class="table">
                                    <thead>
                                        <tr>
                                          <th>@sortablelink('filename', 'File Name')</th>
                                          <th>@sortablelink('filesize', 'File Size')</th>
                                          <th>@sortablelink('created_at', 'Created At')</th>
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
                                            @can('edit-users')
                                            <a href="#" class="btn btn-warning" data-filename="{{ $category->filename}}" data-category_id="{{ $category->id }}" data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
                                            @endcan
                                            <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                            @can('delete-users')
                                            {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                              {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                            {{ Form::close()}}
                                            @endcan
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