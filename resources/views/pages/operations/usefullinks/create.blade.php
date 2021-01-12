@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Useful Links</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active"><a href="/">Operations</a></li>
            <li class="breadcrumb-item">Useful Links</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <style>

        .card-danger:not(.card-outline) .card-header {
        background: linear-gradient(138deg, rgba(171,35,40,1) 0%, rgba(52,58,64,1) 45%);
        }
        
        </style>
    
<!--POST TEMPLATE -->
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card card-danger">
                <div class="card-header">
                    <h4 class="card-title">Create Useful Link</h4>
                </div>
                <div class="card-body">
                    {{ Form::open(['action' => 'UsefulLinksController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
                        <div class="form-group">
                            {{ Form::label('link_title', 'Link Title') }}
                            {{ Form::text('link_title', '', ['class' => 'form-control', 'placeholder' => 'Link title']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('link_url', 'URL') }}
                            {{ Form::text('link_url', '', ['class' => 'form-control', 'placeholder' => 'https://...']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('department', 'Department') }}
                            {{ Form::select('link_category', array(
                                'loan_set_up' => 'Loan Set Up',
                                'tm_retail_processing' => 'Transaction Management / Retail Loan Processing',
                                'underwriting' => 'Underwriting',
                                'closing' => 'Closing',
                                'funding' => 'Funding'
                        ), null, ['class' => 'form-control']) }}
                        </div>
                        {{ Form::submit('Submit', ['class' => 'btn btn-danger']) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div><!-- /.container -->

</div>

@endsection
