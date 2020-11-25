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
                <li class="breadcrumb-item active"><a href="/operations/forms">Operations</a></li>
                <li class="breadcrumb-item">Forms</a></li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <style>

        .card-dark:not(.card-outline) .card-header {
        background: linear-gradient(138deg, rgba(171,35,40,1) 0%, rgba(52,58,64,1) 75%);
        }
        
        </style>

            <!-- Main content -->

            <section class="content">
              @include('pages.modals.modal-forms')
              <div class="container">
                <div class="col-md-10">
      
                  <div class="card card-dark card-outline">
                    <div class="card-header">
                      <h3 class="card-title">
                        <i class="fas fa-folder"></i>
                        Documents
                      </h3>
                    </div>
                    <div class="card-body">
    
                      <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-compliance-tab" data-toggle="tab" href="#nav-compliance" role="tab" aria-controls="nav-compliance" aria-selected="true">Compliance</a>
                        <a class="nav-item nav-link" id="nav-funding-tab" data-toggle="tab" href="#nav-funding" role="tab" aria-controls="nav-funding" aria-selected="false">Funding</a>
                        <a class="nav-item nav-link" id="nav-doc-tab" data-toggle="tab" href="#nav-doc" role="tab" aria-controls="nav-doc" aria-selected="false">Doc Drawer</a>
                        <a class="nav-item nav-link" id="nav-funder-tab" data-toggle="tab" href="#nav-funder" role="tab" aria-controls="nav-funder" aria-selected="false">Funder</a>
                        <a class="nav-item nav-link" id="nav-funding-forms-tab" data-toggle="tab" href="#nav-funding-forms" role="tab" aria-controls="nav-funding-forms" aria-selected="false">Funding Forms</a>
                        <a class="nav-item nav-link" id="nav-funding-asst-tab" data-toggle="tab" href="#nav-funding-asst" role="tab" aria-controls="nav-funding-asst" aria-selected="false">Funding Assistant</a>
                        <a class="nav-item nav-link" id="nav-lsu-tab" data-toggle="tab" href="#nav-lsu" role="tab" aria-controls="nav-lsu" aria-selected="false">Loan Set Up</a>
                        <a class="nav-item nav-link" id="nav-tm-tab" data-toggle="tab" href="#nav-tm" role="tab" aria-controls="nav-tm" aria-selected="false">Transaction Manager</a>
                        <a class="nav-item nav-link" id="nav-uw-tab" data-toggle="tab" href="#nav-uw" role="tab" aria-controls="nav-uw" aria-selected="false">Underwriting</a>
                        <a class="nav-item nav-link" id="nav-nda-tab" data-toggle="tab" href="#nav-nda" role="tab" aria-controls="nav-nda" aria-selected="false">Underwriting</a>
                        </div>
                      </nav>
                      <br/>
    
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-compliance" role="tabpanel" aria-labelledby="nav-compliance-tab">
                          <div class="row">
                            <div class="col-sm-4 col-md-3 col-lg-3">
                              <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="vert-tabs-disclosure-tab" data-toggle="pill" href="#vert-tabs-disclosure" role="tab" aria-controls="vert-tabs-disclosure" aria-selected="true">Disclosure</a>
                                <a class="nav-link" id="vert-tabs-funding-states-tab" data-toggle="pill" href="#vert-tabs-funding-states" role="tab" aria-controls="vert-tabs-funding-states" aria-selected="false">Funding States</a>
                                <a class="nav-link" id="vert-tabs-important-tab" data-toggle="pill" href="#vert-tabs-important" role="tab" aria-controls="vert-tabs-important" aria-selected="false">Important Things to Know</a>
                                <a class="nav-link" id="vert-tabs-policies-tab" data-toggle="pill" href="#vert-tabs-policies" role="tab" aria-controls="vert-tabs-policies" aria-selected="false">Policies</a>
                              </div>
                            </div>
                            <div class="col-sm-12 col-md-9 col-lg-9">
                              <div class="tab-content" id="vert-tabs-tabContent">
                                <div class="tab-pane text-left fade show active" id="vert-tabs-disclosure" role="tabpanel" aria-labelledby="vert-tabs-disclosure-tab">
                                  <!-- /.content-header -->        
                                  <div class="col">
                                    <div class="card card-dark">
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
                                                <th>@sortablelink('filename', 'File Name')</th>
                                                <th>@sortablelink('filesize', 'File Size')</th>
                                                <th>@sortablelink('updated_at', 'Updated At')</th>
                                              </tr>
                                          </thead>
                                            <tbody>
                                              @foreach($disclosure as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                            </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane text-left fade show" id="vert-tabs-funding-states" role="tabpanel" aria-labelledby="vert-tabs-funding-states-tab">
                                    <!-- /.content-header -->        
                                    <div class="col">
                                      <div class="card card-dark">
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
                                                  <th>@sortablelink('filename', 'File Name')</th>
                                                  <th>@sortablelink('filesize', 'File Size')</th>
                                                  <th>@sortablelink('updated_at', 'Updated At')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @foreach($fundingStates as $category)
                                              <tr>
                                                <td>{{$category->filename}}</td>
                                                <td>{{$category->filesize}} KB</td>
                                                <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                              </tr>
                                                @endforeach
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane text-left fade show" id="vert-tabs-important" role="tabpanel" aria-labelledby="vert-tabs-important-tab">
                                    <!-- /.content-header -->        
                                    <div class="col">
                                      <div class="card card-dark">
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
                                                  <th>@sortablelink('filename', 'File Name')</th>
                                                  <th>@sortablelink('filesize', 'File Size')</th>
                                                  <th>@sortablelink('updated_at', 'Updated At')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @foreach($important as $category)
                                              <tr>
                                                <td>{{$category->filename}}</td>
                                                <td>{{$category->filesize}} KB</td>
                                                <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                              </tr>
                                                @endforeach
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane text-left fade show" id="vert-tabs-policies" role="tabpanel" aria-labelledby="vert-tabs-policies-tab">
                                    <!-- /.content-header -->        
                                    <div class="col">
                                      <div class="card card-dark">
                                        <div class="card-header border-0">
                                          <h3 class="card-title">Policies</h3>
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
                                                  <th>@sortablelink('updated_at', 'Updated At')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @foreach($policies as $category)
                                              <tr>
                                                <td>{{$category->filename}}</td>
                                                <td>{{$category->filesize}} KB</td>
                                                <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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

                        
                        <div class="tab-pane fade show" id="nav-funding" role="tabpanel" aria-labelledby="nav-funding-tab">
                          <div class="row">
                            <div class="col-sm-4 col-md-3 col-lg-3">
                              <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="vert-tabs-funding-systems-tab" data-toggle="pill" href="#vert-tabs-funding-systems" role="tab" aria-controls="vert-tabs-funding-systems" aria-selected="true">Systems</a>
                                <a class="nav-link" id="vert-tabs-funding-forms-tab" data-toggle="pill" href="#vert-tabs-funding-forms" role="tab" aria-controls="vert-tabs-funding-forms" aria-selected="false">Forms</a>
                                <a class="nav-link" id="vert-tabs-funding-tisp-tab" data-toggle="pill" href="#vert-tabs-funding-tisp" role="tab" aria-controls="vert-tabs-funding-tisp" aria-selected="false">Taxes/Insurance/Subject Property</a>
                                <a class="nav-link" id="vert-tabs-funding-vetting-tab" data-toggle="pill" href="#vert-tabs-funding-vetting" role="tab" aria-controls="vert-tabs-funding-vetting" aria-selected="false">Vetting</a>
                                <a class="nav-link" id="vert-tabs-funding-compliance-tab" data-toggle="pill" href="#vert-tabs-funding-compliance" role="tab" aria-controls="vert-tabs-funding-compliance" aria-selected="false">Compliance</a>
                                <a class="nav-link" id="vert-tabs-funding-processes-tab" data-toggle="pill" href="#vert-tabs-funding-processes" role="tab" aria-controls="vert-tabs-funding-processes" aria-selected="false">Processes</a>
                                <a class="nav-link" id="vert-tabs-funding-dept-tab" data-toggle="pill" href="#vert-tabs-funding-dept" role="tab" aria-controls="vert-tabs-funding-dept" aria-selected="false">Department Contacts</a>
                              </div>
                            </div>
                            <div class="col-sm-12 col-md-9 col-lg-9">
                              <div class="tab-content" id="vert-tabs-tabContent">
                                <div class="tab-pane text-left fade show active" id="vert-tabs-funding-systems" role="tabpanel" aria-labelledby="vert-tabs-funding-systems-tab">
                                  <!-- /.content-header -->        
                                  <div class="col">
                                    <div class="card card-dark">
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
                                                <th>@sortablelink('updated_at', 'Updated At')</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              @foreach($fundingSystems as $category)
                                              <tr>
                                                <td>{{$category->filename}}</td>
                                                <td>{{$category->filesize}} KB</td>
                                                <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                              </tr>
                                                @endforeach
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane text-left fade show" id="vert-tabs-funding-forms" role="tabpanel" aria-labelledby="vert-tabs-funding-forms-tab">
                                  <!-- /.content-header -->        
                                  <div class="col">
                                    <div class="card card-dark">
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
                                                <th>@sortablelink('updated_at', 'Updated At')</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              @foreach($fundingForms as $category)
                                              <tr>
                                                <td>{{$category->filename}}</td>
                                                <td>{{$category->filesize}} KB</td>
                                                <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                              </tr>
                                                @endforeach
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane text-left fade show" id="vert-tabs-funding-tisp" role="tabpanel" aria-labelledby="vert-tabs-funding-tisp-tab">
                                    <!-- /.content-header -->        
                                    <div class="col">
                                      <div class="card card-dark">
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
                                                  <th>@sortablelink('filename', 'File Name')</th>
                                                  <th>@sortablelink('filesize', 'File Size')</th>
                                                  <th>@sortablelink('updated_at', 'Updated At')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($fundingTisp as $category)
                                                <tr>
                                                  <td>{{$category->filename}}</td>
                                                  <td>{{$category->filesize}} KB</td>
                                                  <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                                </tr>
                                                  @endforeach
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane text-left fade show" id="vert-tabs-funding-vetting" role="tabpanel" aria-labelledby="vert-tabs-funding-vetting-tab">
                                    <!-- /.content-header -->        
                                    <div class="col">
                                      <div class="card card-dark">
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
                                                  <th>@sortablelink('updated_at', 'Updated At')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($fundingVetting as $category)
                                                <tr>
                                                  <td>{{$category->filename}}</td>
                                                  <td>{{$category->filesize}} KB</td>
                                                  <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                                </tr>
                                                  @endforeach
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane text-left fade show" id="vert-tabs-funding-compliance" role="tabpanel" aria-labelledby="vert-tabs-funding-compliance-tab">
                                    <!-- /.content-header -->        
                                    <div class="col">
                                      <div class="card card-dark">
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
                                                  <th>@sortablelink('filename', 'File Name')</th>
                                                  <th>@sortablelink('filesize', 'File Size')</th>
                                                  <th>@sortablelink('updated_at', 'Updated At')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($fundingCompliance as $category)
                                                <tr>
                                                  <td>{{$category->filename}}</td>
                                                  <td>{{$category->filesize}} KB</td>
                                                  <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                                </tr>
                                                  @endforeach
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane text-left fade show" id="vert-tabs-funding-processes" role="tabpanel" aria-labelledby="vert-tabs-funding-processes-tab">
                                    <!-- /.content-header -->        
                                    <div class="col">
                                      <div class="card card-dark">
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
                                                  <th>@sortablelink('filename', 'File Name')</th>
                                                  <th>@sortablelink('filesize', 'File Size')</th>
                                                  <th>@sortablelink('updated_at', 'Updated At')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($fundingProcesses as $category)
                                                <tr>
                                                  <td>{{$category->filename}}</td>
                                                  <td>{{$category->filesize}} KB</td>
                                                  <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                                </tr>
                                                  @endforeach
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane text-left fade show" id="vert-tabs-funding-dept" role="tabpanel" aria-labelledby="vert-tabs-funding-dept-tab">
                                    <!-- /.content-header -->        
                                    <div class="col">
                                      <div class="card card-dark">
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
                                                  <th>@sortablelink('filename', 'File Name')</th>
                                                  <th>@sortablelink('filesize', 'File Size')</th>
                                                  <th>@sortablelink('updated_at', 'Updated At')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @foreach($deptContacts as $category)
                                              <tr>
                                                <td>{{$category->filename}}</td>
                                                <td>{{$category->filesize}} KB</td>
                                                <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                      <div class="tab-pane fade show" id="nav-doc" role="tabpanel" aria-labelledby="nav-doc-tab">
                        <div class="row">
                          <div class="col-sm-4 col-md-3 col-lg-3">
                            <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                              <a class="nav-link active" id="vert-tabs-doc-systems-tab" data-toggle="pill" href="#vert-tabs-doc-systems" role="tab" aria-controls="vert-tabs-doc-systems" aria-selected="true">Systems</a>
                              <a class="nav-link" id="vert-tabs-doc-forms-tab" data-toggle="pill" href="#vert-tabs-doc-forms" role="tab" aria-controls="vert-tabs-doc-forms" aria-selected="false">Forms</a>
                              <a class="nav-link" id="vert-tabs-doc-tisp-tab" data-toggle="pill" href="#vert-tabs-doc-tisp" role="tab" aria-controls="vert-tabs-doc-tisp" aria-selected="false">Taxes/Insurance/Subject Property</a>
                              <a class="nav-link" id="vert-tabs-doc-vetting-tab" data-toggle="pill" href="#vert-tabs-doc-vetting" role="tab" aria-controls="vert-tabs-doc-vetting" aria-selected="false">Vetting</a>
                              <a class="nav-link" id="vert-tabs-doc-compliance-tab" data-toggle="pill" href="#vert-tabs-doc-compliance" role="tab" aria-controls="vert-tabs-doc-compliance" aria-selected="false">Compliance</a>
                              <a class="nav-link" id="vert-tabs-doc-processes-tab" data-toggle="pill" href="#vert-tabs-doc-processes" role="tab" aria-controls="vert-tabs-doc-processes" aria-selected="false">Processes</a>
                              <a class="nav-link" id="vert-tabs-doc-dept-tab" data-toggle="pill" href="#vert-tabs-doc-dept" role="tab" aria-controls="vert-tabs-doc-dept" aria-selected="false">Department Contacts</a>
                            </div>
                          </div>
                          <div class="col-sm-12 col-md-9 col-lg-9">
                            <div class="tab-content" id="vert-tabs-tabContent">
                              <div class="tab-pane text-left fade show active" id="vert-tabs-doc-systems" role="tabpanel" aria-labelledby="vert-tabs-doc-systems-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($docDrawerSystems as $category)
                                          <tr>
                                            <td>{{$category->filename}}</td>
                                            <td>{{$category->filesize}} KB</td>
                                            <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                          </tr>
                                            @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="tab-pane text-left fade show" id="vert-tabs-doc-forms" role="tabpanel" aria-labelledby="vert-tabs-doc-forms-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($docDrawerForms as $category)
                                          <tr>
                                            <td>{{$category->filename}}</td>
                                            <td>{{$category->filesize}} KB</td>
                                            <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                          </tr>
                                            @endforeach
                                          </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-doc-tisp" role="tabpanel" aria-labelledby="vert-tabs-doc-tisp-tab">
                                  <!-- /.content-header -->        
                                  <div class="col">
                                    <div class="card card-dark">
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
                                                <th>@sortablelink('filename', 'File Name')</th>
                                                <th>@sortablelink('filesize', 'File Size')</th>
                                                <th>@sortablelink('updated_at', 'Updated At')</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                            @foreach($docDrawerTisp as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                            </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane text-left fade show" id="vert-tabs-doc-vetting" role="tabpanel" aria-labelledby="vert-tabs-doc-vetting-tab">
                                  <!-- /.content-header -->        
                                  <div class="col">
                                    <div class="card card-dark">
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
                                                <th>@sortablelink('updated_at', 'Updated At')</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                            @foreach($docDrawerVetting as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                            </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane text-left fade show" id="vert-tabs-doc-compliance" role="tabpanel" aria-labelledby="vert-tabs-doc-compliance-tab">
                                  <!-- /.content-header -->        
                                  <div class="col">
                                    <div class="card card-dark">
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
                                                <th>@sortablelink('filename', 'File Name')</th>
                                                <th>@sortablelink('filesize', 'File Size')</th>
                                                <th>@sortablelink('updated_at', 'Updated At')</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                            @foreach($docDrawerCompliance as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                            </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane text-left fade show" id="vert-tabs-doc-processes" role="tabpanel" aria-labelledby="vert-tabs-doc-processes-tab">
                                  <!-- /.content-header -->        
                                  <div class="col">
                                    <div class="card card-dark">
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
                                                <th>@sortablelink('filename', 'File Name')</th>
                                                <th>@sortablelink('filesize', 'File Size')</th>
                                                <th>@sortablelink('updated_at', 'Updated At')</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                            @foreach($docDrawerProcesses as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                            </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane text-left fade show" id="vert-tabs-doc-dept" role="tabpanel" aria-labelledby="vert-tabs-doc-dept-tab">
                                  <!-- /.content-header -->        
                                  <div class="col">
                                    <div class="card card-dark">
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
                                                <th>@sortablelink('filename', 'File Name')</th>
                                                <th>@sortablelink('filesize', 'File Size')</th>
                                                <th>@sortablelink('updated_at', 'Updated At')</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                          @foreach($deptContacts as $category)
                                          <tr>
                                            <td>{{$category->filename}}</td>
                                            <td>{{$category->filesize}} KB</td>
                                            <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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

                    <div class="tab-pane fade show" id="nav-funder" role="tabpanel" aria-labelledby="nav-funder-tab">
                      <div class="row">
                        <div class="col-sm-4 col-md-3 col-lg-3">
                          <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="vert-tabs-funder-systems-tab" data-toggle="pill" href="#vert-tabs-funder-systems" role="tab" aria-controls="vert-tabs-funder-systems" aria-selected="true">Systems</a>
                            <a class="nav-link" id="vert-tabs-funder-forms-tab" data-toggle="pill" href="#vert-tabs-funder-forms" role="tab" aria-controls="vert-tabs-funder-forms" aria-selected="false">Forms</a>
                            <a class="nav-link" id="vert-tabs-funder-tisp-tab" data-toggle="pill" href="#vert-tabs-funder-tisp" role="tab" aria-controls="vert-tabs-funder-tisp" aria-selected="false">Taxes/Insurance/Subject Property</a>
                            <a class="nav-link" id="vert-tabs-funder-vetting-tab" data-toggle="pill" href="#vert-tabs-funder-vetting" role="tab" aria-controls="vert-tabs-funder-vetting" aria-selected="false">Vetting</a>
                            <a class="nav-link" id="vert-tabs-funder-compliance-tab" data-toggle="pill" href="#vert-tabs-funder-compliance" role="tab" aria-controls="vert-tabs-funder-compliance" aria-selected="false">Compliance</a>
                            <a class="nav-link" id="vert-tabs-funder-processes-tab" data-toggle="pill" href="#vert-tabs-funder-processes" role="tab" aria-controls="vert-tabs-funder-processes" aria-selected="false">Processes</a>
                            <a class="nav-link" id="vert-tabs-funder-escrow-tab" data-toggle="pill" href="#vert-tabs-funder-escrow" role="tab" aria-controls="vert-tabs-funder-escrow" aria-selected="false">Escrow Holdback</a>
                            <a class="nav-link" id="vert-tabs-funder-poa-tab" data-toggle="pill" href="#vert-tabs-funder-poa" role="tab" aria-controls="vert-tabs-funder-poa" aria-selected="false">Power of Attorney</a>
                            <a class="nav-link" id="vert-tabs-funder-dept-tab" data-toggle="pill" href="#vert-tabs-funder-dept" role="tab" aria-controls="vert-tabs-funder-dept" aria-selected="false">Department Contacts</a>
                          </div>
                        </div>
                        <div class="col-sm-12 col-md-9 col-lg-9">
                          <div class="tab-content" id="vert-tabs-tabContent">
                            <div class="tab-pane text-left fade show active" id="vert-tabs-funder-systems" role="tabpanel" aria-labelledby="vert-tabs-funder-systems-tab">
                              <!-- /.content-header -->        
                              <div class="col">
                                <div class="card card-dark">
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
                                            <th>@sortablelink('updated_at', 'Updated At')</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          @foreach($funderSystems as $category)
                                          <tr>
                                            <td>{{$category->filename}}</td>
                                            <td>{{$category->filesize}} KB</td>
                                            <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                          </tr>
                                            @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane text-left fade show" id="vert-tabs-funder-forms" role="tabpanel" aria-labelledby="vert-tabs-funder-forms-tab">
                              <!-- /.content-header -->        
                              <div class="col">
                                <div class="card card-dark">
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
                                            <th>@sortablelink('updated_at', 'Updated At')</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          @foreach($funderForms as $category)
                                          <tr>
                                            <td>{{$category->filename}}</td>
                                            <td>{{$category->filesize}} KB</td>
                                            <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                          </tr>
                                            @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane text-left fade show" id="vert-tabs-funder-tisp" role="tabpanel" aria-labelledby="vert-tabs-funder-tisp-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                              <th>@sortablelink('filename', 'File Name')</th>
                                              <th>@sortablelink('filesize', 'File Size')</th>
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($funderTisp as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-funder-vetting" role="tabpanel" aria-labelledby="vert-tabs-funder-vetting-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($funderVetting as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-funder-compliance" role="tabpanel" aria-labelledby="vert-tabs-funder-compliance-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                              <th>@sortablelink('filename', 'File Name')</th>
                                              <th>@sortablelink('filesize', 'File Size')</th>
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($funderCompliance as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-funder-processes" role="tabpanel" aria-labelledby="vert-tabs-funder-processes-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                              <th>@sortablelink('filename', 'File Name')</th>
                                              <th>@sortablelink('filesize', 'File Size')</th>
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($funderProcesses as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-funder-escrow" role="tabpanel" aria-labelledby="vert-tabs-funder-escrow-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
                                    <div class="card-header border-0">
                                      <h3 class="card-title">Escrow Holdback</h3>
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
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($funderEscrow as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-funder-poa" role="tabpanel" aria-labelledby="vert-tabs-funder-poa-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
                                    <div class="card-header border-0">
                                      <h3 class="card-title">Power of Attorney</h3>
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
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($funderPOA as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-funder-dept" role="tabpanel" aria-labelledby="vert-tabs-funder-dept-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                              <th>@sortablelink('filename', 'File Name')</th>
                                              <th>@sortablelink('filesize', 'File Size')</th>
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($deptContacts as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                    <div class="tab-pane fade show" id="nav-funding-forms" role="tabpanel" aria-labelledby="nav-funding-forms-tab">
                      <div class="row">
                        <div class="col-sm-4 col-md-3 col-lg-3">
                          <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="vert-tabs-funding-forms-systems-tab" data-toggle="pill" href="#vert-tabs-funding-forms-systems" role="tab" aria-controls="vert-tabs-funding-forms-systems" aria-selected="true">Systems</a>
                            <a class="nav-link" id="vert-tabs-funding-forms-forms-tab" data-toggle="pill" href="#vert-tabs-funding-forms-forms" role="tab" aria-controls="vert-tabs-funding-forms-forms" aria-selected="false">Forms</a>
                            <a class="nav-link" id="vert-tabs-funding-forms-tisp-tab" data-toggle="pill" href="#vert-tabs-funding-forms-tisp" role="tab" aria-controls="vert-tabs-funding-forms-tisp" aria-selected="false">Taxes/Insurance/Subject Property</a>
                            <a class="nav-link" id="vert-tabs-funding-forms-vetting-tab" data-toggle="pill" href="#vert-tabs-funding-forms-vetting" role="tab" aria-controls="vert-tabs-funding-forms-vetting" aria-selected="false">Vetting</a>
                            <a class="nav-link" id="vert-tabs-funding-forms-compliance-tab" data-toggle="pill" href="#vert-tabs-funding-forms-compliance" role="tab" aria-controls="vert-tabs-funding-forms-compliance" aria-selected="false">Compliance</a>
                            <a class="nav-link" id="vert-tabs-funding-forms-processes-tab" data-toggle="pill" href="#vert-tabs-funding-forms-processes" role="tab" aria-controls="vert-tabs-funding-forms-processes" aria-selected="false">Processes</a>
                            <a class="nav-link" id="vert-tabs-funding-forms-dept-tab" data-toggle="pill" href="#vert-tabs-funding-forms-dept" role="tab" aria-controls="vert-tabs-funding-forms-dept" aria-selected="false">Department Contacts</a>
                          </div>
                        </div>
                        <div class="col-sm-12 col-md-9 col-lg-9">
                          <div class="tab-content" id="vert-tabs-tabContent">
                            <div class="tab-pane text-left fade show active" id="vert-tabs-funding-forms-systems" role="tabpanel" aria-labelledby="vert-tabs-funding-forms-systems-tab">
                              <!-- /.content-header -->        
                              <div class="col">
                                <div class="card card-dark">
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
                                            <th>@sortablelink('updated_at', 'Updated At')</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          @foreach($fundingFormsSystems as $category)
                                          <tr>
                                            <td>{{$category->filename}}</td>
                                            <td>{{$category->filesize}} KB</td>
                                            <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                          </tr>
                                            @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="tab-pane text-left fade show" id="vert-tabs-funding-forms-forms" role="tabpanel" aria-labelledby="vert-tabs-funding-forms-forms-tab">
                              <!-- /.content-header -->        
                              <div class="col">
                                <div class="card card-dark">
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
                                            <th>@sortablelink('updated_at', 'Updated At')</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          @foreach($fundingFormsForms as $category)
                                          <tr>
                                            <td>{{$category->filename}}</td>
                                            <td>{{$category->filesize}} KB</td>
                                            <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                          </tr>
                                            @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane text-left fade show" id="vert-tabs-funding-forms-tisp" role="tabpanel" aria-labelledby="vert-tabs-funding-forms-tisp-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                              <th>@sortablelink('filename', 'File Name')</th>
                                              <th>@sortablelink('filesize', 'File Size')</th>
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($fundingFormsTisp as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-funding-forms-vetting" role="tabpanel" aria-labelledby="vert-tabs-funding-forms-vetting-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($fundingFormsVetting as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-funding-forms-compliance" role="tabpanel" aria-labelledby="vert-tabs-funding-forms-compliance-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                              <th>@sortablelink('filename', 'File Name')</th>
                                              <th>@sortablelink('filesize', 'File Size')</th>
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($fundingFormsCompliance as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-funding-forms-processes" role="tabpanel" aria-labelledby="vert-tabs-funding-forms-processes-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                              <th>@sortablelink('filename', 'File Name')</th>
                                              <th>@sortablelink('filesize', 'File Size')</th>
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($fundingFormsProcesses as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-funding-forms-dept" role="tabpanel" aria-labelledby="vert-tabs-funding-forms-dept-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                              <th>@sortablelink('filename', 'File Name')</th>
                                              <th>@sortablelink('filesize', 'File Size')</th>
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($deptContacts as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                    <div class="tab-pane fade show" id="nav-funding-asst" role="tabpanel" aria-labelledby="nav-funding-asst-tab">
                      <div class="row">
                        <div class="col-sm-4 col-md-3 col-lg-3">
                          <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="vert-tabs-funding-asst-systems-tab" data-toggle="pill" href="#vert-tabs-funding-asst-systems" role="tab" aria-controls="vert-tabs-funding-asst-systems" aria-selected="true">Systems</a>
                            <a class="nav-link" id="vert-tabs-funding-asst-tisp-tab" data-toggle="pill" href="#vert-tabs-funding-asst-tisp" role="tab" aria-controls="vert-tabs-funding-asst-tisp" aria-selected="false">Taxes/Insurance/Subject Property</a>
                            <a class="nav-link" id="vert-tabs-funding-asst-vetting-tab" data-toggle="pill" href="#vert-tabs-funding-asst-vetting" role="tab" aria-controls="vert-tabs-funding-asst-vetting" aria-selected="false">Vetting</a>
                            <a class="nav-link" id="vert-tabs-funding-asst-compliance-tab" data-toggle="pill" href="#vert-tabs-funding-asst-compliance" role="tab" aria-controls="vert-tabs-funding-asst-compliance" aria-selected="false">Compliance</a>
                            <a class="nav-link" id="vert-tabs-funding-asst-processes-tab" data-toggle="pill" href="#vert-tabs-funding-asst-processes" role="tab" aria-controls="vert-tabs-funding-asst-processes" aria-selected="false">Processes</a>
                            <a class="nav-link" id="vert-tabs-funding-asst-dept-tab" data-toggle="pill" href="#vert-tabs-funding-asst-dept" role="tab" aria-controls="vert-tabs-funding-asst-dept" aria-selected="false">Department Contacts</a>
                          </div>
                        </div>
                        <div class="col-sm-12 col-md-9 col-lg-9">
                          <div class="tab-content" id="vert-tabs-tabContent">
                            <div class="tab-pane text-left fade show active" id="vert-tabs-funding-asst-systems" role="tabpanel" aria-labelledby="vert-tabs-funding-asst-systems-tab">
                              <!-- /.content-header -->        
                              <div class="col">
                                <div class="card card-dark">
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
                                            <th>@sortablelink('updated_at', 'Updated At')</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          @foreach($fundingAssistantSystems as $category)
                                          <tr>
                                            <td>{{$category->filename}}</td>
                                            <td>{{$category->filesize}} KB</td>
                                            <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                          </tr>
                                            @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane text-left fade show" id="vert-tabs-funding-asst-tisp" role="tabpanel" aria-labelledby="vert-tabs-funding-asst-tisp-tab">
                              <!-- /.content-header -->        
                              <div class="col">
                                <div class="card card-dark">
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
                                            <th>@sortablelink('filename', 'File Name')</th>
                                            <th>@sortablelink('filesize', 'File Size')</th>
                                            <th>@sortablelink('updated_at', 'Updated At')</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          @foreach($fundingAssistantTisp as $category)
                                          <tr>
                                            <td>{{$category->filename}}</td>
                                            <td>{{$category->filesize}} KB</td>
                                            <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                          </tr>
                                            @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane text-left fade show" id="vert-tabs-funding-asst-vetting" role="tabpanel" aria-labelledby="vert-tabs-funding-asst-vetting-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($fundingAssistantVetting as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-funding-asst-compliance" role="tabpanel" aria-labelledby="vert-tabs-funding-asst-compliance-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                              <th>@sortablelink('filename', 'File Name')</th>
                                              <th>@sortablelink('filesize', 'File Size')</th>
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($fundingAssistantCompliance as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-funding-asst-processes" role="tabpanel" aria-labelledby="vert-tabs-funding-asst-processes-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                              <th>@sortablelink('filename', 'File Name')</th>
                                              <th>@sortablelink('filesize', 'File Size')</th>
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($fundingAssistantProcesses as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-funding-asst-dept" role="tabpanel" aria-labelledby="vert-tabs-funding-asst-dept-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                              <th>@sortablelink('filename', 'File Name')</th>
                                              <th>@sortablelink('filesize', 'File Size')</th>
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($deptContacts as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                      <div class="tab-pane fade show" id="nav-lsu" role="tabpanel" aria-labelledby="nav-lsu-tab">
                        <div class="row">
                          <div class="col-sm-4 col-md-3 col-lg-3">
                            <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                              <a class="nav-link active" id="vert-tabs-lsu-systems-tab" data-toggle="pill" href="#vert-tabs-lsu-systems" role="tab" aria-controls="vert-tabs-lsu-systems" aria-selected="true">Systems</a>
                              <a class="nav-link" id="vert-tabs-lsu-forms-tab" data-toggle="pill" href="#vert-tabs-lsu-forms" role="tab" aria-controls="vert-tabs-lsu-forms" aria-selected="false">Forms</a>
                              <a class="nav-link" id="vert-tabs-lsu-vetting-tab" data-toggle="pill" href="#vert-tabs-lsu-vetting" role="tab" aria-controls="vert-tabs-lsu-vetting" aria-selected="false">Vetting</a>
                              <a class="nav-link" id="vert-tabs-lsu-compliance-tab" data-toggle="pill" href="#vert-tabs-lsu-compliance" role="tab" aria-controls="vert-tabs-lsu-compliance" aria-selected="false">Compliance</a>
                              <a class="nav-link" id="vert-tabs-lsu-processes-tab" data-toggle="pill" href="#vert-tabs-lsu-processes" role="tab" aria-controls="vert-tabs-lsu-processes" aria-selected="false">Processes</a>
                              <a class="nav-link" id="vert-tabs-lsu-attachments-tab" data-toggle="pill" href="#vert-tabs-lsu-attachments" role="tab" aria-controls="vert-tabs-lsu-attachments" aria-selected="false">Attachments To Send with Welcome Letter</a>
                              <a class="nav-link" id="vert-tabs-lsu-flood-tab" data-toggle="pill" href="#vert-tabs-lsu-flood" role="tab" aria-controls="vert-tabs-lsu-flood" aria-selected="false">Flood Certs</a>
                              <a class="nav-link" id="vert-tabs-lsu-valuation-tab" data-toggle="pill" href="#vert-tabs-lsu-valuation" role="tab" aria-controls="vert-tabs-lsu-valuation" aria-selected="false">Valuation Delivery</a>
                              <a class="nav-link" id="vert-tabs-lsu-ssa-tab" data-toggle="pill" href="#vert-tabs-lsu-ssa" role="tab" aria-controls="vert-tabs-lsu-ssa" aria-selected="false">SSA-89 & 4506T</a>
                              <a class="nav-link" id="vert-tabs-lsu-dept-tab" data-toggle="pill" href="#vert-tabs-lsu-dept" role="tab" aria-controls="vert-tabs-lsu-dept" aria-selected="false">Deparment Contacts</a>
                            </div>
                          </div>
                          <div class="col-sm-12 col-md-9 col-lg-9">
                            <div class="tab-content" id="vert-tabs-tabContent">
                              <div class="tab-pane text-left fade show active" id="vert-tabs-lsu-systems" role="tabpanel" aria-labelledby="vert-tabs-lsu-systems-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($lsuSystems as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-lsu-forms" role="tabpanel" aria-labelledby="vert-tabs-lsu-forms-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($lsuForms as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-lsu-vetting" role="tabpanel" aria-labelledby="vert-tabs-lsu-vetting-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($lsuVetting as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-lsu-compliance" role="tabpanel" aria-labelledby="vert-tabs-lsu-compliance-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                              <th>@sortablelink('filename', 'File Name')</th>
                                              <th>@sortablelink('filesize', 'File Size')</th>
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($lsuCompliance as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-lsu-processes" role="tabpanel" aria-labelledby="vert-tabs-lsu-processes-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                              <th>@sortablelink('filename', 'File Name')</th>
                                              <th>@sortablelink('filesize', 'File Size')</th>
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($lsuProcesses as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-lsu-attachments" role="tabpanel" aria-labelledby="vert-tabs-lsu-attachments-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                              <th>@sortablelink('filename', 'File Name')</th>
                                              <th>@sortablelink('filesize', 'File Size')</th>
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($lsuAttachments as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-lsu-flood" role="tabpanel" aria-labelledby="vert-tabs-lsu-flood-tab">
                                  <!-- /.content-header -->        
                                  <div class="col">
                                    <div class="card card-dark">
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
                                              <th>@sortablelink('filename', 'File Name')</th>
                                              <th>@sortablelink('filesize', 'File Size')</th>
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              @foreach($lsuFloodCerts as $category)
                                              <tr>
                                                <td>{{$category->filename}}</td>
                                                <td>{{$category->filesize}} KB</td>
                                                <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                              </tr>
                                                @endforeach
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane text-left fade show" id="vert-tabs-lsu-valuation" role="tabpanel" aria-labelledby="vert-tabs-lsu-valuation-tab">
                                  <!-- /.content-header -->        
                                  <div class="col">
                                    <div class="card card-dark">
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
                                              <th>@sortablelink('filename', 'File Name')</th>
                                              <th>@sortablelink('filesize', 'File Size')</th>
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              @foreach($lsuValuation as $category)
                                              <tr>
                                                <td>{{$category->filename}}</td>
                                                <td>{{$category->filesize}} KB</td>
                                                <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                              </tr>
                                                @endforeach
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane text-left fade show" id="vert-tabs-lsu-ssa" role="tabpanel" aria-labelledby="vert-tabs-lsu-ssa-tab">
                                  <!-- /.content-header -->        
                                  <div class="col">
                                    <div class="card card-dark">
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
                                              <th>@sortablelink('filename', 'File Name')</th>
                                              <th>@sortablelink('filesize', 'File Size')</th>
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              @foreach($lsuSsaAnd4506T as $category)
                                              <tr>
                                                <td>{{$category->filename}}</td>
                                                <td>{{$category->filesize}} KB</td>
                                                <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                              </tr>
                                                @endforeach
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane text-left fade show" id="vert-tabs-lsu-dept" role="tabpanel" aria-labelledby="vert-tabs-lsu-dept-tab">
                                  <!-- /.content-header -->        
                                  <div class="col">
                                    <div class="card card-dark">
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
                                              <th>@sortablelink('filename', 'File Name')</th>
                                              <th>@sortablelink('filesize', 'File Size')</th>
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              @foreach($deptContacts as $category)
                                              <tr>
                                                <td>{{$category->filename}}</td>
                                                <td>{{$category->filesize}} KB</td>
                                                <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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


                    <div class="tab-pane fade show" id="nav-tm" role="tabpanel" aria-labelledby="nav-tm-tab">
                        <div class="row">
                          <div class="col-sm-4 col-md-3 col-lg-3">
                            <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                              <a class="nav-link active" id="vert-tabs-tm-systems-tab" data-toggle="pill" href="#vert-tabs-tm-systems" role="tab" aria-controls="vert-tabs-tm-systems" aria-selected="true">Systems</a>
                              <a class="nav-link" id="vert-tabs-tm-internal-tab" data-toggle="pill" href="#vert-tabs-tm-internal" role="tab" aria-controls="vert-tabs-tm-internal" aria-selected="false">Internal Forms</a>
                              <a class="nav-link" id="vert-tabs-tm-tisp-tab" data-toggle="pill" href="#vert-tabs-tm-tisp" role="tab" aria-controls="vert-tabs-tm-tisp" aria-selected="false">Taxes/Insurance/Subject Property</a>
                              <a class="nav-link" id="vert-tabs-tm-vetting-tab" data-toggle="pill" href="#vert-tabs-tm-vetting" role="tab" aria-controls="vert-tabs-tm-vetting" aria-selected="false">Vetting</a>
                              <a class="nav-link" id="vert-tabs-tm-compliance-tab" data-toggle="pill" href="#vert-tabs-tm-compliance" role="tab" aria-controls="vert-tabs-tm-compliance" aria-selected="false">Compliance</a>
                              <a class="nav-link" id="vert-tabs-tm-processes-tab" data-toggle="pill" href="#vert-tabs-tm-processes" role="tab" aria-controls="vert-tabs-tm-processes" aria-selected="false">Processes</a>
                              <a class="nav-link" id="vert-tabs-tm-forms-to-send-tab" data-toggle="pill" href="#vert-tabs-tm-forms-to-send" role="tab" aria-controls="vert-tabs-tm-forms-to-send" aria-selected="false">Forms To Send To Brokers</a>
                              <a class="nav-link" id="vert-tabs-tm-program-guides-tab" data-toggle="pill" href="#vert-tabs-tm-program-guides" role="tab" aria-controls="vert-tabs-tm-program-guides" aria-selected="false">Program Guides</a>
                              <a class="nav-link" id="vert-tabs-tm-dept-tab" data-toggle="pill" href="#vert-tabs-tm-dept" role="tab" aria-controls="vert-tabs-tm-dept" aria-selected="false">Department Contacts</a>
                            </div>
                          </div>
                          <div class="col-sm-12 col-md-9 col-lg-9">
                            <div class="tab-content" id="vert-tabs-tabContent">
                              <div class="tab-pane text-left fade show active" id="vert-tabs-tm-systems" role="tabpanel" aria-labelledby="vert-tabs-tm-systems-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($tmSystems as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-tm-internal" role="tabpanel" aria-labelledby="vert-tabs-tm-internal-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                              <th>@sortablelink('filename', 'File Name')</th>
                                              <th>@sortablelink('filesize', 'File Size')</th>
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($tmInternalForms as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-tm-tisp" role="tabpanel" aria-labelledby="vert-tabs-tm-tisp-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                              <th>@sortablelink('filename', 'File Name')</th>
                                              <th>@sortablelink('filesize', 'File Size')</th>
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($tmTisp as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-tm-vetting" role="tabpanel" aria-labelledby="vert-tabs-tm-vetting-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($tmVetting as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-tm-compliance" role="tabpanel" aria-labelledby="vert-tabs-tm-compliance-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                                <th>@sortablelink('filename', 'File Name')</th>
                                                <th>@sortablelink('filesize', 'File Size')</th>
                                                <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($tmCompliance as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-tm-processes" role="tabpanel" aria-labelledby="vert-tabs-tm-processes-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                                <th>@sortablelink('filename', 'File Name')</th>
                                                <th>@sortablelink('filesize', 'File Size')</th>
                                                <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($tmProcesses as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-tm-forms-to-send" role="tabpanel" aria-labelledby="vert-tabs-tm-forms-to-send-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                                <th>@sortablelink('filename', 'File Name')</th>
                                                <th>@sortablelink('filesize', 'File Size')</th>
                                                <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($tmFormsForBrokers as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-tm-program-guides" role="tabpanel" aria-labelledby="vert-tabs-tm-program-guides-tab">
                                  <!-- /.content-header -->        
                                  <div class="col">
                                    <div class="card card-dark">
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
                                                <th>@sortablelink('filename', 'File Name')</th>
                                                <th>@sortablelink('filesize', 'File Size')</th>
                                                <th>@sortablelink('updated_at', 'Updated At')</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                            @foreach($tmProgramGuides as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane text-left fade show" id="vert-tabs-tm-dept" role="tabpanel" aria-labelledby="vert-tabs-tm-dept-tab">
                                  <!-- /.content-header -->        
                                  <div class="col">
                                    <div class="card card-dark">
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
                                                <th>@sortablelink('filename', 'File Name')</th>
                                                <th>@sortablelink('filesize', 'File Size')</th>
                                                <th>@sortablelink('updated_at', 'Updated At')</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                            @foreach($deptContacts as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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

                    
                    <div class="tab-pane fade show" id="nav-uw" role="tabpanel" aria-labelledby="nav-uw-tab">
                        <div class="row">
                          <div class="col-sm-4 col-md-3 col-lg-3">
                            <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                              <a class="nav-link active" id="vert-tabs-uw-systems-tab" data-toggle="pill" href="#vert-tabs-uw-systems" role="tab" aria-controls="vert-tabs-uw-systems" aria-selected="true">Systems</a>
                              <a class="nav-link" id="vert-tabs-uw-tisp-tab" data-toggle="pill" href="#vert-tabs-uw-tisp" role="tab" aria-controls="vert-tabs-uw-tisp" aria-selected="false">Taxes/Insurance/Subject Property</a>
                              <a class="nav-link" id="vert-tabs-uw-vetting-tab" data-toggle="pill" href="#vert-tabs-uw-vetting" role="tab" aria-controls="vert-tabs-uw-vetting" aria-selected="false">Vetting</a>
                              <a class="nav-link" id="vert-tabs-uw-compliance-tab" data-toggle="pill" href="#vert-tabs-uw-compliance" role="tab" aria-controls="vert-tabs-uw-compliance" aria-selected="false">Compliance</a>
                              <a class="nav-link" id="vert-tabs-uw-processes-tab" data-toggle="pill" href="#vert-tabs-uw-processes" role="tab" aria-controls="vert-tabs-uw-processes" aria-selected="false">Processes</a>
                              <a class="nav-link" id="vert-tabs-uw-guidelines-tab" data-toggle="pill" href="#vert-tabs-uw-guidelines" role="tab" aria-controls="vert-tabs-uw-guidelines" aria-selected="false">Underwriting Guidelines</a>
                              <a class="nav-link" id="vert-tabs-uw-tools-tab" data-toggle="pill" href="#vert-tabs-uw-tools" role="tab" aria-controls="vert-tabs-uw-tools" aria-selected="false">UW Tools</a>
                              <a class="nav-link" id="vert-tabs-uw-videos-tab" data-toggle="pill" href="#vert-tabs-uw-videos" role="tab" aria-controls="vert-tabs-uw-videos" aria-selected="false">Training Videos</a>
                              <a class="nav-link" id="vert-tabs-uw-dept-tab" data-toggle="pill" href="#vert-tabs-uw-dept" role="tab" aria-controls="vert-tabs-uw-dept" aria-selected="false">Department Contacts</a>
                            </div>
                          </div>
                          <div class="col-sm-12 col-md-9 col-lg-9">
                            <div class="tab-content" id="vert-tabs-tabContent">
                              <div class="tab-pane text-left fade show active" id="vert-tabs-uw-systems" role="tabpanel" aria-labelledby="vert-tabs-uw-systems-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                                <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($uwSystems as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-uw-tisp" role="tabpanel" aria-labelledby="vert-tabs-uw-tisp-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                                <th>@sortablelink('filename', 'File Name')</th>
                                                <th>@sortablelink('filesize', 'File Size')</th>
                                                <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($uwTisp as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-uw-vetting" role="tabpanel" aria-labelledby="vert-tabs-uw-vetting-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                                <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($uwVetting as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-uw-compliance" role="tabpanel" aria-labelledby="vert-tabs-uw-compliance-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                                <th>@sortablelink('filename', 'File Name')</th>
                                                <th>@sortablelink('filesize', 'File Size')</th>
                                                <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($uwCompliance as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-uw-processes" role="tabpanel" aria-labelledby="vert-tabs-uw-processes-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                                <th>@sortablelink('filename', 'File Name')</th>
                                                <th>@sortablelink('filesize', 'File Size')</th>
                                                <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($uwProcesses as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-uw-guidelines" role="tabpanel" aria-labelledby="vert-tabs-uw-guidelines-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                                <th>@sortablelink('filename', 'File Name')</th>
                                                <th>@sortablelink('filesize', 'File Size')</th>
                                                <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($uwGuidelines as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-uw-tools" role="tabpanel" aria-labelledby="vert-tabs-uw-tools-tab">
                                <!-- /.content-header -->        
                                <div class="col">
                                  <div class="card card-dark">
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
                                                <th>@sortablelink('filename', 'File Name')</th>
                                                <th>@sortablelink('filesize', 'File Size')</th>
                                                <th>@sortablelink('updated_at', 'Updated At')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($uwTools as $category)
                                          <tr>
                                            <td>{{$category->filename}}</td>
                                            <td>{{$category->filesize}} KB</td>
                                            <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                          </tr>
                                            @endforeach
                                      </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane text-left fade show" id="vert-tabs-uw-videos" role="tabpanel" aria-labelledby="vert-tabs-uw-videos-tab">
                                  <!-- /.content-header -->        
                                  <div class="col">
                                    <div class="card card-dark">
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
                                                <th>@sortablelink('filename', 'File Name')</th>
                                                <th>@sortablelink('filesize', 'File Size')</th>
                                                <th>@sortablelink('updated_at', 'Updated At')</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                            @foreach($uwVideos as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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
                                            </tr>
                                              @endforeach
                                        </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane text-left fade show" id="vert-tabs-uw-dept" role="tabpanel" aria-labelledby="vert-tabs-uw-dept-tab">
                                  <!-- /.content-header -->        
                                  <div class="col">
                                    <div class="card card-dark">
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
                                                <th>@sortablelink('filename', 'File Name')</th>
                                                <th>@sortablelink('filesize', 'File Size')</th>
                                                <th>@sortablelink('updated_at', 'Updated At')</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                            @foreach($deptContacts as $category)
                                            <tr>
                                              <td>{{$category->filename}}</td>
                                              <td>{{$category->filesize}} KB</td>
                                              <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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

                    <div class="tab-pane fade show" id="nav-nda" role="tabpanel" aria-labelledby="nav-nda-tab">
                      <div class="row">
                        <div class="col-sm-4 col-md-3 col-lg-3">
                          <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="vert-tabs-nda-tab" data-toggle="pill" href="#vert-tabs-nda" role="tab" aria-controls="vert-tabs-nda" aria-selected="true">NDA</a>
                          </div>
                        </div>
                        <div class="col-sm-12 col-md-9 col-lg-9">
                          <div class="tab-content" id="vert-tabs-tabContent">
                            <div class="tab-pane text-left fade show active" id="vert-tabs-nda" role="tabpanel" aria-labelledby="vert-tabs-nda-tab">
                              <!-- /.content-header -->        
                              <div class="col">
                                <div class="card card-dark">
                                  <div class="card-header border-0">
                                    <h3 class="card-title">NDA</h3>
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
                                              <th>@sortablelink('updated_at', 'Updated At')</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          @foreach($nda as $category)
                                          <tr>
                                            <td>{{$category->filename}}</td>
                                            <td>{{$category->filesize}} KB</td>
                                            <td>{{ Carbon\Carbon::parse($category->updated_at)->format('m-d-Y') }}</td>
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





  </div>
  <!-- /.col -->
<!-- /.control-sidebar -->
<!-- ./wrapper -->
@stop