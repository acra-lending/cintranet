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
                <h1 class="m-0 text-dark">IT Department</h1>
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
                        <div class="card-header">
                            <h4 class="card-title">
                                <i class="fas fa-ticket-alt"></i>
                                New Project Requests</h4>
                        </div>
                        <div class="card-body">
                            <div class="embed-responsive embed-responsive-21by9">
                                {{-- <iframe width="1600" height="1200" src="https://app.smartsheet.com/b/form/a91258e7499a4bf4b6a71ff3b03c0966" frameborder="0" allowFullScreen="false"></iframe> --}}
                                <iframe class="embed-responsive-item" src="https://app.smartsheet.com/b/form/fb9e858f668c46559531046d2a19000a"></iframe>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
  </div>
@push('includes.scripts')
<script src="{{ asset('js/pages/datepicker.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script>
    $('.select').selectpicker();
    </script>
@endpush
@stop