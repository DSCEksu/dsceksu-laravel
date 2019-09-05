<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('modules.analytics')
  @laravelPWA
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.nick') }} @yield('title')</title>

  @include('modules.seometa')

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset('argon') }}/assets/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="{{ asset('argon') }}/assets/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="{{ asset('argon') }}/css/argon.css" rel="stylesheet">

  <!-- PAGE LEVEL STYLES-->
  @yield('css')
</head>
<body class="{{ $class ?? '' }}">
  @auth()
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    @include('backend.layouts.navbars.sidebar')
  @endauth

  <div class="main-content">
    @include('backend.layouts.navbars.navbar')
    @yield('content')
  </div>

  @guest()
    @include('backend.layouts.footers.guest')
  @endguest

  <script src="{{ asset('argon') }}/assets/jquery/dist/jquery.min.js"></script>
  <script src="{{ asset('argon') }}/assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  @stack('js')

  <!-- Argon JS -->
  <script src="{{ asset('argon') }}/js/argon.js"></script>
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
</body>
</html>
