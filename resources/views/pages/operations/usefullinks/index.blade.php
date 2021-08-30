@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Useful Links</h1>
                @can('manage-users')
                <a href="/operations/usefullinks/create" class="mt-3 col-sm-6 col-md-4 col-lg-3 col-xl-2 btn btn-outline-dark">Create Link</a>
                @endcan
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Operations</li>
                <li class="breadcrumb-item">Useful Links</a></li>
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
          @include('pages.modals.modal-links')
          <div class="container">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-10">
  
              <div class="card card-danger card-outline">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-table"></i>
                    Useful Links
                  </h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="vert-tabs-loan-set-up-tab" data-toggle="pill" href="#vert-tabs-loan-set-up" role="tab" aria-controls="vert-tabs-loan-set-up" aria-selected="false">Loan Set Up</a>
                        <a class="nav-link" id="vert-tabs-tm-retail-tab" data-toggle="pill" href="#vert-tabs-tm-retail" role="tab" aria-controls="vert-tabs-tm-retail" aria-selected="false">Transaction Management / Retail Loan Processing</a>
                        <a class="nav-link" id="vert-tabs-underwriting-tab" data-toggle="pill" href="#vert-tabs-underwriting" role="tab" aria-controls="vert-tabs-underwriting" aria-selected="false">Underwriting</a>
                        <a class="nav-link" id="vert-tabs-closing-tab" data-toggle="pill" href="#vert-tabs-closing" role="tab" aria-controls="vert-tabs-closing" aria-selected="false">Closing</a>
                        <a class="nav-link" id="vert-tabs-funding-tab" data-toggle="pill" href="#vert-tabs-funding" role="tab" aria-controls="vert-tabs-funding" aria-selected="false">Funding</a>
                        <a class="nav-link" id="vert-tabs-file-flow-tab" data-toggle="pill" href="#vert-tabs-file-flow" role="tab" aria-controls="vert-tabs-file-flow" aria-selected="false">File Flow - GA Updates</a>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-9">
                      <div class="tab-content" id="vert-tabs-tabContent">
                        <div class="tab-pane fade show active" id="vert-tabs-loan-set-up" role="tabpanel" aria-labelledby="vert-tabs-loan-set-up-tab">
                            <!-- /.content-header -->        
                            <div class="col">
                              <div class="card card-danger">
                                <div class="card-header border-0">
                                  <h3 class="card-title">Loan Set Up</h3>
                                  <div class="card-tools">
                                  </div>
                                </div>
                                <div class="card-body table-responsive p-0">
                                  <table class="table">
                                    <thead>
                                        <tr>
                                          <th>@sortablelink('title', 'Link Title')</th>
                                        <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($loanSetUp as $category)
            
                                        <tr>
                                        <td><a href="{{ $category->url }}" target="_blank">{{$category->title}}</a></td>

                                        <td class="text-right py-0 align-middle">
                                          <div class="btn-group btn-group-sm">
                                            @can('manage-users')
                                            <a 
                                                href="#" 
                                                class="btn btn-warning" 
                                                data-link_title="{{ $category->title }}" 
                                                data-link_url="{{ $category->url }}" 
                                                data-link_category="{{ $category->category }}" 
                                                data-link_id="{{ $category->id }}" 
                                                data-toggle="modal" 
                                                data-target="#editLinks">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            {{ Form::open(['action' => ['UsefulLinksController@destroy', $category->id], 'method' => 'DELETE']) }}
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
                        <div class="tab-pane fade" id="vert-tabs-tm-retail" role="tabpanel" aria-labelledby="vert-tabs-tm-retail-tab">
                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">Transaction Management / Retail Loan Processing</h3>
                                <div class="card-tools">
                                </div>
                              </div>
                              <div class="card-body table-responsive p-0">
                                <table class="table">
                                  <thead>
                                      <tr>
                                        <th>@sortablelink('title', 'Link Title')</th>
                                      <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($TmRetailProcessing as $category)
          
                                      <tr>
                                      <td><a href="{{ $category->url }}" target="_blank">{{$category->title}}</a></td>

                                      <td class="text-right py-0 align-middle">
                                        <div class="btn-group btn-group-sm">
                                          @can('manage-users')
                                          <a 
                                              href="#" 
                                              class="btn btn-warning" 
                                              data-link_title="{{ $category->title }}" 
                                              data-link_url="{{ $category->url }}" 
                                              data-link_category="{{ $category->category }}" 
                                              data-link_id="{{ $category->id }}" 
                                              data-toggle="modal" 
                                              data-target="#editLinks">
                                              <i class="fas fa-edit"></i>
                                          </a>
                                          {{ Form::open(['action' => ['UsefulLinksController@destroy', $category->id], 'method' => 'DELETE']) }}
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
                        <div class="tab-pane fade" id="vert-tabs-underwriting" role="tabpanel" aria-labelledby="vert-tabs-underwriting-tab">
                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">Underwriting</h3>
                                <div class="card-tools">
                                </div>
                              </div>
                              <div class="card-body table-responsive p-0">
                                <table class="table">
                                    <thead>
                                        <tr>
                                          <th>@sortablelink('title', 'Link Title')</th>
                                        <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($underWriting as $category)
            
                                        <tr>
                                        <td><a href="{{ $category->url }}" target="_blank">{{$category->title}}</a></td>

                                        <td class="text-right py-0 align-middle">
                                          <div class="btn-group btn-group-sm">
                                            @can('manage-users')
                                            <a 
                                                href="#" 
                                                class="btn btn-warning" 
                                                data-link_title="{{ $category->title }}" 
                                                data-link_url="{{ $category->url }}" 
                                                data-link_category="{{ $category->category }}" 
                                                data-link_id="{{ $category->id }}" 
                                                data-toggle="modal" 
                                                data-target="#editLinks">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            {{ Form::open(['action' => ['UsefulLinksController@destroy', $category->id], 'method' => 'DELETE']) }}
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
                        <div class="tab-pane fade" id="vert-tabs-closing" role="tabpanel" aria-labelledby="vert-tabs-closing-tab">
                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">Closing</h3>
                                <div class="card-tools">
                                </div>
                              </div>
                              <div class="card-body table-responsive p-0">
                                <table class="table">
                                    <thead>
                                        <tr>
                                          <th>@sortablelink('title', 'Link Title')</th>
                                        <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($closing as $category)
            
                                        <tr>
                                        <td><a href="{{ $category->url }}" target="_blank">{{$category->title}}</a></td>

                                        <td class="text-right py-0 align-middle">
                                          <div class="btn-group btn-group-sm">
                                            @can('manage-users')
                                            <a 
                                                href="#" 
                                                class="btn btn-warning" 
                                                data-link_title="{{ $category->title }}" 
                                                data-link_url="{{ $category->url }}" 
                                                data-link_category="{{ $category->category }}" 
                                                data-link_id="{{ $category->id }}" 
                                                data-toggle="modal" 
                                                data-target="#editLinks">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            {{ Form::open(['action' => ['UsefulLinksController@destroy', $category->id], 'method' => 'DELETE']) }}
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
                        <div class="tab-pane fade" id="vert-tabs-funding" role="tabpanel" aria-labelledby="vert-tabs-funding-tab">
                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">Funding</h3>
                                <div class="card-tools">
                                </div>
                              </div>
                              <div class="card-body table-responsive p-0">
                                <table class="table">
                                    <thead>
                                        <tr>
                                          <th>@sortablelink('title', 'Link Title')</th>
                                        <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($funding as $category)
            
                                        <tr>
                                        <td><a href="{{ $category->url }}" target="_blank">{{$category->title}}</a></td>

                                        <td class="text-right py-0 align-middle">
                                          <div class="btn-group btn-group-sm">
                                            @can('manage-users')
                                            <a 
                                                href="#" 
                                                class="btn btn-warning" 
                                                data-link_title="{{ $category->title }}" 
                                                data-link_url="{{ $category->url }}" 
                                                data-link_category="{{ $category->category }}" 
                                                data-link_id="{{ $category->id }}" 
                                                data-toggle="modal" 
                                                data-target="#editLinks">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            {{ Form::open(['action' => ['UsefulLinksController@destroy', $category->id], 'method' => 'DELETE']) }}
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
                        <div class="tab-pane fade" id="vert-tabs-file-flow" role="tabpanel" aria-labelledby="vert-tabs-file-flow-tab">
                          <!-- /.content-header -->        
                          <div class="col">
                            <div class="card card-danger">
                              <div class="card-header border-0">
                                <h3 class="card-title">File Flow - GA Updates</h3>
                                <div class="card-tools">
                                </div>
                              </div>
                              <div class="card-body table-responsive p-0">
                                <table class="table">
                                    <thead>
                                        <tr>
                                          <th>@sortablelink('title', 'Link Title')</th>
                                        <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($fileFlow as $category)
            
                                        <tr>
                                        <td><a href="{{ $category->url }}">{{$category->title}}</a></td>

                                        <td class="text-right py-0 align-middle">
                                          <div class="btn-group btn-group-sm">
                                            @can('manage-users')
                                            <a 
                                                href="#" 
                                                class="btn btn-warning" 
                                                data-link_title="{{ $category->title }}" 
                                                data-link_url="{{ $category->url }}" 
                                                data-link_category="{{ $category->category }}" 
                                                data-link_id="{{ $category->id }}" 
                                                data-toggle="modal" 
                                                data-target="#editLinks">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            {{ Form::open(['action' => ['UsefulLinksController@destroy', $category->id], 'method' => 'DELETE']) }}
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
          </div>
          </section>
    </div>
    <!-- /.col -->
<!-- ./wrapper -->
@stop