<!-- START HEADER-->
<header class="header">
  <div class="page-brand">
      <a href="index.html">
          <span class="brand">{{ config('app.nick') }}</span>
          <span class="brand-mini">DSC</span>
      </a>
  </div>
  <div class="flexbox flex-1">
      <!-- START TOP-LEFT TOOLBAR-->
      <ul class="nav navbar-toolbar">
          <li>
              <a class="nav-link sidebar-toggler js-sidebar-toggler" href="javascript:;">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </a>
          </li>
          <li>
              <a class="nav-link search-toggler js-search-toggler"><i class="ti-search"></i>
                  <span>Search here...</span>
              </a>
          </li>
      </ul>
      <!-- END TOP-LEFT TOOLBAR-->
      <!-- START TOP-RIGHT TOOLBAR-->
      <ul class="nav navbar-toolbar">
          <li class="timeout-toggler">
              <a class="nav-link toolbar-icon" data-toggle="modal" data-target="#session-dialog" href="javascript:;"><i class="ti-alarm-clock timeout-toggler-icon rel"><span class="notify-signal"></span></i></a>
          </li>
          <li class="dropdown dropdown-inbox">
              <a class="nav-link dropdown-toggle toolbar-icon" data-toggle="dropdown" href="javascript:;"><i class="ti-email"></i>
                  <span class="envelope-badge">7</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                  <div class="dropdown-arrow"></div>
                  <div class="dropdown-header text-center">
                      <div>
                          <span class="font-18"><strong>7 New</strong> Messages</span>
                      </div>
                      <a class="text-muted font-13" href="javascript:;">view all</a>
                  </div>
                  <div class="p-3">
                      <div class="media-list media-list-divider scroller" data-height="350px" data-color="#71808f">
                          <a class="media p-3">
                              <div class="media-img">
                                  <img class="img-circle" src="{{ asset('images/backend') }}/users/u8.jpg" alt="image">
                              </div>
                              <div class="media-body">
                                  <div class="media-heading">Lynn Weaver<small class="text-muted float-right">Just now</small></div>
                                  <div class="font-13 text-muted">Your proposal interested me.</div>
                                  <div class="font-13 mt-1">
                                      <span class="d-inline-flex align-items-center text-primary"><i class="ti-support mr-2"></i>Support</span>
                                  </div>
                              </div>
                          </a>
                          <a class="media p-3">
                              <div class="media-img">
                                  <img class="img-circle" src="{{ asset('images/backend') }}/users/u6.jpg" alt="image">
                              </div>
                              <div class="media-body">
                                  <div class="font-strong">Connor Perez<small class="text-muted float-right">18 mins</small></div>
                                  <div class="font-13 text-muted">Your proposal interested me.</div>
                                  <div class="font-13 mt-1">
                                      <span class="d-inline-flex align-items-center text-success mr-3"><i class="ti-lock mr-2"></i>Security</span>
                                      <span class="d-inline-flex align-items-center text-pink"><i class="ti-credit-card mr-2"></i>Payment</span>
                                  </div>
                              </div>
                          </a>
                          <a class="media p-3">
                              <div class="media-img">
                                  <img class="img-circle" src="{{ asset('images/backend') }}/users/u11.jpg" alt="image">
                              </div>
                              <div class="media-body">
                                  <div class="font-strong">Tyrone Carroll<small class="text-muted float-right">42 mins</small></div>
                                  <div class="font-13 text-muted">Your proposal interested me.</div>
                              </div>
                          </a>
                          <a class="media p-3">
                              <div class="media-img">
                                  <img class="img-circle" src="{{ asset('images/backend') }}/users/u10.jpg" alt="image">
                              </div>
                              <div class="media-body">
                                  <div class="font-strong">Stella Obrien<small class="text-muted float-right">1 hrs</small></div>
                                  <div class="font-13 text-muted">Your proposal interested me.</div>
                                  <div class="font-13 mt-1">
                                      <span class="d-inline-flex align-items-center text-purple"><i class="ti-settings mr-2"></i>Technical</span>
                                  </div>
                              </div>
                          </a>
                          <a class="media p-3">
                              <div class="media-img">
                                  <img class="img-circle" src="{{ asset('images/backend') }}/users/u2.jpg" alt="image">
                              </div>
                              <div class="media-body">
                                  <div class="font-strong">Becky Brooks<small class="text-muted float-right">3 hrs</small></div>
                                  <div class="font-13 text-muted">Your proposal interested me.</div>
                              </div>
                          </a>
                          <a class="media p-3">
                              <div class="media-img">
                                  <img class="img-circle" src="{{ asset('images/backend') }}/users/u5.jpg" alt="image">
                              </div>
                              <div class="media-body">
                                  <div class="font-strong">Bob Gonzalez<small class="text-muted float-right">3 hrs</small></div>
                                  <div class="font-13 text-muted">Your proposal interested me.</div>
                                  <div class="font-13 mt-1">
                                      <span class="d-inline-flex align-items-center text-primary mr-3"><i class="ti-support mr-2"></i>Support</span>
                                      <span class="d-inline-flex align-items-center text-pink"><i class="ti-shopping-cart mr-2"></i>Shopping</span>
                                  </div>
                              </div>
                          </a>
                          <a class="media p-3">
                              <div class="media-img">
                                  <img class="img-circle" src="{{ asset('images/backend') }}/users/u9.jpg" alt="image">
                              </div>
                              <div class="media-body">
                                  <div class="font-strong">Tammy Newman<small class="text-muted float-right">3 hrs</small></div>
                                  <div class="font-13 text-muted">Your proposal interested me.</div>
                                  <div class="font-13 mt-1">
                                      <span class="d-inline-flex align-items-center text-primary"><i class="ti-ticket mr-2"></i>Client Support</span>
                                  </div>
                              </div>
                          </a>
                      </div>
                  </div>
              </div>
          </li>
          <li class="dropdown dropdown-notification">
              <a class="nav-link dropdown-toggle toolbar-icon" data-toggle="dropdown" href="javascript:;"><i class="ti-bell rel"><span class="notify-signal"></span></i></a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                  <div class="dropdown-arrow"></div>
                  <div class="dropdown-header text-center">
                      <div>
                          <span class="font-18"><strong>14 New</strong> Notifications</span>
                      </div>
                      <a class="text-muted font-13" href="javascript:;">view all</a>
                  </div>
                  <div class="p-3">
                      <ul class="timeline scroller" data-height="320px">
                          <li class="timeline-item"><i class="ti-check timeline-icon"></i>2 Issue fixed<small class="float-right text-muted ml-2 nowrap">Just now</small></li>
                          <li class="timeline-item"><i class="ti-announcement timeline-icon"></i>
                              <span>7 new feedback
                                  <span class="badge badge-warning badge-pill ml-2">important</span>
                              </span><small class="float-right text-muted">5 mins</small></li>
                          <li class="timeline-item"><i class="ti-truck timeline-icon"></i>25 new orders sent<small class="float-right text-muted ml-2 nowrap">24 mins</small></li>
                          <li class="timeline-item"><i class="ti-shopping-cart timeline-icon"></i>12 New orders<small class="float-right text-muted ml-2 nowrap">45 mins</small></li>
                          <li class="timeline-item"><i class="ti-user timeline-icon"></i>18 new users registered<small class="float-right text-muted ml-2 nowrap">1 hrs</small></li>
                          <li class="timeline-item"><i class="ti-harddrives timeline-icon"></i>
                              <span>Server Error
                                  <span class="badge badge-success badge-pill ml-2">resolved</span>
                              </span><small class="float-right text-muted">2 hrs</small></li>
                          <li class="timeline-item"><i class="ti-info-alt timeline-icon"></i>
                              <span>System Warning
                                  <a class="text-purple ml-2">Check</a>
                              </span><small class="float-right text-muted ml-2 nowrap">12:07</small></li>
                          <li class="timeline-item"><i class="fa fa-file-excel-o timeline-icon"></i>The invoice is ready<small class="float-right text-muted ml-2 nowrap">12:30</small></li>
                          <li class="timeline-item"><i class="ti-shopping-cart timeline-icon"></i>5 New Orders<small class="float-right text-muted ml-2 nowrap">13:45</small></li>
                          <li class="timeline-item"><i class="ti-arrow-circle-up timeline-icon"></i>Production server up<small class="float-right text-muted ml-2 nowrap">1 days ago</small></li>
                          <li class="timeline-item"><i class="ti-harddrives timeline-icon"></i>Server overloaded 91%<small class="float-right text-muted ml-2 nowrap">2 days ago</small></li>
                          <li class="timeline-item"><i class="ti-info-alt timeline-icon"></i>Server error<small class="float-right text-muted ml-2 nowrap">2 days ago</small></li>
                      </ul>
                  </div>
              </div>
          </li>
          <li class="dropdown dropdown-user">
              <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                  <span>{{ auth()->user()->name }}</span>
                  <img src="{{ auth()->user()->image_upload ? asset(auth()->user()->image) : auth()->user()->image }}" alt="image">
              </a>
              <div class="dropdown-menu dropdown-arrow dropdown-menu-right admin-dropdown-menu">
                  <div class="dropdown-arrow"></div>
                  <div class="dropdown-header">
                      <div class="admin-avatar">
                          <img src="{{ auth()->user()->image_upload ? asset(auth()->user()->image) : auth()->user()->image }}" alt="image">
                      </div>
                      <div>
                          <h5 class="font-strong text-white">{{ auth()->user()->name }}</h5>
                          <div>
                              <span class="admin-badge mr-3"><i class="ti-alarm-clock mr-2"></i>30m.</span>
                              <span class="admin-badge"><i class="ti-lock mr-2"></i>Safe Mode</span>
                          </div>
                      </div>
                  </div>
                  <div class="admin-menu-features">
                      <a class="admin-features-item" href="javascript:;"><i class="ti-user"></i>
                          <span>PROFILE</span>
                      </a>
                      <a class="admin-features-item" href="javascript:;"><i class="ti-support"></i>
                          <span>SUPPORT</span>
                      </a>
                      <a class="admin-features-item" href="javascript:;"><i class="ti-settings"></i>
                          <span>SETTINGS</span>
                      </a>
                  </div>
                  <div class="admin-menu-content">
                      <div class="text-muted mb-2">Your Wallet</div>
                      <div><i class="ti-wallet h1 mr-3 text-light"></i>
                          <span class="h1 text-success"><sup>$</sup>12.7k</span>
                      </div>
                      <div class="d-flex justify-content-between mt-2">
                        <a class="text-muted" href="javascript:;">Earnings history</a>
                        <a class="d-flex align-items-center" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout<i class="ti-shift-right ml-2 font-20"></i></a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                      </div>
                  </div>
              </div>
          </li>
          <li>
              <a class="nav-link quick-sidebar-toggler">
                  <span class="ti-align-right"></span>
              </a>
          </li>
      </ul>
      <!-- END TOP-RIGHT TOOLBAR-->
  </div>
</header>
<!-- END HEADER-->
