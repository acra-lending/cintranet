@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Rate Sheets</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="/sales/ratesheets">Sales</a></li>
                <li class="breadcrumb-item">Ratesheets</a></li>
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
                    <i class="fas fa-table"></i>
                    Current Rate Sheets
                  </h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                        {{-- <a class="nav-link active" id="vert-tabs-ombs-tab" data-toggle="pill" href="#vert-tabs-ombs" role="tab" aria-controls="vert-tabs-ombs" aria-selected="true">OMBS & VOE</a> --}}
                        <a class="nav-link" id="vert-tabs-3mbs-tab" data-toggle="pill" href="#vert-tabs-3mbs" role="tab" aria-controls="vert-tabs-3mbs" aria-selected="false">3MBS</a>
                        <a class="nav-link active" id="vert-tabs-non-prime-ws-tab" data-toggle="pill" href="#vert-tabs-non-prime-ws" role="tab" aria-controls="vert-tabs-non-prime-ws" aria-selected="false">Non-Prime Wholesale</a>
                        <a class="nav-link" id="vert-tabs-jumbo-prime-ws-tab" data-toggle="pill" href="#vert-tabs-jumbo-prime-ws" role="tab" aria-controls="vert-tabs-jumbo-prime-ws" aria-selected="false">Jumbo Prime</a>
                        {{-- <a class="nav-link" id="vert-tabs-odf-tab" data-toggle="pill" href="#vert-tabs-odf" role="tab" aria-controls="vert-tabs-odf" aria-selected="false">Outside Dodd-Frank<sup>®</sup></a>
                        <a class="nav-link" id="vert-tabs-odfplus-tab" data-toggle="pill" href="#vert-tabs-odfplus" role="tab" aria-controls="vert-tabs-odfplus" aria-selected="false">Outside Dodd-Frank<sup>®</sup>Plus</a> --}}
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-9">
                      <div class="tab-content" id="vert-tabs-tabContent">
                        <div class="tab-pane text-left fade" id="vert-tabs-ombs" role="tabpanel" aria-labelledby="vert-tabs-ombs-tab">

                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">One Month Bank Statement & VOE</h3>
                                <div class="card-tools">
                                </div>
                              </div>
                              <div class="card-body table-responsive p-0">
                                <table class="table">
                                  <thead>
                                      <tr>
                                        <th>File Name</th>
                                        <th>File Size</th>
                                        <th>Created At</th>
                                      <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    
                                    @foreach($wsOmbsvoeAE as $category)
                                      <tr>
                                      <td>{{$category->filename}}</td>
                                      <td>{{($category->filesize)}} KB</td>
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
                        <div class="tab-pane fade" id="vert-tabs-3mbs" role="tabpanel" aria-labelledby="vert-tabs-3mbs-tab">
                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">3-Month Bank Statement</h3>
                                <div class="card-tools">
                                </div>
                              </div>
                              <div class="card-body table-responsive p-0">
                                <table class="table">
                                  <thead>
                                      <tr>
                                        <th>File Name</th>
                                        <th>File Size</th>
                                        <th>Created At</th>
                                      <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($ws3mbsAE as $category)
          
                                      <tr>
                                      <td>{{$category->filename}}</td>
                                      <td>{{($category->filesize)}} KB</td>
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
                        <div class="tab-pane fade show active" id="vert-tabs-non-prime-ws" role="tabpanel" aria-labelledby="vert-tabs-non-prime-ws-tab">
                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">Non-Prime Wholesale</h3>
                                <div class="card-tools">
                                </div>
                              </div>
                              <div class="card-body table-responsive p-0">
                                <table class="table">
                                  <thead>
                                      <tr>
                                        <th>File Name</th>
                                        <th>File Size</th>
                                        <th>Created At</th>
                                      <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($wsNonprimeAE as $category)
          
                                      <tr>
                                      <td>{{$category->filename}}</td>
                                      <td>{{($category->filesize)}} KB</td>
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
                        <div class="tab-pane fade" id="vert-tabs-jumbo-prime-ws" role="tabpanel" aria-labelledby="vert-tabs-jumbo-prime-ws-tab">
                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">Jumbo Prime</h3>
                                <div class="card-tools">
                                </div>
                              </div>
                              <div class="card-body table-responsive p-0">
                                <table class="table">
                                  <thead>
                                      <tr>
                                        <th>File Name</th>
                                        <th>File Size</th>
                                        <th>Created At</th>
                                      <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($wsJumboPrimeAE as $category)
          
                                      <tr>
                                      <td>{{$category->filename}}</td>
                                      <td>{{($category->filesize)}} KB</td>
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
                        <div class="tab-pane fade" id="vert-tabs-odf" role="tabpanel" aria-labelledby="vert-tabs-odf-tab">
                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">Outside Dodd-Frank<sup>®</sup></h3>
                                <div class="card-tools">
                                </div>
                              </div>
                              <div class="card-body table-responsive p-0">
                                <table class="table">
                                  <thead>
                                      <tr>
                                        <th>File Name</th>
                                        <th>File Size</th>
                                        <th>Created At</th>
                                      <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($wsOdfAE as $category)
                                      <tr>
                                      <td>{{$category->filename}}</td>
                                      <td>{{($category->filesize)}} KB</td>
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
                        <div class="tab-pane fade" id="vert-tabs-odfplus" role="tabpanel" aria-labelledby="vert-tabs-odfplus-tab">
                            <!-- /.content-header -->        
                            <div class="col">
                              <div class="card card-danger">
                                <div class="card-header border-0">
                                  <h3 class="card-title">Outside Dodd-Frank<sup>®</sup>Plus</h3>
                                  <div class="card-tools">
                                  </div>
                                </div>
                                <div class="card-body table-responsive p-0">
                                  <table class="table">
                                    <thead>
                                        <tr>
                                          <th>File Name</th>
                                          <th>File Size</th>
                                          <th>Created At</th>
                                        <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($wsOdfPlusAE as $category)
                                        <tr>
                                        <td>{{$category->filename}}</td>
                                        <td>{{($category->filesize)}} KB</td>
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
                <!-- /.card -->
              </div>
              <!-- /.card -->
            </div>
            <br/>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-10">
              <div class="card card-danger card-outline">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-table"></i>
                    Correspondent Rate Sheets
                  </h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                        {{-- <a class="nav-link active" id="vert-tabs-ombs-corr-tab" data-toggle="pill" href="#vert-tabs-ombs-corr" role="tab" aria-controls="vert-tabs-ombs_corr" aria-selected="true">OMBS & VOE</a> --}}
                        <a class="nav-link" id="vert-tabs-3mbs-corr-tab" data-toggle="pill" href="#vert-tabs-3mbs-corr" role="tab" aria-controls="vert-tabs-3mbs-corr" aria-selected="false">3MBS</a>
                        <a class="nav-link active" id="vert-tabs-non-prime-corr-tab" data-toggle="pill" href="#vert-tabs-non-prime-corr" role="tab" aria-controls="vert-tabs-non-prime-corr" aria-selected="false">Non-Prime Correspondent</a>
                        <a class="nav-link" id="vert-tabs-jumbo-prime-corr-tab" data-toggle="pill" href="#vert-tabs-jumbo-prime-corr" role="tab" aria-controls="vert-tabs-jumbo-prime-corr" aria-selected="false">Jumbo Prime</a>
                        {{-- <a class="nav-link" id="vert-tabs-odf-corr-tab" data-toggle="pill" href="#vert-tabs-odf-corr" role="tab" aria-controls="vert-tabs-odf-corr" aria-selected="false">Outside Dodd-Frank<sup>®</sup></a>
                        <a class="nav-link" id="vert-tabs-odfplus-corr-tab" data-toggle="pill" href="#vert-tabs-odfplus-corr" role="tab" aria-controls="vert-tabs-odfplus-corr" aria-selected="false">Outside Dodd-Frank<sup>®</sup>Plus</a> --}}
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-9">
                      <div class="tab-content" id="vert-tabs-tabContent">
                        <div class="tab-pane text-left fade" id="vert-tabs-ombs-corr" role="tabpanel" aria-labelledby="vert-tabs-ombs-corr-tab">

                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">One Month Bank Statement & VOE</h3>
                                <div class="card-tools">
                                </div>
                              </div>
                              <div class="card-body table-responsive p-0">
                                <table class="table">
                                  <thead>
                                      <tr>
                                      <th>File Name</th>
                                      <th>File Size</th>
                                      <th>Created At</th>
                                      <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    
                                    @foreach($corrOmbsvoePdf as $category)
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
                                      @foreach($corrOmbsvoeXlsx as $category)
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
                        <div class="tab-pane fade" id="vert-tabs-3mbs-corr" role="tabpanel" aria-labelledby="vert-tabs-3mbs-corr-tab">
                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">3-Month Bank Statement</h3>
                                <div class="card-tools">
                                </div>
                              </div>
                              <div class="card-body table-responsive p-0">
                                <table class="table">
                                  <thead>
                                      <tr>
                                      <th>File Name</th>
                                      <th>File Size</th>
                                      <th>Created At</th>
                                      <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($corr3mbsPdf as $category)
          
                                      <tr>
                                      <td>{{$category->filename}}</td>
                                      <td>{{($category->filesize)}} KB</td>
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
                                  @foreach($corr3mbsXlsx as $category)
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
                        <div class="tab-pane fade show active" id="vert-tabs-non-prime-corr" role="tabpanel" aria-labelledby="vert-tabs-non-prime-corr-tab">
                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">Non-Prime Correspondent</h3>
                                <div class="card-tools">
                                </div>
                              </div>
                              <div class="card-body table-responsive p-0">
                                <table class="table">
                                  <thead>
                                      <tr>
                                      <th>File Name</th>
                                      <th>File Size</th>
                                      <th>Created At</th>
                                      <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($corrNonprimePdf as $category)
          
                                      <tr>
                                      <td>{{$category->filename}}</td>
                                      <td>{{($category->filesize)}} KB</td>
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
                                  @foreach($corrNonprimeXlsx as $category)
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
                        <div class="tab-pane fade" id="vert-tabs-jumbo-prime-corr" role="tabpanel" aria-labelledby="vert-tabs-jumbo-prime-corr-tab">
                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">Jumbo Prime Correspondent</h3>
                                <div class="card-tools">
                                </div>
                              </div>
                              <div class="card-body table-responsive p-0">
                                <table class="table">
                                  <thead>
                                      <tr>
                                      <th>File Name</th>
                                      <th>File Size</th>
                                      <th>Created At</th>
                                      <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($corrJumboPrimePdf as $category)
          
                                      <tr>
                                      <td>{{$category->filename}}</td>
                                      <td>{{($category->filesize)}} KB</td>
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
                                  @foreach($corrJumboPrimeXlsx as $category)
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
                        <div class="tab-pane fade" id="vert-tabs-odf-corr" role="tabpanel" aria-labelledby="vert-tabs-odf-corr-tab">
                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">Outside Dodd-Frank<sup>®</sup></h3>
                                <div class="card-tools">
                                </div>
                              </div>
                              <div class="card-body table-responsive p-0">
                                <table class="table">
                                  <thead>
                                      <tr>
                                      <th>File Name</th>
                                      <th>File Size</th>
                                      <th>Created At</th>
                                      <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($corrOdfPdf as $category)
                                      <tr>
                                      <td>{{$category->filename}}</td>
                                      <td>{{($category->filesize)}} KB</td>
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
                                    @foreach($corrOdfXlsx as $category)
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
                        <div class="tab-pane fade" id="vert-tabs-odfplus-corr" role="tabpanel" aria-labelledby="vert-tabs-odfplus-corr-tab">
                            <!-- /.content-header -->        
                            <div class="col">
                              <div class="card card-danger">
                                <div class="card-header border-0">
                                  <h3 class="card-title">Outside Dodd-Frank<sup>®</sup>Plus</h3>
                                  <div class="card-tools">
                                  </div>
                                </div>
                                <div class="card-body table-responsive p-0">
                                  <table class="table">
                                    <thead>
                                        <tr>
                                        <th>File Name</th>
                                        <th>File Size</th>
                                        <th>Created At</th>
                                        <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($corrOdfPlusPdf as $category)
                                        <tr>
                                        <td>{{$category->filename}}</td>
                                        <td>{{($category->filesize)}} KB</td>
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
                                      @foreach($corrOdfPlusXlsx as $category)
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
                <!-- /.card -->
              </div>
              <!-- /.card -->
            </div>
            <br/>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-10">
              <div class="card card-danger card-outline">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-history"></i>
                    Past Rate Sheets
                  </h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="vert-tabs-ombs-tab_past" data-toggle="pill" href="#vert-tabs-ombs_past" role="tab" aria-controls="vert-tabs-ombs_past" aria-selected="true">OMBS & VOE</a>
                        <a class="nav-link" id="vert-tabs-3mbs-tab_past" data-toggle="pill" href="#vert-tabs-3mbs_past" role="tab" aria-controls="vert-tabs-3mbs_past" aria-selected="false">3MBS</a>
                        <a class="nav-link" id="vert-tabs-non-prime-ws-tab_past" data-toggle="pill" href="#vert-tabs-non-prime-ws_past" role="tab" aria-controls="vert-tabs-non-prime-ws_past" aria-selected="false">Non-Prime Wholesale</a>
                        <a class="nav-link" id="vert-tabs-jumbo-prime-ws-tab_past" data-toggle="pill" href="#vert-tabs-jumbo-prime-ws_past" role="tab" aria-controls="vert-tabs-jumbo-prime-ws_past" aria-selected="false">Jumbo Prime Wholesale</a>
                        <a class="nav-link" id="vert-tabs-odf-tab_past" data-toggle="pill" href="#vert-tabs-odf_past" role="tab" aria-controls="vert-tabs-odf_past" aria-selected="false">Outside Dodd-Frank<sup>®</sup></a>
                        <a class="nav-link" id="vert-tabs-odfplus-tab_past" data-toggle="pill" href="#vert-tabs-odfplus_past" role="tab" aria-controls="vert-tabs-odfplus_past" aria-selected="false">Outside Dodd-Frank<sup>®</sup>Plus</a>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-9">
                      <div class="tab-content" id="vert-tabs-tabContent">
                        <div class="tab-pane text-left fade show active" id="vert-tabs-ombs_past" role="tabpanel" aria-labelledby="vert-tabs-ombs-tab_past">

                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">One Month Bank Statement & VOE</h3>
                                <div class="card-tools">
                                </div>
                              </div>
                              <div class="card-body table-responsive p-0">
                                <table class="table">
                                  <thead>
                                      <tr>
                                        <th>File Name</th>
                                        <th>File Size</th>
                                        <th>Created At</th>
                                      <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    
                                    @foreach($wsOmbsvoeAE_past as $category)
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
                        <div class="tab-pane fade" id="vert-tabs-3mbs_past" role="tabpanel" aria-labelledby="vert-tabs-3mbs-tab_past">
                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">3-Month Bank Statement</h3>
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
                                      <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($ws3mbsAE_past as $category)
          
                                      <tr>
                                      <td>{{$category->filename}}</td>
                                      <td>{{($category->filesize)}} KB</td>
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
                        <div class="tab-pane fade" id="vert-tabs-non-prime-ws_past" role="tabpanel" aria-labelledby="vert-tabs-non-prime-ws-tab_past">
                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">Non-Prime Wholesale</h3>
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
                                      <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($wsNonprimeAE_past as $category)
          
                                      <tr>
                                      <td>{{$category->filename}}</td>
                                      <td>{{($category->filesize)}} KB</td>
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
                        <div class="tab-pane fade" id="vert-tabs-jumbo-prime-ws_past" role="tabpanel" aria-labelledby="vert-tabs-jumbo-prime-ws-tab_past">
                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">Jumbo Prime Wholesale</h3>
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
                                      <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($wsJumboPrimeAE_past as $category)
          
                                      <tr>
                                      <td>{{$category->filename}}</td>
                                      <td>{{($category->filesize)}} KB</td>
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
                        <div class="tab-pane fade" id="vert-tabs-odf_past" role="tabpanel" aria-labelledby="vert-tabs-odf-tab_past">
                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">Outside Dodd-Frank<sup>®</sup></h3>
                                <div class="card-tools">
                                </div>
                              </div>
                              <div class="card-body table-responsive p-0">
                                <table class="table">
                                  <thead>
                                      <tr>
                                        <th>File Name</th>
                                        <th>File Size</th>
                                        <th>Created At</th>
                                      <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($wsOdfAE_past as $category)
                                      <tr>
                                      <td>{{$category->filename}}</td>
                                      <td>{{($category->filesize)}} KB</td>
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
                        <div class="tab-pane fade" id="vert-tabs-odfplus_past" role="tabpanel" aria-labelledby="vert-tabs-odfplus-tab_past">
                            <!-- /.content-header -->        
                            <div class="col">
                              <div class="card card-danger">
                                <div class="card-header border-0">
                                  <h3 class="card-title">Outside Dodd-Frank<sup>®</sup>Plus</h3>
                                  <div class="card-tools">
                                  </div>
                                </div>
                                <div class="card-body table-responsive p-0">
                                  <table class="table">
                                    <thead>
                                        <tr>
                                          <th>File Name</th>
                                          <th>File Size</th>
                                          <th>Created At</th>
                                        <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($wsOdfPlusAE_past as $category)
                                        <tr>
                                        <td>{{$category->filename}}</td>
                                        <td>{{($category->filesize)}} KB</td>
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
                <!-- /.card -->
              </div>
              <!-- /.card -->
            </div>
            <br>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-10">
              <div class="card card-danger card-outline">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-history"></i>
                    Past Correspondent Rate Sheets
                  </h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="vert-tabs-ombs-corr-tab_past" data-toggle="pill" href="#vert-tabs-ombs-corr_past" role="tab" aria-controls="vert-tabs-ombs-corr_past" aria-selected="true">OMBS & VOE</a>
                        <a class="nav-link" id="vert-tabs-3mbs-corr-tab_past" data-toggle="pill" href="#vert-tabs-3mbs-corr_past" role="tab" aria-controls="vert-tabs-3mbs-corr_past" aria-selected="false">3MBS</a>
                        <a class="nav-link" id="vert-tabs-non-prime-corr-tab_past" data-toggle="pill" href="#vert-tabs-non-prime-corr_past" role="tab" aria-controls="vert-tabs-non-prime-corr_past" aria-selected="false">Non-Prime Correspondent</a>
                        <a class="nav-link" id="vert-tabs-jumbo-prime-corr-tab_past" data-toggle="pill" href="#vert-tabs-jumbo-prime-corr_past" role="tab" aria-controls="vert-tabs-jumbo-prime-corr_past" aria-selected="false">Jumbo Prime Correspondent</a>
                        <a class="nav-link" id="vert-tabs-odf-corr-tab_past" data-toggle="pill" href="#vert-tabs-odf-corr_past" role="tab" aria-controls="vert-tabs-odf-corr_past" aria-selected="false">Outside Dodd-Frank<sup>®</sup></a>
                        <a class="nav-link" id="vert-tabs-odfplus-corr-tab_past" data-toggle="pill" href="#vert-tabs-odfplus-corr_past" role="tab" aria-controls="vert-tabs-odfplus-corr_past" aria-selected="false">Outside Dodd-Frank<sup>®</sup>Plus</a>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-9">
                      <div class="tab-content" id="vert-tabs-tabContent">
                        <div class="tab-pane text-left fade show active" id="vert-tabs-ombs-corr_past" role="tabpanel" aria-labelledby="vert-tabs-ombs-corr-tab_past">

                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">One Month Bank Statement & VOE</h3>
                                <div class="card-tools">
                                </div>
                              </div>
                              <div class="card-body table-responsive p-0">
                                <table class="table">
                                  <thead>
                                      <tr>
                                        <th>File Name</th>
                                        <th>File Size</th>
                                        <th>Created At</th>
                                      <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    
                                    @foreach($corrOmbsvoePdf_past as $category)
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
                        <div class="tab-pane fade" id="vert-tabs-3mbs-corr_past" role="tabpanel" aria-labelledby="vert-tabs-3mbs-corr-tab_past">
                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">3-Month Bank Statement</h3>
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
                                      <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($corr3mbsPdf_past as $category)
          
                                      <tr>
                                      <td>{{$category->filename}}</td>
                                      <td>{{($category->filesize)}} KB</td>
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
                        <div class="tab-pane fade" id="vert-tabs-non-prime-corr_past" role="tabpanel" aria-labelledby="vert-tabs-non-prime-corr-tab_past">
                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">Non-Prime Correspondent</h3>
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
                                      <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($corrNonprimePdf_past as $category)
          
                                      <tr>
                                      <td>{{$category->filename}}</td>
                                      <td>{{($category->filesize)}} KB</td>
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
                        <div class="tab-pane fade" id="vert-tabs-jumbo-prime-corr_past" role="tabpanel" aria-labelledby="vert-tabs-jumbo-prime-corr-tab_past">
                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">Jumbo Prime Correspondent</h3>
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
                                      <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($corrJumboPrimePdf_past as $category)
          
                                      <tr>
                                      <td>{{$category->filename}}</td>
                                      <td>{{($category->filesize)}} KB</td>
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
                        <div class="tab-pane fade" id="vert-tabs-odf-corr_past" role="tabpanel" aria-labelledby="vert-tabs-odf-corr-tab_past">
                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">Outside Dodd-Frank<sup>®</sup></h3>
                                <div class="card-tools">
                                </div>
                              </div>
                              <div class="card-body table-responsive p-0">
                                <table class="table">
                                  <thead>
                                      <tr>
                                        <th>File Name</th>
                                        <th>File Size</th>
                                        <th>Created At</th>
                                      <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($corrOdfPdf_past as $category)
                                      <tr>
                                      <td>{{$category->filename}}</td>
                                      <td>{{($category->filesize)}} KB</td>
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
                        <div class="tab-pane fade" id="vert-tabs-odfplus-corr_past" role="tabpanel" aria-labelledby="vert-tabs-odfplus-corr-tab_past">
                            <!-- /.content-header -->        
                            <div class="col">
                              <div class="card card-danger">
                                <div class="card-header border-0">
                                  <h3 class="card-title">Outside Dodd-Frank<sup>®</sup>Plus</h3>
                                  <div class="card-tools">
                                  </div>
                                </div>
                                <div class="card-body table-responsive p-0">
                                  <table class="table">
                                    <thead>
                                        <tr>
                                          <th>File Name</th>
                                          <th>File Size</th>
                                          <th>Created At</th>
                                        <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($corrOdfPlusPdf_past as $category)
                                        <tr>
                                        <td>{{$category->filename}}</td>
                                        <td>{{($category->filesize)}} KB</td>
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
                <!-- /.card -->
              </div>
              <!-- /.card -->
            </div>
            <br>
            <br>
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