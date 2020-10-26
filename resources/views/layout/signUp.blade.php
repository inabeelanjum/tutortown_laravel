@extends('layout.master')
@section('head')
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
@endsection

@section('content')
    <div class="login-dark" style="margin-top: 0px;">
        <form method="POST" style="margin-top: 50px;" action="{{ route('register') }}">
                        @csrf
            <h2 class="sr-only">Login Formlo</h2>
            <div class="illustration" style="height: 155px;"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"> <input id="name" placeholder= "Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

@error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror</div>
            <div class="form-group"><input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror</div>
            <div class="form-group"><input id="password" type="password" placeholder="Enter Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror</div>
    <div class="form-group"><input id="password-confirm" placeholder="Re Enter Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
</div>
            <div class="form-group"><button class="btn btn-success btn-block" type="submit">Sign Up</button></div>
        </form>
    </div>
@endsection