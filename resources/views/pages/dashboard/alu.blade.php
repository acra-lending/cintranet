<!-- /.card -->
<div class="card card-danger card-outline">
    <div class="card-header">
        <h3 class="card-title">
        <i class="fas fa-university"></i>
        ALU Sessions
        </h3>
    </div>
    <div class="card-body">
        <a href="/learning/courses/fullcalendar" data-turbolinks="false" style="color: inherit; text-decoration: none; ">
        <ul class="event-list">
            @foreach($events as $event)
            <li>
                <time datetime="2014-07-20">
                    <span class="day">{{ Carbon\Carbon::parse($event->start)->format('d') }}</span>
                    <span class="month">{{ Carbon\Carbon::parse($event->start)->format('M') }}</span>
                    <span class="year">{{ Carbon\Carbon::parse($event->start)->format('Y') }}</span>
                </time>
                
                <div class="info">
                    <h2 class="title">{{$event->title}}</h2>
                    <span class="desc">
                        {{ Carbon\Carbon::parse($event->start)->format('H:i') }}
                        - 
                        {{ Carbon\Carbon::parse($event->end)->format('H:i') }}</span><br/>
                    <span class="desc">{{$event->description}}</span>

                </div>
            </li>
            @endforeach
        </ul></a>
    </div>
    <div class="float-right pr-3 pb-3">
            <a href="/learning/courses/fullcalendar" data-turbolinks="false" class="small-box-footer float-right">View Calendar <i class="fas fa-chevron-circle-right"></i></a>
        </div>
</div>