<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('modules.analytics')
  @laravelPWA

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

  <title>{{ Request::is('/') ? config('app.name') : config('app.nick') }} @yield('title')</title>

  @include('modules.seometa')

  <link rel="stylesheet" href="{{ asset('css/frontend/responsive.css') }}">
  <link rel="stylesheet" href="{{ asset('css/frontend/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/frontend/assets/bootstrap.min.css') }}">
  <link rel="dns-prefetch" href="//docs.google.com">
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href='https://fonts.googleapis.com/css?family=Google+Sans:400,500,700|Material+Icons' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/assets/pace-theme.css') }}">
  <link rel="stylesheet" href="{{ asset('css/frontend/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('css/frontend/responsive.css') }}">
</head>
<body class="x-hidden has-sticky-header">
  @include('frontend.includes.nav')

  @yield('content')

  @include('frontend.includes.footer')
  <a href="#" id="scroll" style="display: none;"><i class="fas fa-angle-up"></i></a>

  <script>
    function iframeObserverCallback(iframeEntries, observer) {
      iframeEntries.forEach(iframe => {
        if (iframe.isIntersecting && window.matchMedia('(min-width: 450px)').matches) {
          iframe.target.setAttribute('src', iframe.target.dataset.urllink);
          observer.unobserve(iframe.target);
        }
      })
    }
    const iframeObserver = new IntersectionObserver(iframeObserverCallback, { rootMargin: '30px 0px' });
    iframeObserver.POLL_INTERVAL = 200;
    iframeObserver.USE_MUTATION_OBSERVER = false;
    document.querySelectorAll('iframe[data-urllink]').forEach(img => {
      iframeObserver.observe(img);
    });

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

  <script src="{{ asset('js/frontend/assets/pace.js') }}"></script>
  <script src="{{ asset('js/frontend/assets/jquery.min.js') }}"></script>
  <script src="{{ asset('js/frontend/assets/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/frontend/assets/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('js/frontend/assets/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('js/frontend/assets/swiper.min.js') }}"></script>
  <script src="{{ asset('js/frontend/assets/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/frontend/assets/hammer.js') }}"></script>
  <script src="{{ asset('js/frontend/custom.js') }}"></script>
</body>
</html>
