<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MindfullMood</title>

    <link rel="stylesheet" href="css/app.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Scripts -->
    @yield('headscripts')
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/headerfooter.css'])
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light topcolor shadow-sm fixed-top">
        <div class="container-fluid px-4">
            <div class="d-flex homedonate" id="homedonate">
                <a href="{{ route('home') }}" class="navbar-brand text-white" href="{{ route('home') }}">
                    MindfullMood
                </a>
                {{-- <a href="{{ route('donate') }}">
                    <button class="button text-white px-4 donate-button">
                        Donate
                    </button>
                </a> --}}
            </div>

            {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button> --}}

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
                        <a class="nav-link fw-bold px-4 py-2 text-white"
                            href="#part2">Vision</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link rounded-pill fw-bold text-white px-4 py-2"
                            href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link rounded-pill fw-bold text-white px-4 py-2"
                            href="{{ route('news') }}">Get Involved</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link rounded-pill fw-bold text-white px-4 py-2"
                            href="{{ route('trymenu') }}">Try Some Features</a>
                    </li>
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item ">
                                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link text-white   " href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light px-5">
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item px-2">
                    <a class="nav-link rounded-pill fw-bold bg-primary text-white px-4 py-2" href="#part2">Vision</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link rounded-pill fw-bold bg-primary text-white px-4 py-2"
                        href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link rounded-pill fw-bold bg-primary text-white px-4 py-2"
                        href="{{ route('news') }}">Get Involved</a>
                </li>
            </ul>
        </div>
    </nav> --}}

    <main>
        @yield('content')
    </main>
    @include('layout.footer')
</body>

</html>
