@extends('layouts.app')

@section('content')
<style>
    nav {
        background-color: #663300 !important;
    }
    body {
        background-color: #996633;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
                <div class="card card-body" style="background: #d2a679;">
                    <h3 class="text-center">{{ env('APP_NAME') }}</h3>
                    <h5 class="text-center text-muted mb-3">Sign into your heart~</h5>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-2 col-form-label text-md-end">
                                <i class="fas fa-envelope fa-xl"></i>
                            </div>
                            <div class="col-md-8">
                                <input id="email" type="email" style="background: #dfbf9f;outline-color: transparent" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-2 col-form-label text-md-end">
                                <i class="fas fa-lock fa-xl"></i>
                            </div>

                            <div class="col-md-8">
                                <input id="password" type="password" style="background: #dfbf9f" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link float-sm-end" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-0 p-2">
                            <button type="submit" class="col btn btn-primary">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
