@extends('layouts.default')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">POD Listing</h1>
            </div>
            </div>
        </div>
        </div>
        <style>
          .highlight {
            padding: 5px;
            background-color: var(--primary-color);
            color: #fff;
          }
          .pod-ul {
              display: flex;
              flex-direction: row;
              justify-content: space-between;
              padding: 0 15px;
          }
          .pod-ul li {
              /* flex: auto; */
              list-style-type: none;
          }
        </style>

        <!-- Main content -->
        <section class="content">
            <div class="row">
              
              @include('pages.directory.partials.pod1')
              @include('pages.directory.partials.pod2')
              @include('pages.directory.partials.pod3')
              @include('pages.directory.partials.pod4')
              @include('pages.directory.partials.pod5')
              @include('pages.directory.partials.podoverflow')

            </div>
        </section>
        </div>

  </div>
@stop