@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Human Resources</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="/">Human Resources</a></li>
                <li class="breadcrumb-item">Schedules & Forms</a></li>
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

        .card-dark:not(.card-outline) .card-header {
        background: var(--linear-gradient);
        }
    </style>
        <section class="content">
          @include('pages.modals.modal-forms')
          <div class="container">
            <div class="col-md-12 col-lg-12 col-xl-10">
  
              <div class="card card-danger card-outline">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fab fa-wpforms"></i>
                    Schedules & Forms
                  </h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-4 col-md-3">
                      <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                      <a class="nav-item nav-link active" id="vert-tabs-schedules-tab" data-toggle="tab" href="#vert-tabs-schedules" role="tab" aria-controls="vert-tabs-schedules" aria-selected="true">Schedules</a>
                      <a class="nav-item nav-link" id="vert-tabs-suggestions-tab" data-toggle="tab" href="#vert-tabs-suggestions" role="tab" aria-controls="vert-tabs-suggestions" aria-selected="false">Suggestions & Referrals</a>
                      <a class="nav-item nav-link" id="vert-tabs-new-hire-tab" data-toggle="tab" href="#vert-tabs-new-hire" role="tab" aria-controls="vert-tabs-new-hire" aria-selected="false">New Hire Forms & Notices</a>
                      <a class="nav-item nav-link" id="vert-tabs-tax-forms-tab" data-toggle="tab" href="#vert-tabs-tax-forms" role="tab" aria-controls="vert-tabs-tax-forms" aria-selected="false">State & Federal Tax Forms</a>
                      <a class="nav-item nav-link" id="vert-tabs-topics-tab" data-toggle="tab" href="#vert-tabs-topics" role="tab" aria-controls="vert-tabs-topics" aria-selected="false">Health Topics & Suggestions</a>
                      <a class="nav-item nav-link" id="vert-tabs-tools-tab" data-toggle="tab" href="#vert-tabs-tools" role="tab" aria-controls="vert-tabs-tools" aria-selected="false">Manager Tools</a>
                      <a class="nav-item nav-link" id="vert-tabs-benefits-tab" data-toggle="tab" href="#vert-tabs-benefits" role="tab" aria-controls="vert-tabs-benefits" aria-selected="false">Benefits</a>
                      </div>
                    </div>
                    <div class="col-sm-10 col-md-9">
                    <div class="tab-content" id="vert-tabs-tabContent">
                          <div class="tab-pane text-left fade show active" id="vert-tabs-schedules" role="tabpanel" aria-labelledby="vert-tabs-schedules-tab">
                          
                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-dark">
                              <div class="card-header border-0">
                                <h3 class="card-title">Schedules</h3>
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
                                        @if(count($hrSchedules) > 0 )
                                        @foreach($hrSchedules as $category)
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
                        <div class="tab-pane fade" id="vert-tabs-suggestions" role="tabpanel" aria-labelledby="vert-tabs-suggestions-tab">     
                          <div class="col">
                            <div class="card card-dark">
                              <div class="card-header border-0">
                                <h3 class="card-title">Suggestions & Referrals</h3>
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
                                    @if(count($hrSuggestions) > 0 )
                                    @foreach($hrSuggestions as $category)
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
                        <div class="tab-pane fade" id="vert-tabs-new-hire" role="tabpanel" aria-labelledby="vert-tabs-new-hire-tab">
                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-dark">
                              <div class="card-header border-0">
                                <h3 class="card-title">New Hire Forms & Notices</h3>
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
                                    @if(count($hrNewHire) > 0 )
                                    @foreach($hrNewHire as $category)
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
                        <div class="tab-pane fade" id="vert-tabs-tax-forms" role="tabpanel" aria-labelledby="vert-tabs-tax-forms-tab">       
                            <div class="col">
                              <div class="card card-dark">
                                <div class="card-header border-0">
                                  <h3 class="card-title">State & Federal Tax Forms</h3>
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
                                      @if(count($hrStateAndFedTaxForms) > 0 )
                                      @foreach($hrStateAndFedTaxForms as $category)
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
                          <div class="tab-pane fade" id="vert-tabs-topics" role="tabpanel" aria-labelledby="vert-tabs-topics-tab">
                            <!-- /.content-header -->        
                            <div class="col">
                              <div class="card card-dark">
                                <div class="card-header border-0">
                                  <h3 class="card-title">Health Topics & Suggestions</h3>
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
                                      @if(count($hrHealthTopics) > 0 )
                                      @foreach($hrHealthTopics as $category)
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
                          <div class="tab-pane fade" id="vert-tabs-tools" role="tabpanel" aria-labelledby="vert-tabs-tools-tab">
                            <!-- /.content-header -->        
                            <div class="col">
                              <div class="card card-dark">
                                <div class="card-header border-0">
                                  <h3 class="card-title">Manager Tools</h3>
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
                                      @if(count($hrManagerTools) > 0 )
                                      @foreach($hrManagerTools as $category)
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
                          <div class="tab-pane fade show" id="vert-tabs-benefits" role="tabpanel" aria-labelledby="vert-tabs-benefits-tab">
                            <!-- /.content-header -->        
                            <div class="col">
                              <div class="card card-dark">
                                <div class="card-header border-0">
                                  <h3 class="card-title">Benefits</h3>
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
                                      @if(count($hrBenefits) > 0 )
                                      @foreach($hrBenefits as $category)
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
<!-- ./wrapper -->
@stop