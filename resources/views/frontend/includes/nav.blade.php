<nav class="navbar navbar-expand-lg fixed-top custom-menu custom-menu__light">
  <div class="container">
    <a class="navbar-brand" href="{{ route('index') }}">
      <img src="{{ asset('images/dsc-logo.png') }}" class="logo-sm" alt="{{ config('app.nick') }}">
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
          <li class="nav-item"><a class="nav-link" href="{{ config('app.info.blog') }}" target="_blank" rel="follow">Stories</a></li>
        </ul>
        <div class="custom-menu__right">
          @auth
            <a href="{{ route('login') }}" class="event-btn"><i class="fa fa-home"></i> Dashboard </a>
          @else
            <a href="{{ route('register') }}" class="event-btn"><i class="fa fa-users"></i> Become a member</a>
          @endauth
        </div>
      @endif
    </div>
  </div>
</nav>
