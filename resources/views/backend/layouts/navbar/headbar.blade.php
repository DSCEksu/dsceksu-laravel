@if (auth()->user()->hasRole('lead'))
  @include('backend.lead.layouts.headbar')
@elseif (auth()->user()->hasRole('techcore'))
  @include('backend.techcore.layouts.headbar')
@elseif (auth()->user()->hasRole('nontechcore'))
  @include('backend.nontechcore.layouts.headbar')
@else
  @include('backend.member.layouts.headbar')
@endif
