@extends('layouts.guest', ['class' => 'register-page', 'contentClass' => 'register-page'])

@section('content')
<div class="row">
    <div class="col-md-5 ml-auto">
        <div class="info-area info-horizontal mt-5">
            <div class="icon icon-warning">
                <i class="tim-icons icon-wifi"></i>
            </div>
            <div class="description">
                <h3 class="info-title">{{ __('Marketing') }}</h3>
                <p class="description">
                    {{ __('We\'ve created the marketing campaign of the website. It was a very interesting collaboration.') }}
                </p>
            </div>
        </div>
        <div class="info-area info-horizontal">
            <div class="icon icon-primary">
                <i class="tim-icons icon-triangle-right-17"></i>
            </div>
            <div class="description">
                <h3 class="info-title">{{ __('Fully Coded in HTML5') }}</h3>
                <p class="description">
                    {{ __('We\'ve developed the website with HTML5 and CSS3. The client has access to the code using GitHub.') }}
                </p>
            </div>
        </div>
        <div class="info-area info-horizontal">
            <div class="icon icon-info">
                <i class="tim-icons icon-trophy"></i>
            </div>
            <div class="description">
                <h3 class="info-title">{{ __('Built Audience') }}</h3>
                <p class="description">
                    {{ __('There is also a Fully Customizable CMS Admin Dashboard for this product.') }}
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-7 mr-auto mt-5">
        <div class="card card-register card-white">
            <div class="card-header">
                <img class="card-img" src="{{ asset('img/card-primary.png') }}" alt="Card image" />
                <h4 class="card-title">{{ __('Register') }}</h4>
            </div>
            <form class="form" method="post" action="{{ route('register') }}">
                @csrf

                <div class="card-body">
                    <div class="input-group @error('name') has-danger @enderror">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-single-02"></i>
                            </div>
                        </div>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('Name') }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-group @error('email') has-danger @enderror">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-email-85"></i>
                            </div>
                        </div>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('Email Address') }}" name="email" value="{{ old('email') }}" required autocomplete="email" />
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
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" name="password" required autocomplete="new-password" />
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-lock-circle"></i>
                            </div>
                        </div>
                        <input id="password-confirm" type="password" class="form-control" placeholder="{{ __('Confirm Password') }}" name="password_confirmation" required autocomplete="new-password" />
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-round btn-lg">{{ __('Register') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
