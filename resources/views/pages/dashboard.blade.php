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
    </style>

    <!-- Main content -->
    <section class="content">
      <div class="col-sm-12">
        <div class="card">
          <img class ="img-fluid" src="{{ asset('img/dashboard-bg.jpg') }}">
            <h3 class="text-light dashboard-h3">Welcome to your new Cintranet, {{ $first_name }}!</h3>
        </div>
        <div class="container">
        <!-- SEARCH FORM -->  
        <form action="/search" method="GET" role="search">
          {{ csrf_field() }}
          <div class="input-group input-group dashboard-input" style="width:75%;">
          <input class="form-control form-control-navbar" type="search" name="q" placeholder="Search" aria-label="Search">
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
                   <!-- Map card -->
        <div class="card card-danger card-outline">
          <div class="card-header border-0">
            <h3 class="card-title">
              <i class="fas fa-map-marker-alt mr-1"></i>
              Map
            </h3>
          </div>
          <div class="card-body">
            <div id="world-map" style="height: 250px; width: 100%;"></div>
          </div>
          <!-- /.card-body-->
          <div class="card-footer bg-transparent">
            <div class="row">
              <div class="col-4 text-center">
               <div>Pacific</div>
               <div id="LosAngeles"></div> 
              </div>
              <!-- ./col -->
              <div class="col-4 text-center">
                <div>Mountain</div>
                <div id="Denver"></div>
              </div>
              <!-- ./col -->
              <div class="col-4 text-center">
                <div>Eastern</div>
                <div id="NewYork"></div>
              </div>
              <!-- ./col -->
            </div>
            <!-- /.row -->
          </div>

        </div>
        <!-- /.card -->
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
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="dashboardCalendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-lg-4">
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
                        <p>Paylocity</p>
                        <i class="fas fa-handshake" style="font-size: 32pt;"></i>
                      </a>
                    </div>
                </div>
              </div>
                {{-- <div class="float-right pr-3 pb-3">
                <a href="/humanresources/schedulesforms" class="small-box-footer float-right">View All <i class="fas fa-chevron-circle-right"></i></a>
                </div> --}}
            </div>

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
                    <div class="card-body p-0">
                        <ul class="users-list clearfix">
                          @if(!empty($teamMembers))
                          @foreach($teamMembers as $team)
                        <li>
                            <img src="{{ ($team->avatar) ? url('/storage/avatars/' .$team->avatar) : asset('img/avatar1.png') }}" alt="User Image" style="width:50%">
                            <a class="users-list-name" href="/directory/user/{{$team->id}}">{{ $team->firstname }} {{$team->lastname}}</a>
                            <span class="users-list-date">{{ Carbon\Carbon::parse($team->lastvisitDate)->diffForHumans() }}</span>
                        </li>
                        @endforeach
                        </ul>

                        <!-- /.users-list -->
                    </div>
                    <!-- /.card-body -->
                    <div class="float-right pr-3 pb-3">
                        <a href="{{action ('DirectoryController@index', ['team' => $team->team]) }}" class="small-box-footer float-right">View All <i class="fas fa-chevron-circle-right"></i></a>
                        @else
                        <p>No team members</p>
                        @endif
                    </div>
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
                    <p class="m-0"style="font-size: 10pt;"><em>{{$post->created_at}}</em></p>    
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
                  <a href="/learning/courses/fullcalendar" style="color: inherit; text-decoration: none; ">
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
                      <a href="/learning/courses/fullcalendar" class="small-box-footer float-right">View Calendar <i class="fas fa-chevron-circle-right"></i></a>
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
<!-- JQVMap -->
<script src="{{ asset ('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset ('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<script>
  // jvectormap data
  var visitorsData = {
  'US': 398, //USA
}

// jvectormap highlight states
var highlighted_states = {
  al  : '#C8102E',
  ca  : '#C8102E',
  co  : '#C8102E',
  ct  : '#C8102E',
  fl  : '#C8102E',
  ga  : '#C8102E',
  il  : '#C8102E',
  in  : '#C8102E',
  md  : '#C8102E',
  mi  : '#C8102E',
  mn  : '#C8102E',
  mt  : '#C8102E',
  ne  : '#C8102E',
  nj  : '#C8102E',
  nc  : '#C8102E',
  ok  : '#C8102E',
  or  : '#C8102E',
  pa  : '#C8102E',
  sc  : '#C8102E',
  tn  : '#C8102E',
  tx  : '#C8102E',
  ut  : '#C8102E',
  va  : '#C8102E',
  wa  : '#C8102E',
  wi  : '#C8102E',
}

var unhighlighted_states = 
  'nv';

