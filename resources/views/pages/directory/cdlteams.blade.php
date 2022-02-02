@extends('layouts.table')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col p-0">
                <button class="btn btn-outline-danger" onclick="window.print()">Print This Page</button>
                <a class="btn btn-outline-success" href="/exportCDL">Excel Export</a>
              </div>
            </div>
  
        </section>
        <style>
          .content-wrapper {
            background: transparent !important;
          }
          .center {
            text-align: center;
          }
          .center h3 {
            background-color: var(--primary-color);
            color: #fff;
            padding: 0 0 3px 0;
          }

          .content-wrapper {
            padding: 20px;
          }

          .img-logo {
            width: 45%;
            height: auto;
          }

          .borderless td, .borderless th{
            border: 0;
          }

          /* .table-fluid {
            width: 90%;
          } */

        </style>
    
        <!-- Main content -->
        <section class="content">
          <div class="row pt-4">
            <div class="container center">
            <img src="{{ asset ('/img/acra-logo-horizontal-highres.png') }}" class="img-logo" id="img-logo">
            <h1>Consumer Direct Teams</h1>
            <h5>{{Carbon\Carbon::now('PST')->toFormattedDateString()}}</h5>
            </div>
          </div>

          @foreach($consumerDirectTeams as $teams => $teamMembers)
          <table class="table table-bordered">
            <div class="center"><!-- loop through teamMembers -->
                <h3>Team {{$teams}} - Ext {{DB::table('s2zar_jsn_users')
                  ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
                  ->where('name', $teams)
                  ->value('extension')}} 
                </h3>
            </div>
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
                <th scope="col">Direct Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($teamMembers->sortBy('name') as $teamMember)
              <tr><!-- if user->teamMember equals teamMembers -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$teamMember->id}}">{{$teamMember->name}}</a></td>
                <td>{{$teamMember->position}}</td>
                <td>{{$teamMember->extension}}</td>
                <td>{{$teamMember->directphone}}</td>
                <td><a href="mailto:{{$teamMember->email}}">{{$teamMember->email}}</a></td>
              </tr>
              @endforeach
            </tbody>

          </table>
          @endforeach

          {{-- <div class="row">
            <div class="col text-right text-muted pb-3">
            {{$underwritingCount}} results
            </div>
          </div> --}}
        </section>
      </div> <!-- end content-wrapper -->

@stop