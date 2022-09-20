@extends('layouts.default')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">ILD Turn Times</h1>
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
                            <h4 class="card-title">ILD Turn Times Editor for API</h4>
                        </div>
                        <div class="card-body">
                            {{ Form::open(['action' => ['ILDTurnTimesController@update'], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) }}
                                @foreach ($turnTimes->section as $turnTime)
                                <div class="row">
                                    <div class="col-8">
                                        {{ Form::label('title', 'Title', ['class' => 'pt-3'])}}
                                        {{ Form::text('section[title][]', $turnTime->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                                        {{ Form::label('comments', 'Comments', ['class' => 'pt-3'])}}
                                        {{ Form::textarea('section[comments][]', $turnTime->comments, ['class' => 'form-control', 'rows' => '4'])}}
                                    </div>
                                    <div class="col-4">
                                        {{ Form::label('body', 'Body', ['class' => 'pt-3'])}}
                                        {{ Form::text('section[body][]', $turnTime->body, ['class' => 'form-control'])}}
                                    </div>
                                    @if ($turnTime->subSection->count() == 0)
                                        <div class="col-8 pl-4">
                                            {{ Form::label('subTitle', 'Sub Title', ['class' => 'pt-3'])}}
                                            {{ Form::text('subSection[title][]', '', ['class' => 'form-control'])}}
                                            {{ Form::label('SubComments', 'Sub Comments', ['class' => 'pt-3'])}}
                                            {{ Form::textarea('subSection[comments][]', '', ['class' => 'form-control', 'rows' => '4'])}}
                                        </div>
                                        <div class="col-4">
                                            {{ Form::label('subBody', 'Sub Body', ['class' => 'pt-3'])}}
                                            {{ Form::text('subSection[body][]', '', ['class' => 'form-control'])}}
                                        </div>
                                    @else
                                        @foreach($turnTime->subSection as $subSection)
                                            <div class="col-8 pl-4">
                                                {{ Form::label('subTitle', 'Sub Title', ['class' => 'pt-3'])}}
                                                {{ Form::text('subSection[title][]', $subSection->title, ['class' => 'form-control'])}}
                                                {{ Form::label('SubComments', 'Sub Comments', ['class' => 'pt-3'])}}
                                                {{ Form::textarea('subSection[comments][]', $subSection->comments, ['class' => 'form-control', 'rows' => '4'])}}
                                            </div>
                                            <div class="col-4">
                                                {{ Form::label('subBody', 'Sub Body', ['class' => 'pt-3'])}}
                                                {{ Form::text('subSection[body][]', $subSection->body, ['class' => 'form-control'])}}
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                @endforeach
                                <div class="col mt-5">
                                    {{ Form::submit('Submit', ['class' => 'btn btn-danger']) }}
                                    {{ Form::close() }}
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->

</div>
@endsection
