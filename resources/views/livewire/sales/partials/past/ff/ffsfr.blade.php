<div class="tab-pane fade" id="vert-tabs-ff-stabilized-bridge-sfr_past" role="tabpanel" aria-labelledby="vert-tabs-ff-stabilized-bridge-sfr-tab_past" wire:ignore.self>      
    <div class="col">
      <div class="card card-danger">
        <div class="card-header border-0">
          <h3 class="card-title">Fix & Flip / Stabilized Bridge</h3>
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
              @foreach($ffSingleFamily_past as $category) 
                <tr>
                <td>{{$category->filename}}</td>
                <td>{{($category->filesize)}} KB</td>
                <td>{{ Carbon\Carbon::parse($category->created_at)->format('m-d-Y') }}</td>
                <td class="text-right py-0 align-middle">
                  <div class="btn-group btn-group-sm">
                    <a href="{{ route('show', $category->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                    @can('edit-users')
                    <a href="#" class="btn btn-warning" data-filename="{{ $category->filename}}" data-category_id="{{ $category->category_id }}" data-file_id="{{ $category->id }}" data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
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
      {{ $ffSingleFamily_past->links() }}
    </div>
  </div>