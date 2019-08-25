@extends('frontend.layouts.app')

@section('title')
- Offline
@endsection

@section('content')
  @include('frontend.includes.hero')

  @include('frontend.includes.overview')

  @include('frontend.includes.opportunities')

  @include('frontend.includes.technologies')

  @include('frontend.includes.workshops')

  @include('frontend.includes.team')

  @include('frontend.includes.faq')
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
