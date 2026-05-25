@extends('components.layout')

@section('title')
    Initiatives | Talpari Anadu
@endsection

@section('content')
<!-- Community Initiatives Section -->
<section class="w-full py-12 md:py-16">
    <div class="max-w-5xl mx-auto px-4 md:px-6">
        
        <!-- Header Section -->
        <div class="mb-12 md:mb-16 max-w-3xl">
            <span class="text-xs font-semibold uppercase tracking-widest text-gray-400 block mb-2">Civic Action &amp; Stewardship</span>
            <h1 class="text-3xl md:text-4xl font-serif font-bold tracking-tight mb-4">Community Initiatives</h1>
            <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                The ecosystem of Taalpaari Anadu is preserved through collective action. Our community routinely mobilizes to combat urban pollution, manage seasonal overgrowth, and keep our land and water pristine.
            </p>
        </div>

        <!-- Initiatives Stack -->
        <div class="space-y-16">
            
            <!-- Initiative 1: Fewa Lake Cleanup -->
            <div class="border-t border-gray-200 pt-8 grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
                <div>
                    <span class="text-xs font-mono text-gray-400 block mb-1">PROJECT 01 / ECO-PRESERVATION</span>
                    <h3 class="font-serif font-bold text-xl text-gray-900">Fewa Lake Cleanup</h3>
                </div>
                <div class="md:col-span-2 space-y-4">
                    <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                        Every year during the monsoon, heavy flooding in the eastern wetland area pushes massive fields of invasive water hyacinth into the lake, collecting densely along our southern and western shores. Concurrently, poor urban drainage causes Pokhara's city waste to collect in the Phirke and Bulaudi stream corridors, which empty directly into the lake. High winds and wave action disperse this trash across the open water, stranding plastic bottles and snack packets left behind by irresponsible tourists on our shores.
                    </p>
                    <p class="text-gray-600 text-sm md:text-base leading-relaxed font-medium">
                        Our community manually cleans and gathers this debris periodically along the southern shores, stepping up as the frontline protectors of the lake's ecological health.
                    </p>
                </div>
            </div>

            <!-- Initiative 2: Baato Sarsafai Abhiyaan -->
            <div class="border-t border-gray-200 pt-8 grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
                <div>
                    <span class="text-xs font-mono text-gray-400 block mb-1">PROJECT 02 / INFRASTRUCTURE</span>
                    <h3 class="font-serif font-bold text-xl text-gray-900">Baato Sarsafai Abhiyaan</h3>
                </div>
                <div class="md:col-span-2 space-y-4">
                    <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                        During the post-monsoon season, just before the arrival of the Dashain festival, rapid vegetation growth causes thick weeds and tall grass to erupt across our walking paths, obstructing passage for residents and hikers alike. To counter this, every single family in the village joins together to clear out the overgrowth and restore safety to the trails.
                    </p>
                    
                    <!-- Sub-trail list -->
                    <div class="pt-2">
                        <h4 class="text-xs uppercase font-mono tracking-wider text-gray-400 mb-2">Core Networks Maintained:</h4>
                        <ul class="space-y-2 text-sm text-gray-700">
                            <li class="flex items-start gap-2">
                                <span class="text-gray-400 font-mono text-xs pt-0.5">A.</span>
                                <span><strong>Shanti Stupa Hiking Trail</strong> — Preserving the pathways leading to the peace pagoda.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-gray-400 font-mono text-xs pt-0.5">B.</span>
                                <span><strong>Raniban Eco Foot Trail</strong> — Keeping our essential 2-hour walking link to Damside fully clear.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-gray-400 font-mono text-xs pt-0.5">C.</span>
                                <span><strong>Community &amp; Branch Trails</strong> — Clearing the inner village grid extending from Deurali Khola to Andheri Khola.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
@endsection
