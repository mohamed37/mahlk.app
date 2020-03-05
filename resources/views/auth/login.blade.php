@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

                    <div class="login-page">
                        <div class="form">

                            <form class="login-form" method="POST" action="{{ route('login') }}">
                                @csrf

                              <div class="form-group row">

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                              </div>

                               <div class="form-group row">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"  placeholder="Password" name="password" required autocomplete="current-password">
                                <i class="fa fa-eye-slash show-pass"></i>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                               </div>


                                <div class="form-group row mb-0">

                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif

                                </div>


                            <p class="message">Not registered? <a href="{{route('register')}}">Create an account</a></p>
                          </form>

                        </div>
                    </div>


    </div>
</div>
@endsection
