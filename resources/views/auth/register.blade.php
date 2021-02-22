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
        <div class="col-sm-12 col-md-8 col-lg-6 col-xl-4">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-6 col-form-label">{{ __('Name') }}</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-6 col-form-label">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-6 col-form-label">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-6 col-form-label">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <hr/>
                        <h5>Contact Details</h5>
                        <div class="form-group row">
                            <label for="direct-phone" class="col-md-6 col-form-label">{{ __('Direct Phone') }}</label>

                            <div class="col-md-12">
                                <input id="direct-phone" type="text" class="form-control" name="directPhone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone-ext" class="col-md-6 col-form-label">{{ __('Extension') }}</label>

                            <div class="col-md-12">
                                <input id="extension" type="text" class="form-control" name="ext">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cell-phone" class="col-md-6 col-form-label">{{ __('Cell Phone') }}</label>
                            
                            <div class="col-md-12">
                                <input id="cellPhone" type="text" class="form-control" name="cellPhone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="departments" class="col-md-6 col-form-label">{{ __('Department*') }}</label>
                            
                            <div class="col-md-12">
                                <input id="departments" type="text" class="form-control" name="departments">
                            </div>
                        </div>
                        <hr/>

                        <div class="form-group row mb-0 justify-content-center">
                            <div class="col-md-12">
                                <p><strong>*Must be an existing department. If not sure, select from dropdown menu after registration*<br>    
                                **Set user permissions after registration**
                                </strong></p>
                                {{-- <input type="reset" class="btn btn-outline-dark mr-3" value="Clear" /> --}}
                                <button type="submit" class="btn btn-danger" style="width: 100%;">
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
@endsection
