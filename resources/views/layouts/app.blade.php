<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="//unpkg.com/alpinejs" defer></script>

        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/script.js'])

    </head>
    <body>
        @include('includes.navigation')


            @yield('content')


        @include('includes.footer')
    </body>
</html>
