

{{-- <img src="{{ asset('img/dc-logo.png') }}" alt="DC-logo">  come standard senza for each
    <nav>
        <ul>
          <li>
            <a href="#">CHARACTERS</a>
          </li>
          <li>
            <a href="{{ route('comics') }}">COMICS</a>
          </li>
          <li>
            <a href="#">MOVIES</a>
          </li>
          <li>
            <a href="#">TV</a>
          </li>
          <li>
            <a href="#">GAMES</a>
          </li>
          <li>
            <a href="#">COLLECTIBLES</a>
          </li>
          <li>
            <a href="#">SHOP</a>
          </li>
          <li>
            <a href="#">VIDEOS</a>
          </li>
          <li>
            <a href="#">FANS</a>
          </li>
          <li>
            <a href="#">NEWS</a>
          </li>
          <li>
            <a href="#">SHOP</a>
          </li>

      </ul>
    </nav> --}}

    <nav>
        <a href="{{ route('home') }}">
            <img src="{{ asset('img/dc-logo.png') }}" alt="DC-logo">
        </a>
        <ul>
            @foreach ($menu as $item)
                <li><a href="{{ route($item['route']) }}">{{ $item['label'] }}</a></li>
            @endforeach
        </ul>
        <input class="search" placeholder="Search" type="text"/>
    </nav>
