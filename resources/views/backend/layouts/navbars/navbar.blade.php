@auth()
  @if (auth()->user()->hasRole('lead'))
    @include('backend.lead.layouts.navbar')
  @elseif (auth()->user()->hasRole('techcore'))
    @include('backend.techcore.layouts.navbar')
  @elseif (auth()->user()->hasRole('nontechcore'))
    @include('backend.nontechcore.layouts.navbar')
  @else
    @include('backend.member.layouts.navbar')
  @endif
@endauth

@guest()
  @include('backend.layouts.navbars.guest')
@endguest
