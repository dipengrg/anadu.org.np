@extends('components.layout')

@section('title')
    Institutions | Talpari Anadu
@endsection

@section('content')
<!-- Local Institutions Section -->
<section class="w-full py-12 md:py-16">
    <div class="max-w-5xl mx-auto px-4 md:px-6">
        
        <!-- Header Section -->
        <div class="mb-12 md:mb-16 max-w-3xl">
            <span class="text-xs font-semibold uppercase tracking-widest text-gray-400 block mb-2">Self-Governance &amp; Solidarity</span>
            <h1 class="text-3xl md:text-4xl emphasis tracking-tight mb-4">Community Institutions</h1>
            <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                The collective life of Taalpaari Anadu is structured and protected by three grassroots institutions. These organizations drive our development, defend our cultural heritage, and strengthen our social fabric.
            </p>
        </div>

        <!-- Vertical Institutional Stack -->
        <div class="space-y-12">
            
            <!-- Institution 1 -->
            <div class="border-t border-gray-200 pt-6 grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-8">
                <div>
                    <span class="text-xs text-gray-400 block mb-1">01 / CIVIC &amp; DEVELOPMENT</span>
                    <h3 class="emphasis text-lg text-gray-900">Anadu Tol Bikash Sanstha</h3>
                </div>
                <div class="md:col-span-2">
                    <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                        Serving as our primary administrative link, this committee manages all local government-related activities, community tracking, and structural monitoring. It represents the collective civic voice of our 60 households when interfacing with municipal bodies and planning local infrastructure goals.
                    </p>
                </div>
            </div>

            <!-- Institution 2 -->
            <div class="border-t border-gray-200 pt-6 grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-8">
                <div>
                    <span class="text-xs text-gray-400 block mb-1">02 / HERITAGE &amp; LINEAGE</span>
                    <h3 class="emphasis text-lg text-gray-900">Taalpaari Anadu Gurung Samaaj</h3>
                </div>
                <div class="md:col-span-2">
                    <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                        The cultural anchor of the village, dedicated entirely to the preservation, documentation, and continuity of indigenous Tamu customs. The Samaj oversees all major cultural activities, coordinates community gatherings, and guides our sacred lineage rituals and rites of passage.
                    </p>
                </div>
            </div>

            <!-- Institution 3 -->
            <div class="border-t border-gray-200 pt-6 grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-8">
                <div>
                    <span class="text-xs text-gray-400 block mb-1">03 / SOCIAL WELFARE</span>
                    <h3 class="emphasis text-lg text-gray-900">Anadu Aama Samuha</h3>
                </div>
                <div class="md:col-span-2">
                    <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                        The ultimate pillar of grassroots action, this vital Mothers' Group focuses directly on women's empowerment, social welfare, and urgent community affairs. They are the driving force behind our neighborhood solidarity network, managing local disputes, household support systems, and community health.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>
@endsection
