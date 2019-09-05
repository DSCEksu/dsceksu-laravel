@if (auth()->user()->hasRole('lead'))
  @include('backend.lead.layouts.cards')
@elseif (auth()->user()->hasRole('techcore'))
  @include('backend.techcore.layouts.cards')
@elseif (auth()->user()->hasRole('nontechcore'))
  @include('backend.nontechcore.layouts.cards')
@else
  @include('backend.member.layouts.cards')
@endif
