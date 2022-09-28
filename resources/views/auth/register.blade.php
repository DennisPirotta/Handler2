@extends('layouts.app')

@section('content')
    <section class="gradient-custom">
        <div class="container position-absolute top-50 start-50 translate-middle">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">

                    <div class="mb-md-5 mt-md-4 pb-5">

                        <img src="{{ asset('images/app/weed.png') }}" width="64" alt="">
                        <h2 class="fw-bold mb-2 text-uppercase mb-4">{{ __('Register') }}</h2>

                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-outline form-white mb-4">
                                <input type="text" id="name" name="name"
                                       class="form-control form-control-lg @error('name') is-invalid @enderror"
                                       value="{{ old('name') }}" required autocomplete="name" autofocus/>
                                <label class="form-label" for="name">{{ __('Name') }}</label>
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input type="email" id="email" name="email"
                                       class="form-control form-control-lg @error('email') is-invalid @enderror"
                                       value="{{ old('email') }}" required autocomplete="email"/>
                                <label class="form-label" for="email">{{ __('Email') }}</label>
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input type="password" id="password" name="password"
                                       class="form-control form-control-lg @error('password') is-invalid @enderror"
                                       value="" autocomplete="new-password"/>
                                <label class="form-label" for="password">{{ __('Password') }}</label>
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input type="password" id="password-confirm" name="password_confirmation"
                                       class="form-control form-control-lg @error('password') is-invalid @enderror"
                                       value="" autocomplete="new-password"/>
                                <label class="form-label" for="password-confirm">{{ __('Confirm Password') }}</label>
                            </div>

                            <button class="btn btn-outline-light btn-lg px-5"
                                    type="submit">{{ __('Register') }}</button>
                        </form>
                        <div class="d-flex justify-content-center text-center mt-4 pt-1">
                            <a href="#" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                            <a href="#" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                            <a href="#" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                        </div>

                    </div>

                    <div>
                        <p class="mb-0">{{__("Already have an account")}}? <a href="{{ route('login') }}"
                                                                              class="text-white-50 fw-bold">{{ __('Login') }}</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
