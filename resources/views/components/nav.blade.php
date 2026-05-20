<nav class="container mx-auto px-6 py-8">
    <!-- DESKTOP MENU -->
    <div class="flex flex-wrap justify-center gap-x-8 gap-y-2 font-medium text-sm tracking-wide uppercase text-anadu-forest/80">
        
        <!-- A. Home -->
        <a href="/" class="emphasis {{ request()->is('/') ? 'text-anadu-gold' : 'hover:text-anadu-gold' }} transition">HOME</a>

        <!-- B. Our Legacy -->
        <div class="relative group">
            <button class="emphasis flex items-center gap-1 {{ request()->is('legacy*') ? 'text-anadu-gold' : 'group-hover:text-anadu-gold' }} transition">
                <span>OUR LEGACY</span>
                <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="absolute left-0 w-56 bg-anadu-base border border-anadu-gold/10 shadow-xl rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 py-2">
                <p class="text-xs text-anadu-gold emphasis tracking-wider px-4 py-2">Explore our rich heritage</p>
                <a href="/legacy/settlement" class="block px-4 py-2 text-xs text-anadu-forest/80 hover:text-anadu-gold hover:bg-anadu-gold/5 transition">Settlement</a>
                <a href="/legacy/territory" class="block px-4 py-2 text-xs text-anadu-forest/80 hover:text-anadu-gold hover:bg-anadu-gold/5 transition">Territory</a>
                <a href="/legacy/phewa-lake" class="block px-4 py-2 text-xs text-anadu-forest/80 hover:text-anadu-gold hover:bg-anadu-gold/5 transition">Fewa Lake</a>
                <a href="/legacy/school" class="block px-4 py-2 text-xs text-anadu-forest/80 hover:text-anadu-gold hover:bg-anadu-gold/5 transition">Anadu School</a>
                <a href="/legacy/pagoda" class="block px-4 py-2 text-xs text-anadu-forest/80 hover:text-anadu-gold hover:bg-anadu-gold/5 transition">Bishwa Shanti Stupa</a>
                <a href="/legacy/community-center" class="block px-4 py-2 text-xs text-anadu-forest/80 hover:text-anadu-gold hover:bg-anadu-gold/5 transition">Community Center</a>
                <a href="/legacy/chhoko-dhee" class="block px-4 py-2 text-xs text-anadu-forest/80 hover:text-anadu-gold hover:bg-anadu-gold/5 transition">Chhoko Dhee</a>
            </div>
        </div>

        <!-- C. Culture & Identity -->
        <div class="relative group">
            <button class="emphasis flex items-center gap-1 {{ request()->is('culture-identity*') ? 'text-anadu-gold' : 'group-hover:text-anadu-gold' }} transition">
                <span>CULTURE & IDENTITY</span>
                <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="absolute left-1/2 -translate-x-1/2 w-[550px] bg-anadu-base border border-anadu-gold/10 shadow-2xl rounded-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                <div class="grid grid-cols-2 gap-6 p-6">
                    <div>
                        <p class="text-xs text-anadu-gold emphasis tracking-wider mb-3">Traditions that define us</p>
                        <ul class="space-y-2">
                            <li><a href="/culture/identity" class="block text-xs text-anadu-forest/80 hover:text-anadu-gold transition">Religion, Language & Costumes</a></li>
                            <li><a href="/culture/lhokor" class="block text-xs text-anadu-forest/80 hover:text-anadu-gold transition">Lhokor</a></li>
                            <li><a href="/culture/thaaso-teh" class="block text-xs text-anadu-forest/80 hover:text-anadu-gold transition">Thaaso Teh</a></li>
                            <li><a href="/culture/simle-toh-teh" class="block text-xs text-anadu-forest/80 hover:text-anadu-gold transition">Simle Toh Teh</a></li>
                            <li><a href="/culture/bhayaar-jhaakri-puja" class="block text-xs text-anadu-forest/80 hover:text-anadu-gold transition">Bhayar Jhaakri Puja</a></li> 
                            <li><a href="/culture/maai-puja" class="block text-xs text-anadu-forest/80 hover:text-anadu-gold transition">Maai Puja</a></li>
                            <li><a href="/culture/khema-puja" class="block text-xs text-anadu-forest/80 hover:text-anadu-gold transition">Khema Puja</a></li>
                            <li><a href="/culture/chhyopa-teh" class="block text-xs text-anadu-forest/80 hover:text-anadu-gold transition">Chhyopa Teh</a></li>
                            <li><a href="/culture/pye-karya" class="block text-xs text-anadu-forest/80 hover:text-anadu-gold transition">Pye Karya</a></li>
                            <li><a href="/culture/lhosar" class="block text-xs text-anadu-forest/80 hover:text-anadu-gold transition">Lhosar</a></li>
                            <li><a href="/culture/dashai" class="block text-xs text-anadu-forest/80 hover:text-anadu-gold transition">Dashai</a></li>
                            <li><a href="/culture/tihar" class="block text-xs text-anadu-forest/80 hover:text-anadu-gold transition">Tihar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- D. Community Life -->
        <div class="relative group">
            <button class="emphasis flex items-center gap-1 {{ request()->is('community*') ? 'text-anadu-gold' : 'group-hover:text-anadu-gold' }} transition">
                <span>COMMUNITY LIFE</span>
                <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="absolute right-0 w-56 bg-anadu-base border border-anadu-gold/10 shadow-xl rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 py-2">
                <p class="text-xs text-anadu-gold emphasis tracking-wider px-4 py-2">Building our future together</p>
                <a href="/community/demography" class="block px-4 py-2 text-xs text-anadu-forest/80 hover:text-anadu-gold hover:bg-anadu-gold/5 transition">Demography</a>
                <a href="/community/transportation" class="block px-4 py-2 text-xs text-anadu-forest/80 hover:text-anadu-gold hover:bg-anadu-gold/5 transition">Mode of Transportation</a>
                <a href="/community/institutions" class="block px-4 py-2 text-xs text-anadu-forest/80 hover:text-anadu-gold hover:bg-anadu-gold/5 transition">Institutions</a>
                <a href="/community/initiatives" class="block px-4 py-2 text-xs text-anadu-forest/80 hover:text-anadu-gold hover:bg-anadu-gold/5 transition">Initiatives</a>
            </div>
        </div>

        <!-- E. Contact -->
        <a href="/contact" class="emphasis {{ request()->is('contact') ? 'text-anadu-gold' : 'hover:text-anadu-gold' }} transition">CONTACT</a>

    </div>
</nav>
