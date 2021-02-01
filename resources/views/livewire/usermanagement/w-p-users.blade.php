<div>
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <div class="card card-danger">
                <div class="card-header">
                    <div class="row">
                    <h3 class="card-title"><i class="fas fa-user"></i> Users Per Page: &nbsp;</h3>
                    <div class="col-xs-2 float-left form-inline">
                        <select wire:model="perPage" class="form-control">
                            <option>10</option>
                            <option>15</option>
                            <option>25</option>
                        </select>
                    </div>
                    <!-- SEARCH FORM -->
                    <div class="col float-right">
                      <div class="input-group input-group">
                        <input class="form-control form-control-navbar" wire:model="searchTerm" type="text" placeholder="Search Name or Email" aria-label="Search" autofocus="autofocus">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit" style="right: 40px;">
                            <i class="fas fa-search"></i>
                            </button>
                        </div>
                      </div>
                    </div>
                    {{-- </form> --}}
                </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  @if(count($users) > 0)
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th class="w-25"><a wire:click.prevent="sortBy('user_login')" role="button" href="#">
                            Username 
                            @include('includes._sort-icon', ['field' => 'user_login'])
                        </a></th>
                        <th class="w-25"><a wire:click.prevent="sortBy('display_name')" role="button" href="#">
                            Name 
                            @include('includes._sort-icon', ['field' => 'name'])
                        </a></th>
                        <th class="w-0"><a wire:click.prevent="sortBy('user_email')" role="button" href="#">
                            Email 
                            @include('includes._sort-icon', ['field' => 'email'])
                        </a></th>
                        {{-- <th class="w-0">Role(s)</th> --}}
                        <th class="w-0"><a wire:click.prevent="sortBy('user_registered')" role="button" href="#">
                            Register Date 
                            @include('includes._sort-icon', ['field' => 'user_registered'])
                        </a></th>
                        {{-- <th class="w-0"><a wire:click.prevent="sortBy('lastvisitDate')" role="button" href="#">
                            Last Login 
                            @include('includes._sort-icon', ['field' => 'lastvisitDate'])
                        </a></th> --}}
                        <th class="w-0">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        {{-- {{dd($user)}} --}}
                      <tr>
                        <td>{{$user->user_login}}</p></td>
                        <td>{{$user->display_name}}</p></td>
                        <td>{{$user->user_email}}</td>
                        {{-- <td>{{implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td> --}}
                        <td>{{ Carbon\Carbon::parse($user->user_registered)->format('Y-m-d') }}</td>
                        {{-- <td>{{ Carbon\Carbon::parse($user->lastvisitDate)->format('Y-m-d') }}</td> --}}
                        <td>
                          @can('edit-users')
                          <a href="{{ url('usermanagement/wpusers/edit', $user->ID)}}"><button class="float-left btn btn-outline-dark">Edit</button></a>
                          @endcan
                          @can('manage-users')
                          {{ Form::open(['action' => ['BrokerPortalRequestsController@destroy', $user->ID], 'method' => 'DELETE', 'class' => 'float-left pl-1']) }}
                          {{ Form::submit('Delete', ['class' => 'btn btn-outline-danger', 'onclick' => "return confirm('Are you sure?')"]) }}
                          {{ Form::close() }}
                          @endcan
                          {{-- <a href="{{ route('admin.user.destroy', $user->id)}}" method="POST"><button class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</button></a> --}}
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  @else
                  <div class="container pt-2">
                    <p>No Users Found</p>
                  </div>
                  @endif
                </div>
              </div>
              <div class="row">
                <div class="col">
                    {{$users->links()}}
                </div>
                <div class="col text-right text-muted">
                    Showing {{$users->firstItem()}} to {{$users->lastItem()}} out of {{$users->total()}} results
              </div>
            </div>
        </div>
      </div>
    </div>
</div>
