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
