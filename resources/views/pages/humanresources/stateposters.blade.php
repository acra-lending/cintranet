@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">State Workplace Posters</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active"><a href="/">Human Resources</a></li>
            <li class="breadcrumb-item">State Workplace Posters</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <style>
        .accordion-section .panel-default > .panel-heading {
            border: 0;
            padding: 0;
        }
        .accordion-section .panel-default .panel-title a {
            display: block;

        }
        .accordion-section .panel-default .panel-title a:after {
            font-family: 'FontAwesome';
            content: "\f106";
            color: #212529;
            float: right;
            margin-top: -2px;
        }
        .accordion-section .panel-default .panel-title a.collapsed:after {
            content: "\f107";
        }
        .accordion-section .panel-default .panel-body {
        }
    </style>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-danger card-outline">
                        <div class="card-header">
                            <h4 class="card-title">
                              <i class="fas fa-info-circle"></i>
                               Workplace Posters</h4>
                        </div>
                        <div class="card-body">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-page1-tab" data-toggle="tab" href="#nav-page1" role="tab" aria-controls="nav-page1" aria-selected="true">Page 1</a>
                                <a class="nav-item nav-link" id="nav-page2-tab" data-toggle="tab" href="#nav-page2" role="tab" aria-controls="nav-page2" aria-selected="false">Page 2</a>
                                <a class="nav-item nav-link" id="nav-page3-tab" data-toggle="tab" href="#nav-page3" role="tab" aria-controls="nav-page3" aria-selected="false">Page 3</a>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-page1" role="tabpanel" aria-labelledby="nav-page1-tab">
                                    <div class="card-body">
                                        <!-- /.card-header -->
                                        <section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
                                            <div class="container">
                                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading0">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
                                                            Federal
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
                                                    <div class="panel-body px-3 mb-4">
                                                      <div class="col">
                                                        <div class="card card-danger card-outline">
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
                                                                    @if(count($federal) > 0)
                                                                    @foreach($federal as $category)
                                                                      <tr>
                                                                      <td>{{$category->filename}}</td>
                                                                      <td>{{$category->filesize}} KB</td>
                                                                      <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                                                      <td class="text-right py-0 align-middle">
                                                                        <div class="btn-group btn-group-sm">
                                                                          <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                                          <a href="/download/{{$category->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                                          <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                                                          {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                                                            {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                                                          {{ Form::close()}}
                                                                        </div>
                                                                      </td>
                                                                      </tr>
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
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading1">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                                            Alabama
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                                                    <div class="panel-body px-3 mb-4">
                                                      <div class="col">
                                                        <div class="card card-danger card-outline">
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
                                                                    @if(count($alabama) > 0)
                                                                    @foreach($alabama as $category)
                                                                      <tr>
                                                                      <td>{{$category->filename}}</td>
                                                                      <td>{{$category->filesize}} KB</td>
                                                                      <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                                                      <td class="text-right py-0 align-middle">
                                                                        <div class="btn-group btn-group-sm">
                                                                          <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                                          <a href="/download/{{$category->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                                          <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                                                          {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                                                            {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                                                          {{ Form::close()}}
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
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading2">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                                            Arizona
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                                                    <div class="panel-body px-3 mb-4">
                                                      <div class="col">
                                                        <div class="card card-danger card-outline">
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
                                                                    @if(count($arizona) > 0)
                                                                    @foreach($arizona as $category)
                                                                      <tr>
                                                                      <td>{{$category->filename}}</td>
                                                                      <td>{{$category->filesize}} KB</td>
                                                                      <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                                                      <td class="text-right py-0 align-middle">
                                                                        <div class="btn-group btn-group-sm">
                                                                          <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                                          <a href="/download/{{$category->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                                          <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                                                          {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                                                            {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                                                          {{ Form::close()}}
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
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading3">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                                            California
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                                    <div class="panel-body px-3 mb-4">
                                                      <div class="col">
                                                        <div class="card card-danger card-outline">
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
                                                                    @if(count($california) > 0)
                                                                    @foreach($california as $category)
                                                                      <tr>
                                                                      <td>{{$category->filename}}</td>
                                                                      <td>{{$category->filesize}} KB</td>
                                                                      <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                                                      <td class="text-right py-0 align-middle">
                                                                        <div class="btn-group btn-group-sm">
                                                                          <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                                          <a href="/download/{{$category->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                                          <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                                                          {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                                                            {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                                                          {{ Form::close()}}
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
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading4">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                                            Colorado
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                                    <div class="panel-body px-3 mb-4">
                                                      <div class="col">
                                                        <div class="card card-danger card-outline">
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
                                                                    @if(count($colorado) > 0)
                                                                    @foreach($colorado as $category)
                                                                      <tr>
                                                                      <td>{{$category->filename}}</td>
                                                                      <td>{{$category->filesize}} KB</td>
                                                                      <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                                                      <td class="text-right py-0 align-middle">
                                                                        <div class="btn-group btn-group-sm">
                                                                          <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                                          <a href="/download/{{$category->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                                          <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                                                          {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                                                            {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                                                          {{ Form::close()}}
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
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading5">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                                            Delaware
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                                                    <div class="panel-body px-3 mb-4">
                                                      <div class="col">
                                                        <div class="card card-danger card-outline">
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
                                                                    @if(count($delaware) > 0)
                                                                    @foreach($delaware as $category)
                                                                      <tr>
                                                                      <td>{{$category->filename}}</td>
                                                                      <td>{{$category->filesize}} KB</td>
                                                                      <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                                                      <td class="text-right py-0 align-middle">
                                                                        <div class="btn-group btn-group-sm">
                                                                          <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                                          <a href="/download/{{$category->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                                          <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                                                          {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                                                            {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                                                          {{ Form::close()}}
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
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading6">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="true" aria-controls="collapse6">
                                                            Florida
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
                                                    <div class="panel-body px-3 mb-4">
                                                      <div class="col">
                                                        <div class="card card-danger card-outline">
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
                                                                    @if(count($florida) > 0)
                                                                    @foreach($florida as $category)
                                                                      <tr>
                                                                      <td>{{$category->filename}}</td>
                                                                      <td>{{$category->filesize}} KB</td>
                                                                      <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                                                      <td class="text-right py-0 align-middle">
                                                                        <div class="btn-group btn-group-sm">
                                                                          <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                                          <a href="/download/{{$category->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                                          <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                                                          {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                                                            {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                                                          {{ Form::close()}}
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
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading7">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="true" aria-controls="collapse7">
                                                            Georgia
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                                                    <div class="panel-body px-3 mb-4">
                                                      <div class="col">
                                                        <div class="card card-danger card-outline">
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
                                                                    @if(count($georgia) > 0)
                                                                    @foreach($georgia as $category)
                                                                      <tr>
                                                                      <td>{{$category->filename}}</td>
                                                                      <td>{{$category->filesize}} KB</td>
                                                                      <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                                                      <td class="text-right py-0 align-middle">
                                                                        <div class="btn-group btn-group-sm">
                                                                          <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                                          <a href="/download/{{$category->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                                          <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                                                          {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                                                            {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                                                          {{ Form::close()}}
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
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading8">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="true" aria-controls="collapse8">
                                                            Idaho
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8">
                                                    <div class="panel-body px-3 mb-4">
                                                      <div class="col">
                                                        <div class="card card-danger card-outline">
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
                                                                    @if(count($idaho) > 0)
                                                                    @foreach($idaho as $category)
                                                                      <tr>
                                                                      <td>{{$category->filename}}</td>
                                                                      <td>{{$category->filesize}} KB</td>
                                                                      <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                                                      <td class="text-right py-0 align-middle">
                                                                        <div class="btn-group btn-group-sm">
                                                                          <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                                          <a href="/download/{{$category->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                                          <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                                                          {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                                                            {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                                                          {{ Form::close()}}
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
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading9">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="true" aria-controls="collapse9">
                                                            Illinois
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading9">
                                                    <div class="panel-body px-3 mb-4">
                                                      <div class="col">
                                                        <div class="card card-danger card-outline">
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
                                                                    @if(count($illinois) > 0)
                                                                    @foreach($illinois as $category)
                                                                      <tr>
                                                                      <td>{{$category->filename}}</td>
                                                                      <td>{{$category->filesize}} KB</td>
                                                                      <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                                                      <td class="text-right py-0 align-middle">
                                                                        <div class="btn-group btn-group-sm">
                                                                          <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                                          <a href="/download/{{$category->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                                          <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                                                          {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                                                            {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                                                          {{ Form::close()}}
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
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading10">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="true" aria-controls="collapse10">
                                                            Indiana
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading10">
                                                    <div class="panel-body px-3 mb-4">
                                                      <div class="col">
                                                        <div class="card card-danger card-outline">
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
                                                                    @if(count($indiana) > 0)
                                                                    @foreach($indiana as $category)
                                                                      <tr>
                                                                      <td>{{$category->filename}}</td>
                                                                      <td>{{$category->filesize}} KB</td>
                                                                      <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                                                      <td class="text-right py-0 align-middle">
                                                                        <div class="btn-group btn-group-sm">
                                                                          <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                                          <a href="/download/{{$category->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                                          <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                                                          {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                                                            {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                                                          {{ Form::close()}}
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
                                                <div class="panel panel-default">
                                                    <div class="panel-heading p-0 mb-0" role="tab" id="heading11">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="true" aria-controls="collapse11">
                                                            Kentucky
                                                        </a>
                                                    </h5>
                                                    <hr class="p-0"/>
                                                    </div>
                                                    <div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11">
                                                    <div class="panel-body px-3 mb-4">
                                                      <div class="col">
                                                        <div class="card card-danger card-outline">
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
                                                                    @if(count($kentucky) > 0)
                                                                    @foreach($kentucky as $category)
                                                                      <tr>
                                                                      <td>{{$category->filename}}</td>
                                                                      <td>{{$category->filesize}} KB</td>
                                                                      <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                                                      <td class="text-right py-0 align-middle">
                                                                        <div class="btn-group btn-group-sm">
                                                                          <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                                          <a href="/download/{{$category->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                                          <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                                                          {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                                                            {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                                                          {{ Form::close()}}
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
                                              </section>
                                            </div>
                                          </div>
