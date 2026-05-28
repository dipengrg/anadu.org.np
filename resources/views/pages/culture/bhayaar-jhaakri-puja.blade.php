@extends('components.layout')

@section('title')
    Bhayaar Jhaakri Puja | Talpari Anadu
@endsection

@section('content')
<!-- Main Content Area: Bhayar Jhaakri Puja -->
<main id="bhayar-jhaakri-puja-content" class="w-full">

    <!-- Page Header / Intro Banner -->
    <section class="max-w-4xl mx-auto px-6 pt-20 pb-12 text-center">
        <span class="text-[#C5A880] text-xs uppercase tracking-widest font-bold block mb-3">Culture &amp; Identity</span>
        <h1 class="text-[#234433] text-3xl md:text-5xl  tracking-tight mb-6">भयार झाँक्री पूजा (Bhayar Jhaakri Puja)</h1>
        <p class="text-gray-600 text-base md:text-lg max-w-2xl mx-auto leading-relaxed font-serif">
            "प्रकृति र मानिसबीचको सम्बन्ध र गाउँको रक्षा"
        </p>
        <div class="w-12 h-[1px] bg-[#C5A880] mx-auto mt-8"></div>
    </section>

    <!-- Section 1: Spiritual Harmony & Village Safeguarding -->
    <section class="max-w-5xl mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-start">
            <div class="md:col-span-4 sticky top-6">
                <h2 class="text-[#234433] text-2xl  tracking-tight">The Spiritual Bond</h2>
                <span class="text-xs uppercase text-[#C5A880] mt-2 block font-semibold">Humanity &amp; Nature Alliance</span>
            </div>
            <div class="md:col-span-8 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                <p>
                    Deeply embedded within the indigenous shamanistic traditions of the Tamu culture, <strong class="text-[#234433] font-semibold">Bhayar Jhaakri Puja (भयार झाँक्री पूजा)</strong> serves as a vital spiritual shield for the community. Conducted exclusively by the local, traditional Bhayar Jhaakri priests (<span class=" font-medium">स्थानीय भयार झाँक्री पुजारीहरू</span>), this sacred ritual is designed to reinforce, deepen, and honor the delicate relationship between humanity and the natural world.
                </p>
                <p>
                    The performance of this ancient ritual is rooted in a profound, collective faith that it structurally fortifies and protects the entire settlement (<span class=" font-medium">गाउँको रक्षा गर्ने जनविश्वास</span>). It acts as a shield to keep the village safe from spreading diseases, sudden illness, and devastating natural disasters (<span class=" font-medium">गाउँलाई रोगव्याधि र प्राकृतिक विपत्तिबाट जोगाउन</span>), preserving the cosmic balance between the people and the land they inhabit.
                </p>
            </div>
        </div>
    </section>

    <!-- Section 2: Two-Column Layout — The Full Moon Consecration -->
    <section class="bg-white py-20 border-y border-gray-100">
        <div class="max-w-5xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
                
                <!-- Left Column: Sacred Timing Card -->
                <div class="md:col-span-5">
                    <div class="w-full bg-[#F7F5F0] border border-gray-200/60 rounded-sm p-6 space-y-4 shadow-sm font-sans">
                        <span class="text-xs uppercase tracking-widest font-bold text-[#C5A880] block">Ritual Schedule</span>
                        <h4 class="text-[#234433] text-xl font-serif">The Purnima Cycle (पूर्णेको दिन)</h4>
                        
                        <div class="space-y-3 pt-2">
                            <div class="flex items-start gap-3">
                                <span class="text-[#C5A880] text-xs mt-1">◆</span>
                                <div>
                                    <strong class="text-gray-900 text-sm block">Jestha Purnima</strong>
                                    <span class="text-gray-500 text-xs">जेठ महिनाको पूर्णिमा (Full Moon of Jestha)</span>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="text-[#C5A880] text-xs mt-1">◆</span>
                                <div>
                                    <strong class="text-gray-900 text-sm block">Mangsir Purnima</strong>
                                    <span class="text-gray-500 text-xs">मंसिर महिनाको पूर्णिमा / उधौली पर्व (Full Moon of Mangsir / Udhauli)</span>
                                </div>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-gray-200 text-[10px] tracking-wide text-gray-400 uppercase">
                            Observed Twice Yearly on Full Moon Days
                        </div>
                    </div>
                </div>

                <!-- Right Column: Seasonal Transitions -->
                <div class="md:col-span-7 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                    <span class="text-[#C5A880] text-xs uppercase tracking-widest font-bold block">Astrological &amp; Cultural Alignment</span>
                    <h3 class="text-[#234433] text-2xl  mb-4">The Udhauli Convergence</h3>
                    
                    <p>
                        The <strong class="text-gray-900 font-medium">Bhayar Jhaakri Puja</strong> is meticulously organized exactly <strong class="text-gray-900 font-medium">twice every single year</strong>, strictly aligning with the powerful energy of the full moon (<span class=" font-medium">प्रत्येक वर्ष जेठ र मंसिरको पूर्णिमा</span>). 
                    </p>
                    <p>
                        The celebration in the month of Mangsir aligns beautifully with the grand <strong class="text-gray-900 font-medium">Udhauli festival (उधौली पर्व)</strong>, a key seasonal turning point in Himalayan indigenous calendars marking the downward migration of nature's forces ahead of winter. Gathering on these precise full moon days allows the shamanic priests to channel optimal spiritual protection, ensuring the safety, health, and vitality of the entire village community before the changing of the seasons.
                    </p>
                </div>

            </div>
        </div>
    </section>

</main>
@endsection
