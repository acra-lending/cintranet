@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Documents</h1>
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
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-10">
  
              <div class="card card-dark card-outline">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-folder"></i>
                    Documents
                  </h3>
                </div>
                <div class="card-body">
                  <p>All Documents, Videos & Information provided by Legal are for <strong>Acra Internal Use Only</strong> and <u>Should Not and May Not Be Distributed to External Parties</u> without the express written consent and approval of the Legal Department.</p>

                  {{-- <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-wholesale-tab" data-toggle="tab" href="#nav-wholesale" role="tab" aria-controls="nav-wholesale" aria-selected="true">Wholesale</a>
                    <a class="nav-item nav-link" id="nav-corr-tab" data-toggle="tab" href="#nav-corr" role="tab" aria-controls="nav-corr" aria-selected="false">Correspondent</a>
                    <a class="nav-item nav-link" id="nav-retail-tab" data-toggle="tab" href="#nav-retail" role="tab" aria-controls="nav-retail" aria-selected="false">Retail</a>
                    <a class="nav-item nav-link" id="nav-sales-tools-tab" data-toggle="tab" href="#nav-sales-tools" role="tab" aria-controls="nav-sales-tools" aria-selected="false">Sales Tool Kit</a>
                    </div>
                  </nav> --}}
                  <br/>
                  
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-legal" role="tabpanel" aria-labelledby="nav-legal-tab">
                      <div class="row">
                        <div class="col-sm-2">
                          <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="vert-tabs-legal-docs-tab" data-toggle="pill" href="#vert-tabs-legal-docs" role="tab" aria-controls="vert-tabs-legal-docs" aria-selected="true">Documents</a>
                          </div>
                        </div>
                        <div class="col-sm-10">
                          <div class="tab-content" id="vert-tabs-tabContent">
                            <div class="tab-pane text-left fade show active" id="vert-tabs-legal" role="tabpanel" aria-labelledby="vert-tabs-legal-tab">       
                              <div class="col">
                                <div class="card card-dark ">
                                  <div class="card-header border-0">
                                    <h3 class="card-title">Legal Documents</h3>
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
                                          @foreach($legalDocs as $category)
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
    <!-- /.col -->
<!-- ./wrapper -->
@stop