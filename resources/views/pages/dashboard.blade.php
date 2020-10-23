@extends('layouts.default')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">

            {{-- <div class="row mb-2"> --}}

            {{-- <div class="col-sm-2 col-md-2 col-lg-2">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="/">Dashboard</a></li>
                </ol>
            </div><!-- /.col --> --}}
            {{-- </div><!-- /.row --> --}}
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

    <style>
        .color-palette {
        height: 35px;
        line-height: 35px;
        text-align: right;
        padding-right: .75rem;
        }
        
        .color-palette.disabled {
        text-align: center;
        padding-right: 0;
        display: block;
        }
        
        .color-palette-set {
        margin-bottom: 15px;
        }

        .color-palette span {
        display: none;
        font-size: 12px;
        }

        .color-palette:hover span {
        display: block;
        }

        .color-palette.disabled span {
        display: block;
        text-align: left;
        padding-left: .75rem;
        }

        .color-palette-box h4 {
        position: absolute;
        left: 1.25rem;
        margin-top: .75rem;
        color: rgba(255, 255, 255, 0.8);
        font-size: 12px;
        display: block;
        z-index: 7;
        }

        #quote b {
          display: none !important;
        }

        #quote a {
          font-style: italic !important;
        }

        #quote a::before {
          content: "~ ";
        }
    </style>

    <!-- Main content -->
    <section class="content">
      <div class="col-sm-12">
        <div class="card">
          <img class ="img-fluid rounded" src="{{ asset('img/dashboard-bg.jpg') }}">
            <h3 class="text-light dashboard-h3">Welcome to your new Cintranet, {{ $first_name }}!</h3>
        </div>
        <div class="container">
        <!-- SEARCH FORM -->  
        <form action="/search" method="GET" role="search">
          {{ csrf_field() }}
          <div class="input-group input-group dashboard-input" style="width:75%;">
          <input class="form-control form-control-navbar" type="search" name="q" placeholder="Search Files, Posts, Events, or Users" aria-label="Search">
          <div class="input-group-append">
              <button class="btn btn-navbar" type="submit" style="right: 40px;">
              <i class="fas fa-search"></i>
              </button>
          </div>
          </div>
        </form>
        </div>

    </div><!-- /.col -->
      <div class="container-fluid">

        <!-- Info boxes -->
        {{-- <div class="row">
          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-dark elevation-1"><i class="fas fa-chart-bar"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Visitors</span>
                <span class="info-box-number">15</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-chalkboard-teacher"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Courses</span>
                <span class="info-box-number">3</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->



          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-dark elevation-1"><i class="fas fa-tools"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">IT Tickets</span>
                <span class="info-box-number">3</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-user-friends"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Users</span>
                <span class="info-box-number">200</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          
        </div>
        <!-- /.row --> --}}
        <div class="row">
          <div class="col-lg-5">
            <!-- Quote Of The Day -->
            <div class="card card-danger card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-lightbulb"></i>
                  Quote Of The Day
                </h3>
              </div>
              <div class="card-body pt-0" id="quote">
                <script type="text/javascript" src="https://www.brainyquote.com/link/quotebr.js"></script>
              </div>
            </div>
            <!-- Production Quick Links -->
            <div class="card card-danger card-outline">
              <div class="card-header">
              <h3 class="card-title">
                <i class="nav-icon fas fa-business-time"></i>
                  Production Quick Links
              </h3>
              </div>
              
              <div class="card-body">
                <div class="container d-flex" style="align-items: center; justify-content: space-between;">
                  <div style="text-align: center;">
                    <a href="sales/ratesheets">
                      <p>Rate Sheets</p>
                      <i class="fas fa-table" style="font-size: 32pt;"></i>
                    </a>
                  </div>
                  <div style="text-align: center;">
                    <a href="https://citadelservicing.com/wp-content/uploads/2020/TurnTimes/csc-production-turntimes.pdf" target="_blank">
                      <p>Turn Times</p>
                      <i class="fas fa-history" style="font-size: 32pt;"></i>
                    </a>
                  </div>
                  <div style="text-align: center;">
                    <a href="https://citadelservicing.com/wp-content/uploads/2020/CutOffDates/csc-production-cutoff.pdf" target="_blank">
                      <p>Cut Off Dates</p>
                      <i class="fas fa-calendar-week" style="font-size: 32pt;"></i>
                    </a>
                  </div>
                  <div style="text-align: center;">
                    <a href="/operations/usefullinks">
                      <p>Useful Links</p>
                      <i class="fas fa-link" style="font-size: 32pt;"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Map card -->
            <div class="card card-danger card-outline">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-map"></i>
                  Map
                </h3>
              </div>
              <div class="card-body">
                <div id="world-map" style="height: 250px; width: 100%;"></div>
              </div>
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-3 text-center">
                  <div>Pacific</div>
                  <div id="LosAngeles"></div> 
                  </div>
                  <div class="col-3 text-center">
                    <div>Mountain</div>
                    <div id="Denver"></div>
                  </div>
                  <div class="col-3 text-center">
                    <div>Central</div>
                    <div id="Chicago"></div>
                  </div>
                  <div class="col-3 text-center">
                    <div>Eastern</div>
                    <div id="NewYork"></div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Calendar -->
            <div class="card card-danger card-outline">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                {{-- <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-bars"></i></button>
                    <div class="dropdown-menu float-right" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div> --}}
                <!-- /. tools -->
              </div>
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="dashboardCalendar" style="width: 100%"></div>
              </div>
            </div>

          </div>
          <div class="col-lg-4">
          @can('edit-posts')
          <!-- Employee Daily Status Report -->
          <div class="card card-widget card-danger card-outline">
            <div class="card-header">
                <h3 class="card-title">
                <i class="fas fa-door-open"></i>
                Out Of Office Update
                </h3>
            </div>                      
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  @foreach ($dailyStatus as $status)
                  <div class="callout callout-primary">
                    <h6>Today's List {{ Carbon\Carbon::parse($status->created_at)->format('m-d-Y') }}</h6>
                    <p class="m-0"style="font-size: 10.5pt;">{!!nl2br(e($status->body))!!}</p> 
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
            <!-- /.card-body -->
            </div>  
           @endcan
          <!-- Office Locations -->
          <div class="card card-widget card-danger card-outline">
            <div class="card-header">
                <h3 class="card-title">
                <i class="fas fa-map-marker-alt"></i>
                Office Locations
                </h3>
            </div>                      
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-6">
                  <div class="callout callout-primary">
                    <a href="https://goo.gl/maps/8E2WGdW1a7SWEkrE8" target="_blank" style="text-decoration: none; color:#AB2328">
                      <h6>Head Office</h6>
                    </a>  
                    <p class="m-0"style="font-size: 10.5pt;">15707 Rockfield Blvd.<br>Suite 320<br>Irvine CA 92618</p> 
                  </div>
                </div>
                <div class="col-6">
                  <div class="callout callout-primary">
                    <a href="https://goo.gl/maps/LACX4HgGp3i64pfC7" target="_blank" style="text-decoration: none; color:#AB2328">
                      <h6>Lake Forest Office</h6>
                    </a>  
                    <p class="m-0"style="font-size: 10.5pt;">25541 Commercentre Dr.<br>Suite 250<br>Lake Forest, CA 92630</p> 
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <div class="callout callout-dark">
                    <a href="https://goo.gl/maps/7ELBCxBLn5DzHrqH7" target="_blank" style="text-decoration: none; color:#AB2328">
                      <h6>Oregon Office</h6>
                    </a>  
                    <p class="m-0"style="font-size: 10.5pt;">110151 SE Sunnyside Rd<br>Suite 305<br>Clackamas, OR 97015</p> 
                  </div>
                </div>
                <div class="col-6">
                  <div class="callout callout-dark">
                    <a href="https://goo.gl/maps/cxr13wjKWgMoyhKj9" target="_blank" style="text-decoration: none; color:#AB2328">
                      <h6>Utah Office</h6>
                    </a>  
                    <p class="m-0"style="font-size: 10.5pt;">2972 West Maple Loop Drive<br>Suite 101<br>Lehi, UT 84043</p> 
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <div class="callout callout-gray">
                    <a href="https://goo.gl/maps/tJoYBzrEgWpPAt7D9" target="_blank" style="text-decoration: none; color:#AB2328">
                      <h6>Georgia Office</h6>
                    </a>  
                    <p class="m-0"style="font-size: 10.5pt;">47 Perimeter Center E<br>Suite 630<br>Atlanta, GA 30346</p> 
                  </div>
                </div>
                <div class="col-6">
                  <div class="callout callout-gray">
                    <a href="https://goo.gl/maps/4EcSgdCL8upFo9VS7" target="_blank" style="text-decoration: none; color:#AB2328">
                      <h6>Florida Office</h6>
                    </a>  
                    <p class="m-0"style="font-size: 10.5pt;">2605 Enterprise Road<br>Suite 320<br>Clearwater, FL 33759</p> 
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
          <!-- HR Quick Links -->
            <div class="card card-danger card-outline">
                <div class="card-header">
                <h3 class="card-title">
                  <i class="nav-icon fas fa-file-signature"></i>
                    HR Quick Links
                </h3>
                </div>
                
                <div class="card-body">
                  <div class="container d-flex" style="align-items: center; justify-content: space-between;">
                    <div style="text-align: center;">
                      <a href="humanresources/schedulesforms">
                        <p>Policies</p>
                        <i class="fas fa-landmark" style="font-size: 32pt;"></i>
                      </a>
                    </div>
                    <div style="text-align: center;">
                      <a href="humanresources/401k">
                        <p>401(k)</p>
                        <i class="fas fa-chart-line" style="font-size: 32pt;"></i>
                      </a>
                    </div>
                    <div style="text-align: center;">
                      <a href="humanresources/health">
                        <p>Health</p>
                        <i class="fas fa-file-medical" style="font-size: 32pt;"></i>
                      </a>
                    </div>
                    <div style="text-align: center;">
                      <a href="humanresources/paylocity">
                        <p>Paylocity</p>
                        <i class="fas fa-door-open" style="font-size: 32pt;"></i>
                      </a>
                    </div>
                    <div style="text-align: center;">
                      <a href="humanresources/careers">
                        <p>Careers</p>
                        <i class="fas fa-handshake" style="font-size: 32pt;"></i>
                      </a>
                    </div>
                </div>
              </div>
                {{-- <div class="float-right pr-3 pb-3">
                <a href="/humanresources/schedulesforms" class="small-box-footer float-right">View All <i class="fas fa-chevron-circle-right"></i></a>
                </div> --}}
            </div>

            <!-- Team Members -->
            <div class="card card-danger card-outline">
                <div class="card-header">
                <h3 class="card-title">
                  <i class="nav-icon fas fa-users"></i>
                    Team Members
                </h3>
                </div>
                {{-- <img class="card-img-top" src="" alt="img"> --}}
                <div class="card-body">
                    <!-- /.card-header -->
                    @if(!empty($teamMembers))
                        <ul class="users-list clearfix">
                          @foreach($teamMembers as $team)
                          <li>
                              <img class="float-right mr-4" src="{{ ($team->avatar) ? url('/storage/avatars/' .$team->avatar) : asset('img/avatar1.png') }}" alt="User Image">
                              <br>
                              <br>
                              <br>
                              <a class="users-list-name" href="/directory/user/{{$team->id}}">{{ $team->firstname }} {{$team->lastname}}</a>
                              <span class="users-list-date">{{ Carbon\Carbon::parse($team->lastvisitDate)->diffForHumans() }}</span>
                          </li>
                        @endforeach
                        </ul>

                        <!-- /.users-list -->
                    <!-- /.card-body -->
                    <div class="float-right pr-3 pb-3">
                        <a href="{{action ('DirectoryController@index', ['searchTerm' => $team->team]) }}" class="small-box-footer float-right">View More <i class="fas fa-chevron-circle-right"></i></a>
                    </div>
                        @else
                        <p>No team members</p>
                        @endif
                </div>
            </div>
        </div>


        <div class="col-lg-3">
            <div class="card card-widget card-danger card-outline">
            <div class="card-header">
                <h3 class="card-title">
                <i class="fas fa-bullhorn"></i>
                General Announcements
                </h3>
            </div>                      
            <!-- /.card-header -->
            <div class="card-body">
              @if(count($posts) > 0)
              @foreach($posts as $post)
                <div class="callout callout-danger">
                    <a href="/learning/announcements" style="text-decoration: none; color:#AB2328">
                      <h6>{{$post->title}}</h6>
                    </a>  
                    <p class="m-0"style="font-size: 10pt;"><em>{{Carbon\Carbon::parse($post->created_at)->format('Y-m-d')}}</em></p>    
                </div>
              @endforeach
              @endif
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->

                <div class="card card-danger card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                    <i class="fas fa-university"></i>
                    CSCU Sessions
                    </h3>
                </div>
                <!-- /.card-header -->
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
                    <div class="float-right pr-3 pb-3">
                      <a href="/learning/courses/fullcalendar" data-turbolinks="false" class="small-box-footer float-right">View Calendar <i class="fas fa-chevron-circle-right"></i></a>
                  </div>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->

          </div>
          <!-- /.col -->
        
        </div>
 






      {{-- <div class="row">


          <div class="col-xl-12">
            <div class="float-left">
              <div class="card card-danger mr-2 pb-2" style="width: 15rem;">
                <div class="card-header">
                  <h3 class="card-title">
                      Sales
                  </h3>
                  </div>
                {{-- <img class="card-img-top" src="https://cdn.paylocity.com/cdn/branding/paylocity-logo.svg" alt="paylocity-logo"> --}}
                {{-- <div class="card-body">
                  <ul class="list-unstyled">
                    <li><a href="#">Data</a></li>
                    <li><a href="#">Documents</a></li>
                    <li><a href="#">Ratesheets</a></li>
                    <li><a href="#">Forms</a></li>
                    <li><a href="#">Flyers & Programs</a></li>
                  </ul> --}}
                  {{-- <a href="#" class="small-box-footer float-right">View <i class="fas fa-chevron-circle-right"></i></a> --}}
                {{-- </div>
              </div>
            </div>
            <div class="float-left">
              <div class="card card-danger mr-2 mb-5 pb-5" style="width: 15rem;">
                <div class="card-header">
                  <h3 class="card-title">
                      Ratesheets
                  </h3>
                  </div> --}}
                {{-- <img class="card-img-top" src="https://cdn.paylocity.com/cdn/branding/paylocity-logo.svg" alt="paylocity-logo"> --}}
                {{-- <div class="card-body">
                    <h5 class="card-title">Current and Past Ratesheets</h5>
                    <p></p>
                    <p></p>
                    <p></p>
                    <a href="#" class="small-box-footer float-right">View <i class="fas fa-chevron-circle-right"></i></a>
                </div>
              </div>
            </div>
            <div class="float-left">
              <div class="card card-danger mr-2 mb-4 pb-5" style="width: 25rem;">
                <div class="card-header">
                  <h3 class="card-title">
                      HR Policies
                  </h3>
                </div> --}}
                {{-- <img class="card-img-top" src="https://cdn.paylocity.com/cdn/branding/paylocity-logo.svg" alt="paylocity-logo"> --}}
                {{-- <div class="card-body d-flex"> --}}
                    {{-- <h5 class="card-title"></h5> --}}
                      {{-- <p>Leave Policy</p>
                      <p>Company Policy</p>
                      <p>Health Policy</p>
                      <p>HR Policy</p>
                </div>
                <div class="float-right pr-3 pb-3">
                  <a href="#" class="small-box-footer float-right">View All <i class="fas fa-chevron-circle-right"></i></a>
                </div>

              </div>
            </div> --}}
                                  <!--Social Feed -->

                                  {{-- <div class="float-right">
                                    <div class="card card-danger mr-2" style="width: 30rem;">
                                      <div class="card-header">
                                        <h3 class="card-title">
                                            Calendar Events
                                        </h3>
                                      </div> --}}
                                      {{-- <img class="card-img-top" src="https://cdn.paylocity.com/cdn/branding/paylocity-logo.svg" alt="paylocity-logo"> --}}
                                      {{-- <div class="card-body">
                                          <h5 class="card-title">Upcoming Events</h5>
                                          <p class="card-text" style="padding-top: 45px;"></p>
                                          <p class="card-text" style="padding-top: 45px;"></p>
                                          <p class="card-text" style="padding-top: 45px;"></p>
                                          <p class="card-text" style="padding-top: 45px;"></p>
                                          <p class="card-text" style="padding-top: 45px;"></p>
                                      </div>
                                    </div>
                                  </div> --}}


{{-- 
            <div class="float-left">
              <div class="card card-danger mr-2" style="width: 15rem;">
                <div class="card-header">
                  <h3 class="card-title">
                      News & Events
                  </h3>
                  </div> --}}
                {{-- <img class="card-img-top" src="https://cdn.paylocity.com/cdn/branding/paylocity-logo.svg" alt="paylocity-logo"> --}}
                {{-- <div class="card-body"> --}}
                    {{-- <h5 class="card-title">News & Events</h5> --}}
                    {{-- <p>News 1</p>
                    <p>News 2</p>
                    <p>News 3</p>
                    <p>News 4</p>
                    <p>News 5</p>
                    <p>News 6</p>
                    <a href="#" class="small-box-footer float-right">View More <i class="fas fa-chevron-circle-right"></i></a>
                </div>
              </div>
            </div>
            <div class="float-left">
              <div class="card card-danger mr-2" style="width: 15rem;">
                <div class="card-header">
                  <h3 class="card-title">
                      Announcements
                  </h3>
                  </div> --}}
                {{-- <img class="card-img-top" src="https://cdn.paylocity.com/cdn/branding/paylocity-logo.svg" alt="paylocity-logo"> --}}
                {{-- <div class="card-body"> --}}
                    {{-- <h5 class="card-title">Announcements</h5> --}}
                    {{-- <p>General Announcements Number 01-002</p>
                    <p>General Announcements Number 01-002</p>
                    <p>General Announcements Number 01-002</p>
                    <p>General Announcements Number 01-002</p>
                    <a href="#" class="small-box-footer float-right">View All <i class="fas fa-chevron-circle-right"></i></a>
                </div>
              </div>
            </div>
            <div class="float-left">
              <div class="card card-danger mr-2" style="width: 25rem;">
                <div class="card-header">
                  <h3 class="card-title">
                      Team Members
                  </h3>
                  </div> --}}
                {{-- <img class="card-img-top" src="" alt="img"> --}}
                {{-- <div class="card-body"> --}}
                      <!-- /.card-header -->
                      {{-- <div class="card-body p-0">
                        <ul class="users-list clearfix">
                          <li>
                            <img src="{{asset('img/avatar1.png')}}" alt="User Image" style="width:50%">
                            <a class="users-list-name" href="#">Chris</a>
                            <span class="users-list-date"></span>
                          </li>
                          <li>
                            <img src="{{asset('img/avatar1.png')}}" alt="User Image" style="width:50%">
                            <a class="users-list-name" href="#">John</a>
                            <span class="users-list-date"></span>
                          </li>
                          <li>
                            <img src="{{asset('img/avatar1.png')}}" alt="User Image" style="width:50%">
                            <a class="users-list-name" href="#">Hitz</a>
                            <span class="users-list-date"></span>
                          </li>
                          <li>
                            <img src="{{asset('img/avatar1.png')}}" alt="User Image" style="width:50%">
                            <a class="users-list-name" href="#">John</a>
                            <span class="users-list-date"></span>
                          </li>
                          <li>
                            <img src="{{asset('img/avatar1.png')}}" alt="User Image" style="width:50%">
                            <a class="users-list-name" href="#">Alex</a>
                            <span class="users-list-date"></span>
                          </li>
                          <li>
                            <img src="{{asset('img/avatar1.png')}}" alt="User Image" style="width:50%">
                            <a class="users-list-name" href="#">Sarah</a>
                            <span class="users-list-date"></span>
                          </li>
                          <li>
                            <img src="{{asset('img/avatar1.png')}}" alt="User Image" style="width:50%">
                            <a class="users-list-name" href="#">Nora</a>
                            <span class="users-list-date"></span>
                          </li>
                          <li>
                            <img src="{{asset('img/avatar1.png')}}" alt="User Image" style="width:50%">
                            <a class="users-list-name" href="#">Nadia</a>
                            <span class="users-list-date"></span>
                          </li>
                        </ul> --}}
                        <!-- /.users-list -->
                      {{-- </div> --}}
                      <!-- /.card-body -->
                      {{-- <div class="card-footer text-center"> --}}
                        {{-- <a href="#" class="small-box-footer float-right">View All <i class="fas fa-chevron-circle-right"></i></a> --}}
                      {{-- </div> --}}
                {{-- </div>
              </div>
            </div>
            <div class="float-right">
              <div class="card card-danger mr-2" style="width: 30rem;">
                <div class="card-header">
                  <h3 class="card-title">
                      Calendar
                  </h3>
                </div> --}}
                {{-- <img class="card-img-top" src="https://cdn.paylocity.com/cdn/branding/paylocity-logo.svg" alt="paylocity-logo"> --}}
                {{-- <div class="card-body"> --}}
            <!-- Calendar -->
            {{-- <div class="card bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3> --}}
                <!-- tools card -->
                {{-- <div class="card-tools"> --}}
                  <!-- button with a dropdown -->
                  {{-- <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-bars"></i></button>
                    <div class="dropdown-menu float-right" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div> --}}
                <!-- /. tools -->
              {{-- </div> --}}
              <!-- /.card-header -->
              {{-- <div class="card-body pt-0"> --}}
                <!--The calendar -->
                {{-- <div id="calendar" style="width: 100%"></div> --}}
              {{-- </div> --}}
              <!-- /.card-body -->
            {{-- </div> --}}
            <!-- /.card -->
                {{-- </div> --}}
              {{-- </div>
            </div> --}}



          {{-- </div> --}}






      {{-- </div> <!-- row --> --}}




        


  




        {{-- <div class="col-md-6">
            <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">
                <i class="fas fa-bullhorn"></i>
                General Announcements
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <nav aria-label="announcements-pages">
                    <ul class="pagination pagination-sm justify-content-end">
                      <li class="page-item disabled">
                        <a class="page-link" href="/announcements" tabindex="-1">1</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="/learning/announcements2">2</a></li>
                      <li class="page-item"><a class="page-link" href="/learning/announcements3">3</a></li>
                    </ul>
                  </nav>
                <div class="callout callout-danger">
                    
                <h5>15000 Series Conditions - PRIOR TO CD/DOC PREP</h5>

                <p>02/13/2020</p>
                <table class="table">
                    <tbody>
                    <tr>
                        <td>
                          General Announcements Number 02-002
                        </td>
                        <td class="text-right py-0 align-middle">
                            <div class="btn-group btn-group-sm">
                              <a href="#" class="text-muted"><i class="fas fa-file-alt"></i></a>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          General Announcements Number 02-002
                        </td>
                        <td class="text-right py-0 align-middle">
                            <div class="btn-group btn-group-sm">
                                <a href="#" class="text-muted"><i class="fas fa-file-alt"></i></a>
                            </div>
                        </td>
                      </tr>
                    </tbody>
                </table>                
                </div>

                <div class="callout callout-danger">
                <h5>New Investor Codes</h5>

                <p>02/06/2020</p>
                <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          General Announcements Number 02-001
                        </td>
                        <td class="text-right py-0 align-middle">
                            <div class="btn-group btn-group-sm">
                                <a href="#" class="text-muted"><i class="fas fa-file-alt"></i></a>
                            </div>
                        </td>
                      </tr>
                    </tbody>
                </table> 
                </div>

                <div class="callout callout-danger">
                <h5>QC Inbox</h5>

                <p>01/27/2020</p>
                <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          General Announcements Number 01-004
                        </td>
                        <td class="text-right py-0 align-middle">
                            <div class="btn-group btn-group-sm">
                                <a href="#" class="text-muted"><i class="fas fa-file-alt"></i></a>
                            </div>
                        </td>
                      </tr>
                    </tbody>
                </table> 
                </div>

                <div class="callout callout-danger">
                <h5>TRID Justification</h5>

                <p>01/16/2020</p>
                <table class="table">
                    <tbody>
                    <tr>
                        <td>
                          General Announcements Number 01-003
                        </td>
                        <td class="text-right py-0 align-middle">
                            <div class="btn-group btn-group-sm">
                                <a href="#" class="text-muted"><i class="fas fa-file-alt"></i></a>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          General Announcements Number 01-003
                        </td>
                        <td class="text-right py-0 align-middle">
                            <div class="btn-group btn-group-sm">
                                <a href="#" class="text-muted"><i class="fas fa-file-alt"></i></a>
                            </div>
                        </td>
                      </tr>
                    </tbody>
                </table> 
                </div>
                

            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col --> --}}

        {{-- <div class="col-md-6">
          <div class="card card-widget">
            <div class="card-header">
                <div class="user-block">
                <img class="img-circle" src="{{ asset ('img/avatar1.png') }}" alt="User Image">
                <span class="username"><a href="#">Learing and Development</a></span>
                <span class="description">Shared publicly - 11:20 AM February 24, 2020</span>
                </div>
                <!-- /.user-block -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <!-- Attachment -->
                <div class="img">
                    <img class="img-responsive img-thumbnail float-left" src="{{ asset ('img/attach5.jpg') }}" alt="Attachment Image">
                </div>                    
                <!-- post text -->
                <h4>Building Authentic Relationships – Part 10</h4>

                <h5>Creating Mutually-Beneficial Outcomes</h5>

                <p>At the end of the day, mutual benefits are the payoff 
                for investing time and energy into business relationships. 
                You will continually learn from each other. 
                Performance increases the more you learn.</p>

                <p>Think about the aspects of the business relationship you 
                find valuable and want to retain. What are your contributions? 
                What are theirs?</p>
                <p>It is the mutually-beneficial relationships that prove 
                to be most valuable in the workplace, and in life.</p>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card card-danger">
                <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-user-friends"></i>
                    Team Members
                </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
   
                      <!-- /.card-header -->
                      <div class="card-body p-0">
                        <ul class="users-list clearfix">
                          <li>
                            <img src="{{asset('img/avatar1.png')}}" alt="User Image" style="width:50%">
                            <a class="users-list-name" href="#">Alexander Pierce</a>
                            <span class="users-list-date">Today</span>
                          </li>
                          <li>
                            <img src="{{asset('img/avatar1.png')}}" alt="User Image" style="width:50%">
                            <a class="users-list-name" href="#">Norman</a>
                            <span class="users-list-date">Yesterday</span>
                          </li>
                          <li>
                            <img src="{{asset('img/avatar1.png')}}" alt="User Image" style="width:50%">
                            <a class="users-list-name" href="#">Jane</a>
                            <span class="users-list-date">12 Jan</span>
                          </li>
                          <li>
                            <img src="{{asset('img/avatar1.png')}}" alt="User Image" style="width:50%">
                            <a class="users-list-name" href="#">John</a>
                            <span class="users-list-date">12 Jan</span>
                          </li>
                          <li>
                            <img src="{{asset('img/avatar1.png')}}" alt="User Image" style="width:50%">
                            <a class="users-list-name" href="#">Alexander</a>
                            <span class="users-list-date">13 Jan</span>
                          </li>
                          <li>
                            <img src="{{asset('img/avatar1.png')}}" alt="User Image" style="width:50%">
                            <a class="users-list-name" href="#">Sarah</a>
                            <span class="users-list-date">14 Jan</span>
                          </li>
                          <li>
                            <img src="{{asset('img/avatar1.png')}}" alt="User Image" style="width:50%">
                            <a class="users-list-name" href="#">Nora</a>
                            <span class="users-list-date">15 Jan</span>
                          </li>
                          <li>
                            <img src="{{asset('img/avatar1.png')}}" alt="User Image" style="width:50%">
                            <a class="users-list-name" href="#">Nadia</a>
                            <span class="users-list-date">15 Jan</span>
                          </li>
                        </ul>
                        <!-- /.users-list -->
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer text-center">
                        <a href="javascript::">View All Users</a>
                      </div>
                      <!-- /.card-footer -->
                    </div>
                    <!--/.card -->
                  </div>

                </div>
                <!-- /.card-body --> --}}
    </section>
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
<!-- ./wrapper -->
@endsection

@push('includes.scripts')
<!-- World Clock -->
<script src="{{ asset('plugins/worldclock/worldclock.js') }}"></script>
<script src="{{ asset ('js/pages/worldclockzone.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset ('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset ('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<script src="{{ asset ('js/pages/map.js') }}"></script>
<script src="{{ asset ('js/pages/dashboardcalendar.js') }}"></script>
@endpush