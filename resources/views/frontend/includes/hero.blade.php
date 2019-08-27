<header id="hero" class="hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-sm-6">
          <div class="hero-content">
            <div class="hero-title__group">
              <div class="hero-title">
                <h2 class="zuri">Developer Student Club<br> {{ config('app.school') }}.</h2>
              </div>
              <div class="Hero--Subtitle">
                <p class="lead">Developer Student Clubs is a
                  <first-letter>G</first-letter><third-letter>o</third-letter><second-letter>o</second-letter><first-letter>g</first-letter><forth-letter>l</forth-letter><third-letter>e</third-letter> Developers program for university students to learn<second-letter> mobile </second-letter> and <first-letter>web development skills</first-letter> , <third-letter>design thinking skills</third-letter> and <forth-letter>leadership skills.</forth-letter>
                </p>
              </div>
            </div>
            <a class="hero-button" href="{{ route('register') }}"><i class="fa fa-users"></i> Become a member</a>
          </div>
        </div>
        <div class="col-12 col-sm-5 ml-auto ml-pic">
          <div class="hero-figure">
            <img src="{{ asset('images/frontend/diversity.png') }}" class="img-fluid w-100" alt="Illustration of diversity in our developer community">
          </div>
        </div>
      </div>
    </div>
  </header>
