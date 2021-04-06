<div class="tab-pane fade show active" id="nav-page1" role="tabpanel" aria-labelledby="nav-page1-tab">
    <div class="card-body">
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
                                                    <th>@sortablelink('filename', 'File Name')</th>
                                                    <th>@sortablelink('filesize', 'File Size')</th>
                                                    <th>@sortablelink('created_at', 'Created At')</th>                                                                  
                                                    <th></th>
                                                    <th></th>
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
                                                    <th>@sortablelink('filename', 'File Name')</th>
                                                    <th>@sortablelink('filesize', 'File Size')</th>
                                                    <th>@sortablelink('created_at', 'Created At')</th>
                                                    <th></th>
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
                                                    <th>@sortablelink('filename', 'File Name')</th>
                                                    <th>@sortablelink('filesize', 'File Size')</th>
                                                    <th>@sortablelink('created_at', 'Created At')</th>
                                                    <th></th>
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
                                                    <th>@sortablelink('filename', 'File Name')</th>
                                                    <th>@sortablelink('filesize', 'File Size')</th>
                                                    <th>@sortablelink('created_at', 'Created At')</th>
                                                    <th></th>
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
                                                    <th>@sortablelink('filename', 'File Name')</th>
                                                    <th>@sortablelink('filesize', 'File Size')</th>
                                                    <th>@sortablelink('created_at', 'Created At')</th>
                                                    <th></th>
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
                                                    <th>@sortablelink('filename', 'File Name')</th>
                                                    <th>@sortablelink('filesize', 'File Size')</th>
                                                    <th>@sortablelink('created_at', 'Created At')</th>
                                                    <th></th>
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
                                                    <th>@sortablelink('filename', 'File Name')</th>
                                                    <th>@sortablelink('filesize', 'File Size')</th>
                                                    <th>@sortablelink('created_at', 'Created At')</th>
                                                    <th></th>
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
                                                    <th>@sortablelink('filename', 'File Name')</th>
                                                    <th>@sortablelink('filesize', 'File Size')</th>
                                                    <th>@sortablelink('created_at', 'Created At')</th>
                                                    <th></th>
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
                                                    <th>@sortablelink('filename', 'File Name')</th>
                                                    <th>@sortablelink('filesize', 'File Size')</th>
                                                    <th>@sortablelink('created_at', 'Created At')</th>
                                                    <th></th>
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
                                                    <th>@sortablelink('filename', 'File Name')</th>
                                                    <th>@sortablelink('filesize', 'File Size')</th>
                                                    <th>@sortablelink('created_at', 'Created At')</th>
                                                    <th></th>
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
            </div>
        </section>
    </div>
</div>