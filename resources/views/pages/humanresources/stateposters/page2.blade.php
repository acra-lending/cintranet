<div class="tab-pane fade" id="nav-page2" role="tabpanel" aria-labelledby="nav-page2-tab">
    <div class="card-body">
        <section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
            <div class="container">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
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
                                                    <th>@sortablelink('filename', 'File Name')</th>
                                                    <th>@sortablelink('filesize', 'File Size')</th>
                                                    <th>@sortablelink('created_at', 'Created At')</th>
                                                    <th></th>
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
                                                    <th>@sortablelink('filename', 'File Name')</th>
                                                    <th>@sortablelink('filesize', 'File Size')</th>
                                                    <th>@sortablelink('created_at', 'Created At')</th>
                                                    <th></th>
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
                                                    <th>@sortablelink('filename', 'File Name')</th>
                                                    <th>@sortablelink('filesize', 'File Size')</th>
                                                    <th>@sortablelink('created_at', 'Created At')</th>
                                                    <th></th>
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
                                                    <th>@sortablelink('filename', 'File Name')</th>
                                                    <th>@sortablelink('filesize', 'File Size')</th>
                                                    <th>@sortablelink('created_at', 'Created At')</th>
                                                    <th></th>
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
                                                    <th>@sortablelink('filename', 'File Name')</th>
                                                    <th>@sortablelink('filesize', 'File Size')</th>
                                                    <th>@sortablelink('created_at', 'Created At')</th>
                                                    <th></th>
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
                                                    <th>@sortablelink('filename', 'File Name')</th>
                                                    <th>@sortablelink('filesize', 'File Size')</th>
                                                    <th>@sortablelink('created_at', 'Created At')</th>
                                                    <th></th>
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
                                                    <th>@sortablelink('filename', 'File Name')</th>
                                                    <th>@sortablelink('filesize', 'File Size')</th>
                                                    <th>@sortablelink('created_at', 'Created At')</th>
                                                    <th></th>
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
                                                    <th>@sortablelink('filename', 'File Name')</th>
                                                    <th>@sortablelink('filesize', 'File Size')</th>
                                                    <th>@sortablelink('created_at', 'Created At')</th>
                                                    <th></th>
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
                                                    <th>@sortablelink('filename', 'File Name')</th>
                                                    <th>@sortablelink('filesize', 'File Size')</th>
                                                    <th>@sortablelink('created_at', 'Created At')</th>
                                                    <th></th>
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
                                                    <th>@sortablelink('filename', 'File Name')</th>
                                                    <th>@sortablelink('filesize', 'File Size')</th>
                                                    <th>@sortablelink('created_at', 'Created At')</th>
                                                    <th></th>
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
        </section>
    </div>
</div>