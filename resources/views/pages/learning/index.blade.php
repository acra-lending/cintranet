@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Building Relationships</h1>
            @can('manage-posts')
                <a href="/learning/posts/create" class="mt-3 col-sm-6 col-md-4 col-lg-3 col-xl-2 btn btn-outline-dark">Create</a>
            @endcan
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/learning/posts">Learning</a></li>
            <li class="breadcrumb-item active">Building Relationships</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<section class="content">
    <livewire:learning.index />
</section>
</div>


@stop
