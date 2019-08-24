<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

  <title>{{ Request::is('/') ? config('app.name') : config('app.nick') }} @yield('title')</title>

  <meta name="author" content="Emmanuel Joseph (JET)"/>
  <meta name="title" content="{{ Request::is('/') ? config('app.name') : config('app.nick') }} @yield('title')">
  <meta name="keywords" content="dsc, developer student clubs, {{ config('app.name') }}, {{ config('app.nick') }}, google developers, sub saharan africa, students, technology, nigeria, emmanueljet, emmanuel joseph"/>
  <meta name="description" content="Developer Student Clubs(DSC) is a Google Developers program for university students to acquire technical skills and solve problems">

  <!-- Google -->
  <meta name="google-site-verification" content="{{ config('services.google.site_id') }}" />
  <link itemprop="url" rel="canonical" href="{{ url()->current() }}" />
  <meta itemprop="name" content="{{ Request::is('/') ? config('app.name') : config('app.nick') }} @yield('title')">
  <meta itemprop="description" content="Developer Student Clubs(DSC) is a Google Developers program for university students to acquire technical skills and solve problems">
  <meta itemprop="image" content="{{ config('app.url') }}/images/icons/icon-512x512.png">

  <!-- Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="{{ url()->current() }}" />
  <meta property="og:title" content="{{ Request::is('/') ? config('app.name') : config('app.nick') }} @yield('title')" />
  <meta property="og:description" content="Developer Student Clubs(DSC) is a Google Developers program for university students to acquire technical skills and solve problems" />
  <meta property="og:image" content="{{ config('app.url') }}/images/icons/icon-512x512.png" />
  <meta property="og:image:type" content="image/png" />
  <meta property="og:image:alt" content="{{ config('app.nick') }}" />

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="{{ url()->current() }}">
  <meta name="twitter:site" content="@DscEksu">
  <meta name="twitter:creator" content="@emmanuelJet_">
  <meta name="twitter:title" content="{{ Request::is('/') ? config('app.name') : config('app.nick') }} @yield('title')">
  <meta name="twitter:description" content="Developer Student Clubs(DSC) is a Google Developers program for university students to acquire technical skills and solve problems">
  <meta name="twitter:image:src" content="{{ config('app.url') }}/images/icons/icon-512x512.png">
  <meta name="twitter:image:alt" content="{{ config('app.nick') }}">

  <link rel="stylesheet" href="{{ asset('css/frontend/responsive.css') }}">
  <link rel="stylesheet" href="{{ asset('css/frontend/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/frontend/assets/bootstrap.min.css') }}">
  <link rel="dns-prefetch" href="https://docs.google.com">
  <link href='https://fonts.googleapis.com/css?family=Google+Sans:400,500,700|Material+Icons' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/assets/pace-theme.css') }}">

  <link rel="stylesheet" href="{{ asset('css/frontend/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('css/frontend/responsive.css') }}">

  @include('modules.analytics')

  @laravelPWA
  @include('modules.laravelpwa.meta')
