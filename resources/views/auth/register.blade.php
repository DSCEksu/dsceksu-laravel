@extends('backend.layouts.app', ['class' => 'bg-default'])

@section('title', '- Register')

@section('content')
  @include('backend.layouts.headers.guest')

  <div class="container mt--8 pb-5">
    <!-- Table -->
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8">
        <div class="card bg-secondary shadow border-0">
          <div class="card-header bg-transparent pb-5">
            <div class="text-muted text-center mt-2 mb-4"><small>{{ __('Sign up with') }}</small></div>
            <div class="text-center">
              <a href="{{ route('github') }}" class="btn btn-neutral btn-icon mr-4">
                <span class="btn-inner--icon"><img src="{{ asset('argon') }}/img/icons/common/github.svg"></span>
                <span class="btn-inner--text">{{ __('Github') }}</span>
              </a>
              <a href="{{ route('google') }}" class="btn btn-neutral btn-icon">
                <span class="btn-inner--icon"><img src="{{ asset('argon') }}/img/icons/common/google.svg"></span>
                <span class="btn-inner--text">{{ __('Google') }}</span>
              </a>
              <a href="{{ route('facebook') }}" class="btn btn-neutral btn-icon">
                <span class="btn-inner--icon"><img src="{{ asset('argon') }}/img/icons/common/facebook.svg"></span>
                <span class="btn-inner--text">{{ __('Facebook') }}</span>
              </a>
            </div>
          </div>
          <div class="card-body px-lg-5 py-lg-5">
            <div class="text-center text-muted mb-4">
              <small>{{ __('Or sign up with credentials') }}</small>
            </div>
            <form role="form" method="POST" action="{{ route('register') }}">
              @csrf

              <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" type="text" name="name" value="{{ old('name') }}" required autofocus>
                </div>
                @if ($errors->has('name'))
                  <span class="invalid-feedback" style="display: block;" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                  </div>
                  <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}" required>
                </div>
                @if ($errors->has('email'))
                  <span class="invalid-feedback" style="display: block;" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                  </div>
                  <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" type="password" name="password" required>
                </div>
                @if ($errors->has('password'))
                  <span class="invalid-feedback" style="display: block;" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                  </div>
                  <input class="form-control" placeholder="{{ __('Confirm Password') }}" type="password" name="password_confirmation" required>
                </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary mt-4">{{ __('Create account') }}</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
