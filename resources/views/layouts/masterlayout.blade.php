<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>End Brackets</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
    @endif
</head>

<body
    class="bg-gray-50 dark:bg-[#0a0a0a] text-[#1b1b18] flex px-6 lg:px-8 items-center lg:justify-start min-h-screen flex-col">
    @hasSection('content')
    @yield('content')
    @endif


    <!-- Add this before closing body tag -->
</body>

</html>