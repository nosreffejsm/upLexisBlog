<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'upLexis Blog Search') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="{{ url('/') }}" class="w-5 p-0">
                <img class="w-50 p-0" src="{{ asset('img/logo.png') }}" alt="Logo da upLexis"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar5">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar5">
                @guest 
                @if (Route::has('register'))
                @endif 
                @else
                <ul class="navbar-nav">
                    <li class="nav-item active" id="nav1">
                    <a class="nav-link w-50 p-3" onclick = "navactive('#nav1')" href="{{ url('/') }}" ata-toggle="tooltip" title="Inicio"><i class="fas fa-home"></i></a>    
                    </li>
                <li class="nav-item" id="nav2">
                    <a class="nav-link w-50 p-3" onclick = "navactive('#nav2')" href="{{ url('/captura') }}" ata-toggle="tooltip" title="Artigos Capturados"><i class= "fas fa-search-plus"></i></a>    
                </li>
                <li class="nav-item" id="nav3">
                    <a class="nav-link w-50 p-3" onclick = "navactive('#nav3')" href="{{ url('/salvo') }}" ata-toggle="tooltip" title="Artigos Salvos"><i class="fas fa-file-download"></i></a>    
                </li>
                </ul>
                <form class="mx-2 my-auto d-inline w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border border-right-0" placeholder="Pesquisar..." name="texto" id="input">
                        <span class="input-group-append">
                            <button class="btn btn-outline-secondary border border-left-0" type="button" id="search">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
                @endguest
                <form class="mx-2 my-auto d-inline w-100 ">
                    <div class="progress bg-dark " style="height: 35px;">
                        <div id="progress" class="progress-bar " role="progressbar" style="width: 0%" aria-valuemax="100">0</div>
                      </div>
                </form>
                <ul class="navbar-nav">
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">
                            <button type="button" class="btn btn-outline-light">
                            {{ __('Login') }}
                            </button>
                            </a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">
                            <button type="button" class="btn btn-outline-light">
                            {{ __('Register') }}
                            </button>
                            </a>
                        </li>
                        @endif @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <button type="button" class="btn btn-outline-light">
                                    {{ Auth::user()->name }} 
                                    <span class="caret"></span>
                                </button> 
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
            </div>
        </nav>
        <div class="text-center alert" role="alert" id="alerta"></div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

@include('includes.myJS')