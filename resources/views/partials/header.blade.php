<header>
    <a href="{{ route('home') }}">
        <img src="{{ asset('img/dc-logo.png') }}" alt="DC-logo">
    </a>
    <div>
        @include('partials.navbar')
    </div>
    <input class="search" placeholder="Search" type="text"/>
</header>
