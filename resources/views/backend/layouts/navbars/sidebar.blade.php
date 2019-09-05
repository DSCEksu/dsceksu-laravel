@if (auth()->user()->hasRole('lead'))
  @include('backend.lead.layouts.sidebar')
@elseif (auth()->user()->hasRole('techcore'))
  @include('backend.techcore.layouts.sidebar')
@elseif (auth()->user()->hasRole('nontechcore'))
  @include('backend.nontechcore.layouts.sidebar')
@else
  @include('backend.member.layouts.sidebar')
@endif
