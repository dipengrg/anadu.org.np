@extends('components.layout')

@section('title')
    Anadu School | Talpari Anadu
@endsection

@section('content')
<main id="anadu-school-content" class="w-full">

    <!-- Page Header / Intro Banner -->
    <section class="max-w-4xl mx-auto px-6 pt-20 pb-12 text-center">
        <h1 class="text-[#234433] text-3xl md:text-5xl emphasis tracking-tight mb-6">Anadu Primary School</h1>
        <p class="text-gray-600 text-base md:text-lg max-w-2xl mx-auto leading-relaxed">
            The cradle of modern literacy in our community, founded upon selfless leadership, historical advocacy, and ancestral land.
        </p>
        <div class="w-12 h-[1px] bg-[#C5A880] mx-auto mt-8"></div>
    </section>

    <!-- Section 1: The Educational Landscape of Old Pokhara -->
    <section class="max-w-5xl mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-start">
            <div class="md:col-span-4 sticky top-6">
                <h2 class="text-[#234433] text-2xl emphasis tracking-tight">The Era Before Modern Schooling</h2>
                <span class="text-xs uppercase text-[#C5A880] mt-2 block font-semibold">Mid-20th Century Context</span>
            </div>
            <div class="md:col-span-8 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                <p>
                    In the early 20th century, the scenic valley of Pokhara possessed an incredibly restrictive educational landscape. Beyond standard domestic learning, the region relied solely on a single traditional language pathshala. 
                </p>
                <p>
                    Education during this time was limited strictly to select families who would carry wrapped bundles of Vedic texts, the <span class="italic font-medium">Chandi</span>, and <span class="italic font-medium">Rudri</span> tied around their waists to study traditional rituals (<span class="font-medium">Karmakanda</span>). For the wider community, including the indigenous families near the lakeshore, access to functional, modern global literacy and English education was virtually non-existent.
                </p>
            </div>
        </div>
    </section>

    <!-- Section 2: Two-Column Image & Description Layout -->
    <section class="bg-white py-20 border-y border-gray-100">
        <div class="max-w-5xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
                
                <!-- Left Column: Historical Image of the School -->
                <div class="md:col-span-5">
                    <div class="w-full">
                        <div class="aspect-[4/3] w-full bg-gray-100 rounded-sm overflow-hidden shadow-sm">
                            <img 
                                src="{{ asset('images/anadu-school-historical.jpg') }}" 
                                alt="Historical image of Sri Anadu Primary School grounds" 
                                class="w-full h-full object-cover"
                            />
                        </div>
                        <div class="mt-3 text-center">
                            <p class="text-[10px] tracking-wider text-gray-400 uppercase font-sans">
                                Sri Anadu Primary School — Grounded in History
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Current Description with Post-War Reconstruction Fund Details -->
                <div class="md:col-span-7 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                    <span class="text-[#C5A880] text-xs uppercase tracking-widest font-bold block">Historical Records</span>
                    <h3 class="text-[#234433] text-2xl emphasis mb-4">The Vision of Min Bahadur Gurung</h3>
                    
                    <p>
                        The introduction of institutional schooling to our village is heavily credited to the extensive social reforms spearheaded by Former Assistant Defense Minister Min Bahadur Gurung. In his published memoirs, he chronicles the exhausting journey to unlock literacy for the region. 
                    </p>
                    <p>
                        A major catalyst for this movement was the strategic allocation of the Post-War Reconstruction Fund. Amassed by the British Government following World War II for the welfare of retired Nepalese Gurkha soldiers and their families, a plan was devised alongside the Indian Embassy and the Government of Nepal to determine its optimal use. Minister Min Bahadur Gurung proposed establishing 100 primary schools across the nation. 
                    </p>
                    <p>
                        Following his successful lobbying efforts for regional high schools in 2006 BS, his vision turned directly back to his home village across the water. In the year 2007 BS (1950/51 AD), he formally established Sri Anadu Primary School, building the institution directly upon a donated portion of his own ancestral private property.
                    </p>

                    <!-- Source Citation Footer -->
                    <div class="mt-6 pt-4 border-t border-gray-100 text-[11px] text-gray-400">
                        <p>Source: <span class="italic font-medium text-gray-500">"मेरो जीवनमा बुद्धधर्म" </span>, Authored by Min Bahadur Gurung, Pumdi Bhumdi - 1, Taalpari, Anadu</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>
@endsection
