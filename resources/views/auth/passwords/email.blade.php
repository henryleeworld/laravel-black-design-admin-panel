@extends('layouts.guest', ['class' => 'login-page', 'contentClass' => 'login-page'])

@section('content')
<div class="col-lg-5 col-md-7 ml-auto mr-auto mt-5">
    <form class="form" method="post" action="{{ route('password.email') }}">
        @csrf

        <div class="card card-login card-white">
            <div class="card-header">
                <img src="{{ asset('img/card-primary.png') }}" alt="" />
                <h1 class="card-title">{{ __('Reset Password') }}</h1>
            </div>
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

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
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-lg btn-block mb-3">{{ __('Send Password Reset Link') }}</button>
            </div>
        </div>
    </form>
</div>
@endsection
