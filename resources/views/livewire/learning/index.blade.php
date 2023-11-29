<div>
    {{-- The Master doesn't talk, he acts. --}}
    @if(count($posts) > 0)
    @foreach($posts as $post)
    <!--POST TEMPLATE -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Box Comment -->
                <div class="card card-danger card-outline">
                <div class="card-header">
                    <div class="user-block">
                    <img class="img-circle" src="{{ ($post->user->avatar) ? url('/storage/avatars/' .$post->user->avatar) : asset('img/avatar1.png') }}" alt="User Image">
                    <span class="username"><a href="/learning/posts/{{$post->id}}">
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
                    <!-- Attachment -->
                    <div class="img">
                        <a href="/learning/posts/{{$post->id}}">
                        <img class="img-responsive img-thumbnail float-left" src="{{ asset ('storage/cover_images/' .$post->cover_image) }}" alt="cover-image"></a>
                    </div>                    
                    <!-- post text -->
                    <a href="/learning/posts/{{$post->id}}"><h4>{{$post->title}}</h4></a>
                    
                    <p>{!! Str::limit($post->body, 150) !!}</p>
                    <div class="float-right pr-3 pb-3">
                        <a href="/learning/posts/{{$post->id}}" class="small-box-footer float-right">Read More <i class="fas fa-chevron-circle-right"></i></a>
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
