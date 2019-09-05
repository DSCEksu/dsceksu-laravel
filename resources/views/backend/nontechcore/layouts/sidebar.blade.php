<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
  <div class="container-fluid">
    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Brand -->
    <a class="navbar-brand pt-0" href="">
      <img src="{{ asset('images/dsc.png') }}" class="navbar-brand-img" alt="{{ config('app.nick') }}">
    </a>
    <!-- User -->
    <ul class="nav align-items-center d-md-none">
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="media align-items-center">
            <span class="avatar avatar-sm rounded-circle">
            <img alt="{{ auth()->user()->name }}" src="{{ auth()->user()->image_upload ? asset(auth()->user()->image) : auth()->user()->image }}">
            </span>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
          <div class=" dropdown-header noti-title">
            <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
          </div>
          <a href="" class="dropdown-item">
            <i class="ni ni-single-02"></i>
            <span>{{ __('My profile') }}</span>
          </a>
          <a href="#" class="dropdown-item">
            <i class="ni ni-settings-gear-65"></i>
            <span>{{ __('Settings') }}</span>
          </a>
          <a href="#" class="dropdown-item">
            <i class="ni ni-calendar-grid-58"></i>
            <span>{{ __('Activity') }}</span>
          </a>
          <a href="#" class="dropdown-item">
            <i class="ni ni-support-16"></i>
            <span>{{ __('Support') }}</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
            <i class="ni ni-user-run"></i>
            <span>{{ __('Logout') }}</span>
          </a>
        </div>
      </li>
    </ul>
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
      <!-- Collapse header -->
      <div class="navbar-collapse-header d-md-none">
        <div class="row">
          <div class="col-6 collapse-brand">
            <a href="">
              <img src="{{ asset('images/dsc-logo.png') }}">
            </a>
          </div>
          <div class="col-6 collapse-close">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>
      <!-- Form -->
      <form class="mt-4 mb-3 d-md-none">
        <div class="input-group input-group-rounded input-group-merge">
          <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <span class="fa fa-search"></span>
            </div>
          </div>
        </div>
      </form>
      <!-- Navigation -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="ni ni-planet text-blue"></i> {{ __('My Profile') }}
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="ni ni-pin-3 text-orange"></i> {{ __('Maps') }}
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="ni ni-key-25 text-info"></i> {{ __('Login') }}
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="ni ni-circle-08 text-pink"></i> {{ __('Register') }}
          </a>
        </li>
        <li class="nav-item mb-5" style="position: absolute; bottom: 0;">
          <a class="nav-link" href="" target="_blank">
            <i class="ni ni-cloud-download-95"></i> Upgrade to PRO
          </a>
        </li>
      </ul>
      <!-- Divider -->
      <hr class="my-3">
      <!-- Heading -->
      <h6 class="navbar-heading text-muted">Documentation</h6>
      <!-- Navigation -->
      <ul class="navbar-nav mb-md-3">
        <li class="nav-item">
          <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
            <i class="ni ni-spaceship"></i> Getting started
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html">
            <i class="ni ni-ui-04"></i> Components
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
