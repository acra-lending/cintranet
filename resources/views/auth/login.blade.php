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
        <div class="col-sm-12 col-md-8 col-lg-6 col-xl-4 mt-5 pt-5">
            <div class="card">
                <div class="card-header">{{ __('Acra/CSC Employee Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        {{-- If Okta SSO Login, remove/hide fields --}}
                        <div class="form-group row">
                            <label for="email" class="col-md-6 col-form-label">{{ __('E-Mail Address') }}</label>
                        </div>
                            <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-6 col-form-label">{{ __('Password') }}</label>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 ">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 ">
                                {{-- Standard Login --}}
                                <button type="submit" class="btn btn-danger" style="width: 100%;">
                                    {{ __('Login') }}
                                </button>
                                <br/>
                                <br/>
                                {{-- Okta SSO Login --}}
                                {{-- <div class="text-center mb-3">
                                    <img src="https://op3static.oktacdn.com/assets/img/logos/okta-logo.47066819ac7db5c13f4c431b2687cef6.png"> 
                                </div>
                                <a href="https://acralending.oktapreview.com/home/acralending_cintranet_1/0oa2j72gsjpS3Ae5B1d7/aln2j75vk2hDoKvg51d7" type="submit" class="btn btn-danger" style="width: 100%;">
                                    {{ __('Login') }}
                                </a>
                                <br/>
                                <br/> --}}
                                {{-- Do not need if Okta SSO Login --}}
                                @if (Route::has('password.request'))
                                    <a class="p-0" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
