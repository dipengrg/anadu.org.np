<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'तालपारी अनदुँ | Talpari Anadu')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arya:wght@400;700&family=Poppins:wght@300;400;500;600&family=Cinzel:wght@400..900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-anadu-base font-body text-anadu-dark antialiased selection:bg-anadu-gold selection:text-white flex flex-col min-h-full">
    
    <x-header />

    <main class="flex-grow flex items-center justify-center">
        @yield('content')
    </main>

    <x-footer />
</body>
</html>