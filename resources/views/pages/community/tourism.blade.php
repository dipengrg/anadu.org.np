@extends('components.layout')

@section('title')
    Demography | Talpari Anadu
@endsection

@section('content')
<!-- Tourism / Hiking Trail Section Component -->
<section class="w-full py-12 md:py-16">
    <div class="max-w-5xl mx-auto px-4 md:px-6">
        
        <!-- Trail Navigation / Sub-Header Link -->
        <div class="mb-6">
            <a href="../initiatives.html" class="text-xs font-mono text-gray-400 hover:text-gray-900 transition-colors">
                ← Back to Community Life
            </a>
        </div>

        <!-- Header Section -->
        <div class="mb-12 max-w-3xl">
            <span class="text-xs font-semibold uppercase tracking-widest text-gray-400 block mb-2">Community Trails &amp; Ecology</span>
            <h1 class="text-3xl md:text-4xl font-serif font-bold tracking-tight mb-4">Raniban Anadu Eco-Trail</h1>
            <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                A serene walking route winding through the lush canopy of Raniban forest, serving as a vital pedestrian lifeline connecting Taalpaari Anadu directly to Pokhara's Damside.
            </p>
        </div>

        <!-- Quick Trail Statistics Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 py-6 border-y border-gray-200 mb-12 font-sans">
            <div>
                <span class="text-[10px] uppercase font-mono tracking-wider text-gray-400 block">Average Duration</span>
                <span class="text-sm font-semibold text-gray-900 mt-0.5 block">2 Hours (One Way)</span>
            </div>
            <div>
                <span class="text-[10px] uppercase font-mono tracking-wider text-gray-400 block">Difficulty Profile</span>
                <span class="text-sm font-semibold text-gray-900 mt-0.5 block">Moderate / Unpaved</span>
            </div>
            <div>
                <span class="text-[10px] uppercase font-mono tracking-wider text-gray-400 block">Primary Trailhead</span>
                <span class="text-sm font-semibold text-gray-900 mt-0.5 block">Damside Suspension Bridge</span>
            </div>
            <div>
                <span class="text-[10px] uppercase font-mono tracking-wider text-gray-400 block">Maintained By</span>
                <span class="text-sm font-semibold text-gray-900 mt-0.5 block">Anadu Community Families</span>
            </div>
        </div>

        <!-- Core Detailed Layout: Narrative & Eco Guidelines -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 items-start">
            
            <!-- Left Narrative (Takes up 2/3 Space) -->
            <div class="md:col-span-2 space-y-6 text-sm md:text-base text-gray-600 leading-relaxed">
                <p>
                    The Raniban Eco-Trail is much more than a recreational hiking path—it is an intrinsic asset to our community infrastructure. When heavy winds or seasonal monsoon waves disrupt boat transport across Fewa Lake, this pathway stands as our primary overland alternative to access urban Pokhara.
                </p>
                <h3 class="font-serif font-bold text-lg text-gray-900 pt-2">Community Stewardship</h3>
                <p>
                    Every year during our post-monsoon <span class="italic font-medium">Baato Sarsafai Abhiyaan</span>, our families unite to clear the rapid weed overgrowth and seasonal brush that naturally interrupts the path. This ensuring clear visibility and safe passage for both local commuters and visiting nature travelers.
                </p>
            </div>

            <!-- Right Sidebar: Eco Guidelines (Takes up 1/3 Space) -->
            <div class="border border-gray-200 p-6 rounded-sm space-y-4">
                <h4 class="font-serif font-bold text-sm text-gray-900 uppercase tracking-wide">The Hiker's Code</h4>
                <p class="text-gray-600 text-xs leading-relaxed">
                    As indigenous guardians of this forest terrain, we ask all travelers to traverse our trails with deep environmental respect.
                </p>
                <ul class="space-y-3 text-xs text-gray-700 font-sans border-t border-gray-100 pt-3">
                    <li class="flex items-start gap-2">
                        <span class="text-gray-400 font-mono">•</span>
                        <span><strong>Pack it Out:</strong> No municipal trash services operate on these ridges. Please carry all plastic wrappers and bottles back to the city grid.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-gray-400 font-mono">•</span>
                        <span><strong>Stay on Path:</strong> Venturing off-trail accelerates soil erosion and disturbs local wildlife nesting patterns in the Raniban reserve.</span>
                    </li>
                </ul>
            </div>

        </div>

    </div>
</section>
@endsection
