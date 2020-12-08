@extends('layout.master')
@section('head')
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
@endsection
@section('content')
    <div class="login-dark">
    <form method="POST" action="{{ route('login') }}">
                        @csrf
            <h2 class="sr-only">Login Formlo</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input id="email" type="email" placeholder='Email' class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror</div>
            <div class="form-group"><input id="password" type="password" placeholder='Password' class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror</div>
            
            <div class="form-group"><button class="btn btn-success btn-block" type="submit">Log In</button></div><a class="forgot" href="#">Forgot your email or password?</a></form>
    </div>
@endsection