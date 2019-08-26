@extends('backend.layouts.app')

@section('title', '- Reset Password')

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
    .auth-head-icon {
      position: relative;
      height: 60px;
      width: 60px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 30px;
      background-color: #fff;
      color: #5c6bc0;
      box-shadow: 0 5px 20px #d6dee4;
      border-radius: 50%;
      transform: translateY(-50%);
      z-index: 2;
    }
  </style>
@endsection

@section('content')
  <div class="ibox login-content">
    <br>
    <div class="text-center">
      <span class="auth-head-icon"><i class="la la-key"></i></span>
    </div>
    <form class="ibox-body" method="POST" action="{{ route('password.update') }}">
      @csrf

      <h4 class="font-strong text-center mb-3">Reset Password</h4>

      <input type="hidden" name="token" value="{{ $token }}">

      <div class="form-group mb-4">
        <input id="email" class="form-control @error('email') is-invalid @enderror form-control-air" type="email" name="email" placeholder="Email Address" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
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
        <button type="submit" class="btn btn-primary btn-rounded btn-block btn-air">Reset Password</button>
      </div>
    </form>
  </div>
@endsection
