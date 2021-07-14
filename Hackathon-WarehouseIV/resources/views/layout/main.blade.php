<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--  Title  --}}
    <title>@yield("title") | {{env('APP_NAME')}}</title>

    {{--  Fonts  --}}

    {{-- Css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('custom-css')

    <!--  JQ  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @yield('js-before')
</head>
<body>
    @include('component.navbar')

    @yield('body')

    @include('component.footer')
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    @yield('js-after')
</body>
</html>