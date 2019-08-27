@extends('backend.layouts.app')

@section('title', '- Register')

@section('css')
  <style>
    body {
      background-color: #f2f3fa;
    }
    .login-content {
      max-width: 500px;
      margin: 70px auto 50px;
      box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
    }
  </style>
@endsection

@section('content')
  <div class="ibox login-content">
    <br>
    <div class="text-center">
      <p>
        <a href="{{ route('google') }}" class="btn btn-soc-google btn-fix btn-labeled btn-labeled-left">
          <span class="btn-label"><i class="fa fa-google-plus"></i></span>Continue with Google
        </a>
      </p>
      <p>
        <a href="{{ route('github') }}" class="btn btn-soc-github btn-fix btn-labeled btn-labeled-left">
          <span class="btn-label"><i class="fa fa-github"></i></span>Continue with GitHub
        </a>
      </p>
    </div>
    <form class="ibox-body" method="POST" action="{{ route('register') }}">
      @csrf

      <h4 class="font-strong text-center mb-3">Register</h4>

      <div class="form-group mb-4">
        <input id="name" class="form-control @error('name') is-invalid @enderror form-control-air" type="name" name="name" placeholder="Full Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        @error('name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="form-group mb-4">
        <input id="email" class="form-control @error('email') is-invalid @enderror form-control-air" type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="form-group mb-4">
        <input id="password" class="form-control @error('password') is-invalid @enderror form-control-air" type="password" name="password" placeholder="Password" required autocomplete="new-password">
        @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="form-group mb-4">
        <input id="password-confirm" class="form-control form-control-air" type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary btn-rounded btn-block btn-air">REGISTER</button>
      </div><br>
      <div class="text-center">
        Already Have An Account? <a href="{{ route('login') }}" class="btn btn-secondary btn-rounded btn-sm">Login Here</a>
      </div>
    </form>
  </div>
@endsection
