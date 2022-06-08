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
                <a class="btn btn-outline-success" href="/export">Excel Export</a>
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
            </div>
          </div>

          <table class="table borderless">
            <tbody>

              <tr>
                <td>{{Carbon\Carbon::now('PST')->toFormattedDateString()}}</td>
                <td> </td>
                <td> </td>
                <td>LossDraft@citadelservicing.com</td>
              </tr>
              <tr>
                <td>Main: (949) 900-6630</td>
                <td>Toll Free (888) 800-7661</td>
                <td>External Dial: (949) 556-3283   Passcode: 39143</td>
                <td>PayoffRequests@citadelservicing.com</td>
              </tr>
              <tr>
                <td>Fax: (949) 900-6631</td>
                <td>Lake Forest Conference Ext: 267</td>
                <td>Conference Line Internal Dial In/Ex: 996</td>
                <td>CustomerService@citadelservicing.com</td>
              </tr>
              <tr>
                <td>Board Room Ext: 209</td>
                <td>Conference Room Ext: 117</td>
                <td>Classroom: Irvine 126  Lake Forest: 818</td>
                <td>Tidepartment@citadelservicing.com</td>
              </tr>
              <tr>
                <td>Servicing to Retail: 801</td>
                <td>New Retail Leads: 456</td>
                <td>Payoff Fax: 949-538-1001</td>
                <td>Tax & Insurance Fax: 949-771-1683</td>
              </tr>
            </tbody>
          </table>
          <div class="row">
            <div class="col text-right text-muted pb-3">
            Total results: {{$usersTotal}} 
            </div>
          </div>
          @foreach($allUsers as $key => $value)

          <table class="table table-bordered">
            <div class="center"><!-- loop through departments -->
                <h3>{{$key}}</h3>
            </div>
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Department</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
                <th scope="col">Direct Number</th>
                <th scope="col">Cell Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            
            <tbody>
              @foreach ($value as $user)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$user['id']}}">{{ $user['name'] }}</a></td>
                <td>{{ $user['department'] }}</td>
                <td>{{ $user['position'] }}</td>
                <td>{{ $user['extension'] }}</td>
                <td>{{ $user['directphone'] }}</td>
                <td>{{ $user['cellphone'] }}</td>
                <td><a href="mailto:{{$user['email']}}">{{ $user['email'] }}</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{count($value)}} results
            </div>
          </div>
          @endforeach
        </section>
      </div> <!-- end content-wrapper -->

@stop