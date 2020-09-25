@extends('layouts.default')

@push('includes.head')
<!-- Full Calendar Styles -->
<link href='{{ asset('assets/fullcalendar/packages/core/main.css') }}' rel='stylesheet' />
<link href='{{ asset('assets/fullcalendar/packages/daygrid/main.css') }}' rel='stylesheet' />
<link href='{{ asset('assets/fullcalendar/packages/timegrid/main.css') }}' rel='stylesheet' />
<link href='{{ asset('assets/fullcalendar/packages/list/main.css') }}' rel='stylesheet' />
<link href='{{ asset('assets/fullcalendar/css/style.css') }}' rel='stylesheet' />

<meta name="csrf-token" content="{{ csrf_token() }}">
@endpush



@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Calendar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">            
                <li class="breadcrumb-item active"><a href="/learning/courses/fullcalendar" data-turbolinks="false">Event Calendar</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div><!-- /.content-header -->
    
    <section class="content">
      @include('pages.learning.courses.fullcalendar.modal-calendar')
      @include('pages.learning.courses.fullcalendar.modal-fastEvents')
      <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="card card-danger card-outline">          
            <div class="card-header">
              <h4 class="card-title">Quick Events</h4>
            </div>

              <div class="card-body">
                <div id='external-events'>
                  <div id='external-events-list'>
                    @can('edit-posts')
                    @isset($fastEvents)
                        @forelse($fastEvents as $fastEvent)
                          <div id="boxFastEvent{{ $fastEvent->id}}"
                            style="padding: 4px; border: 1px solid {{ $fastEvent->color }}; background-color: {{ $fastEvent->color }}" 
                            class='fc-event event text-center' 
                            data-event='{
                                "id":"{{ $fastEvent->id }}",
                                "title":"{{ $fastEvent->title }}",
                                "color":"{{ $fastEvent->color }}", 
                                "start":"{{ $fastEvent->start }}",
                                "end":"{{ $fastEvent->end }}"
                            }'
                                >{{ $fastEvent->title }}
                          </div>                      
                        @empty
                          <p>No Quick Events</p>
                        @endforelse
                      @endisset
                      @endcan
                  </div>
                  @can('edit-posts')
                  <p>
                    <input type='checkbox' id='drop-remove' />
                    <label for='drop-remove'>remove after drop</label>
                    <button class='btn btn-sm btn-success float-right' id='newFastEvent'>Create New Event</button>
                  </p>
                  @endcan
                </div>
              </div>          
          </div>
        </div>
        
        <div class="col-md-9">
          <div class="card card-danger card-outline">
            <div class="card-body p-0">

                <div id='calendar'
   
                data-route-load-events="{{ route('routeLoadEvents') }}"
                @can('edit-posts') 
                data-route-event-update="{{ route('routeEventUpdate') }}"
                data-route-event-store="{{ route('routeEventStore') }}"
                data-route-event-delete="{{ route('routeEventDelete') }}"
                @endcan
                @can('edit-posts')
                data-route-fast-event-update="{{ route('routeFastEventUpdate') }}"
                data-route-fast-event-store="{{ route('routeFastEventStore') }}"
                data-route-fast-event-delete="{{ route('routeFastEventDelete') }}"
                @endcan
                ></div>
            
                <div style='clear:both'></div>

            </div>
        </div>
        </div>

      </div>
    </div>
    </section>
</div>

@endsection

@push('includes.scripts')
<!-- Full Calendar Scripts -->
<script src='{{ asset('assets/fullcalendar/js/calendar.js') }}'></script> 
<script src='{{ asset('assets/fullcalendar/packages/core/main.js') }}'></script>
<script src='{{ asset('assets/fullcalendar/packages/interaction/main.js') }}'></script>
<script src='{{ asset('assets/fullcalendar/packages/daygrid/main.js') }}'></script>
<script src='{{ asset('assets/fullcalendar/packages/timegrid/main.js') }}'></script>
<script src='{{ asset('assets/fullcalendar/packages/list/main.js') }}'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
 
<script src='{{ asset('assets/fullcalendar/js/script.js') }}'></script>  

@endpush
