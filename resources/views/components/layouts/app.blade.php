<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />

    <meta name="application-name" content="{{ config('app.name') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{ config('app.name') }}</title>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Parisienne&display=swap"
        rel="stylesheet">

    @filamentStyles
    @vite('resources/css/app.css')

    <!-- Icon -->
    <link rel="shortcut icon" href="{{ Vite::asset('resources/images/rose.png') }}" type="image/x-icon">
</head>

<body class="antialiased">
    {{ $slot }}

    @livewire('notifications')

    @filamentScripts
    @vite('resources/js/app.js')
</body>

</html>
