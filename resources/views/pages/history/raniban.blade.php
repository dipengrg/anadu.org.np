@extends('components.layout')

@section('title')
    Raniban | Talpari Anadu
@endsection

@section('content')
@extends('components.layout')

@section('title')
    Raniban (The Queen Forest) | Talpari Anadu
@endsection

@section('content')
<main id="raniban-heritage-content" class="w-full">
    
    <!-- Section 1: Page Header & Philosophical Anchor -->
    <section class="max-w-5xl mx-auto px-6 py-16">
        <div class="mb-12 max-w-3xl">
            <span class="text-xs font-semibold uppercase tracking-widest text-[#C5A880] block mb-2">Ancestral Woodlands</span>
            <h1 class="text-3xl md:text-4xl font-serif font-bold text-[#234433] tracking-tight mb-4">Raniban: The Queen Forest</h1>
            <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                Woven deeply into the identity of Taalpaari Anadu, Raniban is far more than a ecological reserve. It is our ancestral homeland—a sacred canopy preserved through generations of indigenous custody before modern state frameworks were established.
            </p>
        </div>
        <hr class="border-gray-100">
    </section>

    <!-- Section 2: Historical Narrative & Customary Use -->
    <section class="max-w-5xl mx-auto px-6 py-8">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-start">
            
            <div class="md:col-span-4 sticky top-6">
                <h2 class="text-[#234433] text-2xl leading-tight">Indigenous Stewardship &amp; Sustenance</h2>
                <span class="text-xs uppercase text-[#C5A880] mt-2 block font-semibold">Generational Roots</span>
            </div>

            <div class="md:col-span-8 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                <p>
                    For centuries, the dense forest ridges of Raniban formed a vital ecological shield for our lakeside settlement. Our ancestors interacted with this forest through a complex system of customary laws and sustainable management, ensuring that the extraction of resources never compromised the integrity of the ecosystem.
                </p>
                <p>
                    The forest canopy regulated the fresh water streams feeding into the southern shores of the lake, provided shelter from harsh seasonal elements, and served as a spiritual sanctuary where traditional practices were quietly maintained. Every major clan lineage within Anadu holds historical memory tied directly to specific ridges and pathways within this forest.
                </p>
            </div>

        </div>
    </section>

    <!-- Section 3: Visual Heritage Archive Split -->
    <section class="bg-white py-16 border-y border-gray-100 my-12">
        <div class="max-w-5xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
                
                <div class="md:col-span-7 order-2 md:order-1 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                    <span class="text-[#C5A880] text-xs uppercase tracking-widest font-bold block mb-1">The Era of Transition</span>
                    <h2 class="text-[#234433] text-2xl md:text-3xl mb-4">State Acquisition &amp; Sovereign Memory</h2>
                    <p>
                        In the wake of shifting national administrative policies and land modernization efforts, the territory of the Queen Forest was formally acquired by state entities. This transition structurally altered the legal boundaries of our ancestral lands, embedding the forest into a wider public reserve network.
                    </p>
                    <p>
                        Despite these institutional shifts, the memory of our customary tenure remains completely unbroken. Our community views our ongoing proximity to Raniban not as that of casual neighbors, but as the enduring, native guardians whose historical custody predates modern titles.
                    </p>
                </div>

                <div class="md:col-span-5 order-1 md:order-2">
                    <div class="aspect-[4/3] w-full rounded-sm overflow-hidden bg-gray-50">
                        <!-- Add a beautiful historical image of Raniban / forest canopy here -->
                        <img src="{{ asset('images/raniban-canopy.jpg') }}" alt="The pristine canopy of Raniban forest protecting the southern banks." class="w-full h-full object-cover">
                    </div>
                    <p class="text-xs text-gray-500 text-center mt-2">The pristine canopy of Raniban protecting the southern banks.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Section 4: Modern Custody & Multi-page Integration Bridges -->
    <section class="max-w-5xl mx-auto px-6 py-12 mb-16">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-start">
            
            <div class="md:col-span-4">
                <h3 class="text-[#234433] text-xl font-serif font-bold leading-tight">An Unbroken Responsibility</h3>
            </div>

            <div class="md:col-span-8 space-y-8">
                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                    Today, the 60 households of Taalpaari Anadu continue to express their historical custody through active, modern action. We refuse to let our ancestral woods suffer from environmental degradation or neglect, ensuring that the spirit of the Queen Forest remains pristine for generations to come.
                </p>

                <!-- Dual Navigation Bridges to initiatives and tourism -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-6 border-t border-gray-100 font-sans">
                    <div>
                        <h4 class="text-xs uppercase font-mono tracking-wider text-gray-400 mb-2">Our Modern Action:</h4>
                        <a href="/community/initiatives" class="group block">
                            <span class="text-sm font-serif font-bold text-gray-950 group-hover:text-[#234433] block">Baato Sarsafai Abhiyaan</span>
                            <span class="text-xs text-gray-500 underline hover:text-gray-900 block mt-0.5">See how our families physically clear and clean this forest infrastructure today →</span>
                        </a>
                    </div>
                    <div>
                        <h4 class="text-xs uppercase font-mono tracking-wider text-gray-400 mb-2">Responsible Exploration:</h4>
                        <a href="/eco-tourism/raniban-eco-trail" class="group block">
                            <span class="text-sm font-serif font-bold text-gray-950 group-hover:text-[#234433] block">Raniban Anadu Eco-Trail</span>
                            <span class="text-xs text-gray-500 underline hover:text-gray-900 block mt-0.5">Access hiking routes, safety profiles, and our strict environmental Hiker Code →</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>
@endsection
@endsection
