@if (auth()->user()->hasRole('lead'))
  @include('backend.lead.layouts.quickbar')
@elseif (auth()->user()->hasRole('techcore'))
  @include('backend.techcore.layouts.quickbar')
@elseif (auth()->user()->hasRole('nontechcore'))
  @include('backend.nontechcore.layouts.quickbar')
@else
  @include('backend.member.layouts.quickbar')
@endif
