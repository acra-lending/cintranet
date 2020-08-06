@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color: white;">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Careers</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item active"><a href="/">Human Resources</a></li>
                  <li class="breadcrumb-item">Careers</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>

        <section class="content">
          <div class="row">
            <div class="container">
              <div class="jv-careersite"data-careersite="citadelservicing"></div>
            </div>
          </div>

        </section>
    </div>
    <script src="https://jobs.jobvite.com/__assets__/scripts/careersite/public/iframe.js"></script>
@stop
