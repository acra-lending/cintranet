@can('edit-posts')
<!-- Employee Daily Status Report -->
<div class="card card-widget card-danger card-outline">
  <div class="card-header">
      <h3 class="card-title">
      <i class="fas fa-door-open"></i>
      Out Of Office Update
      </h3>
  </div>                      
  <div class="card-body">
    <div class="row">
      <div class="col-12">
        @foreach ($dailyStatus as $status)
        <div class="callout callout-primary">
          <h6>Today's List {{ Carbon\Carbon::parse($status->requestDate)->format('m-d-Y') }}</h6>
          <p class="m-0"style="font-size: 10.5pt;">{!!nl2br(e($status->body))!!}</p> 
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>  
@endcan