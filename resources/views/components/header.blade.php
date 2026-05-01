<header class="sticky top-0 z-50 bg-anadu-base/90 backdrop-blur-md border-b border-anadu-gold/10 py-6">
    <nav class="container mx-auto px-6 relative">
        
        <div class="absolute right-6 top-0 flex items-center space-x-3 text-[10px] md:text-xs tracking-widest font-semibold uppercase">
            @php $locale = app()->getLocale(); @endphp
            <a href="?lang=en" class="{{ $locale == 'en' ? 'text-anadu-gold' : 'text-anadu-forest/40 hover:text-anadu-forest' }} transition">ENGLISH</a>
            <span class="text-anadu-gold/20">|</span>
            <a href="?lang=ne" class="{{ $locale == 'ne' ? 'text-anadu-gold' : 'text-anadu-forest/40 hover:text-anadu-forest' }} transition">नेपाली</a>
            <span class="text-anadu-gold/20">|</span>
            <a href="?lang=ta" class="{{ $locale == 'ta' ? 'text-anadu-gold' : 'text-anadu-forest/40 hover:text-anadu-forest' }} transition">तमू</a>
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
                    @if($locale == 'en')
                        Historical, Cultural & Natural Heritage
                    @else
                        ऐतिहासिक, सांस्कृतिक तथा प्राकृतिक धरोहर
                    @endif
                </span>
            </a>

            <ul class="flex flex-wrap justify-center gap-x-8 gap-y-2 mt-8 font-medium text-sm tracking-wide uppercase text-anadu-forest/80">
                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                <x-nav-link href="/history-heritage" :active="request()->is('history-heritage')">History & Heritage</x-nav-link>
                <x-nav-link href="/culture-tradition-rituals" :active="request()->is('culture-tradition-rituals')">Culture, Tradition & Rituals</x-nav-link>
                <x-nav-link href="/festivals" :active="request()->is('festivals')">Festivals</x-nav-link>
                <x-nav-link href="/community-institutions" :active="request()->is('community-institutions')">Community and Institutions</x-nav-link>
                <x-nav-link href="/events-programs" :active="request()->is('events-programs')">Events & Programs </x-nav-link>
                <x-nav-link href="/media-gallery" :active="request()->is('media-gallery')">Media Gallery </x-nav-link>
                <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
            </ul>
        </div>
    </nav>
</header>