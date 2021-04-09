@extends('layouts.default')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
        </div>
        </div>


    <style>
        .color-palette {
        height: 35px;
        line-height: 35px;
        text-align: right;
        padding-right: .75rem;
        }
        
        .color-palette.disabled {
        text-align: center;
        padding-right: 0;
        display: block;
        }
        
        .color-palette-set {
        margin-bottom: 15px;
        }

        .color-palette span {
        display: none;
        font-size: 12px;
        }

        .color-palette:hover span {
        display: block;
        }

        .color-palette.disabled span {
        display: block;
        text-align: left;
        padding-left: .75rem;
        }

        .color-palette-box h4 {
        position: absolute;
        left: 1.25rem;
        margin-top: .75rem;
        color: rgba(255, 255, 255, 0.8);
        font-size: 12px;
        display: block;
        z-index: 7;
        }

        #quote b {
          display: none !important;
        }

        #quote a {
          font-style: italic !important;
        }

        #quote a::before {
          content: "~ ";
        }
    </style>

    <!-- Main content -->
    <section class="content">
      <div class="col-sm-12">
        @include('pages.dashboard.welcome')
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-5">
            @include('pages.dashboard.quote')
            @include('pages.dashboard.productionlinks')
            @include('pages.dashboard.map')
            @include('pages.dashboard.calendar')
          </div>
          <div class="col-lg-4">
            @include('pages.dashboard.outofoffice')
            @include('pages.dashboard.officelocations')
            @include('pages.dashboard.hrlinks')
            @include('pages.dashboard.team')
          </div>
          <div class="col-lg-3">
            @include('pages.dashboard.announcements')
            @include('pages.dashboard.alu')
          </div>
        </div>
      </div>
    </section>
</div>
<!-- /.content-wrapper -->
<!-- ./wrapper -->
@endsection

@push('includes.scripts')
<!-- World Clock -->
<script src="{{ asset('plugins/worldclock/worldclock.js') }}"></script>
<script src="{{ asset ('js/pages/worldclockzone.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset ('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset ('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<script src="{{ asset ('js/pages/map.js?version=3') }}"></script>
<script src="{{ asset ('js/pages/dashboardcalendar.js') }}"></script>
@endpush