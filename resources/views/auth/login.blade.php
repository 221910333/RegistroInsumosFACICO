@extends('layouts.index')

@section('content')
<div class="container">
    <div class="container-fluid w-100 vh-100 row align-items-center m-0 bg-sm-login">
        <div  class="row h-75">
            <div class="col-sm-12 col-md-10 col-lg-8 align-items-center m-auto shadow-lg bg-light">
                <div class="row h-100">
                    <div class="col-lg-6 col-sm-12 p-md-5 p-3">
                        <h1 class="text-center">{{ __('Iniciar Sesion') }}</h1>
                        <hr class="text-info">
                            <div class="row align-items-center">
                                @include('alerts.info')
                            <form method="POST" action="{{ route('login') }}" class="border-sm p-lg-5 p-sm-3 h-sm-100" id="form">
                                @csrf
                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                         @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="6Lc4OgkgAAAAAB_rKDq7zRMGtdjhjbkL_sF0SNiS" id="captcha"></div>
                                </div>
                                <div class="row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
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
    </div>
</div>
@endsection

@section('script')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        window.addEventListener('load', ()=>{
            var response = grecaptcha.getResponse();
            document.getElementById("form").addEventListener("submit", function(evt){
                var response = grecaptcha.getResponse();
                if(response.length == 0)
                {
                    alert("Debes Pasar el Captcha!");
                    evt.preventDefault();
                    return false;
                }
            });
        });
    </script>
@endsection
