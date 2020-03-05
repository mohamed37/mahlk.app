@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

            <div class="login-page">
                <div class="form-register">
                    <form method="POST" class="register-form" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row camera">
                            <i class="fa fa-camera "></i>
                            <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" placeholder="Image" name="image" value="{{ old('image') }}" required autocomplete="image" autofocus>

                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                           </div>

                       <div class="form-group row">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                       </div>

                       <div class="form-group row">
                        <input id="name" type="text" class="form-control @error('fullname') is-invalid @enderror" placeholder="FullName" name="fullname" value="{{ old('fullname') }}" required autocomplete="name" autofocus>

                        @error('fullname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                       </div>

                       <div class="form-group row">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                       </div>


                       <div class="form-group row">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
                        <i class="fa fa-eye-slash show-pass" style="bottom:28px;"></i>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                       </div>

                       <div class="form-group row">
                        <input id="password-confirm" type="password" class="form-control" placeholder="Password_Confirmation" name="password_confirmation" required autocomplete="new-password">
                       </div>

                       <div class="form-group row ">

                        <button type="submit" class="btn btn-success btn-block">
                            {{ __('Register') }}
                        </button>

                       </div>
                       <p class="message">Already registered? <a href="{{route('login')}}">Sign In</a></p>
                    </form>
                </div>
            </div>


    </div>
</div>
@endsection
