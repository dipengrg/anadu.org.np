@extends('components.layout')

@section('title')
    Simle Toh Teh | Talpari Anadu
@endsection

@section('content')
<!-- Main Content Area: Simle Toh Teh -->
<main id="simle-toh-teh-content" class="w-full">

    <!-- Page Header / Intro Banner -->
    <section class="max-w-4xl mx-auto px-6 pt-20 pb-12 text-center">
        <span class="text-[#C5A880] text-xs uppercase tracking-widest font-bold block mb-3">Culture &amp; Identity</span>
        <h1 class="text-[#234433] text-3xl md:text-5xl emphasis tracking-tight mb-6">सिम्ले ट्हो त्हें (Simle Toh Teh)</h1>
        <p class="text-gray-600 text-base md:text-lg max-w-2xl mx-auto leading-relaxed font-serif italic">
            "प्रकृति, पानीका मुहानको संरक्षण र गाउँ समाजको सुरक्षा"
        </p>
        <div class="w-12 h-[1px] bg-[#C5A880] mx-auto mt-8"></div>
    </section>

    <!-- Section 1: Ecological Stewardship & Faith -->
    <section class="max-w-5xl mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-start">
            <div class="md:col-span-4 sticky top-6">
                <h2 class="text-[#234433] text-2xl emphasis tracking-tight">Guardians of Nature</h2>
                <span class="text-xs uppercase text-[#C5A880] mt-2 block font-semibold">Environmental Preservation</span>
            </div>
            <div class="md:col-span-8 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                <p>
                    Deeply tied to the indigenous Bon foundations of the Tamu culture, <strong class="text-[#234433] font-semibold">Simle Toh Teh (सिम्ले ट्हो त्हें)</strong> is a beautiful manifestation of environmental preservation and communal faith. This ritual is primarily observed for the conservation and protection of nature and local water resources (<span class="italic font-medium">प्रकृति र पानीका मुहानको संरक्षण</span>), reflecting the community's deep spiritual connection to their natural surroundings.
                </p>
                <p>
                    By paying direct reverence to the natural elements that sustain life, the festival ensures that vital water sources are kept clean, respected, and preserved for generations, merging ecological responsibility seamlessly with ancestral spiritual laws.
                </p>
            </div>
        </div>
    </section>

    <!-- Section 2: Two-Column Layout — Timing & Fortification -->
    <section class="bg-white py-20 border-y border-gray-100">
        <div class="max-w-5xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
                
                <!-- Left Column: Sacred Calendar Card -->
                <div class="md:col-span-5">
                    <div class="w-full bg-[#F7F5F0] border border-gray-200/60 rounded-sm p-6 space-y-4 shadow-sm font-sans">
                        <span class="text-xs uppercase tracking-widest font-bold text-[#C5A880] block">Ritual Timing</span>
                        <h4 class="text-[#234433] text-xl font-serif">Bi-Annual Cycle (वर्षको दुई पटक)</h4>
                        
                        <div class="space-y-3 pt-2">
                            <div class="flex items-start gap-3">
                                <span class="text-[#C5A880] text-xs mt-1">◆</span>
                                <div>
                                    <strong class="text-gray-900 text-sm block">Chaitra</strong>
                                    <span class="text-gray-500 text-xs">चैत महिनाको पहिलो मंगलबार (First Tuesday of Chaitra)</span>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="text-[#C5A880] text-xs mt-1">◆</span>
                                <div>
                                    <strong class="text-gray-900 text-sm block">Shrawan</strong>
                                    <span class="text-gray-500 text-xs">साउन महिनाको पहिलो मंगलबार (First Tuesday of Shrawan)</span>
                                </div>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-gray-200 text-[10px] tracking-wide text-gray-400 uppercase">
                            Seasonal Community Fortification
                        </div>
                    </div>
                </div>

                <!-- Right Column: Protection of the Toh -->
                <div class="md:col-span-7 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                    <span class="text-[#C5A880] text-xs uppercase tracking-widest font-bold block">Defensive Significance</span>
                    <h3 class="text-[#234433] text-2xl emphasis mb-4">Security of the Village &amp; Society</h3>
                    
                    <p>
                        Celebrated strictly <strong class="text-gray-900 font-medium">twice a year</strong>, the timing aligns with major seasonal agricultural thresholds in spring and monsoon. Beyond its environmental context, the celebration carries immense defensive weight for local governance.
                    </p>
                    <p>
                        It is observed with the absolute collective belief that it will protect, shield, and safeguard their <span class="italic font-semibold text-gray-900">Toh</span>—the village community and local society (<span class="italic font-medium">आफ्नो ट्हो को सुरक्षा</span>). Through coordinated prayers and rituals, the community seeks spiritual fortification so that all opposing negative energies, adversarial forces, and threats to the village's peace are successfully neutralized (<span class="italic font-medium">शत्रु र बैरिको‌ नाश होस्</span>).
                    </p>
                </div>

            </div>
        </div>
    </section>

</main>
@endsection
