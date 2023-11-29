@extends('layouts.default')

@section('content')
@push('includes.head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
@endpush
    <div class="content-wrapper">
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Audit - Time</h1>
            </div>
            </div>
        </div>
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card card-danger card-outline">
                        <div class="card-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width="1600" height="1800" src="https://app.smartsheet.com/b/form/30b9f245d2e544faa2d15c3119ac6126" frameborder="0" allowFullScreen="false"></iframe>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
  </div>
@stop