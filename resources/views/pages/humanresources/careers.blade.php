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
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>

        <section class="content">
          <div class="row">
            <div class="container">
              <div class="card card-danger card-outline col-sm-12 col-lg-10 col-xl-6">
                <div class="card-body">
                    <div class="jv-careersite"data-careersite="citadelservicing"></div>
                </div>
              </div>
            </div>
          </div>

        </section>
    </div>
    <script src="https://jobs.jobvite.com/__assets__/scripts/careersite/public/iframe.js"></script>
@stop
