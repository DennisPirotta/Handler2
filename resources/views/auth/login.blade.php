@extends('layouts.app')
@section('content')
    <section class="gradient-custom">
        <div class="container position-absolute top-50 start-50 translate-middle">

            <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">

                    <div class="mb-md-3 pb-5">

                        <img src="{{ asset('images/app/weed.png') }}" width="64" alt="">
                        <h2 class="fw-bold mb-2 text-uppercase mb-4">{{ __('Login') }}</h2>

                        <form action="{{ route('login') }}" method="POST" class="md-form">
                            @csrf
                            <div class="form-outline form-white mb-4">
                                <input type="email" id="email" name="email"
                                       class="form-control form-control-lg @error('email') is-invalid @enderror"
                                       autocomplete="email">
                                <label class="form-label" for="email" id="emailLabel">Email</label>
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input type="password" id="password" name="password"
                                       class="form-control form-control-lg @error('password') is-invalid @enderror"
                                       autocomplete="current-password"/>
                                <label class="form-label" for="password">Password</label>
                            </div>

                            <div class="form-check text-start mb-4">
                                <input class="form-check-input bg-dark" type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>

                            <p class="small mb-2 pb-lg-2"><a class="text-white-50"
                                                             href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                            </p>

                            <button class="btn btn-outline-light btn-lg px-5" type="submit">{{ __('Login') }}</button>
                        </form>

                        <div class="row mt-4">
                            <hr class="hr col-md-5 col-sm-4 col-4 my-auto">
                            <span class="col-md-2 col-sm-4 col-4 ">{{ __('Oppure') }}</span>
                            <hr class="hr col-md-5 col-sm-4 col-4 my-auto">
                        </div>

                        <div class="d-flex justify-content-center text-center mt-4 pt-1">
                            <a href="#" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                            <a href="#" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                            <a href="#" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                        </div>

                    </div>

                    <div>
                        <p class="mb-0">{{__("Don't have an account")}}? <a href="{{ route('register') }}"
                                                                            class="text-white-50 fw-bold">{{ __('Register') }}</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
