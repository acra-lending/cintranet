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
                <a class="btn btn-outline-success" href="/exportTM">Excel Export</a>
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
            <h1>Transaction Management Teams</h1>
            <h5>{{Carbon\Carbon::now('PST')->toFormattedDateString()}}</h5>
            </div>
          </div>

          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{-- Total results: {{$totalCount}}  --}}
            </div>
          </div>
          <table class="table table-bordered">
            <div class="center"><!-- loop through teamMembers -->
                <h3>{{$directorOfOperations->name}}
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
              <tr><!-- if user->teamMember equals teamMembers -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$directorOfOperations->id}}">{{$directorOfOperations->name}}</a></td>
                <td>{{$directorOfOperations->position}}</td>
                <td>{{$directorOfOperations->extension}}</td>
                <td>{{$directorOfOperations->directphone}}</td>
                <td><a href="mailto:{{$directorOfOperations->email}}">{{$directorOfOperations->email}}</a></td>
              </tr>
            </tbody>

          </table>
          @foreach($transactionManagers as $teams => $teamMembers)
          <table class="table table-bordered">
            <div class="center"><!-- loop through teamMembers -->
              @if($teams == DB::table('s2zar_jsn_users')
              ->join('s2zar_users', 's2zar_users.id', 's2zar_jsn_users.id')
              ->where('position', 'Director of Operations')
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
        </section>
      </div> <!-- end content-wrapper -->

@stop

<!--
<body>
	<table border="2" bordercolor="green">
		<tr>
			<td>Lisa Fees</td>
      <td>Assitant Transaction Manager</td>
			<td>475</td>
      <td>(949) 519-1947</td>
      <td>Lisa.Fess@acralending.com</td>

      <td>
      	<table border="2" bordercolor="blue">
					<tr>
						<td>Donna Abbo</td>
						<td>Transaction Manager</td>
            <td>447</td>
            <td>(949) 667-5734</td>
            <td>Donna.Abbo@acralending.com</td>
					</tr>
					<tr>
						<td>TM 2 Name</td>
						<td>TM 2 Position</td>
            <td>TM 2 Ext</td>
            <td>TM 2 Direct Number</td>
            <td>TM 2 Email</td>
					</tr>
				</table>
      </td>
		</tr>
		<tr>
			<td>Asst TM</td>
      <td>Asst TM Position</td>
			<td>Asst TM Ext</td>
      <td>Asst TM Direct Number</td>
      <td>Asst TM Email</td>

      <td>
        <table border="2" bordercolor="blue">
					<tr>
						<td>TM 3 Name</td>
						<td>TM 3 Position</td>
            <td>TM 3 Ext</td>
            <td>TM 3 Direct Number</td>
            <td>TM 3 Email</td>
					</tr>
					<tr>
						<td>TM 4 Name</td>
						<td>TM 4 Position</td>
            <td>TM 4 Ext</td>
            <td>TM 4 Direct Number</td>
            <td>TM 4 Email</td>
					</tr>
				</table>
      </td>
		</tr>
	</table>
</body>


-->