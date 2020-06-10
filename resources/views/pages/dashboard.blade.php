@extends('layouts.default')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-10">
              <div class="image">
                <h3 class="pl-2 mt-1 text-light dashboard-h3" style="position: absolute;">Welcome to your new Cintranet, {{ $first_name }}!</h3>
                <img class ="img-fluid" src="{{ asset('img/csc-cintranet-header-bg2.jpg') }}">
              </div>

            </div><!-- /.col -->
            <div class="col-sm-2 col-md-2 col-lg-2">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="/">Dashboard</a></li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
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

      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
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
        <!-- /.row -->
        <div class="row">
          <div class="col-lg-5">
                   <!-- Map card -->
        <div class="card">
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
            <div class="card">
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
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-lg-4">
            <div class="card card-danger">
                <div class="card-header">
                <h3 class="card-title">
                  <i class="nav-icon fas fa-file-signature"></i>
                    HR Policies
                </h3>
                </div>
                {{-- <img class="card-img-top" src="https://cdn.paylocity.com/cdn/branding/paylocity-logo.svg" alt="paylocity-logo"> --}}
                <div class="card-body d-flex">
                    <div class="p-2" style="text-align: center;"><p>Leave Policy</p><i class="far fa-file-alt" style="font-size: xx-large;"></i></div>
                    <div class="p-2" style="text-align: center;"><p>Company Policy</p><i class="fas fa-landmark" style="font-size: xx-large;"></i></div>
                    <div class="p-2" style="text-align: center;"><p>Health Policy</p><i class="fas fa-file-medical" style="font-size: xx-large;"></i></div>
                    <div class="p-2" style="text-align: center;"><p>HR Policy</p><i class="far fa-handshake" style="font-size: xx-large;"></i></div>
                </div>
                <div class="float-right pr-3 pb-3">
                <a href="#" class="small-box-footer float-right">View All <i class="fas fa-chevron-circle-right"></i></a>
                </div>
            </div>

            <div class="card card-danger">
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
                            <img src="{{ ($team->avatar) ? url($team->avatar) : asset('img/avatar1.png') }}" alt="User Image" style="width:50%">
                            <a class="users-list-name" href="/directory/user/{{$team->id}}">{{ $team->firstname }} {{$team->lastname}}</a>
                            <span class="users-list-date">{{ Carbon\Carbon::parse($team->lastvisitDate)->diffForHumans() }}</span>
                        </li>
                        @endforeach
                        </ul>

                        <!-- /.users-list -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer text-center">
                        <a href="{{action ('DirectoryController@index', ['team' => $team->team]) }}" class="small-box-footer float-right">View All <i class="fas fa-chevron-circle-right"></i></a>
                        @else
                        <p>No team members</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-3">
            <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">
                <i class="fas fa-bullhorn"></i>
                General Announcements
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <div class="callout callout-danger">
                    
                <h5>Injury and Illness Prevention Program – California Management Team</h5>

                <p>01/02/2020</p>
                <table class="table">
                    <tbody>
                    <tr>
                        <td>
                          General Announcements Number 01-002
                        </td>
                        <td class="text-right py-0 align-middle">
                            <div class="btn-group btn-group-sm">
                              <a href="#" class="text-muted"><i class="fas fa-file-alt"></i></a>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          General Announcements Number 01-002
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

                <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">
                    <i class="fas fa-university"></i>
                    CSCU Sessions
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <ul class="event-list">
                        <li>
                            <time datetime="2014-07-20">
                                <span class="day">23</span>
                                <span class="month">Apr</span>
                                <span class="year">2020</span>
                            </time>
                            <div class="info">
                                <h2 class="title">Service Skills That Matter - ZOOM</h2>
                                <span class="desc">09:00AM - 10:00AM</span>
                            </div>
                        </li>
                        <li>
                            <time datetime="2014-07-20">
                                <span class="day">23</span>
                                <span class="month">Apr</span>
                                <span class="year">2020</span>
                            </time>
                            <div class="info">
                                <h2 class="title">Leading By Example (Team) - ZOOM</h2>
                                <span class="desc">01:30PM - 02:30PM</span>
                            </div>
                        </li>
                        <li>
                            <time datetime="2014-07-20">
                                <span class="day">24</span>
                                <span class="month">Apr</span>
                                <span class="year">2020</span>
                            </time>
                            <div class="info">
                                <h2 class="title">Excel I</h2>
                                <span class="desc">11:00AM - 12:00PM</span>
                            </div>
                        </li>
                    </ul>
    
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
@stop