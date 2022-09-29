{{--
@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">{{ __('Reset Password') }}</div>

<div class="card-body">
@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif

<form method="POST" action="{{ route('password.email') }}">
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

<div class="row mb-0">
<div class="col-md-6 offset-md-4">
<button type="submit" class="btn btn-primary">
{{ __('Send Password Reset Link') }}
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
--}}
@extends('layouts.app')
@section('content')
    <section class="gradient-custom">
        <div class="container position-absolute top-50 start-50 translate-middle">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                    <div class="mb-md-3 pb-5">
                        <img src="{{ asset('images/app/weed.png') }}" width="64" alt="">
                        <h2 class="fw-bold mb-2 text-uppercase mb-4">{{ __('Reset Password') }}</h2>

                        <form action="{{ route('password.email') }}" method="POST" class="md-form">
                            @csrf
                            <div class="form-outline form-white mb-4">
                                <input type="email" id="email" name="email"
                                       class="form-control form-control-lg @error('email') is-invalid @enderror"
                                       autocomplete="email">
                                <label class="form-label" for="email" id="emailLabel">Email</label>
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <button class="btn btn-outline-light btn-lg px-5" type="submit">{{ __('Send Password Reset Link') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
