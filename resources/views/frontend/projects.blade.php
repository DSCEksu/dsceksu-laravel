@extends('frontend.layouts.app')

@section('title', '- Projects')

@section('content')
  <section id="web" class="section-spacer">
    <header class="section-header text-center">
      <h2 class="section-title">Web projects & experiments</h2>
    </header>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-12">
          <div class="card project-card" >
            <div class="cardheader">
              <div class="img-top" >
                <img src="{{ asset('images/frontend/technologies/cloud.png') }}" alt="Card image cap">
              </div>
              <h5 class="card-title">Project title</h5>
            </div>
            <div class="card-body">
              <div class="project-tag">
                <p class="tagging stack1 ">HTML</p>
                <p class="tagging stack2 ">Css</p>
                <p class="tagging stack3 ">PWA</p>
              </div>
              <p class="card-text">Quick sample text to create the Project title and make up the body of the card's content.<br>Ensure you keep it brief, short and to the point. We don't want to give out too many details, do we?</p>
              <a href="#" class="btn btn-primary float-right">View project</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="card project-card" >
            <div class="cardheader">
              <div class="img-top" >
                <img src="{{ asset('images/frontend/technologies/cloud.png') }}" alt="Card image cap">
              </div>
              <h5 class="card-title">Project title</h5>
            </div>
            <div class="card-body">
              <div class="project-tag">
                <p class="tagging stack1 ">HTML</p>
                <p class="tagging stack2 ">Css</p>
                <p class="tagging stack3 ">PWA</p>
              </div>
              <p class="card-text">Quick sample text to create the Project title and make up the body of the card's content.<br>Ensure you keep it brief, short and to the point. We don't want to give out too many details, do we?</p>
              <a href="#" class="btn btn-primary float-right">View project</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="card project-card">
            <div class="cardheader">
              <div class="img-top" >
                <img src="{{ asset('images/frontend/technologies/cloud.png') }}" alt="Card image cap">
              </div>
              <h5 class="card-title">Project title</h5>
            </div>
            <div class="card-body">
              <div class="project-tag">
                <p class="tagging stack1 ">HTML</p>
                <p class="tagging stack2 ">Css</p>
                <p class="tagging stack3 ">PWA</p>
              </div>
              <p class="card-text">Quick sample text to create the Project title and make up the body of the card's content.<br>Ensure you keep it brief, short and to the point. We don't want to give out too many details, do we?</p>

              <a href="#" class="btn btn-primary float-right">View project</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <header class="section-header text-center">
    <h2 class="section-title">Android projects & experiments</h2>
  </header>

  <section id="android" class="section-spacer">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-12">
          <div class="card project-card" >
            <div class="cardheader">
              <div class="img-top" >
                <img src="{{ asset('images/frontend/technologies/android.png') }}" alt="Card image cap">
              </div>
              <h5 class="card-title">Project title</h5>
            </div>
            <div class="card-body">
              <div class="project-tag">
                <p class="tagging stack1 ">Kotlin</p>
                <p class="tagging stack2 ">Android</p>
                <p class="tagging stack3 ">Open Source</p>
              </div>
              <p class="card-text">Quick sample text to create the Project title and make up the body of the card's content.<br>Ensure you keep it brief, short and to the point. We don't want to give out too many details, do we?</p>
              <a href="#" class="btn btn-primary float-right">View project</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="card project-card" >
            <div class="cardheader">
              <div class="img-top" >
                <img src="{{ asset('images/frontend/technologies/android.png') }}" alt="Card image cap">
              </div>
              <h5 class="card-title">Project title</h5>
            </div>
            <div class="card-body">
              <div class="project-tag">
                <p class="tagging stack1 ">Kotlin</p>
                <p class="tagging stack2 ">Android</p>
                <p class="tagging stack3 ">Open Source</p>
              </div>
              <p class="card-text">Quick sample text to create the Project title and make up the body of the card's content.<br>Ensure you keep it brief, short and to the point. We don't want to give out too many details, do we?</p>
              <a href="#" class="btn btn-primary float-right">View project</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="card project-card" >
            <div class="cardheader">
              <div class="img-top" >
                <img src="{{ asset('images/frontend/technologies/android.png') }}" alt="Card image cap">
              </div>
              <h5 class="card-title">Project title</h5>
            </div>
            <div class="card-body">
              <div class="project-tag">
                <p class="tagging stack1 ">Kotlin</p>
                <p class="tagging stack2 ">Android</p>
                <p class="tagging stack3 ">Open Source</p>
              </div>
              <p class="card-text">Quick sample text to create the Project title and make up the body of the card's content.<br>Ensure you keep it brief, short and to the point. We don't want to give out too many details, do we?</p>
              <a href="#" class="btn btn-primary float-right">View project</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
