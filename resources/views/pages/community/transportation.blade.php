@extends('components.layout')

@section('title')
    Transportation | Talpari Anadu
@endsection

@section('content')
<!-- Transportation Section Area -->
<section class="w-full bg-[#FFFDF9] py-16">
    <div class="max-w-5xl mx-auto px-6">
        
        <!-- Header -->
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-[#C5A880] text-xs uppercase tracking-widest block mb-2">Lifeline &amp; Infrastructure</span>
            <h1 class="text-[#234433] text-3xl md:text-4xl  tracking-tight">Modes of Transportation</h1>
            <div class="w-10 h-[1px] bg-[#C5A880] mx-auto mt-4 mb-4"></div>
            <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                Separated from urban Pokhara by the waters of Fewa Lake, the people of Taalpaari Anadu navigate daily life through watercraft, ancient footpaths, and absolute reliance on the lake.
            </p>
        </div>

        <!-- Main Grid Layout -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch">
            
            <!-- Core Route Box -->
            <div class="bg-white border border-gray-100 p-6 rounded-sm shadow-xs flex flex-col justify-between">
                <div>
                    <div class="text-2xl mb-4">🛶</div>
                    <h3 class="text-[#234433]  text-lg mb-2">The Water Highway</h3>
                    <p class="text-gray-600 text-xs md:text-sm leading-relaxed">
                        With no bridge connecting us to the mainland, the lake is our primary route. A boat ride to the city takes <strong>20-30 minutes</strong>. Out of necessity, every family maintains their own private fleet of boats and kayaks.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-gray-50">
                    <span class="text-[10px] uppercase font-bold tracking-wider text-[#C5A880]">Primary Access: 95% of trips</span>
                </div>
            </div>

            <!-- Everyday & Sacred Use Box -->
            <div class="bg-white border border-gray-100 p-6 rounded-sm shadow-xs flex flex-col justify-between">
                <div>
                    <div class="text-2xl mb-4">📦</div>
                    <h3 class="text-[#234433]  text-lg mb-2">Sustenance &amp; Ritual</h3>
                    <p class="text-gray-600 text-xs md:text-sm leading-relaxed">
                        Boats carry our entire lives: children traveling to school, families purchasing rations, medicine, and vegetables. Even for our sacred duties, the <em>Malamis</em> (mourners) use boats as their primary transport.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-gray-50">
                    <span class="text-[10px] uppercase font-bold tracking-wider text-[#C5A880]">Essential For: School, Health, Malamis</span>
                </div>
            </div>

            <!-- Alternative Routes Box -->
            <div class="bg-white border border-gray-100 p-6 rounded-sm shadow-xs flex flex-col justify-between">
                <div>
                    <div class="text-2xl mb-4">🥾</div>
                    <h3 class="text-[#234433]  text-lg mb-2">Land Alternatives</h3>
                    <p class="text-gray-600 text-xs md:text-sm leading-relaxed">
                        A rough motorable track exists, but poor conditions and its massive distance make it rare to use. Alternatively, the beautiful <strong>Raniban Eco-Trail</strong> connects us to Damside via a 2-hour walk.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-gray-50">
                    <span class="text-[10px] uppercase font-bold tracking-wider text-[#C5A880]">Foot Journey: 2 Hours via Raniban</span>
                </div>
            </div>

        </div>

        <!-- Infrastructure Callout Notice / Vulnerability Statement -->
        <div class="mt-12 bg-[#F7F5F0] border border-gray-200/60 p-6 rounded-sm flex flex-col sm:flex-row items-start gap-4">
            <div class="text-xl mt-0.5">⚠️</div>
            <div>
                <h4 class="text-[#234433]  text-sm uppercase tracking-wide">Weather Dependency &amp; Vulnerability</h4>
                <p class="text-gray-600 text-xs md:text-sm mt-1 leading-relaxed">
                    Because we lack a physical bridge, severe weather changes create complete isolation. During periods of heavy monsoon rain or intense winds, the open waters become unsafe, forcing community members to get stuck on either side for hours until nature coordinates a safe passage.
                </p>
            </div>
        </div>

    </div>
</section>
@endsection
