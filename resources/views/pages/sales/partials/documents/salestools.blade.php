<div class="tab-pane fade" id="nav-sales-tools" role="tabpanel" aria-labelledby="nav-sales-tools-tab">
    <div class="row">
      <div class="col-sm-2">
        <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="vert-tabs-sales-tools-tab" data-toggle="pill" href="#vert-tabs-sales-tools" role="tab" aria-controls="vert-tabs-retail-docs" aria-selected="true">Documents</a>
        </div>
      </div>
      <div class="col">
          <div class="card card-dark">
          <div class="card-header border-0">
              <h3 class="card-title">Sales Tool Documents</h3>
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
                  </tr>
              </thead>
              <tbody>
                  @if(count($salesTools) > 0)
                  @foreach($salesTools as $category)
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