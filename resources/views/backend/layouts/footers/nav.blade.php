<div class="row align-items-center justify-content-xl-between">
  <div class="col-xl-6">
    <div class="copyright text-center text-xl-left text-muted">
      &copy; {{ date('Y') }} <a href="{{ url()->current() }}" class="font-weight-bold ml-1" target="_blank">{{ config('app.name') }}</a>
    </div>
  </div>
  <div class="col-xl-6">
    <ul class="nav nav-footer justify-content-center justify-content-xl-end">
      <li class="nav-item">
        <a href="{{ config('app.info.twitter') }}" class="nav-link" target="_blank"><i class="fab fa-twitter"></i></a>
      </li>
      <li class="nav-item">
        <a href="{{ config('app.info.github') }}" class="nav-link" target="_blank"><i class="fab fa-github"></i></a>
      </li>
      <li class="nav-item">
        <a href="https://www.youtube.com/user/GoogleDevelopers" class="nav-link" target="_blank"><i class="fab fa-youtube"></i></a>
      </li>
      <li class="nav-item">
        <a href="{{ config('app.info.blog') }}" class="nav-link" target="_blank"><i class="fa fa-rss"></i></a>
      </li>
      <li class="nav-item">
        <a href="javascript:;" onclick="share('{{ config('app.name') }}', '{{ config('app.url') }}', 'Have you been looking for a place you can learn technical skills for free? If yes, check out {{ config('app.nick') }} now at {{ config('app.info.location') }}')" class="nav-link"><i class="fa fa-share-alt"></i></a>
      </li>
    </ul>
  </div>
</div>
