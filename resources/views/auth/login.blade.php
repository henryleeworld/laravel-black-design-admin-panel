@extends('layouts.guest', ['class' => 'login-page', 'contentClass' => 'login-page'])

@section('content')
<div class="col-lg-4 col-md-6 ml-auto mr-auto mt-5">
    <form class="form" method="post" action="{{ route('login') }}">
        @csrf

        <div class="card card-login card-white">
            <div class="card-header">
                <img src="{{ asset('img/card-primary.png') }}" alt="" />
                <h1 class="card-title">{{ __('Log in') }}</h1>
            </div>
            <div class="card-body">
                <div class="input-group @error('email') has-danger @enderror">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-email-85"></i>
                        </div>
                    </div>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('Email Address') }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="input-group @error('password') has-danger @enderror">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="tim-icons icon-lock-circle"></i>
                        </div>
                    </div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" name="password" required autocomplete="current-password" />
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-check text-left">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" href="" class="btn btn-primary btn-lg btn-block mb-3">{{ __('Login') }}</button>
                <div class="pull-left">
                    <h6>
                        <a href="{{ route('register') }}" class="link footer-link">{{ __('Create Account') }}</a>
                    </h6>
                </div>
                @if (Route::has('password.request'))
                <div class="pull-right">
                    <h6>
                        <a href="{{ route('password.request') }}" class="link footer-link">{{ __('Forgot Your Password?') }}</a>
                    </h6>
                </div>
                @endif
            </div>
        </div>
    </form>
</div>
@endsection
