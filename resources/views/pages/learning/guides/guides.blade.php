@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Participant Guides</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/learning/courses/guides">Learning</a></li>
                <li class="breadcrumb-item active">Participant Guides</li>
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
        background: linear-gradient(138deg, rgba(171,35,40,1) 0%, rgba(52,58,64,1) 75%);
        }
    </style>
        <section class="content">
          @include('pages.modals.modal-forms')
          <div class="container">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-10">

            <div class="card card-danger card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fab fa-wpforms"></i>
                  Participant Guides
                </h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-2">
                    <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                      <a class="nav-link active" id="vert-tabs-general-tab" data-toggle="pill" href="#vert-tabs-general" role="tab" aria-controls="vert-tabs-operations" aria-selected="true">General</a>
                      <a class="nav-link" id="vert-tabs-operations-tab" data-toggle="pill" href="#vert-tabs-operations" role="tab" aria-controls="vert-tabs-operations" aria-selected="true">Operations</a>
                      <a class="nav-link" id="vert-tabs-servicing-tab" data-toggle="pill" href="#vert-tabs-servicing" role="tab" aria-controls="vert-tabs-servicing" aria-selected="false">Servicing</a>
                    </div>
                  </div>
                  <!-- Guides Content -->
                  <div class="col-sm-10">
                    <div class="tab-content" id="vert-tabs-tabContent">
                      <div class="tab-pane text-left fade show active" id="vert-tabs-general" role="tabpanel" aria-labelledby="vert-tabs-general-tab">       
                        <div class="col">
                          <div class="card card-danger">
                            <div class="card-header border-0">
                              <h3 class="card-title">General</h3>
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
                                    @if(count($generalGuides) > 0)
                                    @foreach($generalGuides as $category)
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
                                        @can('edit-users')
                                        {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                          {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                        {{ Form::close()}}
                                        @endcan
                                      </div>
                                    </td>
                                  </tr>
                                    @endforeach
                                    @else 
                                      <tr>
                                          <td>No Files Found</td>
                                      </tr>
                                    @endif
                                </tbody>
                                </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane text-left fade show" id="vert-tabs-operations" role="tabpanel" aria-labelledby="vert-tabs-operations-tab">       
                        <div class="col">
                          <div class="card card-danger">
                            <div class="card-header border-0">
                              <h3 class="card-title">Operations</h3>
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
                                    @if(count($operationGuides) > 0)
                                    @foreach($operationGuides as $category)
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
                                        @can('edit-users')
                                        {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                          {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                        {{ Form::close()}}
                                        @endcan
                                      </div>
                                    </td>
                                  </tr>
                                    @endforeach
                                    @else 
                                      <tr>
                                          <td>No Files Found</td>
                                      </tr>
                                    @endif
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
                                      <th>@sortablelink('filename', 'File Name')</th>
                                      <th>@sortablelink('filesize', 'File Size')</th>
                                      <th>@sortablelink('created_at', 'Created At')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($servicingGuides) > 0)
                                    @foreach($servicingGuides as $category)
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
                                        @can('edit-users')
                                        {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                          {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                        {{ Form::close()}}
                                        @endcan
                                      </div>
                                    </td>
                                    </tr>
                                    @endforeach
                                    @else 
                                      <tr>
                                          <td>No Files Found</td>
                                      </tr>
                                    @endif
                                </tbody>
                                </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- end form cards -->
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