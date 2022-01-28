<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
        <title> @yield('title')</title>


        <!-- Fonts 
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">-->

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>

    <body>
        
        @include('layouts.menu')

        @yield('content')

        @include('layouts.footer')
        
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>

</html>

