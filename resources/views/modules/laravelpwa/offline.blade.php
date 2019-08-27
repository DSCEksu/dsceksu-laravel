@extends('frontend.layouts.app')

@section('title', '- Offline')

@section('content')
  <header id="hero" class="hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-sm-6">
          <div class="hero-content">
            <div class="hero-title__group">
              <div class="hero-title">
                <h2 class="zuri">Developer Student Club<br> {{ config('app.info.location') }}.</h2>
              </div>
              <div class="Hero--Subtitle">
                <p class="lead">Developer Student Clubs is a
                  <first-letter>G</first-letter><third-letter>o</third-letter><second-letter>o</second-letter><first-letter>g</first-letter><forth-letter>l</forth-letter><third-letter>e</third-letter> Developers program for university students to learn<second-letter> mobile </second-letter> and <first-letter>web development skills</first-letter> , <third-letter>design thinking skills</third-letter> and <forth-letter>leadership skills.</forth-letter>
                </p>
              </div>
            </div>
            <button type="button" class="hero-button" data-toggle="modal" data-target="#offlineModal"><i class="fa fa-users"></i> Become a member</button>
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

  @include('frontend.includes.overview')

  @include('frontend.includes.opportunities')

  <section id="technologies" class="section-spacer bg-very__gray">
    <div class="container">
      <header class="section-header text-center">
        <h2 class="section-title">Technologies we're excited about</h2>
        <p class="section-subtitle">Opportunities to learn & access deep technical content.</p>
        <br>
      </header>
      <div class="row align-items-center">
        <div class="col-sm-6">
          <div class="feature-list-image">
            <img src="{{ asset('images/frontend/technologies/android.png') }}" class="img-fluid" alt="Official android logo" width="100%" height="50%">
          </div>
        </div>
        <div class="col-sm-5 ml-auto">
          <div class="feature-list-wrapper">
            <div class="content-header">
              <h2 class="content-title">Android Development</h2>
              <p>Every year Google developers release exciting new updates to the world's most popular operating system. We always have sessions to keep you updated and mastering the latest trends in modern Android development.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-spacer">
    <div class="container">
      <div class="row flex-column-reverse flex-sm-row align-items-cengit ter">
        <div class="col-sm-5 mr-auto">
          <div class="feature-list-wrapper">
            <div class="content-header">
              <h2 class="content-title">Web Development</h2>
              <p>Learn the core foundations of a delightful web experience both for the user and developer. Stay up to tabs with emerging and trending technologies. Get access to a guided, tutorial and hands-on coding experience.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="feature-list-image">
            <img src="{{ asset('images/frontend/technologies/web.png') }}" alt="Developer building a progressive web app" class="img-fluid" height="60%" width="90%">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="hip" class="section-spacer bg-very__gray">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-sm-6">
          <div class="feature-list-image">
            <img src="{{ asset('images/frontend/technologies/cloud.png') }}" class="img-fluid" alt="Illustration of data uploading to the cloud" width="90%">
          </div>
        </div>
        <div class="col-sm-5 ml-auto">
          <div class="feature-list-wrapper">
            <div class="content-header">
              <h2 class="content-title">Cloud Computing</h2>
              <p>For passionate developers who want to stay relevant in a cloud first world where businesses demand for agility and innovation and prompt rise of cloud-native applications to ridges gaps between data, insight, and action.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-spacer">
    <div class="container">
      <div class="row flex-column-reverse flex-sm-row align-items-cengit ter">
        <div class="col-sm-5 mr-auto">
          <div class="feature-list-wrapper">
            <div class="content-header">
              <h2 class="content-title">Machine Intelligence</h2>
              <p>Learn how to drive user engagement and retention with intelligent apps that are able to effectively serve users what they need without the fuss by providing these systems with the ability to utomatically learn and improve from experience without being explicitly programmed.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="feature-list-image">
            <img src="{{ asset('images/frontend/technologies/mi.png') }}" class="img-fluid" alt="Robotic illustration of how many different things it can do" height="60%" width="90%">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="faqs" class="section-spacer section-faq">
    <div class="container">
      <header class="section-header text-center">
        <h2 class="section-title">Frequently Asked Questions</h2>
      </header>
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Who can become a member?</h5>
              <p>The club is open to any student, ranging from novice developers who are just starting, to advanced developers who want to further their skills.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">How frequently do events and workshops occur?</h5>
              <p>We hold workshops and showcases at TechHub EKSU & we would recommend you to join our community by becoming a <a href="#offlineModal" data-toggle="modal">member</a> to get updates.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">What should I carry when attending a workshop?</h5>
              <p>We recommend you carry with you a notebook, pen and a laptop because more often than not we make our hands dirty with code. Most importantly, carry along a healthy dose of curiosity and enthusiasm.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Who should I reach out to if I have any questions?</h5>
              <p>If you have any questions or comments, please don't hesitate to contact us by clicking the button below. We would be happy to stay engaged via email even after the event</p>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-40 text-center">
        <a href="mailto:{{ config('app.info.email') }}" class="hero-button">Send us an email</a>
      </div>
    </div>
  </section>
  <!-- Offline Modal -->
  <div class="modal fade" id="offlineModal">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <div class="modal-title">
            <h3>You Are Offline</h3>
          </div>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="d-flex flex-column justify-content-center align-items-center">
            <p class="ml-5 m-5 text-center lead">DSC is a Google Developers’ program for University students designed to help them build their mobile, web development & design skills. It is designed to help them build job-ready skills, making them further employable in the future.</p>

            <p class="ml-5 m-5 text-center lead">Kindly Connect to any network to become a member</p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="hero-button" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection
