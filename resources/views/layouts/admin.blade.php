<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link rel="stylesheet" href="{{asset('css/variables.css')}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Deliverboo</title>

    <!-- Scripts -->
    <script src="{{ asset('js/admin.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar_dark ">
            <a class="navbar-brand text-white ml-5" href="http://127.0.0.1:8000/" id="logo-title">
                <img src="{{ asset('media/img/logo.png') }}" width="40" height="40" class="d-inline-block align-center"
                    alt="Deliverboo Logo" />
                <h4 class="d-inline-block align-center logo">
                    Deliverboo
                </h4>

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" {{--
                aria-label="{{ __('Toggle navigation') }}" --}} aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                    @auth
                    <li class="nav-item">
                        <a class="nav-link text-white  {{Route::currentRouteName() == 'home' ? 'active' : ''}}"
                            href="{{ url('/') }}">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{Route::currentRouteName() == 'admin.products.index' ? 'active' : ''}}"
                            href="{{ route('admin.products.index') }}">Prodotti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white  {{Route::currentRouteName() == 'admin.restaurants.index' ? 'active' : ''}}"
                            href="{{ route('admin.restaurants.index') }}">Ristorante</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white  {{Route::currentRouteName() == 'admin.orders.index' ? 'active' : ''}}"
                            href="{{ route('admin.orders.index') }}">Ordini</a>
                    </li>
                    @endauth
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('login') }}">Accedi</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('register') }}">Registrati</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item">
                        <a class="  nav-link text-white {{Route::currentRouteName() == 'admin.home' ? 'active' : ''}}"
                            href="{{ url('admin') }}">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" style="background-color:#005c53"
                            aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>

        </nav>
        <main> {{-- class="py-4" --}}
            @yield('content')
        </main>
    </div>
</body>

</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap');

    .logo {
        font-family: 'Mochiy Pop One', sans-serif;
        transform: translateY(20%);
        font-size: 1.2rem;
    }

    .navbar a:hover:not(#logo-title) {
        color: #dbf227 !important;
    }

    #logo-title h4 {
        padding-bottom: 17px !important;
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    .dropdown-item:hover {
        background-color: transparent !important;
        color: #dbf227 !important;
    }
</style>