// World map by jvectormap
$('#world-map').vectorMap({
  map              : 'usa_en',
  backgroundColor  : 'transparent',
  color            : '#B1B3B3',
  colors           : highlighted_states,
  hoverColor       : '#3D3935',
  selectedColor    : '#AB2328',
  regionStyle      : {
    initial: {
      fill            : 'rgba(171, 35, 40, 0.7)',
      'fill-opacity'  : 1,
      stroke          : 'rgba(255,255,255,.2)',
      'stroke-width'  : 1,
      'stroke-opacity': 1
    }
  },
  series           : {
    regions: [{
      values           : visitorsData,
      scale            : ['#ffffff', '#0154ad'],
      normalizeFunction: 'polynomial'
    }]
  },

  // Show state licenses
  onLabelShow: function(event, label, code){ 
    // if(!highlighted_states.hasOwnProperty(code)){
    //   event.preventDefault(); // Hides non-licensed states
    // }
    // State licenses
    if(code== 'al') {
      label.append(`<br><br>
      Alabama Consumer Credit License #22078`);
    }
    if(code== 'ca') {
      label.append(`
      <br>
      <br>
      Licensed under Division of Business Oversight Under the California
      <br> 
      Residential Mortgage Lending Act License# 41DBO-74196
      <br>
      <br>
      Department of Real Estate (DRE) ID #: 01799059 
      <br>
      <br>
      Finance Lenders Law License (DBO) ID #: 60DBO94450`);
    }
    if(code== 'co') {
      label.append(`
      <br>
      <br>
      Colorado Mortgage Company Registration ML-144549`);
    }
    if(code== 'ct') {
      label.append(`
      <br>
      <br>
      Connecticut Mortgage Lender License# ML-144549`);
    }
    if(code== 'fl') {
      label.append(`
      <br>
      <br>
      Florida Mortgage Lender Servicer License #MLD523`);
    }
    if(code== 'ga') {
      label.append(`
      <br>
      <br>
      Georgia Mortgage Lender License/Registration #23462`);
    }
    if(code== 'il') {
      label.append(`<br><br>
      Illinois Residential Mortgage License #MB.6761204
      <br>
      <br>
      Licensed by the Department of Financial and Professional Regulation, 
      <br>
      Mortgage Banking Division, James R. Thompson Center, 
      <br>
      IDFPR-Residential Mortgage Banking
      <br>
      <br>
      100 W. Randolph, 9th Floor,
      <br>
      Chicago, Illinois, 60601
      <br>
      Tel: (844) 768-1713`);
    }
    if(code== 'in') {
      label.append(`
      <br>
      <br>
      Indiana Mortgage Lending License #30531`);
    }
    if(code== 'md') {
      label.append(`
      <br>
      <br>
      Maryland Mortgage Lender License #18483`);
    }
    if(code== 'mi') {
      label.append(`
      <br>
      <br>
      Michigan 1st Mortgage Broker/Lender/Servicer License #FL00206854`);
    }
    if(code== 'mn') {
      label.append(`
      <br>
      <br>
      Minnesota Residential Mortgage Originator License #MN-MO-144549`);
    }
    if(code== 'mt') {
      label.append(`
      <br>
      <br>
      Montana Mortgage Lender License #144549`);
    }
    if(code== 'ne') {
      label.append(`
      <br>
      <br>
      Nebraska Mortgage Broker License #L-160722`);
    }
    if(code== 'nj') {
      label.append(`
      <br>
      <br>
      New Jersey Residential Mortgage Lender License #L-160722
      <br>
      <br>
      Licensed by the N.J. Department of Banking and Insurance`);
    }
    if(code== 'nc') {
      label.append(`
      <br>
      <br>
      Montana Mortgage Lender License #144549`);
    }
    if(code== 'ok') {
      label.append(`
      <br>
      <br>
      Oklahoma Mortgage Lender License #MLO10720`);
    }
    if(code== 'or') {
      label.append(`
      <br>
      <br>
      Oregon Mortgage Lending License #ML-5599`);
    }
    if(code== 'pa') {
      label.append(`
      <br>
      <br>
      Pennsylvania Mortgage Lending License #51804`);
    }
    if(code== 'sc') {
      label.append(`
      <br>
      <br>
      Tennessee Mortgage License #125315`);
    }
    if(code== 'tn') {
      label.append(`
      <br>
      <br>
      South Carolina Mortgage Lender/Servicer License #MLS-144549`);
    }
    if(code== 'tx') {
      label.append(`
      <br>
      <br>
      SML Mortgage Company License and SML Residential Mortgage Loan Servicer Registration
      <br>
      <br>
      Consumers wishing to file a complaint against a mortgage banker or a licensed mortgage 
      <br>
      banker residential mortgage loan originator should complete and send a complaint form to the <br>
      Texas Department of Savings and Mortgage Lending, 
      <br>2601 North Lamar, Suite 201, Austin, Texas 78705. 
      <br>
      Complaint forms and instructions may be obtained from the department’s website at www.sml.texas.gov. 
      <br>
      A toll-free consumer hotline is available at 1-877-276-5550.
      <br>
      <br>
      The department maintains a recovery fund to make payments of a certain actual out of pocket damages 
      <br>
      sustained by borrowers caused by acts of licensed mortgage banker residential mortgage loan originator. 
      <br>
      A written application for reimbursement from the recovery fund must be filed with and investigated by 
      <br>
      the department prior to the payment of a claim. For more information about the recovery fund. 
      <br>
      Please consult the department’s website at www.sml.texas.gov.`);
    }
    if(code== 'ut') {
      label.append(`
      <br>
      <br>
      Utah Mortgage Entity License #6573920`);
    }
    if(code== 'va') {
      label.append(`
      <br>
      <br>
      Virginia Lender License #MC-5845
      <br>
      <br>
      D.C. Mortgage Lender License #MLB144549 and #MLO273860`);
    }
    if(code== 'wa') {
      label.append(`
      <br>
      <br>
      Washington Consumer Loan Company License #CL-144549`);
    }
    if(code== 'wi') {
      label.append(`
      & Washington, D.C.
      <br>
      <br>
      Wisconsin Mortgage Banker License #144549BA`);
    }
  },

})

</script>
<script>
  // The Calender
  $('#dashboardCalendar').datetimepicker({
format: 'L',
inline: true
})
</script>
<script>
  window.onload = function() {
      worldClockZone();
  };
</script>

     
@endpush