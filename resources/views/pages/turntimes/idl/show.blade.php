@extends('layouts.default')

@section('content')
<style>
@media print {
    body {
        margin: 0;
        background-color: #fff;
    }
    header, footer, aside, nav, form, iframe, .btn {
        display: none !important;
    }
}    
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">IDL Turn Times</h1>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <style>

    .card-danger:not(.card-outline) .card-header {
    background: var(--linear-gradient);
    }
    
    </style>
    
        <!--POST TEMPLATE -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h4 class="card-title">IDL Turn Times API</h4>
                        </div>
                        <div class="card-body">
                            @foreach ($turnTimes->section as $turnTime)
                                <div class="row">
                                    <div class="col-8">
                                        <h4>{{$turnTime->title}}</h4>
                                        @if (!empty($turnTime->comments))
                                        <p><em>{!! $turnTime->comments !!}</em></p>
                                        @endif
                                    </div>
                                    <div class="col-4">
                                        <h5>{{$turnTime->body}}</h5>
                                    </div>
                                    @if ($turnTime->subSection->count())
                                    @foreach($turnTime->subSection as $subSection)
                                    <div class="col-8 pl-4">
                                        <h6 class="pt-2">{{$subSection->title}}</h6>
                                        @if (!empty($subSection->comments))
                                        <p><em>{!! $subSection->comments !!}</em></p>
                                        @endif
                                    </div>
                                    <div class="col-4">
                                        <h6>{{$subSection->body}}</h6>
                                    </div>
                                    @endforeach
                                @endif
                                </div>
                                <hr>
                            @endforeach
                            <a href="/idl/turntimes/edit" class="btn btn-outline-dark">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->

</div>
@endsection
