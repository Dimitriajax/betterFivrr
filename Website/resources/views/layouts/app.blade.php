<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BetterFivrr') }}</title>
    <link rel="shortcut icon" href="../images/logo.svg" type="image/x-icon">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-dark">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <footer class="bg-dark px-4 pb-24 md:pb-0 py-12 md:pt-16">
        <div class="w-3/4 mx-auto md:w-1/3 text-lightgrey flex text-sm md:text-md justify-between md:pb-8">
            <a href="">HOME</a>
            <a href="{{ route('applications.freelancer') }}">ZOEK FREELANCERS</a>
            <a href="{{ route('applications.employers') }}">ZOEK WERKGEVER</a>
        </div>
    </footer>
</body>

</html>