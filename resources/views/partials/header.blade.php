<header>
    {{-- logo --}}
    <div id="logo">
        <img src="{{asset('img/logo.png')}}" alt="Logo La Molisana">
    </div>
    <div class="main_menu">
        {{-- navbar --}}
        <nav>
            <ul>
                <li class="{{(Request::route()->getName() == 'pagina-home') ? 'active' : null}}"><a href="{{route('pagina-home')}}">Home</a></li>
                <li class="{{(Request::route()->getName() == 'pagina-prodotti') ? 'active' : null}}"><a href="{{route('pagina-prodotti')}}">Prodotti</a></li>
                <li class="{{(Request::route()->getName() == 'pagina-news') ? 'active' : null}}"><a href="{{route('pagina-news')}}">News</a></li>
            </ul>
        </nav>
        {{-- search --}}
        <div id="search">
            <i class="fas fa-search"></i>
        </div>
    </div>
</header>