@extends('frontend.layouts.app')

@section('title','- Sitemap')

@section('content')
  <section id="web" class="section-spacer">
    <header class="section-header text-center">
      <h2 class="section-title">Sitemap</h2>
    </header>
    <div class="container text-center">
      <p>New Site Map Successfully Created for {{ config('app.name') }}. See new sitemap <a href="{{ url('sitemap.xml') }}" target="_blank">here</a></p>
      <div class="mt-40 text-center">
        <a href="{{ route('index') }}" class="hero-button">Go Home</a>
      </div>
    </div>
  </section>
@endsection
