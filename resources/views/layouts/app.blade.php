<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'तालपारी अनदुँ | Talpari Anadu')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arya:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-anadu-base font-body text-anadu-dark antialiased selection:bg-anadu-gold selection:text-white flex flex-col min-h-full">
    
    <header class="sticky top-0 z-50 bg-anadu-base/90 backdrop-blur-md border-b border-anadu-gold/10 py-6">
        <nav class="container mx-auto px-6 relative">
            
            <div class="absolute right-6 top-0 flex items-center space-x-3 text-[10px] md:text-xs tracking-widest font-semibold uppercase">
                <a href="?lang=en" class="{{ app()->getLocale() == 'en' ? 'text-anadu-gold' : 'text-anadu-forest/40 hover:text-anadu-forest' }} transition">ENGLISH</a>
                <span class="text-anadu-gold/20">|</span>
                <a href="?lang=ne" class="{{ app()->getLocale() == 'ne' ? 'text-anadu-gold' : 'text-anadu-forest/40 hover:text-anadu-forest' }} transition">नेपाली</a>
                <span class="text-anadu-gold/20">|</span>
                <a href="?lang=ta" class="{{ app()->getLocale() == 'ta' ? 'text-anadu-gold' : 'text-anadu-forest/40 hover:text-anadu-forest' }} transition">तमू</a>
            </div>

            <div class="flex flex-col items-center">
                <a href="{{ url('/') }}" class="flex flex-col items-center group transition-transform hover:scale-105">
                    <span class="font-heading font-normal text-anadu-gold text-2xl md:text-3xl leading-none">
                        अनदुँ
                    </span>
                    <span class="font-heading font-bold text-anadu-forest text-4xl md:text-6xl leading-tight -mt-1 uppercase">
                        तालपारी
                    </span>
                    <span class="mt-2 text-[10px] md:text-xs font-medium text-anadu-gold uppercase border-t border-anadu-gold/20 pt-1 tracking-wider text-center">
                        @if(app()->getLocale() == 'en')
                            Historical, Cultural & Natural Heritage
                        @elseif(app()->getLocale() == 'ne')
                            ऐतिहासिक, सांस्कृतिक तथा प्राकृतिक धरोहर
                        @else
                             ऐतिहासिक, सांस्कृतिक तथा प्राकृतिक धरोहर
                        @endif
                    </span>
                </a>

                <ul class="flex flex-wrap justify-center gap-x-8 gap-y-2 mt-8 font-medium text-sm tracking-wide uppercase text-anadu-forest/80">
                    <li><a href="{{ url('/') }}" class="hover:text-anadu-gold transition">Home</a></li>
                    <li><a href="{{ url('/history-heritage') }}" class="hover:text-anadu-gold transition">History & Heritage</a></li>
                    <li><a href="{{ url('/culture-traditions') }}" class="hover:text-anadu-gold transition">Culture & Traditions</a></li>
                    <li><a href="{{ url('/programs-activities') }}" class="hover:text-anadu-gold transition">Programs & Activities</a></li>
                    <li><a href="{{ url('/contact') }}" class="hover:text-anadu-gold transition">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="relative bg-anadu-forest text-anadu-base py-16 mt-20 overflow-hidden footer-heritage-bg">
    
        <div class="absolute inset-0 z-10 bg-gradient-to-b from-anadu-forest via-transparent to-anadu-forest"></div>

        <div class="container mx-auto px-6 text-center relative z-20">
            <div class="mb-8">
                <h3 class="font-heading text-3xl md:text-4xl text-anadu-gold mb-2 uppercase">
                    तालपारी अनदुँ
                </h3>
                
                <p class="opacity-90 text-sm md:text-base max-w-2xl mx-auto leading-relaxed font-light italic">
                    "Cultivating a stronger community to honor our history, protect our identity, and preserve the vibrant culture, traditions, and nature of Anadu."
                </p>
            </div>

            <div class="flex items-center justify-center space-x-4 mb-8">
                <div class="w-8 h-px bg-anadu-gold/30"></div>
                <div class="w-2 h-2 rotate-45 border border-anadu-gold/40"></div>
                <div class="w-8 h-px bg-anadu-gold/30"></div>
            </div>

            <div class="text-[10px] tracking-[0.4em] uppercase opacity-60">
                &copy; {{ date('Y') }} ANADU TAALPARI | POKHARA – 22, KASKI
            </div>
        </div>
    </footer>
</body>
</html>