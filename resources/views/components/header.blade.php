<header class="sticky top-0 z-50 bg-anadu-base/90 backdrop-blur-md py-4 sm:py-5 md:py-6">
    <div class="container mx-auto px-6 relative">
        <!-- Language Selector -->
        <div class="absolute right-6 top-4 flex items-center space-x-3 text-[10px] sm:text-xs tracking-widest font-semibold uppercase">
            @php 
                $language = app()->getLocale(); 
            @endphp
            
            <!-- English Selector -->
            <a href="{{ route('language.set', 'en') }}" class="{{ $language == 'en' ? 'text-anadu-gold' : 'text-anadu-forest/40 hover:text-anadu-forest' }} transition flex items-center">
                <!-- Flag shown on mobile, hidden on large screens -->
                <span class="text-base lg:hidden" title="English">🇬🇧</span>
                <!-- Text hidden on mobile, shown on large screens -->
                <span class="hidden lg:inline">ENGLISH</span>
            </a>
            
            <span class="text-anadu-gold/20">|</span>
            
            <!-- Nepali Selector -->
            <a href="{{ route('language.set', 'ne') }}" class="{{ $language == 'ne' ? 'text-anadu-gold' : 'text-anadu-forest/40 hover:text-anadu-forest' }} transition flex items-center">
                <!-- Flag shown on mobile, hidden on large screens -->
                <span class="text-base lg:hidden" title="नेपाली">🇳🇵</span>
                <!-- Text hidden on mobile, shown on large screens -->
                <span class="hidden lg:inline">नेपाली</span>
            </a>
        </div>

        <div class="flex flex-col items-center">
            <a href="{{ url('/') }}" class="flex flex-col items-center group transition-transform hover:scale-105">
                <span class="font-heading text-anadu-gold text-lg sm:text-2xl md:text-3xl leading-none">
                    अनदुँ
                </span>
                <span class="font-heading font-bold text-anadu-forest text-3xl sm:text-4xl md:text-6xl leading-tight -mt-1 uppercase">
                    तालपारी
                </span>
                <span class="mt-1 sm:mt-2 text-[10px] sm:text-xs font-medium text-anadu-gold  border-t border-anadu-gold/20 pt-1 tracking-wider text-center max-w-xs">
                    @if($language == 'en')
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