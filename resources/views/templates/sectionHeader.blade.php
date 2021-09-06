    <div class="content-img">
        @if (Request::route()->getName() === 'home')
        <span>CURRENT SERIES</span>
        @else
        <img src="{{$comics['thumb']}}" alt="{{$comics['series']}}">

        @endif
        <!-- {{ Request::route()->getName() === 'home' ? 'CURRENT SERIES' : 'Immagine Fumetto' }} -->
        <!-- {{ Request::route()->getName() === 'home' ? 'CURRENT SERIES' : '<img src="($comics[\'thumb\'])">' }} -->
    </div>