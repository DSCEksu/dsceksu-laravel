@extends('backend.layouts.app')

@section('title', '- Login')

@section('css')
  <style>
    body {
      background-color: #f2f3fa;
    }
    .login-content {
      max-width: 400px;
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
    <div class="text-center">
      <span class="auth-head-icon"><i class="la la-user"></i></span>
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
    <form class="ibox-body" method="POST" action="{{ route('login') }}">
      @csrf

      <h4 class="font-strong text-center mb-3">LOG IN</h4>

      <div class="form-group mb-4">
        <input id="email" class="form-control @error('email') is-invalid @enderror form-control-air" type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="form-group mb-4">
        <input id="password" class="form-control @error('password') is-invalid @enderror form-control-air" type="password" name="password" placeholder="Password" required autocomplete="current-password">
        @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="flexbox mb-5">
        <span>
          <label class="ui-switch switch-icon mr-2 mb-0">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <span></span>
          </label>
          Remember
        </span>
        @if (Route::has('password.request'))
          <a class="text-primary" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
          </a>
        @endif
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary btn-rounded btn-block btn-air">LOGIN</button>
      </div><br>
      <div class="text-center">
        Don't Have An Account? <a href="{{ route('register') }}" class="btn btn-secondary btn-rounded btn-sm">Register Here</a>
      </div>
    </form>
  </div>
@endsection
