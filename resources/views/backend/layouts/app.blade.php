<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('modules.analytics')
  @laravelPWA
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>{{ config('app.nick') }} @yield('title')</title>

  @include('modules.seometa')

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
<body class="{{ auth()->check() ? 'fixed-navbar' : '' }}">

  @guest
    @yield('content')
  @endguest

  @auth
    <div class="page-wrapper">
      @include('backend.layouts.navbar.headbar')
      @include('backend.layouts.navbar.sidebar')

      <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        @yield('content')
        <!-- END PAGE CONTENT-->
        <footer class="page-footer">
          <div class="font-13">&copy; {{ date('Y') }} <b>{{ config('app.name') }}</b></div>
          <div>
            <a class="px-3 pl-4" href="javascript:;" onclick="share('{{ config('app.name') }}', '{{ config('app.url') }}', 'Have you been looking for a place you can learn technical skills for free? If yes, check out {{ config('app.nick') }} now at {{ config('app.info.location') }}')"><i class="fa fa-share"></i> Share</a>
            <a class="px-3 btn btn-soc-github btn-icon-only btn-circle" href="{{ config('app.info.github') }}" target="_blank"><i class="fa fa-github"></i></a>
            <a class="px-3 btn btn-soc-twitter btn-icon-only btn-circle" href="{{ config('app.info.twitter') }}" target="_blank"><i class="fa fa-twitter"></i></a>
          </div>
          <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
        </footer>
      </div>
    </div>
    @include('backend.includes.search')
    @include('backend.includes.theme')
    @include('backend.includes.timeout')
    @include('backend.layouts.navbar.quickbar')
  @endauth

  <!-- BEGIN PAGA BACKDROPS-->
  <div class="sidenav-backdrop backdrop"></div>
  <div class="preloader-backdrop">
    <div class="page-preloader"></div>
  </div>

  <!-- Firebase Script -->
  @include('modules.firebase')

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
  <script>
    async function share(title, url, text) {
      if (window.Windows) {
        const DataTransferManager = window.Windows.ApplicationModel.DataTransfer.DataTransferManager;

        const dataTransferManager = DataTransferManager.getForCurrentView();
        dataTransferManager.addEventListener("datarequested", (ev) => {
          const data = ev.request.data;

          data.properties.title = title;
          data.properties.url = url;
          data.setText(text);
        });

        DataTransferManager.showShareUI();

        return true;
      } else if (navigator.share) {
        try {
          await navigator.share({
            title: title,
            url: url,
            text: text,
          });

          return true;
        } catch (err) {
          console.error('There was an error trying to share this content');
          return false;
        }
      }
    }
  </script>

  <!-- PAGE LEVEL PLUGINS & SCRIPT-->
  @yield('js')
</body>
</html>
