<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PM - @yield('title')</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen">
        <header class="text-slate-700 container relative mx-auto flex flex-col overflow-hidden px-4 py-4 lg:flex-row lg:items-center">
            <a href="{{ url('/') }}" class="flex items-center whitespace-nowrap text-2xl font-black">
                <span class="mr-2 w-8">
                    <svg class="w-8" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
                        <rect x="3" y="1" width="7" height="12"></rect>
                        <rect x="3" y="17" width="7" height="6"></rect>
                        <rect x="14" y="1" width="7" height="6"></rect>
                        <rect x="14" y="11" width="7" height="12"></rect>
                    </svg>
                </span>
                PM
            </a>
            <input type="checkbox" class="peer hidden" id="navbar-open" />
            <label class="absolute top-5 right-5 cursor-pointer lg:hidden" for="navbar-open">
                <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </label>

            <nav aria-label="Header Navigation" class="peer-checked:pt-8 peer-checked:max-h-60 flex max-h-0 w-full flex-col items-center overflow-hidden transition-all lg:ml-24 lg:max-h-full lg:flex-row">
                <ul class="flex w-full flex-col items-center space-y-2 lg:flex-row lg:justify-center lg:space-y-0">
                <li class="lg:mr-12"><a href="{{ url('/') }}" class="rounded text-gray-700 transition focus:outline-none focus:ring-1 focus:ring-blue-700 focus:ring-offset-2" href="#">Home</a></li>
                </ul>
                <hr class="mt-4 w-full lg:hidden" />

                @guest
                <div class="my-4 flex items-center space-x-6 space-y-2 lg:my-0 lg:ml-auto lg:space-x-8 lg:space-y-0">
                    <a href="{{ route('login') }}" title="" class="whitespace-nowrap rounded font-medium transition-all duration-200 focus:outline-none focus:ring-1 focus:ring-blue-700 focus:ring-offset-2 hover:text-opacity-50"> Log in </a>
                    <a href="{{ route('register') }}" title="" class="whitespace-nowrap rounded-xl bg-blue-700 px-5 py-3 font-medium text-white transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:ring-offset-2 hover:bg-blue-600">Get started</a>
                </div>
                @endguest

                @auth
                <div class="my-4 flex items-center space-x-6 space-y-2 lg:my-0 lg:ml-auto lg:space-x-8 lg:space-y-0">
                    <a href="{{ route('dashboard') }}" title="" class="whitespace-nowrap rounded font-medium transition-all duration-200 focus:outline-none focus:ring-1 focus:ring-blue-700 focus:ring-offset-2 hover:text-opacity-50"> Dashboard </a>

                    <form action="{{ route('logout') }}" method="POST">
                    @csrf  
                        <button type="submit" title="" class="whitespace-nowrap rounded-xl bg-blue-700 px-5 py-3 font-medium text-white transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:ring-offset-2 hover:bg-blue-600">Logout</a>
                    </form>
                </div>
                @endauth
            </nav>
        </header>

        @yield('content')

        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script src="https://demo.themesberg.com/windster/app.bundle.js"></script>
        @yield('script')

    </body>
</html>