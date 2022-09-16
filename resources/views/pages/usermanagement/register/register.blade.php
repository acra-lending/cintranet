@extends('layouts.app')

@section('content')
<style>
    body {
        background: url({{ asset('img/bg-login.jpg') }});
    }

    .card {
        box-shadow:rgba(0, 0, 0, 0.55) 0 0 2.55rem;
    }

    .form-control .row {
        width: 100%;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-10 col-lg-6 col-xl-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="/usermanagement/register">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-6">
                                <label for="employeeID" class="col-form-label">{{ __('Employee ID') }}</label>

                                <input id="employeeID" type="text" class="form-control @error('employeeID') is-invalid @enderror" name="employeeID" value="{{ old('employeeID') }}" autocomplete="employeeID" autofocus>

                                @error('employeeID')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="requestDueDate" class="col-form-label">{{ __('Start Date') }}</label>
                                <input id="requestDate" type="text" class="form-control @error('requestDueDate') is-invalid @enderror" name="requestDueDate" required>
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <label for="name" class="col-form-label">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6">
                                <label for="email" class="col-form-label">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            
                            <div class="col-md-6">
                                <label for="password" class="col-form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="col-md-6">
                                <label for="password-confirm" class="col-form-label">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <hr/>
                        <h5>Contact Details</h5>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="direct-phone" class="col-form-label">{{ __('Direct Phone') }}</label>
                                <input id="direct-phone" type="text" class="form-control" name="directPhone">
                            </div>
                            <div class="col-md-6">
                                <label for="phone-ext" class="col-form-label">{{ __('Extension') }}</label>
                                <input id="extension" type="text" class="form-control" name="ext">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="cell-phone" class="col-form-label">{{ __('Cell Phone') }}</label>
                                <input id="cellPhone" type="text" class="form-control" name="cellPhone">
                            </div>
                            <div class="col-md-6">
                                <label for="team" class="col-form-label">{{ __('Team') }}</label>
                                <input id="team" type="text" class="form-control" name="team">
                            </div>
                        </div>
                        <div class="form-group row">
                            
                            <div class="col-md-6">
                                <label for="division" class="col-form-label">{{ __('Division*') }}</label>
                                {{-- <input id="departments" type="text" class="form-control" name="departments"> --}}
                                {{ Form::select('division', str_replace(array('[', '"', ']'), '', $division), null, ['class' => 'form-control float-right', 'name' => 'division'])  }}
                            </div>
                            <div class="col-md-6">
                                <label for="departments" class="col-form-label">{{ __('Department*') }}</label>
                                {{-- <input id="departments" type="text" class="form-control" name="departments"> --}}
                                {{ Form::select('departments', str_replace(array('[', '"', ']'), '', $departments), null, ['class' => 'form-control float-right', 'name' => 'departments'])  }}
                            </div>
                        </div>
                        <hr/>

                        <div class="form-group row mb-0 justify-content-center">
                            <div class="col-md-12">
                                <p style="float:right;"><strong>*Must be existing. If new, select one as temporary and contact webupdates to add new department*<br>    
                                **Set user permissions after registration**
                                </strong></p>
                            </div>
                            <div class="col-md-12">
                                {{-- <input type="reset" class="btn btn-outline-dark mr-3" value="Clear" /> --}}
                                <button type="submit" class="btn btn-danger float-right">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push('includes.scripts')
<script src="{{ asset('js/pages/datepicker.js') }}"></script>
@endpush
@endsection
