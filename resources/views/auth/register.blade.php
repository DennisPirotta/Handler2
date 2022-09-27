@extends('layouts.app')

@section('content')
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <img src="{{ asset('images/app/weed.png') }}" width="64" alt="">
                                <h2 class="fw-bold mb-2 text-uppercase mb-4">{{ __('Login') }}</h2>

                                <form action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <div class="form-outline form-white mb-4">
                                        <input type="text" id="name" name="name" class="form-control form-control-lg @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                                        <label class="form-label" for="name">{{ __('Name') }}</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="email" id="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email"/>
                                        <label class="form-label" for="email">{{ __('Email') }}</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" value="" autocomplete="new-password"/>
                                        <label class="form-label" for="password">{{ __('Password') }}</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="password-confirm" name="password_confirmation" class="form-control form-control-lg @error('password') is-invalid @enderror" value="" autocomplete="new-password"/>
                                        <label class="form-label" for="password-confirm">{{ __('Confirm Password') }}</label>
                                    </div>

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">{{ __('Register') }}</button>
                                </form>
                                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                    <a href="#" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a href="#" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                    <a href="#" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                </div>

                            </div>

                            <div>
                                <p class="mb-0">{{__("Already have an account")}}? <a href="{{ route('login') }}" class="text-white-50 fw-bold">{{ __('Login') }}</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
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
--}}
@endsection
