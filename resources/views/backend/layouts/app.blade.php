<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('modules.analytics')
  @laravelPWA
  @include('modules.laravelpwa.meta')
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>{{ config('app.nick') }} @yield('title')</title>

  <meta name="author" content="Emmanuel Joseph (JET)"/>
  <meta name="title" content="{{ config('app.nick') }} @yield('title')">
  <meta name="keywords" content="dsc, developer student clubs, {{ config('app.name') }}, {{ config('app.nick') }}, google developers, sub saharan africa, students, technology, nigeria, emmanueljet, emmanuel joseph"/>
  <meta name="description" content="Developer Student Clubs(DSC) is a Google Developers program for university students to acquire technical skills and solve problems">

  <!-- Google -->
  <meta name="google-site-verification" content="{{ config('services.google.site_id') }}" />
  <link itemprop="url" rel="canonical" href="{{ url()->current() }}" />
  <meta itemprop="name" content="{{ config('app.nick') }} @yield('title')">
  <meta itemprop="description" content="Developer Student Clubs(DSC) is a Google Developers program for university students to acquire technical skills and solve problems">
  <meta itemprop="image" content="{{ config('app.url') }}/images/icons/icon-512x512.png">

  <!-- Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="{{ url()->current() }}" />
  <meta property="og:title" content="{{ config('app.nick') }} @yield('title')" />
  <meta property="og:description" content="Developer Student Clubs(DSC) is a Google Developers program for university students to acquire technical skills and solve problems" />
  <meta property="og:image" content="{{ config('app.url') }}/images/icons/icon-512x512.png" />
  <meta property="og:image:type" content="image/png" />
  <meta property="og:image:alt" content="{{ config('app.nick') }}" />

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="{{ url()->current() }}">
  <meta name="twitter:site" content="@DscEksu">
  <meta name="twitter:creator" content="@emmanuelJet_">
  <meta name="twitter:title" content="{{ config('app.nick') }} @yield('title')">
  <meta name="twitter:description" content="Developer Student Clubs(DSC) is a Google Developers program for university students to acquire technical skills and solve problems">
  <meta name="twitter:image:src" content="{{ config('app.url') }}/images/icons/icon-512x512.png">
  <meta name="twitter:image:alt" content="{{ config('app.nick') }}">

  <!-- CORE STYLES-->
  <link href="{{ asset('assets/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/line-awesome/css/line-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/themify-icons/css/themify-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/toastr/toastr.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/backend/main.min.css') }}" rel="stylesheet">

  <!-- PAGE LEVEL STYLES-->
  @yield('css')
</head>
<body>

  @yield('content')

  <!-- BEGIN PAGA BACKDROPS-->
  <div class="sidenav-backdrop backdrop"></div>
  <div class="preloader-backdrop">
    <div class="page-preloader"></div>
  </div>
  <!-- CORE PLUGINS & SCRIPT-->
  <script src="{{ asset('assets/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/popper.js/dist/umd/popper.min.js') }}"></script>
  <script src="{{ asset('assets/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/metisMenu/dist/metisMenu.min.js') }}"></script>
  <script src="{{ asset('assets/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
  <script src="{{ asset('assets/jquery-idletimer/dist/idle-timer.min.js') }}"></script>
  <script src="{{ asset('assets/toastr/toastr.min.js') }}"></script>
  <script src="{{ asset('assets/jquery-validation/dist/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('assets/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
  <script src="{{ asset('js/backend/app.min.js') }}"></script>

  <!-- PAGE LEVEL PLUGINS & SCRIPT-->
  @yield('js')
</body>
</html>