<!-- Page 2 -->
                                          <div class="tab-pane fade" id="nav-page2" role="tabpanel" aria-labelledby="nav-page2-tab">
                                            <div class="card-body">
                                                <!-- /.card-header -->
                                                <section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
                                                    <div class="container">
                                                
                                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                          <div class="panel panel-default">
                                                            <div class="panel-heading p-0 mb-0" role="tab" id="heading12">
                                                            <h5 class="panel-title">
                                                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="true" aria-controls="collapse12">
                                                                    Louisiana
                                                                </a>
                                                            </h5>
                                                            <hr class="p-0"/>
                                                            </div>
                                                            <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading12">
                                                            <div class="panel-body px-3 mb-4">
                                                              <div class="col">
                                                                <div class="card card-danger card-outline">
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
                                                                            @if(count($louisiana) > 0)
                                                                            @foreach($louisiana as $category)
                                                                              <tr>
                                                                              <td>{{$category->filename}}</td>
                                                                              <td>{{$category->filesize}} KB</td>
                                                                              <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                                                              <td class="text-right py-0 align-middle">
                                                                                <div class="btn-group btn-group-sm">
                                                                                  <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                                                  <a href="/download/{{$category->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                                                  <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                                                                  {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                                                                    {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                                                                  {{ Form::close()}}
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
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading p-0 mb-0" role="tab" id="heading13">
                                                            <h5 class="panel-title">
                                                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="true" aria-controls="collapse13">
                                                                    Maryland
                                                                </a>
                                                            </h5>
                                                            <hr class="p-0"/>
                                                            </div>
                                                            <div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading13">
                                                            <div class="panel-body px-3 mb-4">
                                                              <div class="col">
                                                                <div class="card card-danger card-outline">
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
                                                                            @if(count($maryland) > 0)
                                                                            @foreach($maryland as $category)
                                                                              <tr>
                                                                              <td>{{$category->filename}}</td>
                                                                              <td>{{$category->filesize}} KB</td>
                                                                              <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                                                              <td class="text-right py-0 align-middle">
                                                                                <div class="btn-group btn-group-sm">
                                                                                  <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                                                  <a href="/download/{{$category->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                                                  <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                                                                  {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                                                                    {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                                                                  {{ Form::close()}}
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
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading p-0 mb-0" role="tab" id="heading14">
                                                            <h5 class="panel-title">
                                                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse14" aria-expanded="true" aria-controls="collapse14">
                                                                    Massachusetts
                                                                </a>
                                                            </h5>
                                                            <hr class="p-0"/>
                                                            </div>
                                                            <div id="collapse14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading14">
                                                            <div class="panel-body px-3 mb-4">
                                                              <div class="col">
                                                                <div class="card card-danger card-outline">
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
                                                                            @if(count($massachusetts) > 0)
                                                                            @foreach($massachusetts as $category)
                                                                              <tr>
                                                                              <td>{{$category->filename}}</td>
                                                                              <td>{{$category->filesize}} KB</td>
                                                                              <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                                                              <td class="text-right py-0 align-middle">
                                                                                <div class="btn-group btn-group-sm">
                                                                                  <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                                                  <a href="/download/{{$category->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                                                  <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                                                                  {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                                                                    {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                                                                  {{ Form::close()}}
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
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading p-0 mb-0" role="tab" id="heading15">
                                                            <h5 class="panel-title">
                                                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse15" aria-expanded="true" aria-controls="collapse15">
                                                                    Minnesota
                                                                </a>
                                                            </h5>
                                                            <hr class="p-0"/>
                                                            </div>
                                                            <div id="collapse15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading15">
                                                            <div class="panel-body px-3 mb-4">
                                                              <div class="col">
                                                                <div class="card card-danger card-outline">
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
                                                                            @if(count($minnesota) > 0)
                                                                            @foreach($minnesota as $category)
                                                                              <tr>
                                                                              <td>{{$category->filename}}</td>
                                                                              <td>{{$category->filesize}} KB</td>
                                                                              <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                                                              <td class="text-right py-0 align-middle">
                                                                                <div class="btn-group btn-group-sm">
                                                                                  <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                                                  <a href="/download/{{$category->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                                                  <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                                                                  {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                                                                    {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                                                                  {{ Form::close()}}
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
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading p-0 mb-0" role="tab" id="heading16">
                                                            <h5 class="panel-title">
                                                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse16" aria-expanded="true" aria-controls="collapse16">
                                                                    Nevada
                                                                </a>
                                                            </h5>
                                                            <hr class="p-0"/>
                                                            </div>
                                                            <div id="collapse16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading16">
                                                            <div class="panel-body px-3 mb-4">
                                                              <div class="col">
                                                                <div class="card card-danger card-outline">
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
                                                                            @if(count($nevada) > 0)
                                                                            @foreach($nevada as $category)
                                                                              <tr>
                                                                              <td>{{$category->filename}}</td>
                                                                              <td>{{$category->filesize}} KB</td>
                                                                              <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                                                              <td class="text-right py-0 align-middle">
                                                                                <div class="btn-group btn-group-sm">
                                                                                  <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                                                  <a href="/download/{{$category->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                                                  <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                                                                  {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                                                                    {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                                                                  {{ Form::close()}}
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
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading p-0 mb-0" role="tab" id="heading17">
                                                            <h5 class="panel-title">
                                                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse17" aria-expanded="true" aria-controls="collapse17">
                                                                    New Jersey
                                                                </a>
                                                            </h5>
                                                            <hr class="p-0"/>
                                                            </div>
                                                            <div id="collapse17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading17">
                                                            <div class="panel-body px-3 mb-4">
                                                              <div class="col">
                                                                <div class="card card-danger card-outline">
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
                                                                            @if(count($newJersey) > 0)
                                                                            @foreach($newJersey as $category)
                                                                              <tr>
                                                                              <td>{{$category->filename}}</td>
                                                                              <td>{{$category->filesize}} KB</td>
                                                                              <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                                                              <td class="text-right py-0 align-middle">
                                                                                <div class="btn-group btn-group-sm">
                                                                                  <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                                                  <a href="/download/{{$category->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                                                  <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                                                                  {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                                                                    {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                                                                  {{ Form::close()}}
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
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading p-0 mb-0" role="tab" id="heading18">
                                                            <h5 class="panel-title">
                                                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse18" aria-expanded="true" aria-controls="collapse18">
                                                                    North Carolina
                                                                </a>
                                                            </h5>
                                                            <hr class="p-0"/>
                                                            </div>
                                                            <div id="collapse18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading18">
                                                            <div class="panel-body px-3 mb-4">
                                                              <div class="col">
                                                                <div class="card card-danger card-outline">
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
                                                                            @if(count($northCarolina) > 0)
                                                                            @foreach($northCarolina as $category)
                                                                              <tr>
                                                                              <td>{{$category->filename}}</td>
                                                                              <td>{{$category->filesize}} KB</td>
                                                                              <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                                                              <td class="text-right py-0 align-middle">
                                                                                <div class="btn-group btn-group-sm">
                                                                                  <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                                                  <a href="/download/{{$category->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                                                  <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                                                                  {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                                                                    {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                                                                  {{ Form::close()}}
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
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading p-0 mb-0" role="tab" id="heading19">
                                                            <h5 class="panel-title">
                                                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse19" aria-expanded="true" aria-controls="collapse19">
                                                                    Oregon
                                                                </a>
                                                            </h5>
                                                            <hr class="p-0"/>
                                                            </div>
                                                            <div id="collapse19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading19">
                                                            <div class="panel-body px-3 mb-4">
                                                              <div class="col">
                                                                <div class="card card-danger card-outline">
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
                                                                            @if(count($oregon) > 0)
                                                                            @foreach($oregon as $category)
                                                                              <tr>
                                                                              <td>{{$category->filename}}</td>
                                                                              <td>{{$category->filesize}} KB</td>
                                                                              <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                                                              <td class="text-right py-0 align-middle">
                                                                                <div class="btn-group btn-group-sm">
                                                                                  <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                                                  <a href="/download/{{$category->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                                                  <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                                                                  {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                                                                    {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                                                                  {{ Form::close()}}
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
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading p-0 mb-0" role="tab" id="heading20">
                                                            <h5 class="panel-title">
                                                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse20" aria-expanded="true" aria-controls="collapse20">
                                                                    Pennsylvania
                                                                </a>
                                                            </h5>
                                                            <hr class="p-0"/>
                                                            </div>
                                                            <div id="collapse20" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading20">
                                                            <div class="panel-body px-3 mb-4">
                                                              <div class="col">
                                                                <div class="card card-danger card-outline">
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
                                                                            @if(count($pennsylvania) > 0)
                                                                            @foreach($aboutCsc as $category)
                                                                              <tr>
                                                                              <td>{{$category->filename}}</td>
                                                                              <td>{{$category->filesize}} KB</td>
                                                                              <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                                                              <td class="text-right py-0 align-middle">
                                                                                <div class="btn-group btn-group-sm">
                                                                                  <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                                                  <a href="/download/{{$category->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                                                  <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                                                                  {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                                                                    {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                                                                  {{ Form::close()}}
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
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading p-0 mb-0" role="tab" id="heading21">
                                                            <h5 class="panel-title">
                                                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse21" aria-expanded="true" aria-controls="collapse21">
                                                                    South Carolina
                                                                </a>
                                                            </h5>
                                                            <hr class="p-0"/>
                                                            </div>
                                                            <div id="collapse21" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading21">
                                                            <div class="panel-body px-3 mb-4">
                                                              <div class="col">
                                                                <div class="card card-danger card-outline">
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
                                                                            @if(count($southCarolina) > 0)
                                                                            @foreach($southCarolina as $category)
                                                                              <tr>
                                                                              <td>{{$category->filename}}</td>
                                                                              <td>{{$category->filesize}} KB</td>
                                                                              <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                                                              <td class="text-right py-0 align-middle">
                                                                                <div class="btn-group btn-group-sm">
                                                                                  <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                                                  <a href="/download/{{$category->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                                                  <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                                                                  {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                                                                    {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                                                                  {{ Form::close()}}
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
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading p-0 mb-0" role="tab" id="heading22">
                                                            <h5 class="panel-title">
                                                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse22" aria-expanded="true" aria-controls="collapse22">
                                                                    Tennessee
                                                                </a>
                                                            </h5>
                                                            <hr class="p-0"/>
                                                            </div>
                                                            <div id="collapse22" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading22">
                                                            <div class="panel-body px-3 mb-4">
                                                              <div class="col">
                                                                <div class="card card-danger card-outline">
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
                                                                            @if(count($tennessee) > 0)
                                                                            @foreach($tennessee as $category)
                                                                              <tr>
                                                                              <td>{{$category->filename}}</td>
                                                                              <td>{{$category->filesize}} KB</td>
                                                                              <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                                                              <td class="text-right py-0 align-middle">
                                                                                <div class="btn-group btn-group-sm">
                                                                                  <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                                                  <a href="/download/{{$category->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                                                  <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                                                                  {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                                                                    {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                                                                  {{ Form::close()}}
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
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading p-0 mb-0" role="tab" id="heading23">
                                                            <h5 class="panel-title">
                                                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse23" aria-expanded="true" aria-controls="collapse23">
                                                                    Texas
                                                                </a>
                                                            </h5>
                                                            <hr class="p-0"/>
                                                            </div>
                                                            <div id="collapse23" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading23">
                                                            <div class="panel-body px-3 mb-4">
                                                              <div class="col">
                                                                <div class="card card-danger card-outline">
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
                                                                            @if(count($texas) > 0)
                                                                            @foreach($texas as $category)
                                                                              <tr>
                                                                              <td>{{$category->filename}}</td>
                                                                              <td>{{$category->filesize}} KB</td>
                                                                              <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                                                              <td class="text-right py-0 align-middle">
                                                                                <div class="btn-group btn-group-sm">
                                                                                  <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                                                  <a href="/download/{{$category->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                                                  <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                                                                  {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                                                                    {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                                                                  {{ Form::close()}}
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
                                                  </section>
                                              </div>
                                            </div>
