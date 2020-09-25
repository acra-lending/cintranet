<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 pb-4">
                <!-- SEARCH FORM -->  
                <div class="input-group input-group" style="width:100%;">
                    <input class="form-control" wire:model="searchTerm" type="text" value="" placeholder="Search Announcements" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit" style="right: 40px;">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                    <a href="/learning/announcements" class="btn btn-danger">Reset</a>
                </div>
            </div>
        </div>
    </div>
    @if(count($posts) > 0)
        @foreach($posts as $post)
        <!--POST TEMPLATE -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <!-- Box Comment -->
                    <div class="card card-danger card-outline">
                    <div class="card-header">

                        <div class="user-block">
                        <img class="img-circle" src="{{ ($post->user->avatar) ? url('/storage/avatars/' .$post->user->avatar) : asset('img/avatar1.png') }}" alt="User Image">
                        <span class="username"><a href="/learning/announcements/{{$post->id}}">
                            @foreach($contacts as $contact)
                            @if($post->user_id == $contact->id){{str_replace(array('[', '"', ']',), '',$contact->departments)}}
                            </a></span>
                            @endif
                            @endforeach
                        <span class="description">{{Carbon\Carbon::parse($post->created_at)->format('Y-m-d')}} by {{$post->user->name}}</span>

                        </div>
                        <!-- /.user-block -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="img">
                            <a href="/learning/announcements/{{$post->id}}">
                        </div>                    
                        <div class="col-9">
                            <a href="/learning/announcements/{{$post->id}}">
                                <h4>{{$post->title}}</h4></a>
                        </div>

                        <!-- Attachment -->
                        <div class="pl-4 col-sm-10 col-md-3 float-right mr-4">
                        <h6>Resource Files: </h6>
                        @foreach($files as $file)
                        @if($file->announcement_id == $post->id)
                        <a href="{{ route('view', $file->file) }}" target="_blank" class="btn btn-secondary"><i class="fas fa-file-alt"></i></a>
                        @endif
                        @endforeach   
                        </div>
                                


                        <div class="col-9">
                            <p>{!! Str::limit($post->body, 255) !!}</p>
                        </div>
                        <div class="float-left p-2">
                            <a href="/learning/announcements/{{$post->id}}" class="small-box-footer float-right">Read More <i class="fas fa-chevron-circle-right"></i></a>
                        </div>


                    </div>
                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        </div><!-- /.container-fluid -->
        @endforeach
        <div class="container-fluid">
            <div class="row justify-content-center">
                {{$posts->links()}}
            </div>
            <div class="col text-right text-muted pb-3">
                Showing {{$posts->firstItem()}} to {{$posts->lastItem()}} out of {{$posts->total()}} results
            </div>
        </div>

    @else 
        <div class="container">
            <p>No Announcements Found</p>
        </div>
    @endif
</div>
