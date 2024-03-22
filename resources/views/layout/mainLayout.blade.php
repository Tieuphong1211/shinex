<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('subTitle')Shinex</title>
    <meta name="robots" content="noindex, nofollow" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <div class="w-full">
        @include('partial.frontHeader')
        <div class="container px-36 mt-8 w-full">
            @yield('content')
        </div>
        @include('partial.frontFooter')
    </div>
</body>
</html>