<!-- Page 3 -->
                                            <div class="tab-pane fade" id="nav-page3" role="tabpanel" aria-labelledby="nav-page3-tab">
                                                <div class="card-body">
                                                    <!-- /.card-header -->
                                                    <section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
                                                        <div class="container">
                                                    
                                                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                              <div class="panel panel-default">
                                                                <div class="panel-heading p-0 mb-0" role="tab" id="heading24">
                                                                <h5 class="panel-title">
                                                                    <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse24" aria-expanded="true" aria-controls="collapse24">
                                                                        Utah
                                                                    </a>
                                                                </h5>
                                                                <hr class="p-0"/>
                                                                </div>
                                                                <div id="collapse24" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading24">
                                                                <div class="panel-body px-3 mb-4">
                                                                  <div class="col">
                                                                    <div class="card card-danger card-outline">
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
                                                                                @if(count($utah) > 0)
                                                                                @foreach($utah as $category)
                                                                                  <tr>
                                                                                  <td>{{$category->filename}}</td>
                                                                                  <td>{{$category->filesize}} KB</td>
                                                                                  <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                                                                  <td class="text-right py-0 align-middle">
                                                                                    <div class="btn-group btn-group-sm">
                                                                                      <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                                                      <a href="/download/{{$category->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                                                      <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                                                                      {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                                                                        {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                                                                      {{ Form::close()}}
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
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading p-0 mb-0" role="tab" id="heading25">
                                                                <h5 class="panel-title">
                                                                    <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse25" aria-expanded="true" aria-controls="collapse25">
                                                                        Virginia
                                                                    </a>
                                                                </h5>
                                                                <hr class="p-0"/>
                                                                </div>
                                                                <div id="collapse25" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading25">
                                                                <div class="panel-body px-3 mb-4">
                                                                  <div class="col">
                                                                    <div class="card card-danger card-outline">
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
                                                                                @if(count($virginia) > 0)
                                                                                @foreach($virginia as $category)
                                                                                  <tr>
                                                                                  <td>{{$category->filename}}</td>
                                                                                  <td>{{$category->filesize}} KB</td>
                                                                                  <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                                                                  <td class="text-right py-0 align-middle">
                                                                                    <div class="btn-group btn-group-sm">
                                                                                      <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                                                      <a href="/download/{{$category->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                                                      <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                                                                      {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                                                                        {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                                                                      {{ Form::close()}}
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
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading p-0 mb-0" role="tab" id="heading26">
                                                                <h5 class="panel-title">
                                                                    <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse26" aria-expanded="true" aria-controls="collapse26">
                                                                        Washington
                                                                    </a>
                                                                </h5>
                                                                <hr class="p-0"/>
                                                                </div>
                                                                <div id="collapse26" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading26">
                                                                <div class="panel-body px-3 mb-4">
                                                                  <div class="col">
                                                                    <div class="card card-danger card-outline">
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
                                                                                @if(count($washington) > 0)
                                                                                @foreach($washington as $category)
                                                                                  <tr>
                                                                                  <td>{{$category->filename}}</td>
                                                                                  <td>{{$category->filesize}} KB</td>
                                                                                  <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                                                                  <td class="text-right py-0 align-middle">
                                                                                    <div class="btn-group btn-group-sm">
                                                                                      <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                                                      <a href="/download/{{$category->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                                                      <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                                                                      {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                                                                        {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                                                                      {{ Form::close()}}
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
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading p-0 mb-0" role="tab" id="heading27">
                                                                <h5 class="panel-title">
                                                                    <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse27" aria-expanded="true" aria-controls="collapse27">
                                                                        Washington D.C.
                                                                    </a>
                                                                </h5>
                                                                <hr class="p-0"/>
                                                                </div>
                                                                <div id="collapse27" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading27">
                                                                <div class="panel-body px-3 mb-4">
                                                                  <div class="col">
                                                                    <div class="card card-danger card-outline">
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
                                                                                @if(count($washingtonDc) > 0)
                                                                                @foreach($washingtonDc as $category)
                                                                                  <tr>
                                                                                  <td>{{$category->filename}}</td>
                                                                                  <td>{{$category->filesize}} KB</td>
                                                                                  <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                                                                  <td class="text-right py-0 align-middle">
                                                                                    <div class="btn-group btn-group-sm">
                                                                                      <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                                                      <a href="/download/{{$category->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                                                      <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                                                                      {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                                                                        {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                                                                      {{ Form::close()}}
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
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading p-0 mb-0" role="tab" id="heading28">
                                                                <h5 class="panel-title">
                                                                    <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse28" aria-expanded="true" aria-controls="collapse28">
                                                                        Wisconsin
                                                                    </a>
                                                                </h5>
                                                                <hr class="p-0"/>
                                                                </div>
                                                                <div id="collapse28" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading28">
                                                                <div class="panel-body px-3 mb-4">
                                                                  <div class="col">
                                                                    <div class="card card-danger card-outline">
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
                                                                                @if(count($wisconsin) > 0)
                                                                                @foreach($wisconsin as $category)
                                                                                  <tr>
                                                                                  <td>{{$category->filename}}</td>
                                                                                  <td>{{$category->filesize}} KB</td>
                                                                                  <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                                                                                  <td class="text-right py-0 align-middle">
                                                                                    <div class="btn-group btn-group-sm">
                                                                                      <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                                                                      <a href="/download/{{$category->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                                                      <a href="/download/{{$category->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                                                                      {{ Form::open(['action' => ['UploadController@destroy', $category->id], 'method' => 'DELETE']) }}
                                                                                        {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                                                                                      {{ Form::close()}}
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
                                                    </section>   
                                                </div>
                                                <!-- /.card -->
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

@stop
