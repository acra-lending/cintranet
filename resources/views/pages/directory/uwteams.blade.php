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
                <a class="btn btn-outline-success" href="/exportUW">Excel Export</a>
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
            <h1>Underwriting Teams</h1>
            <h5>{{Carbon\Carbon::now('PST')->toFormattedDateString()}}</h5>
            <br>
            <p><strong>
              If the TM's have a problem or a question with a file, they should first seek the guidance of the Underwriter for that particular loan.<br>
              If the UW is not able to address the issue, then that specific Underwriter's Team Lead should be contacted.<br>
              The Team Leads can then escalate the files to the (AVP) Jared Sherman and then to Jason James, Rodney Hixon and Craig Timmins as needed. 
            </strong>
            </p>
            </div>
          </div>

          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{-- Total results: {{$totalCount}}  --}}
            </div>
          </div>
          @foreach($underwriting as $teams => $teamMembers)
          <table class="table table-bordered">
            <div class="center"><!-- loop through teamMembers -->
              @if($teams == DB::table('s2zar_jsn_users')
              ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
              ->where('position', 'Director, Credit Management and Underwriting')
              ->value('name'))
              @continue
              @endif
              @if($teams == DB::table('s2zar_jsn_users')
              ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
              ->where('position', 'Managing Director, Operations')
              ->value('name'))
              @continue
              @endif
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
              @foreach($teamMembers as $teamMember)
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