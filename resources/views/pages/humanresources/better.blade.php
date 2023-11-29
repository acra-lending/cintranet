@extends('layouts.default')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">BetterVet</h1>
            </div>
            </div>
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
    
            .card-danger:not(.card-outline) .card-header {
            background: var(--linear-gradient);
            }
    
        </style>

        <section class="content">
            <div class="col-12">
                <div class="card card-danger card-outline">    
                  <div class="card-body">
                    <div class="row">
                        <div class="float-left">
                            <div class="container">
                                <div class="card" style="width: 17rem;">
                                    <button class="btn btn-outline-default"><a href="https://appointment.bettervet.com/wellness/cloudcorp" target="_blank"><img class="card-img-top" src="{{ asset ('img/vet/BetterVet.jpeg') }}"></a></button>
                                    <div class="card-body">
                                        <h5 class="card-title">Click to Sign Up</h5>
                                    </div>
                                </div>
                            </div>
                        </div>    
                        @if(count($better) > 0)
                        @foreach ($better as $doc)
                        <div class="float-left">
                            <div class="container">
                                <div class="card" style="width: 17rem;">
                                    <button class="btn btn-outline-default"><a href="{{ asset ('storage/upload/' .$doc->filename) }}" target="_blank"><img class="card-img-top" src="{{ asset ('img/vet/'.str_replace('pdf', 'jpg', $doc->filename)) }}" alt="{{str_replace('pdf', 'jpg', $doc->filename)}}"></a></button>
                                    <div class="card-body">
                                        <h5 class="card-title">{{$doc->filename}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                  </div>
                </div>
              </div>
  </div>
@push('includes.scripts')
<script src="{{ asset('js/pages/benefitdatecalculator.js') }}"></script>
@endpush
@stop