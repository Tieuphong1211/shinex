<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('subTitle')Shinex</title>
    <meta name="robots" content="noindex, nofollow" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <div class="w-full">
        @include('partial.frontHeader')
        <div class="container px-36 mt-8 w-full">
            @yield('content')
        </div>
    </div>
</body>
</html>