</head>
<body class="x-hidden has-sticky-header">
  <nav class="navbar navbar-expand-lg fixed-top custom-menu custom-menu__light">
    <div class="container">
      <a class="navbar-brand" href="{{ route('index') }}">
        <img src="{{ asset('images/logo.png') }}" class="logo-sm" alt="{{ config('app.nick') }}">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="menu-icon__circle"></span>
        <span class="menu-icon">
          <span class="menu-icon__bar"></span>
          <span class="menu-icon__bar"></span>
          <span class="menu-icon__bar"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        @if (Request::is('offline'))
          <div class="custom-menu__right">
            <a href="#offlineModal" data-toggle="modal" class="event-btn"><i class="fa fa-users"></i> Become a member</a>
          </div>
        @else
          <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a class="nav-link" href="{{ route('index') }}#overview">Overview</a></li>
            <li class="nav-item"><a href="{{ route('index') }}#technologies" class="nav-link">Technologies</a></li>
            <li class="nav-item {{ Request::is('learn') ? 'active' : '' }}"><a href="{{ route('learn') }}" class="nav-link">Learn</a></li>
            <li class="nav-item {{ Request::is('projects') ? 'active' : '' }}"><a href="{{ route('projects') }}" class="nav-link">Projects</a></li>
            <li class="nav-item"><a href="{{ route('index') }}#workshops" class="nav-link">Workshops</a></li>
            <li class="nav-item"><a href="{{ route('index') }}#team" class="nav-link">Team</a></li>
            <li class="nav-item"><a class="nav-link" href="https://dsceksu.blogspot.com" target="_blank" rel="follow">Stories</a></li>
          </ul>
          <div class="custom-menu__right">
            <a href="{{ route('register') }}" class="event-btn"><i class="fa fa-users"></i> Become a member</a>
          </div>
        @endif
      </div>
    </div>
  </nav>

  @yield('content')

  <footer class="section-spacer footer-section">
    <div class="container">
      <div class="row flex-column-reverse flex-sm-row flex-lg-row">
        <div class="col-md-4 col-12">
          <div class="footer-widget first-of-footer-widget">
            <img src="{{ asset('images/dsc-footer.png') }}" class="logo-sm mb-10" alt="{{ config('app.name') }}">
            <p>&copy; {{ date('Y') }} | All Rights Reserved.</p>
            <span>Feel free to drop us an email at </span>
            <a href="mailto:dsceksu@gmail.com">dsceksu@gmail.com</a>
            <ul class="social-list__inline mt-10">
              <li>
                <a href="https://twitter.com/DscEksu" target="_blank" rel="noopener">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="https://github.com/DscEksu" target="_blank" rel="noopener">
                  <i class="fab fa-github"></i>
                </a>
              </li>
              <li>
                <a href="https://www.youtube.com/user/GoogleDevelopers"target="_blank" rel="noopener">
                  <i class="fab fa-youtube"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-8 col-sm-10">
          <div class="row">
            <div class="col-md-4 col-6">
              <div class="footer-widget">
                <h4 class="footer-widget__title">Programs</h4>
                <ul class="list-unstyled">
                  <li>
                    <a href="https://www.womentechmakers.com/" target="_blank" rel="noreferrer">Women Techmakers</a>
                  </li>
                  <li>
                    <a href="https://developers.google.com/experts/" target="_blank" rel="noreferrer">Google Developer Experts</a>
                  </li>
                  <li>
                    <a href="https://developers.google.com/programs/community/" target="_blank" rel="noreferrer">Google Developer Groups</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4 col-6">
              <div class="footer-widget">
                <h4 class="footer-widget__title">Developers</h4>
                <ul>
                  <li class="list-unstyled">
                  <li>
                    <a href="https://console.firebase.google.com/" target="_blank" rel="noreferrer">Firebase console</a>
                  </li>
                  <li>
                    <a href="https://console.cloud.google.com/" target="_blank" rel="noreferrer">Google Cloud Platform</a>
                  </li>
                  <li>
                    <a href="https://console.actions.google.com/" target="_blank" rel="noreferrer">Actions on Google</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="footer-widget">
                <h4 class="footer-widget__title">Contribute</h4>
                <ul class="list-unstyled">
                  <li>
                    <a href="https://github.com/DSCEksu/dsceksu-laravel/issues/new?template=documentation-bug.md" target="_blank" rel="noreferrer">File a bug</a>
                  </li>
                  <li>
                    <a href="https://github.com/DSCEksu/dsceksu-laravel" target="_blank" rel="noreferrer">View source</a>
                  </li>
                  <li>
                    <a href="javascript:;" onclick="share('{{ config('app.name') }}', '{{ config('app.url') }}', 'Have you been looking for a place you can learn technical skills for free? If yes, check out {{ config('app.nick') }} now at {{ config('app.school') }}')"><i class="fa fa-share"></i> Share</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
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
