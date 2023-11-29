<div class="card card-widget card-danger card-outline">
    <div class="card-header">
        <h3 class="card-title">
        <i class="fas fa-bullhorn"></i>
        General Announcements
        </h3>
    </div>                      
    <div class="card-body">
      @if(count($posts) > 0)
      @foreach($posts as $post)
        <div class="callout callout-danger">
            <a href="/learning/announcements/{{ $post->id }}" style="text-decoration: none;">
              <h6>{{$post->title}}</h6>
            </a>  
            <p class="m-0"style="font-size: 10pt;"><em>{{Carbon\Carbon::parse($post->created_at)->format('Y-m-d')}}</em></p>    
        </div>
      @endforeach
      @endif
    </div>
</div>