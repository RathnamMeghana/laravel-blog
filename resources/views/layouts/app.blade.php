<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-black py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div class="flex items-center">
                    
                    <img src="../../images/header.png" alt="Logo" class="h-11 mr-3"> 
                    <a href="{{ url('/') }}" class="text-2xl font-semibold text-gray-100 no-underline">
                        CineThoughts
                    </a>
                </div>
                <nav class="space-x-4 text-lg text-gray-300 text-sm">
                    <a class="no-underline hover:text-red-500" href="/">Home</a>
                    <a class="no-underline hover:text-red-500" href="/blog">Blog</a>
                    <a class="no-underline hover:text-red-500" href="/about">About</a>
                    <a class="no-underline hover:text-red-500" href="/contact_us">Contact</a> 
                    @guest
                        <a class="no-underline hover:text-red-500" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:text-red-500" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>
        
                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>
        

        <div>
            @yield('content')
        </div>

        <div>
            @include('layouts.footer')
        </div>

</body>
</html>