<div class="tab-pane fade show" id="nav-tm" role="tabpanel" aria-labelledby="nav-tm-tab">
    <div class="row">
      <div class="col-sm-4 col-md-3 col-lg-3">
        <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="vert-tabs-tm-systems-tab" data-toggle="pill" href="#vert-tabs-tm-systems" role="tab" aria-controls="vert-tabs-tm-systems" aria-selected="true">Systems</a>
          <a class="nav-link" id="vert-tabs-tm-internal-tab" data-toggle="pill" href="#vert-tabs-tm-internal" role="tab" aria-controls="vert-tabs-tm-internal" aria-selected="false">Internal Forms</a>
          <a class="nav-link" id="vert-tabs-tm-tisp-tab" data-toggle="pill" href="#vert-tabs-tm-tisp" role="tab" aria-controls="vert-tabs-tm-tisp" aria-selected="false">Taxes/Insurance/Subject Property</a>
          <a class="nav-link" id="vert-tabs-tm-vetting-tab" data-toggle="pill" href="#vert-tabs-tm-vetting" role="tab" aria-controls="vert-tabs-tm-vetting" aria-selected="false">Agent Verification</a>
          <a class="nav-link" id="vert-tabs-tm-compliance-tab" data-toggle="pill" href="#vert-tabs-tm-compliance" role="tab" aria-controls="vert-tabs-tm-compliance" aria-selected="false">Compliance</a>
          {{-- <a class="nav-link" id="vert-tabs-tm-processes-tab" data-toggle="pill" href="#vert-tabs-tm-processes" role="tab" aria-controls="vert-tabs-tm-processes" aria-selected="false">Processes</a> --}}
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
          <div class="tab-pane text-left fade show" id="vert-tabs-tm-vetting" role="tabpanel" aria-labelledby="vert-tabs-tm-vetting-tab">
            <!-- /.content-header -->        
            <div class="col">
              <div class="card card-dark">
                <div class="card-header border-0">
                  <h3 class="card-title">Agent Verification</h3>
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
          {{-- <div class="tab-pane text-left fade show" id="vert-tabs-tm-processes" role="tabpanel" aria-labelledby="vert-tabs-tm-processes-tab">
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
          </div> --}}
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