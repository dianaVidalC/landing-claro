<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{asset('css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('css/slick-theme.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!-- Fonts -->
        <title>App Name - @yield('title')</title>

    </head>
    <body>
        @include('../components/header')
        @yield('content')
        @include('../components/footer')
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script defer src="{{asset('js/slick.min.js')}}"></script>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
