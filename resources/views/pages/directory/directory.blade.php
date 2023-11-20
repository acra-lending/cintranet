@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          {{-- <div class="col-sm-6">
            <h1>Contacts</h1>
          </div> --}}
        </div>
      </div>
    </section>
    <style>
      .card-danger:not(.card-outline) .card-header {
      background: var(--linear-gradient);
      }
    </style>

    <!-- Main content -->
    <section class="content">
      <livewire:directory.search />
    </section>
  </div>
@stop