<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @yield('headscripts')
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/headerfooter.css'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="
    background-color: #206aae;
    background-size: cover; 
    min-height: 100vh; 
    min-width: 100%;
">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light topcolor shadow-sm fixed-top">
            <div class="container-fluid px-4">
                <div class="d-flex homedonate" id="homedonate">
                    <a href="{{ route('home') }}" class="navbar-brand text-white" href="{{ route('home') }}">
                        MindfullMood
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}" style="filter: invert(1) brightness(2);">
                    <span class="navbar-toggler-icon" style="filter: brightness(2);"></span>
                </button>

                {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <ul class="navbar-nav d-md-none">
                            <li class="nav-item {{ $activeProduk ?? '' }}">
                                <a class="nav-link {{ $activeProduk ?? '' }}" href="{{ route('vision') }}">Vision</a>
                            </li>
                            <li class="nav-item {{ $activeNews ?? '' }}">
                                <a class="nav-link {{ $activeNews ?? '' }}" href="{{ route('about') }}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ $activeContact ?? '' }}" href="{{ route('news') }}">Get Involved</a>
                            </li>
                        </ul>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                            </li>
                        @endguest
                    </ul>
                </div> --}}
                
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item px-2">
                            <a class="nav-link rounded-pill fw-bold text-white px-4 py-2"
                                href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link rounded-pill fw-bold text-white px-4 py-2"
                                href="{{ route('about') }}#part2">Vision</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link  fw-bold text-white px-4 py-2"
                                href="{{ route('news') }}">Get Involved</a>
                        </li>
                        @guest
                            <li class="nav-item px-2">
                                <a class="nav-link  fw-bold text-white px-4 py-2"
                                    href="{{ route('trymenu') }}">Try Some Features</a>
                            </li>
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item ">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
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
            </div>
        </nav>


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
