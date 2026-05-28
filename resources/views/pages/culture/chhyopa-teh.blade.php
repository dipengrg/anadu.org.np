@extends('components.layout')

@section('title')
    Chhyopa Teh | Talpari Anadu
@endsection

@section('content')
<!-- Main Content Area: Chhyopa Teh -->
<main id="chhyopa-teh-content" class="w-full">

    <!-- Page Header / Intro Banner -->
    <section class="max-w-4xl mx-auto px-6 pt-20 pb-12 text-center">
        <span class="text-[#C5A880] text-xs uppercase tracking-widest font-bold block mb-3">Culture &amp; Identity</span>
        <h1 class="text-[#234433] text-3xl md:text-5xl  tracking-tight mb-6">छ्योप त्हें (Chhyopa Teh)</h1>
        <p class="text-gray-600 text-base md:text-lg max-w-2xl mx-auto leading-relaxed font-serif italic">
            "पितृहरूको सम्मान, कुलको सुरक्षा र ल्होसारको पूर्वसन्ध्या"
        </p>
        <div class="w-12 h-[1px] bg-[#C5A880] mx-auto mt-8"></div>
    </section>

    <!-- Section 1: Ancestral Veneration & Clan Fortification -->
    <section class="max-w-5xl mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-start">
            <div class="md:col-span-4 sticky top-6">
                <h2 class="text-[#234433] text-2xl  tracking-tight">The Eve of Renewal</h2>
                <span class="text-xs uppercase text-[#C5A880] mt-2 block font-semibold">Honor &amp; Protection</span>
            </div>
            <div class="md:col-span-8 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                <p>
                    Deeply woven into the spiritual fabric of the Tamu community, <strong class="text-[#234433] font-semibold">Chhyopa Teh (छ्योप त्हें)</strong> is an intimate, sacred ritual dedicated entirely to honoring departed ancestors and securing the spiritual protection of the lineage (<span class="italic font-medium">पितृहरूको सम्मान र कुलको सुरक्षाका लागि समर्पित</span>). 
                </p>
                <p>
                    By gathering on this specific night, families reinforce their spiritual bond with their lineage, acting as a gateway of remembrance that ensures the blessings of the ancestors flow directly into the households before the turn of the calendar.
                </p>
            </div>
        </div>
    </section>

    <!-- Section 2: Two-Column Layout — The All-Night Vigil -->
    <section class="bg-white py-20 border-y border-gray-100">
        <div class="max-w-5xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
                
                <!-- Left Column: Sacred Night Calendar Card -->
                <div class="md:col-span-5">
                    <div class="w-full bg-[#F7F5F0] border border-gray-200/60 rounded-sm p-6 space-y-4 shadow-sm font-sans">
                        <span class="text-xs uppercase tracking-widest font-bold text-[#C5A880] block">Ritual Timing</span>
                        <h4 class="text-[#234433] text-xl font-serif">Lhosar Eve (पुष १४ गते राति)</h4>
                        
                        <div class="space-y-3 pt-2">
                            <div class="flex items-start gap-3">
                                <span class="text-[#C5A880] text-xs mt-1">◆</span>
                                <div>
                                    <strong class="text-gray-900 text-sm block">Poush 14 - Nightfall</strong>
                                    <span class="text-gray-500 text-xs">पुस १४ गते राति / ल्होसारको पूर्वसन्ध्यामा (The Night of Poush 14th / Eve of Tamu Lhosar)</span>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="text-[#C5A880] text-xs mt-1">◆</span>
                                <div>
                                    <strong class="text-gray-900 text-sm block">Vigil Duration</strong>
                                    <span class="text-gray-500 text-xs">रातभर गरिने विशेष अनुष्ठान (All-Night Sacred Ritual)</span>
                                </div>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-gray-200 text-[10px] tracking-wide text-gray-400 uppercase">
                            An Annual Midnight Transition
                        </div>
                    </div>
                </div>

                <!-- Right Column: Blessings for the Village -->
                <div class="md:col-span-7 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                    <span class="text-[#C5A880] text-xs uppercase tracking-widest font-bold block">Sacred Intentions</span>
                    <h3 class="text-[#234433] text-2xl  mb-4">Prayers for Peace, Joy, and Prosperity</h3>
                    
                    <p>
                        Observed faithfully <strong class="text-gray-900 font-medium">once every year on the night of Poush 14th</strong> (<span class="italic font-medium">प्रत्येक वर्ष पुस १४ गते राति</span>), this event serves as the grand prelude to the Tamu New Year. 
                    </p>
                    <p>
                        This particular ceremony is a rigorous, profound night-long vigil (<span class="italic font-medium">रातभर गरिने यस विशेष अनुष्ठानमा</span>). Throughout the dark hours, the community offers prayers for the ultimate eternal peace of departed souls (<span class="italic font-medium">दिवंगत आत्माहरूको शान्तिको कामना गर्दै</span>). Concurrently, as the dawn of the new year approaches, families seek powerful ancestral blessings for health, happiness, and bountiful prosperity for both their individual households and the wider village society (<span class="italic font-medium">नयाँ वर्षमा परिवार र गाउँको सुख-समृद्धिको लागि आशीर्वाद माग्ने गरिन्छ</span>).
                    </p>
                </div>

            </div>
        </div>
    </section>

</main>
@endsection
