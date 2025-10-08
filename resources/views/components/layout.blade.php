<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ninja Network</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/main.css" rel="stylesheet">
    </head>
    <body>

        @include('partials._header')

        {{-- This section will display the flash message if it exists in the session --}}
        @if(session()->has('mssg'))
            <p class="mssg">{{ session('mssg') }}</p>
        @endif

        @yield('content')

        <footer>
            Copyright 2024 Ninja Network
        </footer>
    </body>
</html>

