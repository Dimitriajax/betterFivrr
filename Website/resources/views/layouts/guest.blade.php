<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('layouts.navigation')
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>
    <footer class="bg-dark px-4 pb-24 md:pb-0 py-12 md:pt-16">
        <div class="w-3/4 mx-auto md:w-1/3 text-lightgrey flex text-sm md:text-md justify-between md:pb-8">
            <a href="">HOME</a>
            <a href="">ONZE CREATORS</a>
            <a href="">CONTACT</a>
        </div>
    </footer>
</body>

</html>