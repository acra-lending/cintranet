@extends('layouts.table')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col p-0">
                <button class="btn btn-outline-danger" onclick="window.print()">Print</button>
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
            background-color: #AB2328;
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
            <img src="{{ asset ('/img/csc-logo-highres.png') }}" class="img-logo">
            </div>
          </div>

          <table class="table borderless">
            <tbody>

              <tr>
                <td>{{Carbon\Carbon::now()->toFormattedDateString()}}</td>
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

          <table class="table table-bordered">
            <div class="center"><!-- loop through departments -->
                <h3>Executives</h3>
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
              @foreach($executives as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td>{{$department->name}}</td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td>{{$department->email}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <table class="table table-bordered">
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
                <td>{{$department->name}}</td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td>{{$department->email}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
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
                <td>{{$department->name}}</td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td>{{$department->email}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
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
                <td>{{$department->name}}</td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td>{{$department->email}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
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
                <td>{{$department->name}}</td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td>{{$department->email}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
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
                <td>{{$department->name}}</td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td>{{$department->email}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
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
                <td>{{$department->name}}</td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td>{{$department->email}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
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
                <td>{{$department->name}}</td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td>{{$department->email}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
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
                <td>{{$department->name}}</td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td>{{$department->email}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
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
                <td>{{$department->name}}</td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td>{{$department->email}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
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
                <td>{{$department->name}}</td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td>{{$department->email}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
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
                <td>{{$department->name}}</td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td>{{$department->email}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
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
              @foreach($underwriters as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td>{{$department->name}}</td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td>{{$department->email}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
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
              @foreach($valucationSpecialists as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td>{{$department->name}}</td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td>{{$department->email}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
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
                <td>{{$department->name}}</td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td>{{$department->email}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
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
                <td>{{$department->name}}</td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td>{{$department->email}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
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
              @foreach($servicing as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td>{{$department->name}}</td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td>{{$department->email}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
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
                <td>{{$department->name}}</td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td>{{$department->email}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
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
                <td>{{$department->name}}</td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td>{{$department->email}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
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
                <td>{{$department->name}}</td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td>{{$department->email}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
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
                <td>{{$department->name}}</td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td>{{$department->email}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <table class="table table-bordered">
            <div class="center">
                <h3>Sales / Marketing</h3>
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
                <td>{{$department->name}}</td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td>{{$department->email}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
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
              @foreach($salesWest as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td>{{$department->name}}</td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td>{{$department->email}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
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
              @foreach($salesEast as $department)
              <tr><!-- if user->department equals departments -->
                <!-- loop through users -->
                <td>{{$department->name}}</td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td>{{$department->email}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <table class="table table-bordered">
            <div class="center">
                <h3>Retail</h3>
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
                <td>{{$department->name}}</td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td>{{$department->email}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <table class="table table-bordered">
            <div class="center">
                <h3>Conduit / Correspondent</h3>
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
                <td>{{$department->name}}</td>
                <td>{{$department->position}}</td>
                <td>{{$department->extension}}</td>
                <td>{{$department->directphone}}</td>
                <td>{{$department->cell}}</td>
                <td>{{$department->fax}}</td>
                <td>{{$department->email}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>

        </section>
      </div> <!-- end content-wrapper -->

@stop