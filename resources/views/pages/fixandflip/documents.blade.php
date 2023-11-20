@extends('layouts.default')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Investor Loan Division</h1>
            </div>
          </div>
      </div>
    </div>
    <style>

    .card-dark:not(.card-outline) .card-header {
    background: var(--linear-gradient);
    }
    
    </style>
        <!-- Main content -->
        <section class="content">
          @include('pages.modals.modal-forms')
            <livewire:fixandflip.fixand-flip-documents />
      </section>
    </div>
@stop