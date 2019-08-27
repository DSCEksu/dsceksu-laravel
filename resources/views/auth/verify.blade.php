@extends('backend.layouts.app')

@section('title', '- Verify')

@section('content')
  <div class="ibox">
    <div class="ibox-head">
      <div class="ibox-title">Verify Your Email Address</div>
    </div>
    <div class="ibox-body">
      @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
      @endif

      {{ __('Before proceeding, please check your email for a verification link.') }}
      {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>
    </div>
  </div>
@endsection
