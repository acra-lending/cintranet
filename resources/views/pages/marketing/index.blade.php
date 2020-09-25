@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Marketing</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="/marketing">Marketing</a></li>
                <li class="breadcrumb-item">Requests & Materials</a></li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
            <!-- Main content -->
        <style>

        .card-danger:not(.card-outline) .card-header {
        background: linear-gradient(138deg, rgba(171,35,40,1) 0%, rgba(52,58,64,1) 45%);
        }
        
        </style>

        <section class="content">
            @include('pages.modals.modal-forms')
            <div class="container">
                <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-10">
                    <div class="card card-danger card-outline">
                        <div class="card-header">
                            <h4 class="card-title">
                            <i class="fas fa-toolbox"></i>    
                                Marketing Resources</h4>
                        </div>
                        <div class="card-body">

                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-request-tab" data-toggle="tab" href="#nav-request" role="tab" aria-controls="nav-request" aria-selected="true">Request Form</a>
                                <a class="nav-item nav-link" id="nav-materials-tab" data-toggle="tab" href="#nav-materials" role="tab" aria-controls="nav-materials" aria-selected="false">Materials & Reference</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-request" role="tabpanel" aria-labelledby="nav-request-tab">
                                    <div class="card-body">
                                        <p>
                                            This form is to be used by all Citadel Servicing Corporation (“CSC”) employees to request development of any and all advertising, marketing, or promotional materials, including on materials posted to social media.
                                        </p>
                                        <p>
                                            CSC employees are <strong>NOT</strong> to issue, produce, post, or in any way distribute marketing materials that have not been approved in advance by the Marketing, Legal and Compliance Departments.
                                        </p>
                                        <p>
                                            All fields on this form should be filled out as much as possible. Any supporting documents should be submitted via email to: <a href="mailto:marketing@citadelservicing.com">marketing@citadelservicing.com</a>.
                                        </p> 
                                        <p>
                                            Please allow for a turnaround time of <strong>10-12 business days</strong> when requesting marketing materials. You may be contacted by a member of the Marketing Department regarding your request.
                                        </p>
                                        <hr/>
                                        <!-- form start -->
                                        <form role="form" action="{{ url('marketing') }}" method="POST">
                                            @csrf
                                                <h4>Contact Information</h4>
                                                <hr/>
                                                <div class="row card-footer">
                                                    <div class="col">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="department">Department</label>
                                                            <input type="text" class="form-control" name="department" id="department" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="email">Email</label>
                                                            <input type="email" class="form-control" name="email" id="email" placeholder="" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row card-footer">
                                                    <div class="col">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="requestorName">Requestor's Name</label>
                                                            <input type="text" class="form-control" name="name" id="name" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="phone">Phone</label>
                                                            <input type="text" class="form-control" name="phone" id="phone" placeholder="" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr/>
                                                <h4>Project Specifications</h4>
                                                <hr/>
                                                <div class="row card-footer">
                                                    <div class="col">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="project">This is a(n):</label>
                                                            <div class="">
                                                                <select class="form-control" name="selectProject" required>
                                                                    <option value="New Project">New Project</option>
                                                                    <option value="Existing Project">Existing Project</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="projectName">Project Name</label>
                                                            <input type="text" class="form-control" name="projectName" id="projectName" placeholder="" required>   
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row card-footer">
                                                    <div class="col">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="selectRequest">Select Request</label>
                                                            <div class="">
                                                                <select class="form-control" name="selectRequest" required>
                                                                    <option value="Flyer">Flyer</option>
                                                                    <option value="Mailer Piece">Mailer Piece</option>
                                                                    <option value="Video">Video</option>
                                                                    <option value="Print Advertisement">Print Advertisement</option>
                                                                    <option value="Webpage Post">Webpage Post</option>
                                                                    <option value="Social Media Post">Social Media Post</option>
                                                                    <option value="Other">Other</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="targetAudience">Target Audience</label>
                                                            <div class="">
                                                                <select class="form-control" name="selectAudience" required>
                                                                    <option value="Brokers">Brokers</option>
                                                                    <option value="Correspondents">Correspondents</option>
                                                                    <option value="Potential Borrowers">Potential Borrowers</option>
                                                                    <option value="Current Borrowers">Current Borrowers</option>
                                                                    <option value="General Public">General Public</option>
                                                                    <option value="Other">Other</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row card-footer">
                                                    <div class="col-sm-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="bodyMessage">Message</label>
                                                            <textarea class="form-control" rows="3" name="bodyMessage" id="bodyMessage" placeholder="What is the focus of the advertisement?"></textarea> 
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="relevantInfo">Relevant Information</label>
                                                            <textarea class="form-control" rows="3" name="relevantInfo" id="relevantInfo" placeholder="Include any relevant background information..."></textarea> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr/>
                                                <h4>Additional Specifications</h4>
                                                <hr/>
                                                <div class="row card-footer">
                                                    <div class="col">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="estimatedQuantity">Estimated Quantity</label>
                                                            <input type="text" class="form-control" rows="1" name="estimatedQuantity" id="estimatedQuantity" required> 
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="requestDueDate">Requested Due Date</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                  <span class="input-group-text">
                                                                    <i class="far fa-calendar-alt"></i>
                                                                  </span>
                                                                </div>
                                                                <input type="text" class="form-control float-right" name="requestDueDate" id="requestDate" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row card-footer">
                                                    <div class="col-sm-12 col-md-6">
                                                        <div class="form-group required">
                                                            <label class="control-label" for="statesDistributed">States materials will be distributed in</label>
                                                            <textarea class="form-control" rows="3" name="statesDistributed" id="statesDistributed" placeholder="e.g., California, Oregon, Nevada..." required></textarea> 
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group required">
                                                            <label class ="control-label" for="dateRange">Dates materials will be in circulation</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                  <span class="input-group-text">
                                                                    <i class="far fa-calendar-alt"></i>
                                                                  </span>
                                                                </div>
                                                                <input type="text" class="form-control float-right" name="dateRange" id="dateRange" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr/>
                                            <!-- /.card-body -->
                            
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-outline-danger">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                                <div class="tab-pane fade" id="nav-materials" role="tabpanel" aria-labelledby="nav-materials-tab">
                                    <div class="card-body">
                                        <!-- /.card-header -->
                                        <!-- Materials And Reference -->        
                                        <div class="col">
                                            <div class="card card-danger">
                                            <div class="card-header border-0">
                                                <h3 class="card-title">Materials & Reference</h3>
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
                                                    @if(count($marketingMaterials) > 0)
                                                    @foreach($marketingMaterials as $category)
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
                    </div><!-- /.card -->
                </div> <!-- /.col -->
            </div><!-- /.row -->
            </div><!-- Container -->
        </section>
    </div>
@push('includes.scripts')
<script src="{{ asset('js/pages/datepicker.js') }}"></script>
@endpush
@stop