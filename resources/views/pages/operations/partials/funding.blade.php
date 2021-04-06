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