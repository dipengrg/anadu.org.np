@extends('components.layout')

@section('title')
    Religion, Culture and Language | Talpari Anadu
@endsection

@section('content')
<!-- Main Content Area: Religion, Language, and Costume -->
<main id="culture-identity-content" class="w-full">

    <!-- Page Header / Intro Banner -->
    <section class="max-w-4xl mx-auto px-6 pt-20 pb-12 text-center">
        <span class="text-[#C5A880] text-xs uppercase tracking-widest font-bold block mb-3">Culture &amp; Identity</span>
        <h1 class="text-[#234433] text-3xl md:text-5xl  tracking-tight mb-6">Heritage of the Tamu</h1>
        <p class="text-gray-600 text-base md:text-lg max-w-2xl mx-auto leading-relaxed">
            Exploring the foundational pillars of Gurung identity through the enduring legacy of our language, sacred ancestral traditions, and distinct traditional garments.
        </p>
        <div class="w-12 h-[1px] bg-[#C5A880] mx-auto mt-8"></div>
    </section>

    <!-- Section 1: Language — Tamu Kyi -->
    <section class="max-w-5xl mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-start">
            <div class="md:col-span-4 sticky top-6">
                <h2 class="text-[#234433] text-2xl  tracking-tight">Language &amp; Roots</h2>
                <span class="text-xs uppercase text-[#C5A880] mt-2 block font-semibold">Tamu Kyi &amp; Migration</span>
            </div>
            <div class="md:col-span-8 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                <p>
                    The Gurung people natively speak the <strong class="text-gray-900 font-semibold">Tamu language</strong>, natively known as <span class=" font-medium">Tamu Kyi</span>. Belonging to the Sino-Tibetan language family, this rich linguistic tradition has historically been preserved and passed down from one generation to the next primarily through word-of-mouth and oral storytelling. The endonym <strong class="text-[#234433] font-medium">Tamu (तमू)</strong> is the precise term Gurungs use to define themselves. 
                </p>
                <p>
                    Etymologically, the term "Gurung" is derived from the ancient Tibetan word <span class=" font-medium">"Gru-gu"</span>, which beautifully translates to <span class="">"to bring down."</span> This linguistic marker stands as a direct historical reflection of their ancestral migration from the high Tibetan plateau down onto the lush, southern slopes of the Himalayas.
                </p>
                <div class="bg-[#F7F5F0] p-5 rounded-sm border-l-2 border-[#C5A880] text-xs space-y-2">
                    <span class="font-sans font-bold uppercase tracking-wider text-gray-900 block">Socio-Linguistic Shift</span>
                    <p>
                        In contemporary times, most Gurung speakers are fully bilingual in Nepali, which serves as the dominant language for formal education, administrative governance, and wider cross-cultural communication. However, an increased systemic reliance on Nepali—coupled with rapid out-migration and urbanization—has led to a noticeable decline in daily Gurung language use among the youth, raising urgent communal concerns regarding its long-term linguistic vitality.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Traditional Attire (Two-Column Layout) -->
    <section class="bg-white py-20 border-y border-gray-100">
        <div class="max-w-5xl mx-auto px-6">
            <span class="text-[#C5A880] text-xs uppercase tracking-widest font-bold block mb-2 text-center md:text-left">Material Culture</span>
            <h2 class="text-[#234433] text-2xl md:text-3xl  mb-12 text-center md:text-left">Traditional Costume &amp; Ornamentation</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-start">
                <!-- Left Column: Women's Attire -->
                <div class="md:col-span-6 space-y-4 bg-[#F7F5F0] p-8 border border-gray-200/60 rounded-sm shadow-sm">
                    <span class="text-[10px] uppercase font-sans tracking-widest font-bold text-[#C5A880] block">Athentic Women's Garments</span>
                    <span class="text-[#234433] text-xl font-serif">The Female Silhouette</span>
                    <p class="text-gray-600 text-xs md:text-sm leading-relaxed">
                        The traditional clothing of Gurung women is layered with deep textile artistry. The ensemble prominently features the <span class="font-medium text-gray-900">Cholo</span> or <span class="font-medium text-gray-900">Chaubandi Cholo</span> (a double-breasted blouse), paired elegantly with a wrap-around skirt known as the <span class="">Phariya</span> or <span class="">Lungi</span>. 
                    </p>
                    <p class="text-gray-600 text-xs md:text-sm leading-relaxed">
                        A protective <span class="font-medium text-gray-900">Patuki</span> sash is wound tightly around the waist for structural support, while the iconic <strong class="text-[#234433] font-medium">Ghalek</strong> is draped cross-bodied diagonally from the shoulder down to the waist. The head and shoulders are gracefully adorned with a light <span class="">Pachhyauri</span> cloth.
                    </p>
                    <p class="text-gray-600 text-xs md:text-sm leading-relaxed pt-2 border-t border-gray-200/60 font-serif">
                        <strong class="not- font-sans text-[11px] uppercase tracking-wider block text-gray-900 mb-1">Ornamentation:</strong>
                        Intricate jewelry completes the dress, including the braided <span class="font-medium text-gray-900">Dori</span> in the hair, precious <span class="font-medium text-gray-900">Kantha</span> or <span class="font-medium text-gray-900">Muga ko Mala</span> (coral bead necklaces), detailed earrings, nose ornaments, structural bangles, and traditional anklets.
                    </p>
                </div>

                <!-- Right Column: Men's Attire -->
                <div class="md:col-span-6 space-y-4 bg-[#F7F5F0] p-8 border border-gray-200/60 rounded-sm shadow-sm">
                    <span class="text-[10px] uppercase font-sans tracking-widest font-bold text-[#C5A880] block">Authentic Men's Garments</span>
                    <span class="text-[#234433] text-xl font-serif">The Male Silhouette</span>
                    <p class="text-gray-600 text-xs md:text-sm leading-relaxed">
                        Engineered for practical durability, the traditional attire for men includes the <strong class="text-[#234433] font-medium">Kachhad (or Kaas)</strong>—a functional, white wrap-around lower garment. This is worn alongside the <span class="font-medium text-gray-900">Bhoto</span>, a light, short-sleeved shirt fastened securely at the front with cloth ties. 
                    </p>
                    <p class="text-gray-600 text-xs md:text-sm leading-relaxed">
                        Similar to the women's wear, a sturdy <span class="font-medium text-gray-900">Patuka</span> sash is wrapped around the waist as a supportive belt. Draped across the chest is the celebrated <strong class="text-gray-900 font-medium">Bhangra</strong> (also termed <span class="">Ryenga</span> or <span class="">Nhigi</span>), a resilient, handwoven cross-cloth traditionally extracted from wild nettle fibers that famously serves a dual purpose as a heavy-duty carrying pouch.
                    </p>
                    <p class="text-gray-600 text-xs md:text-sm leading-relaxed pt-2 border-t border-gray-200/60 font-serif">
                        <strong class="not- font-sans text-[11px] uppercase tracking-wider block text-gray-900 mb-1">Environmental Adaptation:</strong>
                        To meet the rugged and freezing demands of high-altitude agricultural and pastoral lifestyles, men historically capped their attire with distinct woven top caps and thick woolen wraps.
                    </p>
                </div>
            </div>

            <!-- Costume Contemporary Footnote -->
            <div class="mt-12 text-center max-w-xl mx-auto">
                <p class="text-xs text-gray-400">
                    Note: In contemporary Tamu society, everyday reliance on these heavy garments has naturally declined. Today, these beautiful attires are preserved and worn proudly during major cultural festivals, milestone life rituals, and formal community events.
                </p>
            </div>
        </div>
    </section>

    <!-- Section 3: Religion — Indigenous Bon Foundations -->
    <section class="max-w-5xl mx-auto px-6 py-20">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-start">
            <div class="md:col-span-4 sticky top-6">
                <h2 class="text-[#234433] text-2xl  tracking-tight">Cosmology &amp; Belief</h2>
                <span class="text-xs uppercase text-[#C5A880] mt-2 block font-semibold">The Sacred Natural World</span>
            </div>
            <div class="md:col-span-8 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                <p>
                    The core spiritual architecture of the Gurung community is deeply rooted within the ancient, indigenous <strong class="text-[#234433] font-semibold">Bon religion</strong>. Departing from classic western concepts of a singular, personalized deity, Bon cosmology views <strong class="text-gray-900 font-medium">nature itself—the untamed jungles, the roaring rivers, and the vast lakes—as the ultimate living god</strong>. Their day-to-day spiritual practices naturally embody a profound synthesis of animism and shamanism.
                </p>
                <p>
                    Rather than building centralized, imposing cathedrals, the community communicates with the spiritual world at specialized natural shrines known as <span class=" font-medium">Thaan</span> (miniature open-air altars). These holy micro-sanctuaries are meticulously designated throughout the village landscape to appease distinct spiritual elements:
                </p>
                
                <!-- Thaan Grid Layout -->
                <div class="grid grid-cols-2 gap-4 my-6">
                    <div class="border border-gray-100 p-4 rounded-sm bg-white shadow-sm">
                        <strong class="text-gray-900 text-xs block font-sans mb-1">Bhayaar Thaan &amp; Jhaakri Thaan</strong>
                        <p class="text-[11px] text-gray-500">Sacred spots dedicated to the guardian spirits of nature, local territories, and shamanic healing energies.</p>
                    </div>
                    <div class="border border-gray-100 p-4 rounded-sm bg-white shadow-sm">
                        <strong class="text-gray-900 text-xs block font-sans mb-1">Baayo Thaan &amp; Maai Thaan</strong>
                        <p class="text-[11px] text-gray-500">Venerated open altars constructed to honor the raw maternal forces of nature and localized ancestral winds.</p>
                    </div>
                </div>

                <p>
                    Furthermore, the community erects beautiful, distinct <span class="font-medium text-gray-900">pagoda-style stone monuments</span> solely dedicated to ancestral worship. It is here that relatives periodically gather to execute the <strong class="text-[#234433] font-medium">Smriti Punya Pujaa</strong>—a sacred ritual of remembrance designed to feed, honor, and seek the protection of their direct bloodline ancestors.
                </p>
                <p>
                    Over centuries of close geographic and cultural coexistence with wider Himalayan communities, Hindu traditions have naturally woven into their calendar. Today, many families enthusiastically observe <span class="font-medium text-gray-900">Naag Panchami</span>, maintaining their own specialized clan <span class=" font-medium">Naag Thaan</span> to show ultimate reverence to the sacred serpent protectors of the subterranean waters and soils.
                </p>
            </div>
        </div>
    </section>

</main>
@endsection
