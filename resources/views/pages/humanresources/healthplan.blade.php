@extends('layouts.default')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Health Plan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="/">Human Resources</a></li>
                <li class="breadcrumb-item">Health Plan</a></li>
                </ol>
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
    
            .modal-dialog {
                max-width: 70rem !important;
            }
            .modal-content {
                height: 45rem !important;
            }
    
            @media screen and (max-width: 1099px) {
                .modal-dialog {
                max-width: 68rem !important;
                }
                .modal-content {
                    height: 43rem !important;
                }
            }
            @media screen and (max-width: 1032px) {
                .modal-dialog {
                max-width: 67rem !important;
                }
                .modal-content {
                    height: 42rem !important;
                }
            }
            @media screen and (max-width: 968px) {
                .modal-dialog {
                max-width: 65rem !important;
                }
                .modal-content {
                    height: 40rem !important;
                }
            }
            @media screen and (max-width: 899px) {
                .modal-dialog {
                max-width: 64rem !important;
                }
                .modal-content {
                    height: 39rem !important;
                }
            }
            @media screen and (max-width: 799px) {
                .modal-dialog {
                max-width: 62rem !important;
                }
                .modal-content {
                    height: 33rem !important;
                }
            }
            @media screen and (max-width: 599px) {
                .modal-dialog {
                max-width: 58rem !important;
                }
                .modal-content {
                    height: 26rem !important;
                }
            }
            @media screen and (max-width: 532px) {
                .modal-dialog {
                max-width: 58rem !important;
                }
                .modal-content {
                    height: 23rem !important;
                }
            }
        </style>

        <section class="content">
            <div class="col-12">
                <div class="card card-danger card-outline">
                  <div class="card-body">
                    <div class="row">
                        <div class="float-left">
                            <div class="container">
                                <div class="card" style="width: 18rem;">
                                    <button class="btn btn-outline-default"><img class="card-img-top" src="{{ asset ('img/hr/employee_navigator.jpg') }}" data-toggle="modal" data-target="#modal-default" alt="login-portal"></button>
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="float-left">
                            <div class="container">
                                <div class="card" style="width: 18rem;">
                                    <button class="btn btn-outline-default"><a href="{{ asset ('storage/upload/' .$benefitsCA->filename) }}" target="_blank"><img class="card-img-top" src="{{ asset ('img/hr/benefits_ca.jpg') }}" alt="csc-health-welfare"></a></button>
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="float-left">
                            <div class="container">
                                <div class="card" style="width: 18rem;">
                                    <button class="btn btn-outline-default"><a href="{{ asset ('storage/upload/' .$benefitsNonCA->filename) }}" target="_blank"><img class="card-img-top" src="{{ asset ('img/hr/benefits_non_ca.jpg') }}" alt="csc-health-welfare-alt"></a></button>
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>


            <div class="col-12">
                <div class="card card-danger card-outline">
                  <div class="card-header">
                    <div class="card-title">
                      Benefits Videos
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                        @foreach($humanresourcesBenefits as $data)
                            <div class="col-sm-2">
                                <a href="{{ URL::to('https://player.vimeo.com' .str_replace("s", "", $data['uri'])) }}" data-toggle="lightbox" data-title="{{ $data['name'] }}" data-gallery="gallery">
                                    <img src="{{ ($data['pictures']['sizes'][4]['link_with_play_button']) }}" class="img-fluid mb-2" alt="{{ $data['name'] }}" /></a>
                                </a>
                                <h6>{{ $data['name'] }}</h6>
                                <p>{{ Carbon\Carbon::parse($data['created_time'])->format('F d, Y') }}</p>
                            </div>
                        @endforeach
                    </div>
                  </div>
                </div>
              </div>

            <div class="col-12 mb-5">
                <div class="card card-dark card-outline">
                    <div class="card-header">
                      <div class="card-title">
                        Benefits Effective Date
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="form-group">
                            <label class="control-label" for="effectiveDate">Date of Hire</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                    <i class="far fa-calendar-alt"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control float-right" name="effectiveDate" id="effectiveDate" onchange="calcDate()">
                            </div>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="form-group">
                            <label class="control-label" for="effectiveDate">Benefit Effective Date</label>
                            <div class="input-group">
                                <input type="text" class="form-control float-right" name="calculatedDate" id="calculatedDate">
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </section>
        </div>
          <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Employee Navigator Login Portal</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <img class="img-thumbnail float-right" src="https://www.employeenavigator.com/identity/img/en_logo.eba43823.png">
                    <p>Go to Employee Navigator (opens in new tab)</p>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <a href="https://www.employeenavigator.com/benefits/Account/Login" target="_blank" class="btn btn-danger">Go</a>
                </div>
              </div>
            </div>
          </div>

  </div>
@push('includes.scripts')
<script src="{{ asset('js/pages/benefitdatecalculator.js') }}"></script>
@endpush
@stop