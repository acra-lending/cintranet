@extends('layouts.default')

@section('content')
<body class="hold-transition sidebar-mini">    
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Operations</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="/">Operations</a></li>
                  <li class="breadcrumb-item active">Data</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->        

        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="container">
                <div class="row justify-content-center">
                <div class="col-md-6">
                <div class="card card-danger">
                  <div class="card-header">
                    <h3 class="card-title ">Daily Dashboard</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">

                      <tbody>
                        <tr>
                          <td>Today's Subs</td>
                          <td><strong>35</strong></td>
                          <td><strong>$ 11,569,600.00</strong></td>
                        </tr>
                        <tr>
                          <td>Incompletes NOT sub</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <td>Total Pending Incompletes</td>
                          <td>5</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->

                </div>
                <!-- /.card -->
              </div>
              <div class="card card-danger" style="height: 10rem; width: 10rem;">
                <div class="card-header">
                  <h5 class="card-title">Days Until Month End</h5>
                </div>
                <div class="card-body">
                  <div class="container">
                    <div class="row justify-content-center">
                      <h1>14</h1>
                    </div>
                  </div>
                </div>

              <!-- /.col -->
            </div>
            </div>
            </div>

              <div class="col-lg-6">
                <div class="card card-danger">
                  <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                      <h3 class="card-title">Daily Submissions</h3>
                      <a href="javascript:void(0);">View Report</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="d-flex">
                      <p class="d-flex flex-column">
                        <span class="text-bold text-lg">40</span>
                        <span>Average Submissions Per Day</span>
                      </p>
                      <p class="ml-auto d-flex flex-column text-right">
                        <span class="text-success">
                          <i class="fas fa-arrow-up"></i> 12.5%
                        </span>
                        <span class="text-muted">Since last week</span>
                      </p>
                    </div>
                    <!-- /.d-flex -->
    
                    <div class="position-relative mb-4">
                      <canvas id="visitors-chart" height="200"></canvas>
                    </div>
    
                    <div class="d-flex flex-row justify-content-end">
                      <span class="mr-2">
                        <i class="fas fa-square text-primary"></i> This Week
                      </span>
    
                      <span>
                        <i class="fas fa-square text-gray"></i> Last Week
                      </span>
                    </div>
                  </div>
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col-md-6 -->
              <div class="col-lg-6">
                <div class="card card-danger">
                  <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                      <h3 class="card-title">Monthly Sales</h3>
                      <a href="javascript:void(0);">View Report</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="d-flex">
                      <p class="d-flex flex-column">
                        <span class="text-bold text-lg">$18,230.00</span>
                        <span>Sales Over Time</span>
                      </p>
                      <p class="ml-auto d-flex flex-column text-right">
                        <span class="text-success">
                          <i class="fas fa-arrow-up"></i> 33.1%
                        </span>
                        <span class="text-muted">Since last month</span>
                      </p>
                    </div>
                    <!-- /.d-flex -->
    
                    <div class="position-relative mb-4">
                      <canvas id="sales-chart" height="200"></canvas>
                    </div>
    
                    <div class="d-flex flex-row justify-content-end">
                      <span class="mr-2">
                        <i class="fas fa-square text-primary"></i> This year
                      </span>
    
                      <span>
                        <i class="fas fa-square text-gray"></i> Last year
                      </span>
                    </div>
                  </div>
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col-md-6 -->

              <div class="col-12">
                <div class="card card-danger">
                  <div class="card-header">
                    <h3 class="card-title">Submissions</h3>
    
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Working Days</th>
                          <th>Work Days Into Month</th>
                          <th>Units</th>
                          <th>Volume</th>
                          <th>Average Subs Per Day</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>3-11-2020</td>
                          <td>22</td>
                          <td>8</td>
                          <td>322</td>
                          <td>$ 146,463,504.00</td>
                          <td>40</td>
                        </tr>
                        <tr>
                          <td>2-12-2020</td>
                          <td>19</td>
                          <td>8</td>
                          <td>269</td>
                          <td>$ 127,692,100.00</td>
                          <td>34</td>
                        </tr>
                        <tr>
                          <td>1-13-2020</td>
                          <td>21</td>
                          <td>8</td>
                          <td>236</td>
                          <td>$ 95,626,728.00</td>
                          <td>30</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>

            <!-- DONUT CHART -->
            <div class="col-lg-6">
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Programs</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <canvas id="donutChart" style="min-height: 400px; height: 400px; max-height: 400px; max-width: 100%;"></canvas>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>

            

            <!-- POLAR CHART -->
            <div class="col-lg-6">
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Sales by Region</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <canvas id="polarChart" style="min-height: 400px; height: 400px; max-height: 400px; max-width: 100%;"></canvas>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <div class="col-12">
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Fundings</h3>
                  <h3 class="card-title-2">Funded Loans</h3>
                  <h3 class="card-title-3">Funding Portfolio</h3>
  
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th>Working Days</th>
                        <th>Work Days Into Month</th>
                        <th>Units</th>
                        <th>Volume</th>
                        <th>Units</th>
                        <th>Volume</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>3-11-2020</td>
                        <td>22</td>
                        <td>8</td>
                        <td>74</td>
                        <td>$ 38,131,739.00</td>
                        <td>99</td>
                        <td>$ 41,679,500.00</td>
                      </tr>
                      <tr>
                        <td>2-12-2020</td>
                        <td>19</td>
                        <td>5</td>
                        <td>68</td>
                        <td>$ 26,161,828.00</td>
                        <td>78</td>
                        <td>$ 40,652,850.00</td>
                      </tr>
                      <tr>
                        <td>1-10-2020</td>
                        <td>21</td>
                        <td>7</td>
                        <td>77</td>
                        <td>$ 30,669,263.00</td>
                        <td>96</td>
                        <td>$ 40,652,850.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            
            <div class="col-6">
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Fundings</h3>
  
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>Units</th>
                        <th>Volume</th>
                        <th>Funded/Funding Portfolio</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>173</td>
                        <td>$ 79,811,239.00</td>
                        <td>Current Month</td>
                      </tr>
                      <tr>
                        <td>146</td>
                        <td>$ 54,867,828.00</td>
                        <td>Prior</td>
                      </tr>
                      <tr>
                        <td>27</td>
                        <td>$ 24,943,411.00</td>
                        <td>Current vs Prior Month</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <div class="card card-danger" style="height: 8rem; width: 8rem;">
              <div class="card-header">
                <h5 class="card-title ml-4">WAC</h5>
              </div>
              <div class="card-body">
                <div class="container">
                  <div class="row justify-content-center">
                    <h3>5.716%</h3>
                  </div>
                </div>
              </div>

            <!-- /.col -->
          </div>
            

            <div class="col-6">
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Active Pipeline</h3>
  
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">

                    <tbody>
                      <tr>
                        <td>Wholesale</td>
                        <td>$ 436,866,488.00</td>
                        <td>969</td>
                      </tr>
                      <tr>
                        <td>Retail</td>
                        <td>$ 17,211,835.00</td>
                        <td>38</td>
                      </tr>
                      <tr>
                        <td>Correspondent</td>
                        <td>$ 1,894,970.00</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td><strong>$ 455,973,293.00</strong></td>
                        <td><strong>1011</strong></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>

            <div class="col-6">
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Funded Loans</h3>
  
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <tbody>
                      <tr>
                        <td>Wholesale</td>
                        <td>$ 37,073,350.00</td>
                        <td>70</td>
                      </tr>
                      <tr>
                        <td>Retail</td>
                        <td>$ 470,00.00</td>
                        <td>2</td>
                      </tr>
                      <tr>
                        <td>Correspondent</td>
                        <td>$ 587,389.00</td>
                        <td>2</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td><strong>$ 38,131,739.00</strong></td>
                        <td><strong>74</strong></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
    
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->

<!-- ./wrapper -->
@stop
