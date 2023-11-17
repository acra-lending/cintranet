<div class="tab-pane fade" id="vert-tabs-dscr-non-owner-occupied" role="tabpanel" aria-labelledby="vert-tabs-dscr-tab-non-owner-occupied">      
    <div class="col">
      <div class="card card-danger">
        <div class="card-header border-0">
          <h3 class="card-title">Non Owner Occupied</h3>
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
              @if(!empty($nonOwnerOccu))
              @foreach($nonOwnerOccu as $nonOwnerOcc)

                <tr>
                <td>{{$nonOwnerOcc->filename}}</td>
                <td>{{($nonOwnerOcc->filesize)}} KB</td>
                <td>{{ Carbon\Carbon::parse($nonOwnerOcc->created_at)->format('m-d-Y') }}</td>
                <td class="text-right py-0 align-middle">
                  <div class="btn-group btn-group-sm">
                    <a href="{{ route('show', $nonOwnerOcc->filename) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                    @can('edit-users')
                    <a href="#" class="btn btn-warning" data-filename="{{ $nonOwnerOcc->filename}}" data-category_id="{{ $nonOwnerOcc->category_id }}" data-file_id="{{ $nonOwnerOcc->id }}"  data-toggle="modal" data-target="#editForm"><i class="fas fa-edit"></i></a>
                    @endcan
                    <a href="/download/{{$nonOwnerOcc->filename}}" download class="btn btn-info"><i class="fas fa-file-download"></i></a>
                    @can('delete-users')
                    {{ Form::open(['action' => ['UploadController@destroy', $nonOwnerOcc->id], 'method' => 'DELETE']) }}
                      {{ Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"])}}
                    {{ Form::close()}}
                    @endcan
                  </div>
                </td>
                </tr>
            @endforeach
            @endif
            </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>