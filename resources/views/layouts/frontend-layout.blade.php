<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Agrican Nigeria Limited') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased" x-data="{ navbarOpen: false, scrolledFromTop: false }" x-init="window.pageYOffset > 60 ? scrolledFromTop = true : scrolledFromTop = false"
    @scroll.window="window.pageYOffset > 60 ? scrolledFromTop = true : scrolledFromTop = false"
    :class="{
        'overflow-hidden': navbarOpen,
        'overflow-auto': !navbarOpen
    }">
    <div class="min-h-screen bg-gray-100">
        <x-layout.navbar></x-layout.navbar>

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        <x-layout.footer></x-layout.footer>
    </div>
</body>

</html>
