@extends('components.layout')

@section('title')
    Thaaso Teh | Talpari Anadu
@endsection

@section('content')
    <!-- Main Content Area: Thaaso Teh -->
<main id="thaaso-teh-content" class="w-full">

    <!-- Page Header / Intro Banner -->
    <section class="max-w-4xl mx-auto px-6 pt-20 pb-12 text-center">
        <span class="text-[#C5A880] text-xs uppercase tracking-widest font-bold block mb-3">Culture &amp; Identity</span>
        <h1 class="text-[#234433] text-3xl md:text-5xl tracking-tight mb-6">थासो त्हें (Thaaso Teh)</h1>
        <p class="text-gray-600 text-base md:text-lg max-w-2xl mx-auto leading-relaxed font-serif">
            "सामाजिक एकता र पुर्ख्यौली विरासतको प्रतीक"
        </p>
        <div class="w-12 h-[1px] bg-[#C5A880] mx-auto mt-8"></div>
    </section>

    <!-- Section 1: Core Significance & Context -->
    <section class="max-w-5xl mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-start">
            <div class="md:col-span-4 sticky top-6">
                <h2 class="text-[#234433] text-2xl tracking-tight">Veneration of Lineage</h2>
                <span class="text-xs uppercase text-[#C5A880] mt-2 block font-semibold">Ancestral Legacy &amp; Unity</span>
            </div>
            <div class="md:col-span-8 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                <p>
                    In the spiritual calendar of the Tamu community, <strong class="text-[#234433] font-semibold">Thaaso Teh (थासो त्हें)</strong> stands out as a profound symbol of social unity and ancestral heritage. This distinct celebration is dedicated entirely to honoring the history, trials, and triumphs of the clan's lineage, binding the living generation with the spirits of their predecessors.
                </p>
                <p>
                    Through sacred chanting, ritual incantations (<span class=" font-medium">मन्त्रोचारण</span>), and vibrant community gatherings, the deep-rooted identity of the clan is preserved and re-consecrated, ensuring that the legacy of the ancestors remains alive in the hearts of the younger generations.
                </p>
            </div>
        </div>
    </section>

    <!-- Section 2: Two-Column Layout — Sacred Timings -->
    <section class="bg-white py-20 border-y border-gray-100">
        <div class="max-w-5xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
                
                <!-- Left Column: Observance Calendar Card -->
                <div class="md:col-span-5">
                    <div class="w-full bg-[#F7F5F0] border border-gray-200/60 rounded-sm p-6 space-y-4 shadow-sm font-sans">
                        <span class="text-xs uppercase tracking-widest font-bold text-[#C5A880] block">Occasions</span>
                        <span class="text-[#234433] text-xl font-serif">Annual Cycle (वर्षको तीन पटक)</span>
                        
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
                                    <strong class="text-gray-900 text-sm block">Kartik</strong>
                                    <span class="text-gray-500 text-xs">कात्तिक महिनाको पहिलो मंगलबार (First Tuesday of Kartik)</span>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="text-[#C5A880] text-xs mt-1">◆</span>
                                <div>
                                    <strong class="text-gray-900 text-sm block">Poush 15</strong>
                                    <span class="text-gray-500 text-xs">पुस १५ गते ल्होसारको दिन (Tamu Lhosar Festival Day)</span>
                                </div>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-gray-200 text-[10px] tracking-wide text-gray-400 uppercase">
                            Three Sacred Assemblies Per Year
                        </div>
                    </div>
                </div>

                <!-- Right Column: Ritual Execution -->
                <div class="md:col-span-7 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                    <span class="text-[#C5A880] text-xs uppercase tracking-widest font-bold block">Ritual Practices</span>
                    <span class="text-[#234433] text-2xl mb-4">The Communal Gathering</span>
                    
                    <p>
                        <strong class="text-gray-900 font-medium">Thaaso Teh</strong> is traditionally observed exactly <strong class="text-gray-900 font-medium">three times a year</strong>. The choice of these specific days carries deep seasonal and astrological meaning, aligning perfectly with periods of transitions, new harvests, and cosmic shifts in the Tamu calendar.
                    </p>
                    <p>
                        On these designated days, families and larger clan groups gather at their respective ancestral sites or community spaces to carry out highly structured rituals with special methods (<span class=" font-medium">विशेष विधि</span>). Far more than just a formal ceremony, it functions as a vital pillar for community solidarity—bringing relatives together to share food, reinforce kinship ties, and pass down the rich oral histories of their lineage.
                    </p>
                </div>

            </div>
        </div>
    </section>

</main>
@endsection
