<header class="sticky top-0 z-50 bg-anadu-base/90 backdrop-blur-md py-4 sm:py-5 md:py-6">
    <div class="container mx-auto px-6 relative">
        
        <div class="absolute right-6 top-4 sm:top-5 md:top-6 flex items-center space-x-3 text-[10px] sm:text-xs tracking-widest font-semibold uppercase">
            @php $locale = app()->getLocale(); @endphp
            <a href="?lang=en" class="{{ $locale == 'en' ? 'text-anadu-gold' : 'text-anadu-forest/40 hover:text-anadu-forest' }} transition">ENGLISH</a>
            <span class="text-anadu-gold/20">|</span>
            <a href="?lang=ne" class="{{ $locale == 'ne' ? 'text-anadu-gold' : 'text-anadu-forest/40 hover:text-anadu-forest' }} transition">नेपाली</a>
        </div>

        <div class="flex flex-col items-center">
            <a href="{{ url('/') }}" class="flex flex-col items-center group transition-transform hover:scale-105">
                <span class="font-heading font-normal text-anadu-gold text-lg sm:text-2xl md:text-3xl leading-none">
                    अनदुँ
                </span>
                <span class="font-heading font-bold text-anadu-forest text-3xl sm:text-4xl md:text-6xl leading-tight -mt-1 uppercase">
                    तालपारी
                </span>
                <span class="mt-1 sm:mt-2 text-[10px] sm:text-xs font-medium text-anadu-gold emphasis border-t border-anadu-gold/20 pt-1 tracking-wider text-center max-w-xs">
                    @if($locale == 'en')
                        Historical, Cultural & Natural Heritage
                    @else
                        ऐतिहासिक, सांस्कृतिक तथा प्राकृतिक धरोहर
                    @endif
                </span>
            </a>
        </div>        
    </div>

    <x-nav />
</header>