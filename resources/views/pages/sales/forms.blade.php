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
                  <li class="breadcrumb-item"><a href="/sales/forms">Sales</a></li>
                  <li class="breadcrumb-item active">Forms</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <style>

        .card-danger:not(.card-outline) .card-header {
        background: var(--linear-gradient);
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
                  Sales Forms
                </h3>
              </div>
              <div class="card-body">
                <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-general-tab" data-toggle="tab" href="#nav-general" role="tab" aria-controls="nav-general" aria-selected="true">General Forms</a>
                  <a class="nav-item nav-link" id="nav-training-tab" data-toggle="tab" href="#nav-training" role="tab" aria-controls="nav-training" aria-selected="false">Training Material</a>
                  <a class="nav-item nav-link" id="nav-admin-tab" data-toggle="tab" href="#nav-admin" role="tab" aria-controls="nav-admin" aria-selected="false">Admin</a>
                  {{-- <a class="nav-item nav-link" id="nav-marketing-tab" data-toggle="tab" href="#nav-marketing" role="tab" aria-controls="nav-marketing" aria-selected="false">Marketing Request</a> --}}
                  </div>
                </nav>
                <br/>
                <!-- General Forms -->
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-general" role="tabpanel" aria-labelledby="nav-general-tab">
                    <div class="row">
                      <div class="col-sm-2">
                        <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                          <a class="nav-link active" id="vert-tabs-num-tab" data-toggle="pill" href="#vert-tabs-num" role="tab" aria-controls="vert-tabs-num" aria-selected="true">#</a>
                          <a class="nav-link" id="vert-tabs-a-d-tab" data-toggle="pill" href="#vert-tabs-a-d" role="tab" aria-controls="vert-tabs-a-d" aria-selected="false">A-D</a>
                          <a class="nav-link" id="vert-tabs-e-h-tab" data-toggle="pill" href="#vert-tabs-e-h" role="tab" aria-controls="vert-tabs-e-h" aria-selected="false">E-H</a>
                          <a class="nav-link" id="vert-tabs-i-l-tab" data-toggle="pill" href="#vert-tabs-i-l" role="tab" aria-controls="vert-tabs-i-l" aria-selected="false">I-L</a>
                          <a class="nav-link" id="vert-tabs-m-p-tab" data-toggle="pill" href="#vert-tabs-m-p" role="tab" aria-controls="vert-tabs-m-p" aria-selected="false">M-P</a>
                          <a class="nav-link" id="vert-tabs-q-t-tab" data-toggle="pill" href="#vert-tabs-q-t" role="tab" aria-controls="vert-tabs-q-t" aria-selected="false">Q-T</a>
                          <a class="nav-link" id="vert-tabs-u-x-tab" data-toggle="pill" href="#vert-tabs-u-x" role="tab" aria-controls="vert-tabs-u-x" aria-selected="false">U-X</a>
                          <a class="nav-link" id="vert-tabs-y-z-tab" data-toggle="pill" href="#vert-tabs-y-z" role="tab" aria-controls="vert-tabs-y-z" aria-selected="false">Y-Z</a>
                        </div>
                      </div>
                      <!-- General Forms Content -->
                      <div class="col-sm-10">
                        <div class="tab-content" id="vert-tabs-tabContent">
                          <div class="tab-pane text-left fade show active" id="vert-tabs-num" role="tabpanel" aria-labelledby="vert-tabs-num-tab">       
                            <div class="col">
                              <div class="card card-danger">
                                <div class="card-header border-0">
                                  <h3 class="card-title">#</h3>
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
                                        @foreach($numbers as $category)
                                        <tr>
                                        <td>{{$category->filename}}</td>
                                        <td>{{$category->filesize}} KB</td>
                                        <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                        <td class="text-right py-0 align-middle">
                                          <div class="btn-group btn-group-sm">
                                            <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                            @can('edit-users')
                                            <a href="#" class="btn btn-warning" data-filename="{{ $category->filename}}" data-category_id="{{ $category->category_id }}" data-file_id="{{ $category->id }}"  data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
                                            @endcan
                                            <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                            @can('delete-users')
                                            {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                              {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                            {{ Form::close()}}
                                            @endcan
                                          </div>
                                        </td>
                                      </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="vert-tabs-a-d" role="tabpanel" aria-labelledby="vert-tabs-a-d-tab">
                            <!-- /.content-header -->        
                            <div class="col">
                              <div class="card card-danger">
                                <div class="card-header border-0">
                                  <h3 class="card-title">A-D</h3>
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
                                        @foreach($lettersAD as $category)
                                        <tr>
                                        <td>{{$category->filename}}</td>
                                        <td>{{$category->filesize}} KB</td>
                                        <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                        <td class="text-right py-0 align-middle">
                                          <div class="btn-group btn-group-sm">
                                            <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                            @can('edit-users')
                                            <a href="#" class="btn btn-warning" data-filename="{{ $category->filename}}" data-category_id="{{ $category->category_id }}" data-file_id="{{ $category->id }}"  data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
                                            @endcan
                                            <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                            @can('delete-users')
                                            {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                              {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                            {{ Form::close()}}
                                            @endcan
                                          </div>
                                        </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="vert-tabs-e-h" role="tabpanel" aria-labelledby="vert-tabs-e-h-tab">
                            <!-- /.content-header -->        
                            <div class="col">
                              <div class="card card-danger">
                                <div class="card-header border-0">
                                  <h3 class="card-title">E-H</h3>
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
                                        @foreach($lettersEH as $category)
                                        <tr>
                                        <td>{{$category->filename}}</td>
                                        <td>{{$category->filesize}} KB</td>
                                        <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                        <td class="text-right py-0 align-middle">
                                          <div class="btn-group btn-group-sm">
                                            <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                            @can('edit-users')
                                            <a href="#" class="btn btn-warning" data-filename="{{ $category->filename}}" data-category_id="{{ $category->category_id }}" data-file_id="{{ $category->id }}"  data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
                                            @endcan
                                            <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                            @can('delete-users')
                                            {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                              {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                            {{ Form::close()}}
                                            @endcan
                                          </div>
                                        </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="vert-tabs-i-l" role="tabpanel" aria-labelledby="vert-tabs-i-l-tab">
                            <!-- /.content-header -->        
                            <div class="col">
                              <div class="card card-danger">
                                <div class="card-header border-0">
                                  <h3 class="card-title">I-L</h3>
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
                                        @foreach($lettersIL as $category)
                                        <tr>
                                        <td>{{$category->filename}}</td>
                                        <td>{{$category->filesize}} KB</td>
                                        <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                        <td class="text-right py-0 align-middle">
                                          <div class="btn-group btn-group-sm">
                                            <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                            @can('edit-users')
                                            <a href="#" class="btn btn-warning" data-filename="{{ $category->filename}}" data-category_id="{{ $category->category_id }}" data-file_id="{{ $category->id }}"  data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
                                            @endcan
                                            <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                            @can('delete-users')
                                            {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                              {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                            {{ Form::close()}}
                                            @endcan
                                          </div>
                                        </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="vert-tabs-m-p" role="tabpanel" aria-labelledby="vert-tabs-m-p-tab">
                            <!-- /.content-header -->        
                            <div class="col">
                              <div class="card card-danger">
                                <div class="card-header border-0">
                                  <h3 class="card-title">M-P</h3>
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
                                        @foreach($lettersMP as $category)
                                        <tr>
                                        <td>{{$category->filename}}</td>
                                        <td>{{$category->filesize}} KB</td>
                                        <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                        <td class="text-right py-0 align-middle">
                                          <div class="btn-group btn-group-sm">
                                            <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                            @can('edit-users')
                                            <a href="#" class="btn btn-warning" data-filename="{{ $category->filename}}" data-category_id="{{ $category->category_id }}" data-file_id="{{ $category->id }}"  data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
                                            @endcan
                                            <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                            @can('delete-users')
                                            {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                              {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                            {{ Form::close()}}
                                            @endcan
                                          </div>
                                        </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="vert-tabs-q-t" role="tabpanel" aria-labelledby="vert-tabs-q-t-tab">
                            <!-- /.content-header -->        
                            <div class="col">
                              <div class="card card-danger">
                                <div class="card-header border-0">
                                  <h3 class="card-title">Q-T</h3>
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
                                        @foreach($lettersQT as $category)
                                        <tr>
                                        <td>{{$category->filename}}</td>
                                        <td>{{$category->filesize}} KB</td>
                                        <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                        <td class="text-right py-0 align-middle">
                                          <div class="btn-group btn-group-sm">
                                            <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                            @can('edit-users')
                                            <a href="#" class="btn btn-warning" data-filename="{{ $category->filename}}" data-category_id="{{ $category->category_id }}" data-file_id="{{ $category->id }}"  data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
                                            @endcan
                                            <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                            @can('delete-users')
                                            {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                              {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                            {{ Form::close()}}
                                            @endcan
                                          </div>
                                        </td>
                                        </tr>
                                        @endforeach
                                      </tbody>
                                    </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="vert-tabs-u-x" role="tabpanel" aria-labelledby="vert-tabs-u-x-tab">
                            <!-- /.content-header -->        
                            <div class="col">
                              <div class="card card-danger">
                                <div class="card-header border-0">
                                  <h3 class="card-title">U-X</h3>
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
                                        @foreach($lettersUX as $category)
                                        <tr>
                                        <td>{{$category->filename}}</td>
                                        <td>{{$category->filesize}} KB</td>
                                        <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                        <td class="text-right py-0 align-middle">
                                          <div class="btn-group btn-group-sm">
                                            <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                            @can('edit-users')
                                            <a href="#" class="btn btn-warning" data-filename="{{ $category->filename}}" data-category_id="{{ $category->category_id }}" data-file_id="{{ $category->id }}"  data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
                                            @endcan
                                            <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                            @can('delete-users')
                                            {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                              {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                            {{ Form::close()}}
                                            @endcan
                                          </div>
                                        </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="vert-tabs-y-z" role="tabpanel" aria-labelledby="vert-tabs-y-z-tab">
                            <!-- /.content-header -->        
                            <div class="col">
                              <div class="card card-danger">
                                <div class="card-header border-0">
                                  <h3 class="card-title">Y-Z</h3>
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
                                        @foreach($lettersYZ as $category)
                                        <tr>
                                        <td>{{$category->filename}}</td>
                                        <td>{{$category->filesize}} KB</td>
                                        <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                        <td class="text-right py-0 align-middle">
                                          <div class="btn-group btn-group-sm">
                                            <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                            @can('edit-users')
                                            <a href="#" class="btn btn-warning" data-filename="{{ $category->filename}}" data-category_id="{{ $category->category_id }}" data-file_id="{{ $category->id }}"  data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
                                            @endcan
                                            <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                            @can('delete-users')
                                            {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                              {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                            {{ Form::close()}}
                                            @endcan
                                          </div>
                                        </td>
                                        </tr>
                                        @endforeach
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
              <!-- /.card -->

              <!-- Training Materials -->
              <div class="tab-pane fade show" id="nav-training" role="tabpanel" aria-labelledby="nav-training-tab">
                <div class="row">
                  <div class="col-sm-2">
                    <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                      <a class="nav-link active" id="vert-tabs-ae-tab" data-toggle="pill" href="#vert-tabs-ae" role="tab" aria-controls="vert-tabs-ae" aria-selected="true">Account Executive</a>
                      <a class="nav-link" id="vert-tabs-systems-tab" data-toggle="pill" href="#vert-tabs-systems" role="tab" aria-controls="vert-tabs-systems" aria-selected="false">Systems</a>
                      <a class="nav-link" id="vert-tabs-vetting-tab" data-toggle="pill" href="#vert-tabs-vetting" role="tab" aria-controls="vert-tabs-vetting" aria-selected="false">Vetting</a>
                      <a class="nav-link" id="vert-tabs-training-tab" data-toggle="pill" href="#vert-tabs-training" role="tab" aria-controls="vert-tabs-training" aria-selected="false">Training - OPS Meetings</a>
                      <a class="nav-link" id="vert-tabs-training-videos-tab" data-toggle="pill" href="#vert-tabs-training-videos" role="tab" aria-controls="vert-tabs-training-videos" aria-selected="false">Training Videos</a>
                    </div>
                  </div>
                  <!-- Training Materials Content -->
                  <div class="col-sm-10">
                    <div class="tab-content" id="vert-tabs-tabContent">
                      <div class="tab-pane text-left fade show active" id="vert-tabs-ae" role="tabpanel" aria-labelledby="vert-tabs-ae-tab">       
                        <div class="col">
                          <div class="card card-danger">
                            <div class="card-header border-0">
                              <h3 class="card-title">Account Executive</h3>
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
                                    @foreach($trainingAe as $category)
                                    <tr>
                                    <td>{{$category->filename}}</td>
                                    <td>{{$category->filesize}} KB</td>
                                    <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                    <td class="text-right py-0 align-middle">
                                      <div class="btn-group btn-group-sm">
                                        <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                        @can('edit-users')
                                        <a href="#" class="btn btn-warning" data-filename="{{ $category->filename}}" data-category_id="{{ $category->category_id }}" data-file_id="{{ $category->id }}"  data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
                                        @endcan
                                        <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                        @can('delete-users')
                                        {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                          {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                        {{ Form::close()}}
                                        @endcan
                                      </div>
                                    </td>
                                  </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="vert-tabs-systems" role="tabpanel" aria-labelledby="vert-tabs-systems-tab">
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
                                      <th>@sortablelink('filename', 'File Name')</th>
                                      <th>@sortablelink('filesize', 'File Size')</th>
                                      <th>@sortablelink('created_at', 'Created At')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($trainingSystems as $category)
                                    <tr>
                                    <td>{{$category->filename}}</td>
                                    <td>{{$category->filesize}} KB</td>
                                    <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                    <td class="text-right py-0 align-middle">
                                      <div class="btn-group btn-group-sm">
                                        <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                        @can('edit-users')
                                        <a href="#" class="btn btn-warning" data-filename="{{ $category->filename}}" data-category_id="{{ $category->category_id }}" data-file_id="{{ $category->id }}"  data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
                                        @endcan
                                        <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                        @can('delete-users')
                                        {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                          {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                        {{ Form::close()}}
                                        @endcan
                                      </div>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="vert-tabs-vetting" role="tabpanel" aria-labelledby="vert-tabs-vetting-tab">
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
                                      <th>@sortablelink('filename', 'File Name')</th>
                                      <th>@sortablelink('filesize', 'File Size')</th>
                                      <th>@sortablelink('created_at', 'Created At')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($trainingVetting as $category)
                                    <tr>
                                    <td>{{$category->filename}}</td>
                                    <td>{{$category->filesize}} KB</td>
                                    <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                    <td class="text-right py-0 align-middle">
                                      <div class="btn-group btn-group-sm">
                                        <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                        @can('edit-users')
                                        <a href="#" class="btn btn-warning" data-filename="{{ $category->filename}}" data-category_id="{{ $category->category_id }}" data-file_id="{{ $category->id }}"  data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
                                        @endcan
                                        <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                        @can('delete-users')
                                        {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                          {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                        {{ Form::close()}}
                                        @endcan
                                      </div>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="vert-tabs-training" role="tabpanel" aria-labelledby="vert-tabs-training-tab">
                        <!-- /.content-header -->        
                        <div class="col">
                          <div class="card card-danger">
                            <div class="card-header border-0">
                              <h3 class="card-title">OPS Meetings</h3>
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
                                    @foreach($trainingOps as $category)
                                    <tr>
                                    <td>{{$category->filename}}</td>
                                    <td>{{$category->filesize}} KB</td>
                                    <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                    <td class="text-right py-0 align-middle">
                                      <div class="btn-group btn-group-sm">
                                        <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                        @can('edit-users')
                                        <a href="#" class="btn btn-warning" data-filename="{{ $category->filename}}" data-category_id="{{ $category->category_id }}" data-file_id="{{ $category->id }}"  data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
                                        @endcan
                                        <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                        @can('delete-users')
                                        {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                          {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                        {{ Form::close()}}
                                        @endcan
                                      </div>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="vert-tabs-training-videos" role="tabpanel" aria-labelledby="vert-tabs-training-videos-tab">
                        <!-- /.content-header -->        
                        <div class="col">
                          <div class="card card-danger">
                            <div class="card-header border-0">
                              <h3 class="card-title">Training Videos</h3>
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
                                    @foreach($trainingVideos as $category)
                                    <tr>
                                    <td>{{$category->filename}}</td>
                                    <td>{{$category->filesize}} KB</td>
                                    <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                    <td class="text-right py-0 align-middle">
                                      <div class="btn-group btn-group-sm">
                                        <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                        @can('edit-users')
                                        <a href="#" class="btn btn-warning" data-filename="{{ $category->filename}}" data-category_id="{{ $category->category_id }}" data-file_id="{{ $category->id }}"  data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
                                        @endcan
                                        <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                        @can('delete-users')
                                        {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                          {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                        {{ Form::close()}}
                                        @endcan
                                      </div>
                                    </td>
                                    </tr>
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
                            <!-- Training Materials -->
              <div class="tab-pane fade show" id="nav-training" role="tabpanel" aria-labelledby="nav-training-tab">
                <div class="row">
                  <div class="col-sm-2">
                    <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                      <a class="nav-link active" id="vert-tabs-ae-tab" data-toggle="pill" href="#vert-tabs-ae" role="tab" aria-controls="vert-tabs-ae" aria-selected="true">Account Executive</a>
                      <a class="nav-link" id="vert-tabs-systems-tab" data-toggle="pill" href="#vert-tabs-systems" role="tab" aria-controls="vert-tabs-systems" aria-selected="false">Systems</a>
                      <a class="nav-link" id="vert-tabs-vetting-tab" data-toggle="pill" href="#vert-tabs-vetting" role="tab" aria-controls="vert-tabs-vetting" aria-selected="false">Vetting</a>
                      <a class="nav-link" id="vert-tabs-training-tab" data-toggle="pill" href="#vert-tabs-training" role="tab" aria-controls="vert-tabs-training" aria-selected="false">Training - OPS Meetings</a>
                      <a class="nav-link" id="vert-tabs-training-videos-tab" data-toggle="pill" href="#vert-tabs-training-videos" role="tab" aria-controls="vert-tabs-training-videos" aria-selected="false">Training Videos</a>
                    </div>
                  </div>
                  <!-- Training Materials Content -->
                  <div class="col-sm-10">
                    <div class="tab-content" id="vert-tabs-tabContent">
                      <div class="tab-pane text-left fade show active" id="vert-tabs-ae" role="tabpanel" aria-labelledby="vert-tabs-ae-tab">       
                        <div class="col">
                          <div class="card card-danger">
                            <div class="card-header border-0">
                              <h3 class="card-title">Account Executive</h3>
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
                                    @foreach($trainingAe as $category)
                                    <tr>
                                    <td>{{$category->filename}}</td>
                                    <td>{{$category->filesize}} KB</td>
                                    <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                    <td class="text-right py-0 align-middle">
                                      <div class="btn-group btn-group-sm">
                                        <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                        @can('edit-users')
                                        <a href="#" class="btn btn-warning" data-filename="{{ $category->filename}}" data-category_id="{{ $category->category_id }}" data-file_id="{{ $category->id }}"  data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
                                        @endcan
                                        <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                        @can('delete-users')
                                        {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                          {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                        {{ Form::close()}}
                                        @endcan
                                      </div>
                                    </td>
                                  </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="vert-tabs-systems" role="tabpanel" aria-labelledby="vert-tabs-systems-tab">
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
                                      <th>@sortablelink('filename', 'File Name')</th>
                                      <th>@sortablelink('filesize', 'File Size')</th>
                                      <th>@sortablelink('created_at', 'Created At')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($trainingSystems as $category)
                                    <tr>
                                    <td>{{$category->filename}}</td>
                                    <td>{{$category->filesize}} KB</td>
                                    <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                    <td class="text-right py-0 align-middle">
                                      <div class="btn-group btn-group-sm">
                                        <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                        @can('edit-users')
                                        <a href="#" class="btn btn-warning" data-filename="{{ $category->filename}}" data-category_id="{{ $category->category_id }}" data-file_id="{{ $category->id }}"  data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
                                        @endcan
                                        <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                        @can('delete-users')
                                        {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                          {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                        {{ Form::close()}}
                                        @endcan
                                      </div>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="vert-tabs-vetting" role="tabpanel" aria-labelledby="vert-tabs-vetting-tab">
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
                                      <th>@sortablelink('filename', 'File Name')</th>
                                      <th>@sortablelink('filesize', 'File Size')</th>
                                      <th>@sortablelink('created_at', 'Created At')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($trainingVetting as $category)
                                    <tr>
                                    <td>{{$category->filename}}</td>
                                    <td>{{$category->filesize}} KB</td>
                                    <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                    <td class="text-right py-0 align-middle">
                                      <div class="btn-group btn-group-sm">
                                        <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                        @can('edit-users')
                                        <a href="#" class="btn btn-warning" data-filename="{{ $category->filename}}" data-category_id="{{ $category->category_id }}" data-file_id="{{ $category->id }}"  data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
                                        @endcan
                                        <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                        @can('delete-users')
                                        {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                          {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                        {{ Form::close()}}
                                        @endcan
                                      </div>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="vert-tabs-training" role="tabpanel" aria-labelledby="vert-tabs-training-tab">
                        <!-- /.content-header -->        
                        <div class="col">
                          <div class="card card-danger">
                            <div class="card-header border-0">
                              <h3 class="card-title">OPS Meetings</h3>
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
                                    @foreach($trainingOps as $category)
                                    <tr>
                                    <td>{{$category->filename}}</td>
                                    <td>{{$category->filesize}} KB</td>
                                    <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                    <td class="text-right py-0 align-middle">
                                      <div class="btn-group btn-group-sm">
                                        <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                        @can('edit-users')
                                        <a href="#" class="btn btn-warning" data-filename="{{ $category->filename}}" data-category_id="{{ $category->category_id }}" data-file_id="{{ $category->id }}"  data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
                                        @endcan
                                        <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                        @can('delete-users')
                                        {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                          {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                        {{ Form::close()}}
                                        @endcan
                                      </div>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="vert-tabs-training-videos" role="tabpanel" aria-labelledby="vert-tabs-training-videos-tab">
                        <!-- /.content-header -->        
                        <div class="col">
                          <div class="card card-danger">
                            <div class="card-header border-0">
                              <h3 class="card-title">Training Videos</h3>
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
                                    @foreach($trainingVideos as $category)
                                    <tr>
                                    <td>{{$category->filename}}</td>
                                    <td>{{$category->filesize}} KB</td>
                                    <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                    <td class="text-right py-0 align-middle">
                                      <div class="btn-group btn-group-sm">
                                        <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                        @can('edit-users')
                                        <a href="#" class="btn btn-warning" data-filename="{{ $category->filename}}" data-category_id="{{ $category->category_id }}" data-file_id="{{ $category->id }}"  data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
                                        @endcan
                                        <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                        @can('delete-users')
                                        {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                          {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                        {{ Form::close()}}
                                        @endcan
                                      </div>
                                    </td>
                                    </tr>
                                    @endforeach
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
              <!-- Admin -->
              <div class="tab-pane fade show" id="nav-admin" role="tabpanel" aria-labelledby="nav-admin-tab">
                <div class="row">
                  <div class="col-sm-2">
                    <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                      <a class="nav-link active" id="vert-tabs-admin-forms-tab" data-toggle="pill" href="#vert-tabs-admin-forms" role="tab" aria-controls="vert-tabs-admin-forms" aria-selected="true">Forms</a>
                    </div>
                  </div>
                  <!-- Training Materials Content -->
                  <div class="col-sm-10">
                    <div class="tab-content" id="vert-tabs-tabContent">
                      <div class="tab-pane text-left fade show active" id="vert-tabs-admin-forms" role="tabpanel" aria-labelledby="vert-tabs-admin-forms-tab">       
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
                                      <th>@sortablelink('filename', 'File Name')</th>
                                      <th>@sortablelink('filesize', 'File Size')</th>
                                      <th>@sortablelink('created_at', 'Created At')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($adminForms as $category)
                                    <tr>
                                    <td>{{$category->filename}}</td>
                                    <td>{{$category->filesize}} KB</td>
                                    <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                    <td class="text-right py-0 align-middle">
                                      <div class="btn-group btn-group-sm">
                                        <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                        @can('edit-users')
                                        <a href="#" class="btn btn-warning" data-filename="{{ $category->filename}}" data-category_id="{{ $category->category_id }}" data-file_id="{{ $category->id }}"  data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
                                        @endcan
                                        <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                        @can('delete-users')
                                        {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                          {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                        {{ Form::close()}}
                                        @endcan
                                      </div>
                                    </td>
                                  </tr>
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
            </div>
          </div>
        </div>
        </section>
    </div>
@stop
