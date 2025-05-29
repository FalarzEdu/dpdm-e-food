<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </head>
    <body class="bg-gray-900 text-[#1b1b18] min-h-screen">
        <header class="text-gray-400 bg-gray-900 body-font w-full">
            <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <a class="ml-3 text-xl" href="{{ route('home') }}">E-food</a>
                </a>
                <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-700	flex flex-wrap items-center text-base justify-center">
                    <a class="mr-5 hover:text-white hover:cursor-pointer">About us</a>
                </nav>
                @if (!Auth::guard('admin')->check())
                  <a href="{{ route('login') }}" class="inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0">Admin Login
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                  <a/>
                @else
                  <a href="{{ route('logout') }}" class="mr-8">Logout</a>
                  <a href="{{ route('dashboard') }}" class="mr-8">Dashboard</a>
                  <a href="" class="border-2 border-gray-700 rounded-full">
                    <img class="h-12 w-12 rounded-full" src="https://picsum.photos/id/237/200/300" alt="">
                  </a>
                @endif
            </div>
        </header>

        @yield('content')

    </body>
</html> 
