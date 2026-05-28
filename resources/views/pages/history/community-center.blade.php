@extends('components.layout')

@section('title')
    Community Center | Talpari Anadu
@endsection

@section('content')
    <!-- Main Content Area: Community Center Page -->
<main id="community-center-content" class="w-full">

    <!-- Page Header / Intro Banner -->
    <section class="max-w-4xl mx-auto px-6 pt-20 pb-12 text-center">
        <span class="text-[#C5A880] text-xs uppercase tracking-widest font-bold block mb-3">Community Hub</span>
        <h1 class="text-[#234433] text-3xl md:text-5xl tracking-tight mb-6">Anadu Community Center</h1>
        <p class="text-gray-600 text-base md:text-lg max-w-2xl mx-auto leading-relaxed">
            The beating heart of Sisneri Bagar—a sacred space of gathering, remembrance, and communal unity bridging ancient traditions with modern generations.
        </p>
        <div class="w-12 h-[1px] bg-[#C5A880] mx-auto mt-8"></div>
    </section>

    <!-- Section 1: Historical Roots — From Aapko Chautara to Sisneri Bagar -->
    <section class="max-w-5xl mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-start">
            <div class="md:col-span-4 sticky top-6">
                <h2 class="text-[#234433] text-2xl tracking-tight">The Legacy of Aapko Chautara</h2>
                <span class="text-xs uppercase text-[#C5A880] mt-2 block font-semibold">Ancient Gathering Grounds</span>
            </div>
            <div class="md:col-span-8 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                <p>
                    Since ancient times, the residents of Anadu have naturally gravitated toward the geographic center of the village at <strong class="text-gray-900 font-medium">Sisneri Bagar</strong> to hold vital community meetings, deliberate on local governance, and celebrate collective milestones. 
                </p>
                <p>
                    For generations, this historic assembly point was affectionately known as <strong class="text-[#234433] font-semibold">Aapko Chautara</strong>, named after a magnificent, sprawling mango tree that stood as a natural canopy over the village square. It was under the shade of this monumental tree that elders passed down oral histories and community consensus was forged. 
                </p>
                <p>
                    Following the natural lifecycle and eventual passing of the historic mango tree, the community faced a sudden void. Recognizing the need to preserve this sacred focal point, a collective movement emerged to replace the natural landmark with a permanent, resilient brick-and-mortar infrastructure.
                </p>
            </div>
        </div>
    </section>

    <!-- Section 2: Two-Column Modern Infrastructure & Sacred Rituals Layout -->
    <section class="bg-white py-20 border-y border-gray-100">
        <div class="max-w-5xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
                
                <!-- Left Column: Hall Statistics & Capability Card -->
                <div class="md:col-span-5 order-last md:order-first">
                    <div class="w-full bg-[#F7F5F0] border border-gray-200/60 rounded-sm p-6 space-y-4 shadow-sm">
                        <span class="text-xs uppercase tracking-widest font-bold text-[#C5A880] block">Facility Dimensions</span>
                        <h4 class="text-[#234433] text-xl font-serif">The Main Assembly Hall</h4>
                        <ul class="text-gray-600 text-xs space-y-2 list-none p-0">
                            <li class="flex items-center gap-2">
                                <span class="text-[#C5A880]">✔</span> <strong>Capacity:</strong> Accommodates nearly 300 guests comfortably.
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-[#C5A880]">✔</span> <strong>Purpose:</strong> Purpose-built for public events, puja, festivals, and meetings.
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-[#C5A880]">✔</span> <strong>Ownership:</strong> 100% public property managed by the community.
                            </li>
                        </ul>
                        <div class="pt-2 border-t border-gray-200 text-[10px] tracking-wide text-gray-400 uppercase">
                            Completed Timeline: 2076 BS
                        </div>
                    </div>
                </div>

                <!-- Right Column: Current Description with Construction Details -->
                <div class="md:col-span-7 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                    <span class="text-[#C5A880] text-xs uppercase tracking-widest font-bold block">Evolution of the Space</span>
                    <h3 class="text-[#234433] text-2xl mb-4">The Pye Karya Pavilion</h3>
                    
                    <p>
                        In <strong class="text-gray-900 font-medium">2075 BS</strong>, under the proactive initiation of the <strong class="text-gray-900 font-medium">Taalpaari Anadu Gurung Samaj</strong>, formal plans were drafted to build a comprehensive community center infrastructure. The primary catalyst for this massive structure was the collective need to gracefully host <span class="italic font-medium">Pye Karya</span>, widely known as <strong class="text-gray-900 font-semibold">Arghau</strong>—the essential, sacred after-death ceremony of the deceased in Gurung culture.
                    </p>
                    <p>
                        Prior to the hall's construction, families were forced to host this deeply elaborate ritual within their private homes. Managing and executing the rigorous <strong class="text-[#234433] font-medium">4-day and 3-night event</strong> was an immense logistical hardship due to space limitations, hosting constraints, and the sheer volume of visiting relatives. 
                    </p>
                    <p>
                        Through a highly organized fundraising campaign combining direct contributions from local residents, stakeholders, active volunteers, and generous well-wishers based in the United Kingdom, the main hall was successfully finalized in <strong class="text-gray-900 font-medium">2076 BS</strong>.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Section 3: The Plah Dhee & Cultural Guardians -->
    <section class="max-w-5xl mx-auto px-6 py-20">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-start">
            <div class="md:col-span-4 sticky top-6">
                <h2 class="text-[#234433] text-2xl tracking-tight">Sacred Architecture</h2>
                <span class="text-xs uppercase text-[#C5A880] mt-2 block font-semibold">The Plah Dhee Construction</span>
            </div>
            <div class="md:col-span-8 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                <p>
                    To ensure the community center fully met the strict traditional requirements of Gurung spiritual practices, an independent sacred space named the <strong class="text-[#234433] font-semibold">Plah Dhee</strong> was integrated into the compound. 
                </p>
                <p>
                    The construction of the <span class="italic font-medium">Plah Dhee</span> was made possible through dedicated financial assistance from distinguished local figures, including retired British Gurkha <strong class="text-gray-900 font-medium">Lt. Bhim Prasad Gurung</strong>, retired Indian Army <strong class="text-gray-900 font-medium">Captain Bishnu Gurung</strong>, alongside <strong class="text-gray-900 font-medium">Batti Prasad Gurung</strong>, <strong class="text-gray-900 font-medium">Jagat Bahadur Gurung</strong>, and <strong class="text-gray-900 font-medium">Sushil Gurung</strong>. 
                </p>
                <p>
                    This specialized structure provides the precise ritual environment needed by the <strong class="text-gray-900 font-medium">Pachyu</strong> and <strong class="text-gray-900 font-medium">Ghyabri</strong> (traditional priests) to conduct delicate ceremonies during <span class="italic font-medium">Pye Karya</span>. Today, the entire community center operates seamlessly as a pristine public property—shielding ancestral customs, hosting lively civic meetings, and standing ready to welcome up to 300 guests under one unified roof.
                </p>
            </div>
        </div>
    </section>

</main>
@endsection
