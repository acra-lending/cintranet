<div>
  <h3 class="text-black mb-3" style="justify-content: center">Welcome to Cintranet, {{ $first_name }}!</h3>
  <div class="card card-danger">
      <div class="card-header">
        <h3 class="card-title" style="text-align:center;float:none;"><b style="color:White;">ANNOUNCEMENTS</b></h3>
    </div>                      
    <div class="card-body">
      <div class="container-fluid">
          <div class="row">
              @if(count($posts) > 0)
              @foreach($posts as $post)
            <div class="col-md-3">
            <div class="callout callout-danger" style="height: 100px;">
                <a href="/learning/announcements/{{ $post->id }}" style="text-decoration: none;">
                  <h6 style="overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2;line-clamp: 2; -webkit-box-orient: vertical;">{{$post->title}}</h6>
                </a>  
                <p class="m-0"style="font-size: 10pt;"><em>{{Carbon\Carbon::parse($post->created_at)->format('Y-m-d')}}</em></p>    
            </div>
          </div>
            @endforeach
            @endif
          </div>
        </div> 
    </div>
    <div class="float-right pr-3 pb-3">
            <a href="/learning/announcements?searchTerm=" data-turbolinks="false" class="small-box-footer float-right"><u>See All Announcements</u><i class="fas fa-chevron-circle-right"></i></a>
    </div>
  </div>

</div>