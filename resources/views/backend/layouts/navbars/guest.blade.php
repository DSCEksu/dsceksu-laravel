<nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
  <div class="container px-4">
    <a class="navbar-brand" href="{{ route('index') }}">
      <img src="{{ asset('images/dsc-logo-white.png') }}" class="logo-sm">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar-collapse-main">
      <!-- Collapse header -->
      <div class="navbar-collapse-header d-md-none">
        <div class="row">
          <div class="col-6 collapse-brand">
            <a href="">
              <img src="{{ asset('images/dsc-logo.png') }}" class="logo-sm">
            </a>
          </div>
          <div class="col-6 collapse-close">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>
      <!-- Navbar items -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link nav-link-icon" href="{{ route('register') }}">
            <i class="ni ni-circle-08"></i>
            <span class="nav-link-inner--text">{{ __('Register') }}</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-icon" href="{{ route('login') }}">
            <i class="ni ni-key-25"></i>
            <span class="nav-link-inner--text">{{ __('Login') }}</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
