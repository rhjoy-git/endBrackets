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
        href="https://fonts.googleapis.com/css2?family=DM+Mono:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Add Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
    @endif
    <style>
        /* Add this to your CSS file or <style> tag */
        ::-webkit-scrollbar {
            width: 0 !important;
            height: 0 !important;
            background: transparent;
        }

        body {
            overflow: -moz-scrollbars-none;
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body class="bg-primary dark:bg-primary-dark text-neutral-900 min-h-screen font-sans max-w-[1980px]">
    @hasSection('content')
    @yield('content')
    @endif


    <!-- Add this before closing body tag -->
    <!-- Add Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>

</html>