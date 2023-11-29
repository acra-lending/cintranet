@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Announcements</h1>
            @can('manage-posts')
                <a href="/learning/announcements/create" class="mt-3 col-sm-6 col-md-4 col-lg-3 col-xl-2 btn btn-outline-dark">Create</a>
            @endcan
        </div><!-- /.col -->

        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <style>
        .input-group .form-control {
            border-top-right-radius: 3px !important;
            border-bottom-right-radius: 3px !important;
        }
    </style>

<section class="content">
    <livewire:announcements.search />
</section>
</div>

@stop
