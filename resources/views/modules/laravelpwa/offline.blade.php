@extends('frontend.layouts.app')

@section('title')
- Offline
@endsection

@section('content')
  <section id="web" class="section-spacer">
    <header class="section-header text-center">
      <h2 class="section-title">You Are Offline</h2>
    </header>
    <div class="container text-center">
      <p>You are currently not connected to any networks.</p>
    </div>
  </section>
@endsection
