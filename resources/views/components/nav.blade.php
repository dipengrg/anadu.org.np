<nav>
    <!-- Desktop Menu -->
    <div class="hidden lg:flex container mx-auto px-6 py-8 flex-wrap justify-center gap-x-8 gap-y-2 font-medium text-sm tracking-wide uppercase text-anadu-forest/80">
        
        <!-- 1. Home -->
        <a href="/" class="emphasis {{ request()->is('/') ? 'text-anadu-gold' : 'hover:text-anadu-gold' }} transition">HOME</a>

        <!-- 2. History -->
        <div class="relative group">
            <button class="emphasis flex items-center gap-1 {{ request()->is('history*') ? 'text-anadu-gold' : 'group-hover:text-anadu-gold' }} transition">
                <span>HISTORY</span>
                <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="absolute left-0 w-56 bg-anadu-base border border-anadu-gold/10 shadow-xl rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 py-2">
                <p class="text-xs text-anadu-gold emphasis tracking-wider px-4 py-2">Origins &amp; Foundations</p>
                <a href="/history/settlement" class="block px-4 py-2 text-xs text-anadu-forest/80 hover:text-anadu-gold hover:bg-anadu-gold/5 transition">Settlement</a>
                <a href="/history/territory" class="block px-4 py-2 text-xs text-anadu-forest/80 hover:text-anadu-gold hover:bg-anadu-gold/5 transition">Territory</a>
            </div>
        </div>

        <!-- 3. Heritage -->
        <div class="relative group">
            <button class="emphasis flex items-center gap-1 {{ request()->is('heritage*') ? 'text-anadu-gold' : 'group-hover:text-anadu-gold' }} transition">
                <span>HERITAGE</span>
                <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="absolute left-0 w-56 bg-anadu-base border border-anadu-gold/10 shadow-xl rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 py-2">
                <p class="text-xs text-anadu-gold emphasis tracking-wider px-4 py-2">Landmarks &amp; Sacred Sites</p>
                <a href="/heritage/phewa-lake" class="block px-4 py-2 text-xs text-anadu-forest/80 hover:text-anadu-gold hover:bg-anadu-gold/5 transition">Fewa Lake</a>
                <a href="/heritage/school" class="block px-4 py-2 text-xs text-anadu-forest/80 hover:text-anadu-gold hover:bg-anadu-gold/5 transition">Anadu School</a>
                <a href="/heritage/stupa" class="block px-4 py-2 text-xs text-anadu-forest/80 hover:text-anadu-gold hover:bg-anadu-gold/5 transition">Bishwa Shanti Stupa</a>
                <a href="/heritage/community-center" class="block px-4 py-2 text-xs text-anadu-forest/80 hover:text-anadu-gold hover:bg-anadu-gold/5 transition">Community Center</a>
                <a href="/heritage/chhoko-dhee" class="block px-4 py-2 text-xs text-anadu-forest/80 hover:text-anadu-gold hover:bg-anadu-gold/5 transition">Chhoko Dhee</a>
            </div>
        </div>

        <!-- 4. Culture -->
        <div class="relative group">
            <button class="emphasis flex items-center gap-1 {{ request()->is('culture*') ? 'text-anadu-gold' : 'group-hover:text-anadu-gold' }} transition">
                <span>CULTURE</span>
                <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="absolute left-1/2 -translate-x-1/2 w-[550px] bg-anadu-base border border-anadu-gold/10 shadow-2xl rounded-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                <div class="grid grid-cols-2 gap-6 p-6">
                    <div>
                        <p class="text-xs text-anadu-gold emphasis tracking-wider mb-3">Traditions that define us</p>
                        <ul class="space-y-2">
                            <li><a href="/culture/identity" class="block text-xs text-anadu-forest/80 hover:text-anadu-gold transition">Religion, Language &amp; Costumes</a></li>
                            <li><a href="/culture/lhokor" class="block text-xs text-anadu-forest/80 hover:text-anadu-gold transition">Lhokor</a></li>
                            <li><a href="/culture/thaaso-teh" class="block text-xs text-anadu-forest/80 hover:text-anadu-gold transition">Thaaso Teh</a></li>
                            <li><a href="/culture/simle-toh-teh" class="block text-xs text-anadu-forest/80 hover:text-anadu-gold transition">Simle Toh Teh</a></li>
                            <li><a href="/culture/bhayaar-jhaakri-puja" class="block text-xs text-anadu-forest/80 hover:text-anadu-gold transition">Bhayar Jhaakri Puja</a></li> 
                            <li><a href="/culture/maai-puja" class="block text-xs text-anadu-forest/80 hover:text-anadu-gold transition">Maai Puja</a></li>
                            <li><a href="/culture/khema-puja" class="block text-xs text-anadu-forest/80 hover:text-anadu-gold transition">Khema Puja</a></li>
                            <li><a href="/culture/chhyopa-teh" class="block text-xs text-anadu-forest/80 hover:text-anadu-gold transition">Chhyopa Teh</a></li>
                            <li><a href="/culture/pye-karya" class="block text-xs text-anadu-forest/80 hover:text-anadu-gold transition">Pye Karya</a></li>
                            <li><a href="/culture/lhosar" class="block text-xs text-anadu-forest/80 hover:text-anadu-gold transition">Lhosar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- 5. Community -->
        <div class="relative group">
            <button class="emphasis flex items-center gap-1 {{ request()->is('community*') ? 'text-anadu-gold' : 'group-hover:text-anadu-gold' }} transition">
                <span>COMMUNITY</span>
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

        <!-- 6. Eco Tourism -->
        <div class="relative group">
            <button class="emphasis flex items-center gap-1 {{ request()->is('eco-tourism*') ? 'text-anadu-gold' : 'group-hover:text-anadu-gold' }} transition">
                <span>ECO TOURISM</span>
                <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <div class="absolute right-0 w-60 bg-anadu-base border border-anadu-gold/10 shadow-xl rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 py-2">
                <p class="text-xs text-anadu-gold emphasis tracking-wider px-4 py-2">Responsible Travel &amp; Trails</p>
                <a href="/eco-tourism/raniban-anadu-eco-trail" class="block px-4 py-2 text-xs text-anadu-forest/80 hover:text-anadu-gold hover:bg-anadu-gold/5 transition">Raniban Anadu Eco Trail</a>
                <a href="/eco-tourism/anadu-stupa-hiking-trail" class="block px-4 py-2 text-xs text-anadu-forest/80 hover:text-anadu-gold hover:bg-anadu-gold/5 transition">Anadu Stupa Hiking Trail</a>
                <a href="/eco-tourism/anadu-simle-trail" class="block px-4 py-2 text-xs text-anadu-forest/80 hover:text-anadu-gold hover:bg-anadu-gold/5 transition">Anadu Simle Foot Trail</a>
            </div>
        </div>

        <!-- 7. Contact -->
        <a href="/contact" class="emphasis {{ request()->is('contact') ? 'text-anadu-gold' : 'hover:text-anadu-gold' }} transition">CONTACT</a>
    </div>
</nav>