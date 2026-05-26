@extends('components.layout')

@section('title')
    Demography | Talpari Anadu
@endsection

@section('content')
<!-- Public Demography Section Component -->
<section class="w-full py-12 md:py-16">
    <div class="max-w-5xl mx-auto px-4 md:px-6">
        
        <!-- Header: Executive Overview -->
        <div class="mb-12 max-w-3xl">
            <span class="text-xs font-semibold uppercase tracking-widest text-gray-400 block mb-2">Social Fabric &amp; Scale</span>
            <h1 class="text-3xl md:text-4xl font-serif font-bold tracking-tight mb-4">Demography &amp; Kinship</h1>
            <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                The vibrant community of Taalpaari Anadu is comprised of interconnected indigenous households standing as a living testament to heritage on the banks of Fewa Lake. Our population structure forms the bedrock of our shared civic responsibilities, local leadership, and sacred lineage rituals.
            </p>
        </div>

        <!-- Public Aggregated Vital Statistics -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 py-8 border-y border-gray-200 mb-12">
            <div>
                <span class="text-[10px] uppercase font-mono tracking-wider text-gray-400 block">Community Scale</span>
                <span class="text-2xl font-serif font-bold text-gray-900 mt-1 block">60 Active Households</span>
                <span class="text-gray-500 text-xs mt-1 block">Continuous resident families inside the territory.</span>
            </div>
            <div>
                <span class="text-[10px] uppercase font-mono tracking-wider text-gray-400 block">Kinship System</span>
                <span class="text-2xl font-serif font-bold text-gray-900 mt-1 block">12 Traditional Clans</span>
                <span class="text-gray-500 text-xs mt-1 block">Patrilineal lineages mapped through oral archives.</span>
            </div>
            <div>
                <span class="text-[10px] uppercase font-mono tracking-wider text-gray-400 block">Civic Alignment</span>
                <span class="text-2xl font-serif font-bold text-gray-900 mt-1 block">100% Engagement</span>
                <span class="text-gray-500 text-xs mt-1 block">Active ties with the Samaj &amp; Tol Bikas Sanstha.</span>
            </div>
        </div>

        <!-- The Lineage Matrix Placeholder -->
        <div class="mb-16">
            <h3 class="font-serif font-bold text-lg text-gray-900 mb-3">Patrilineal Ancestry Maps</h3>
            <p class="text-gray-600 text-sm leading-relaxed max-w-3xl">
                Our ancestral trees chart the historical lineage transitions across known generations as preserved by our clan leaders. These structural maps help our modern generation trace their specific branches directly back to the founding stewardship of this land.
            </p>
            <!-- Link or embed for your high-level public clan chart PDFs/Images goes here -->
        </div>
    </div>
</section>
@endsection
