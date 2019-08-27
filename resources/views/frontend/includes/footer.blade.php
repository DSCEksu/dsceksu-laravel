<footer class="section-spacer footer-section">
  <div class="container">
    <div class="row flex-column-reverse flex-sm-row flex-lg-row">
      <div class="col-md-4 col-12">
        <div class="footer-widget first-of-footer-widget">
          <img src="{{ asset('images/logo.png') }}" class="logo-sm mb-10" alt="{{ config('app.name') }}">
          <p>&copy; {{ date('Y') }} | All Rights Reserved.</p>
          <span>Feel free to drop us an email at </span>
          <a href="mailto:{{ config('app.info.email') }}">{{ config('app.info.email') }}</a>
          <ul class="social-list__inline mt-10">
            <li>
              <a href="{{ config('app.info.twitter') }}" target="_blank" rel="noopener">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="{{ config('app.info.github') }}" target="_blank" rel="noopener">
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
                  <a href="javascript:;" onclick="share('{{ config('app.name') }}', '{{ config('app.url') }}', 'Have you been looking for a place you can learn technical skills for free? If yes, check out {{ config('app.nick') }} now at {{ config('app.info.location') }}')"><i class="fa fa-share"></i> Share</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
