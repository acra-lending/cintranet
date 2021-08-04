<div class="simple-marquee-container mb-5">
    <div class="marquee-sibling">
      <strong>Reminder</strong>
    </div>
    <div class="marquee">
      <ul class="marquee-content-items">
        @if(count($reminders) > 0 )
        @foreach($reminders as $reminder)
        <li><strong>{{$reminder->body}}</strong></li>
        @endforeach
        @else 
        <li><strong>No new reminders...</strong></li>
        @endif
      </ul>
    </div>
  </div>