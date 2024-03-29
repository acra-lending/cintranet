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




          {{-- <table class="table table-bordered">
            <div class="center">
                <h3>Office Management</h3>
            </div>

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
                <th scope="col">Direct Number</th>
                <th scope="col">Cell Number</th>
                <th scope="col">Fax Number</th> 
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($officeManagement as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$department->id}}">{{$department->name}}</a></td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td><a href="mailto:{{$department->email}}">{{$department->email}}</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{$officeManagementCount}} results
            </div>
          </div>
          <table class="table table-bordered">
            <div class="center">
                <h3>Human Resources</h3>
            </div>

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
                <th scope="col">Direct Number</th>
                <th scope="col">Cell Number</th>
                <th scope="col">Fax Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($humanResources as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$department->id}}">{{$department->name}}</a></td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td><a href="mailto:{{$department->email}}">{{$department->email}}</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{$humanResourcesCount}} results
            </div>
          </div>
          <table class="table table-bordered">
            <div class="center">
                <h3>Accounting</h3>
            </div>

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
                <th scope="col">Direct Number</th>
                <th scope="col">Cell Number</th>
                <th scope="col">Fax Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($accounting as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$department->id}}">{{$department->name}}</a></td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td><a href="mailto:{{$department->email}}">{{$department->email}}</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{$accountingCount}} results
            </div>
          </div>
          <table class="table table-bordered">
            <div class="center">
                <h3>Financial Planning & Analysis</h3>
            </div>

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
                <th scope="col">Direct Number</th>
                <th scope="col">Cell Number</th>
                <th scope="col">Fax Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($financialPlanning as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$department->id}}">{{$department->name}}</a></td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td><a href="mailto:{{$department->email}}">{{$department->email}}</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{$financialPlanningCount}} results
            </div>
          </div>
          <table class="table table-bordered">
            <div class="center">
                <h3>Learning & Development</h3>
            </div>

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
                <th scope="col">Direct Number</th>
                <th scope="col">Cell Number</th>
                <th scope="col">Fax Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($learning as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$department->id}}">{{$department->name}}</a></td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td><a href="mailto:{{$department->email}}">{{$department->email}}</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{$learningCount}} results
            </div>
          </div>
          <table class="table table-bordered">
            <div class="center">
                <h3>Compliance QC</h3>
            </div>

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
                <th scope="col">Direct Number</th>
                <th scope="col">Cell Number</th>
                <th scope="col">Fax Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($complianceQC as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$department->id}}">{{$department->name}}</a></td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td><a href="mailto:{{$department->email}}">{{$department->email}}</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{$complianceQCCount}} results
            </div>
          </div>
          <table class="table table-bordered">
            <div class="center">
                <h3>Legal</h3>
            </div>

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
                <th scope="col">Direct Number</th>
                <th scope="col">Cell Number</th>
                <th scope="col">Fax Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($legal as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$department->id}}">{{$department->name}}</a></td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td><a href="mailto:{{$department->email}}">{{$department->email}}</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{$legalCount}} results
            </div>
          </div>
          <table class="table table-bordered">
            <div class="center">
                <h3>Capital Markets</h3>
            </div>

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
                <th scope="col">Direct Number</th>
                <th scope="col">Cell Number</th>
                <th scope="col">Fax Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($capitalMarkets as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$department->id}}">{{$department->name}}</a></td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td><a href="mailto:{{$department->email}}">{{$department->email}}</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{$capitalMarketsCount}} results
            </div>
          </div>
          <table class="table table-bordered">
            <div class="center">
                <h3>Technology</h3>
            </div>

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
                <th scope="col">Direct Number</th>
                <th scope="col">Cell Number</th>
                <th scope="col">Fax Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($technology as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$department->id}}">{{$department->name}}</a></td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td><a href="mailto:{{$department->email}}">{{$department->email}}</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{$technologyCount}} results
            </div>
          </div>
          <table class="table table-bordered">
            <div class="center">
                <h3>Disclosures</h3>
            </div>

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
                <th scope="col">Direct Number</th>
                <th scope="col">Cell Number</th>
                <th scope="col">Fax Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($disclosures as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$department->id}}">{{$department->name}}</a></td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td><a href="mailto:{{$department->email}}">{{$department->email}}</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{$disclosuresCount}} results
            </div>
          </div>
          <table class="table table-bordered">
            <div class="center">
                <h3>Operations</h3>
            </div>

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
                <th scope="col">Direct Number</th>
                <th scope="col">Cell Number</th>
                <th scope="col">Fax Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($operations as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$department->id}}">{{$department->name}}</a></td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td><a href="mailto:{{$department->email}}">{{$department->email}}</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{$operationsCount}} results
            </div>
          </div>
          <table class="table table-bordered">
            <div class="center">
                <h3>Transaction Managers</h3>
            </div>

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
                <th scope="col">Direct Number</th>
                <th scope="col">Cell Number</th>
                <th scope="col">Fax Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($transactionManagers as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$department->id}}">{{$department->name}}</a></td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td><a href="mailto:{{$department->email}}">{{$department->email}}</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{$transactionManagersCount}} results
            </div>
          </div>
          <table class="table table-bordered">
            <div class="center">
                <h3>Loan Set Up</h3>
            </div>

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
                <th scope="col">Direct Number</th>
                <th scope="col">Cell Number</th>
                <th scope="col">Fax Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($loanSetUp as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$department->id}}">{{$department->name}}</a></td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td><a href="mailto:{{$department->email}}">{{$department->email}}</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{$loanSetUpCount}} results
            </div>
          </div>
          <table class="table table-bordered">
            <div class="center">
                <h3>Underwriters</h3>
            </div>

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
                <th scope="col">Direct Number</th>
                <th scope="col">Cell Number</th>
                <th scope="col">Fax Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($underwriting as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$department->id}}">{{$department->name}}</a></td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td><a href="mailto:{{$department->email}}">{{$department->email}}</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{$underwritingCount}} results
            </div>
          </div>
          <table class="table table-bordered">
            <div class="center">
                <h3>Valuation Specialists</h3>
            </div>

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
                <th scope="col">Direct Number</th>
                <th scope="col">Cell Number</th>
                <th scope="col">Fax Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($valuationSpecialists as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$department->id}}">{{$department->name}}</a></td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td><a href="mailto:{{$department->email}}">{{$department->email}}</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{$valuationSpecialistsCount}} results
            </div>
          </div>
          <table class="table table-bordered">
            <div class="center">
                <h3>Funders</h3>
            </div>

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
                <th scope="col">Direct Number</th>
                <th scope="col">Cell Number</th>
                <th scope="col">Fax Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($funders as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$department->id}}">{{$department->name}}</a></td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td><a href="mailto:{{$department->email}}">{{$department->email}}</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{$fundersCount}} results
            </div>
          </div>
          <table class="table table-bordered">
            <div class="center">
                <h3>Investor Reporting</h3>
            </div>

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
                <th scope="col">Direct Number</th>
                <th scope="col">Cell Number</th>
                <th scope="col">Fax Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($investorReporting as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$department->id}}">{{$department->name}}</a></td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td><a href="mailto:{{$department->email}}">{{$department->email}}</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{$investorReportingCount}} results
            </div>
          </div>
          <table class="table table-bordered">
            <div class="center">
                <h3>Servicing / Loss Mitigation</h3>
            </div>

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
                <th scope="col">Direct Number</th>
                <th scope="col">Cell Number</th>
                <th scope="col">Fax Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($lossMitigation as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$department->id}}">{{$department->name}}</a></td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td><a href="mailto:{{$department->email}}">{{$department->email}}</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{$lossMitigationCount}} results
            </div>
          </div>
          <table class="table table-bordered">
            <div class="center">
                <h3>Loan Servicing</h3>
            </div>

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
                <th scope="col">Direct Number</th>
                <th scope="col">Cell Number</th>
                <th scope="col">Fax Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($loanServicing as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$department->id}}">{{$department->name}}</a></td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td><a href="mailto:{{$department->email}}">{{$department->email}}</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{$loanServicingCount}} results
            </div>
          </div>
          <table class="table table-bordered">
            <div class="center">
                <h3>Customer Service</h3>
            </div>

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
                <th scope="col">Direct Number</th>
                <th scope="col">Cell Number</th>
                <th scope="col">Fax Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($customerService as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$department->id}}">{{$department->name}}</a></td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td><a href="mailto:{{$department->email}}">{{$department->email}}</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{$customerServiceCount}} results
            </div>
          </div>
          <table class="table table-bordered">
            <div class="center">
                <h3>Tax & Insurance Department</h3>
            </div>

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
                <th scope="col">Direct Number</th>
                <th scope="col">Cell Number</th>
                <th scope="col">Fax Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($tax as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$department->id}}">{{$department->name}}</a></td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td><a href="mailto:{{$department->email}}">{{$department->email}}</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{$taxCount}} results
            </div>
          </div>
          <table class="table table-bordered">
            <div class="center">
                <h3>Servicing Quality Assurance</h3>
            </div>

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
                <th scope="col">Direct Number</th>
                <th scope="col">Cell Number</th>
                <th scope="col">Fax Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($servicingQA as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$department->id}}">{{$department->name}}</a></td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td><a href="mailto:{{$department->email}}">{{$department->email}}</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{$servicingQACount}} results
            </div>
          </div>
          <table class="table table-bordered">
            <div class="center">
                <h3>Shipping</h3>
            </div>

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
                <th scope="col">Direct Number</th>
                <th scope="col">Cell Number</th>
                <th scope="col">Fax Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($shipping as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$department->id}}">{{$department->name}}</a></td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td><a href="mailto:{{$department->email}}">{{$department->email}}</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{$shippingCount}} results
            </div>
          </div>
          <table class="table table-bordered">
            <div class="center">
                <h3>Marketing</h3>
            </div>

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
                <th scope="col">Direct Number</th>
                <th scope="col">Cell Number</th>
                <th scope="col">Fax Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($marketing as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$department->id}}">{{$department->name}}</a></td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td><a href="mailto:{{$department->email}}">{{$department->email}}</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{$marketingCount}} results
            </div>
          </div>
          <table class="table table-bordered">
            <div class="center">
                <h3>Account Executives - West Coast</h3>
            </div>

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
                <th scope="col">Direct Number</th>
                <th scope="col">Cell Number</th>
                <th scope="col">Fax Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($aeWest as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$department->id}}">{{$department->name}}</a></td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td><a href="mailto:{{$department->email}}">{{$department->email}}</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{$aeWestCount}} results
            </div>
          </div>
          <table class="table table-bordered">
            <div class="center">
                <h3>Account Executives - East Coast</h3>
            </div>

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
                <th scope="col">Direct Number</th>
                <th scope="col">Cell Number</th>
                <th scope="col">Fax Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($aeEast as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$department->id}}">{{$department->name}}</a></td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td><a href="mailto:{{$department->email}}">{{$department->email}}</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{$aeEastCount}} results
            </div>
          </div>
          <table class="table table-bordered">
            <div class="center">
                <h3>Consumer Direct Lending</h3>
            </div>

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
                <th scope="col">Direct Number</th>
                <th scope="col">Cell Number</th>
                <th scope="col">Fax Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($retail as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$department->id}}">{{$department->name}}</a></td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td><a href="mailto:{{$department->email}}">{{$department->email}}</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{$retailCount}} results
            </div>
          </div>
          <table class="table table-bordered">
            <div class="center">
                <h3>Correspondent</h3>
            </div>

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
                <th scope="col">Direct Number</th>
                <th scope="col">Cell Number</th>
                <th scope="col">Fax Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($correspondent as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$department->id}}">{{$department->name}}</a></td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td><a href="mailto:{{$department->email}}">{{$department->email}}</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{$correspondentCount}} results
            </div>
          </div>
          <table class="table table-bordered">
            <div class="center">
                <h3>Fix And Flip</h3>
            </div>

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Ext</th>
                <th scope="col">Direct Number</th>
                <th scope="col">Cell Number</th>
                <th scope="col">Fax Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($fixAndFlip as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td><a href="/directory/user/{{$department->id}}">{{$department->name}}</a></td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td><a href="mailto:{{$department->email}}">{{$department->email}}</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col text-right text-muted pb-3">
            {{$fixAndFlipCount}} results
            </div>
          </div> --}}
        </section>
      </div> <!-- end content-wrapper -->

@stop