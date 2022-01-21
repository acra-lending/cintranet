<div class="col-12">
    <div class="card card-danger">
        <div class="card-header">
            <div class="card-title">
                Webinars
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach($webinarResults as $data)
                    <div class="col-sm-2">
                        <a href="{{ URL::to('https://player.vimeo.com' .str_replace("s", "", $data['uri'])) }}" data-toggle="lightbox" data-title="{{ $data['name'] }}" data-gallery="gallery">
                            <img src="{{ ($data['pictures']['sizes'][4]['link_with_play_button']) }}" class="img-fluid mb-2" alt="{{ $data['name'] }}" /></a>
                        </a>
                        <h6>{{ $data['name'] }}</h6>
                        <p>{{ Carbon\Carbon::parse($data['created_time'])->format('F d, Y') }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>