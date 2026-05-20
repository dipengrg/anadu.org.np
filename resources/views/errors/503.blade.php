<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ __('Service Unavailable') }} - तालपारी अनदुँ | Talpari Anadu</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arya:wght@400;700&family=Poppins:wght@300;400;500;600&family=Cinzel:wght@400..900&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-anadu-base font-body text-anadu-dark antialiased selection:bg-anadu-gold selection:text-white flex flex-col min-h-full">
    
    <x-header />

    <main class="flex-grow flex items-center justify-center">
        <div class="text-center px-6 py-12">
            <p class="emphasis text-anadu-gold text-lg md:text-xl mb-2 tracking-wider">{{ __('Service Unavailable') }}</p>
            <p class="text-lg md:text-xl text-anadu-forest/70 mb-8 max-w-md mx-auto font-body">{{ __('The service you are looking for is currently unavailable.') }}</p>
        </div>
    </main>

    <x-footer />
</body>
</html>