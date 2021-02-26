<div>
    <div class="container-fluid">
        <div class="row">
            <div class=col-12>
            <div class="card card-danger">
                <div class="card-header">
                    <h4 class="card-title">Directory Search</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 col-xl-4 pt-3" >
                            <input class="form-control" wire:model="search" value="" type="text" placeholder="Search Name or Email">
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4 pt-3" >
                            <select wire:model="search" class="form-control" placeholder="Department">
                                <option value="" disabled selected>Department</option>
                                @foreach($departments as $department)
                                    <option value="{{ $department }}">{{ str_replace(array('[', '"', ']'), '', $department) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4 pt-3" >
                            <select wire:model="search" class="form-control" placeholder="Position">
                                <option value="" disabled selected>Position</option>
                                @foreach($positions as $position)
                                <option value="{{ $position }}">{{ $position }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row float-right">
                        <div class="pt-3">
                            <a href="/directory/directory" class="btn btn-dark mr-3">Reset</a>
                        </div>
                    </div>
                    @can('edit-users')
                    <div class="row float-right">
                        <div class="pt-3 mr-3">
                            <a href="/usermanagement/exports" class="btn btn-outline-danger mr-3">Directory List</a>
                        </div>
                    </div>
                    @endcan
                </div>
            </div>
            <div class="row">
                <div class="col">
                    {{$contacts->links('livewire.directory.livewire-paginator')}}
                </div>
                <div class="col text-right text-muted">
                    Showing {{$contacts->firstItem()}} to {{$contacts->lastItem()}} out of {{$contacts->total()}} results
                </div>
            </div>
            <br/>
            <!-- Directory Contacts -->
            <div class="card card-solid">
                <div class="card-body pb-0">
                    <div class="row d-flex align-items-stretch">
                        @if(count($contacts) > 0)
                        @foreach($contacts as $contact)
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                            <div class="card bg-light">
                                <div class="card-header text-muted border-bottom-0">
                                {{str_replace(array('[', '"', ']'), '',$contact->departments)}}
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                        <h2 class="lead"><b>{{$contact->firstname}} {{$contact->lastname}}</b></h2>
                                        <p class="text-muted text-sm"><b>Position: </b> {{$contact->position}} </p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i class="fas fa-envelope"></i></span><a href="mailto:{{$contact->email}}">{{$contact->email}}</a></li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: {{$contact->directphone}} ext {{$contact->extension}}</li>
                                        </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                        <img src="{{ ($contact->avatar) ? url('/storage/avatars/'. $contact->avatar) : asset('img/avatar1.png') }}" alt="user-photo" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <a href="/directory/user/{{$contact->id}}" class="btn btn-sm btn-danger">
                                            <i class="fas fa-user"></i> View Profile
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="container">
                            <p>No Users Found</p>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col livewire-pagination">
                    {{$contacts->links('livewire.directory.livewire-paginator')}}
                </div>
                <div class="col text-right text-muted">
                    Showing {{$contacts->firstItem()}} to {{$contacts->lastItem()}} out of {{$contacts->total()}} results
                </div>
            </div>
        </div>
    </div>
</div>
