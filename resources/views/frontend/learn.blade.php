@extends('frontend.layouts.app')

@section('title', '- Learn')

@section('content')
  <section id="web" class="section-spacer">
    <header class="section-header text-center">
      <h2 class="section-title">Share experiences and free resources</h2>
    </header>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-12">
          <div class="card course-card" style="width: 22rem;">
            <img class="card-img-top" src="{{ asset('images/frontend/courses/intro-js.png') }}" alt="Card image cap">
            <div class="card-body">
              <p class="tagging beginner float-right">Beginner</p>
              <h5 class="card-title">Intro to JavaScript</h5>
              <p class="card-text">Learn the fundamentals of Javascript syntax. Explore Javascript fundamentals by learning how to define variables and use data types...</p>
              <a href="https://www.udacity.com/course/intro-to-javascript--ud803" class="button float-right" target="_blank" rel="noopener noreferrer">View course</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="card course-card" style="width: 22rem;">
            <img class="card-img-top" src="{{ asset('images/frontend/courses/kotlin.png') }}" alt="Card image cap">
            <div class="card-body">
              <p class="tagging intermediate float-right">Intermediate</p>
              <h5 class="card-title">Kotlin for Android Developers</h5>
              <p class="card-text">Take an Android notepad app and convert it from Java to Kotlin, learning key features of the Kotlin programming language...
              </p>
              <a href="https://classroom.udacity.com/courses/ud888" class="button float-right" target="_blank" rel="noopener noreferrer">View course</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="card course-card" style="width: 22rem;">
            <img class="card-img-top" src="{{ asset('images/frontend/courses/best-prac.png') }}" alt="Card image cap">
            <div class="card-body">
              <p class="tagging expert float-right">Expert</p>
              <h5 class="card-title">JavaScript best practices</h5>
              <p class="card-text"> This course is designed to take your existing JavaScript knowledge and teach you how to leverage patterns and practices to take...
              </p>
              <a href="https://app.pluralsight.com/player?course=javascript-best-practices&author=jonathan-mills&name=javascript-best-practices" class="button float-right" target="_blank" rel="noopener noreferrer">View course</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
