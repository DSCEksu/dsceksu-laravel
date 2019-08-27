@extends('frontend.layouts.app')

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
            <a href="https://codelabs.developers.google.com/?cat=Android" class="hero-button" target="_blank" rel="noreferrer">Codelabs &nbsp; &nbsp;<i class="fas fa-external-link-alt"></i></a>
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
            <a href="https://codelabs.developers.google.com/?cat=Web" class="hero-button" target="_blank" rel="noreferrer">Codelabs &nbsp; &nbsp;<i class="fas fa-external-link-alt"></i></a>
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
            <a href="https://codelabs.developers.google.com/?cat=Cloud"  class="hero-button" target="_blank" rel="noreferrer">Codelabs &nbsp; &nbsp;<i class="fas fa-external-link-alt"></i></a>
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
            <a href="https://codelabs.developers.google.com/?cat=TensorFlow"  class="hero-button" target="_blank" rel="noreferrer">Codelabs &nbsp; &nbsp;<i class="fas fa-external-link-alt"></i></a>
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

  <section id="workshops" class="section-spacer workshops-section bg-very__gray">
    <div class="container">
      <header class="section-header text-center">
        <h2 class="section-title">Events & Workshops</h2>
        <p class="section-subtitle">Come learn, share and connect with us in person.</p>
      </header>
      <div class="workshops-type-switch">
        <ul class="nav nav-pills justify-content-center js-tabs">
          <li class="nav-item">
            <a class="nav-link active" href="#upcoming">Upcoming Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#past">Past Events</a>
          </li>
        </ul>
      </div>
      <div class="tab-content">
        <div class="tab-pane active" id="upcoming" role="tabpanel" aria-labelledby="upcoming">
          <div class="row">
            <div class="message-wrapper col-12">
              <h2 class="message-text">Loading...</h2>
            </div>
            <!-- <div class="col-md-4 col-12">
              <div class="card event-card">
                <img class="card-img-top" src="{{ asset('images/frontend/events/fbw.png') }}" alt="Event one poster">
                <div class="card-body">
                  <p class="tagging intermediate float-right">Intermediate</p>
                  <h5 class="card-title">Firebase for Web</h5>
                  <table>
                    <tr>
                      <td width="15%" class="text-blue"><i class="far fa-calendar-alt"></i></td>
                      <td>20<sup>th</sup> April 2019</td>
                    </tr>
                    <tr>
                      <td class="text-red"><i class="fas fa-map-marker-alt"></i></td>
                      <td>LH 20, Main Campus</td>
                    </tr>
                    <tr>
                      <td class="text-green"><i class="far fa-clock"></i></td>
                      <td>0900hrs - 1200hrs</td>
                    </tr>
                  </table>
                  <a href="https://www.meetup.com/GDG-Kisii/events/258288805/" class="button float-right">Attend</a>
                </div>
              </div>
            </div> -->
          </div>
        </div>
        <div class="tab-pane" id="past" role="tabpanel" aria-labelledby="past">
          <section id="hi" class="section-spacer bg-very__gray">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-sm-6">
                  <div class="feature-list-image">
                    <img class="card-img-top" src="{{ asset('images/frontend/events/techwork.png') }}" alt="Tech Workshop">
                    {{-- <iframe data-urllink="https://docs.google.com/presentation/d/e/2PACX-1vSubYcbqWaNFgVUDQ14VYLf_4RFiaVeFl-Tz6ryS_YAuYmP9xhdAUrV0_V5GpeHHenACAIwl8zwTZ3z/embed?start=false&loop=true&delayms=3000" frameborder="0" width="480" height="299" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe> --}}
                  </div>
                </div>
                <div class="col-sm-5 ml-auto">
                  <div class="feature-list-wrapper">
                    <div class="content-header">
                      <h2 class="content-title">Tech Workshop</h2>
                      <hr>
                      <h6>TIME : 10:00 AM - 02:00 PM (Weekly)</h6>
                      <h6>VENUE : TechHub EKSU</h6>
                      <p>We learnt web and android development</p>
                    </div>
                    <a href="#" class="past-event" rel="noopener">EVENT PHOTOS&nbsp;&nbsp;<i class="fas fa-camera"></i></a>
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
                      <h2 class="content-title">DSC SSA Leads Summit</h2>
                      <hr>
                      <h6>DATE : 25<sup>th</sup> July - 28<sup>th</sup>July 2018</h6>
                      <h6>WHERE : Lagos, Nigeria.</h6>
                      <p>One of our lead organizers was privileged to represent the community in a lead summit hosted by Google Nigeria where he also talked about goal-setting.</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="feature-list-image">
                    <iframe width="500" height="274" data-urllink="https://www.youtube.com/embed/AAin71VkbzQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>

  <section id="team" class="section-spacer team-section">
    <div  class="container">
      <header class="text-center section-header">
        <h2 class="section-title">Meet The DSC Team</h2>
        <p class="section-subtitle">Passionate students and faculty staff driving the success of the program.</p>
      </header>
      <div class="container-fluid">
        <div id="carouselExample" class="carouselPrograms carousel slide" data-ride="carousel" data-interval="false">
          <div class="carousel-inner row w-100 mx-auto" role="listbox">
            <div class="carousel-item col-md-4 col-15 active">
              <div class="card event-card">
                <div class="card hovercard">
                  <div class="cardheader"></div>
                  <div class="avatar">
                    <img src="{{ asset('images/frontend/team/fransunisoft.png') }}" alt="mentor avatar">
                  </div>
                  <div class="info">
                    <div class="title">
                      <h5>Oluwaseyi Ayodele</h5>
                      <p>Mentor</p>
                    </div>
                    <div class="desc">Mobile and Web developer</div>
                    <div class="desc">Open source enthusiast</div>
                    <div class="desc">Community mentor</div>
                  </div>
                  <div class="bottom">
                    <ul class="social-list__inline mt-10">
                      <li>
                        <a href="https://twitter.com/Fransunisoft" target="_blank" rel="noopener">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="https://github.com/Fransunisoft" target="_blank" rel="noopener">
                          <i class="fab fa-github"></i>
                        </a>
                      </li>
                      <li>
                        <a href="https://www.linkedin.com/in/oluwaseyiayodele" target="_blank" rel="noopener">
                          <i class="fab fa-linkedin"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-4 col-15">
              <div class="card event-card">
                <div class="card hovercard">
                  <div class="cardheader"></div>
                  <div class="avatar">
                    <img src="{{ asset('images/frontend/team/emmanueljet.png') }}" alt="lead avatar">
                  </div>
                  <div class="info">
                    <div class="title">
                      <h5>Emmanuel Joseph (JET)</h5>
                      <p>Lead Organizer</p>
                    </div>
                    <div class="desc">Mobile, and web developer</div>
                    <div class="desc">Open source enthusiast</div>
                    <div class="desc">A Software Developer who is in love with Community Building</div>
                  </div>
                  <div class="bottom">
                    <ul class="social-list__inline mt-10">
                      <li>
                        <a href="https://twitter.com/emmanuelJet_" target="_blank" rel="noopener">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="https://github.com/emmanuelJet" target="_blank" rel="noopener">
                          <i class="fab fa-github"></i>
                        </a>
                      </li>
                      <li>
                        <a href="https://www.linkedin.com/in/jet774" target="_blank" rel="noopener">
                          <i class="fab fa-linkedin"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-4 col-15">
              <div class="card event-card">
                <div class="card hovercard">
                  <div class="cardheader"></div>
                  <div class="avatar">
                    <img src="{{ asset('images/frontend/team/avatar.png') }}" alt="co-organizer avatar">
                  </div>
                  <div class="info">
                    <div class="title">
                      <h5>Loading...</h5>
                      <p>Co-organizer</p>
                    </div>
                    <div class="desc">Mobile and Web developer</div>
                    <div class="desc">Open source enthusiast</div>
                    <div class="desc">Community mentor</div>
                  </div>
                  <div class="bottom">
                    <ul class="social-list__inline mt-10">
                      <li>
                        <a href="https://twitter.com/ProfileName" target="_blank" rel="noopener">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="https://github.com/ProfileName" target="_blank" rel="noopener">
                          <i class="fab fa-github"></i>
                        </a>
                      </li>
                      <li>
                        <a href="https://www.linkedin.com/in/ProfileName" target="_blank" rel="noopener">
                          <i class="fab fa-linkedin"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-4 col-15">
              <div class="card event-card">
                <div class="card hovercard">
                  <div class="cardheader"></div>
                  <div class="avatar">
                    <img src="{{ asset('images/frontend/team/avatar.png') }}" alt="co-organizer avatar">
                  </div>
                  <div class="info">
                    <div class="title">
                      <h5>Loading...</h5>
                      <p>Co-organizer</p>
                    </div>
                    <div class="desc">Mobile and Web developer</div>
                    <div class="desc">Open source enthusiast</div>
                    <div class="desc">Community mentor</div>
                  </div>
                  <div class="bottom">
                    <ul class="social-list__inline mt-10">
                      <li>
                        <a href="https://twitter.com/ProfileName" target="_blank" rel="noopener">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="https://github.com/ProfileName" target="_blank" rel="noopener">
                          <i class="fab fa-github"></i>
                        </a>
                      </li>
                      <li>
                        <a href="https://www.linkedin.com/in/ProfileName" target="_blank" rel="noopener">
                          <i class="fab fa-linkedin"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev" style="cursor:default;">
            <span class="carousel-control-prev-i fas fa-angle-left" aria-hidden="true" style="cursor:pointer;"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next" style="cursor:default;">
            <span class="carousel-control-next-i fas fa-angle-right" aria-hidden="true" style="cursor:pointer;"></span>
            <span class="sr-only">Next</span>
          </a>
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
              <p>The clubs is open to any student, ranging from novice developers who are just starting, to advanced developers who want to further their skills.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">How frequently do events and workshops occur?</h5>
              <p>We hold workshops and showcases at TechHub EKSU & we would recommend you to join our community by becoming a <a href="{{ route('register') }}">member</a> to get updates.</p>
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
@endsection
