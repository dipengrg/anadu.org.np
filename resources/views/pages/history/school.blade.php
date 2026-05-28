@extends('components.layout')

@section('title')
    Anadu School | Talpari Anadu
@endsection

@section('content')
<main id="anadu-school-content" class="w-full">

    <!-- Page Header / Intro Banner -->
    <section class="max-w-4xl mx-auto px-6 pt-20 pb-12 text-center">
        <h1 class="text-[#234433] text-3xl md:text-5xl tracking-tight mb-6">Anadu Primary School</h1>
        <p class="text-gray-600 text-base md:text-lg max-w-2xl mx-auto leading-relaxed">
            The cradle of modern literacy in our community, founded upon selfless leadership, historical advocacy, and ancestral land.
        </p>
        <div class="w-12 h-[1px] bg-[#C5A880] mx-auto mt-8"></div>
    </section>

    <!-- Section 1: The Educational Landscape of Old Pokhara -->
    <section class="max-w-5xl mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-start">
            <div class="md:col-span-4 sticky top-6">
                <h2 class="text-[#234433] text-2xl tracking-tight">The Era Before Modern Schooling</h2>
                <span class="text-xs uppercase text-[#C5A880] mt-2 block font-semibold">Mid-20th Century Context</span>
            </div>
            <div class="md:col-span-8 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                <p>
                    In the early 20th century, the scenic valley of Pokhara possessed an incredibly restrictive educational landscape. Beyond standard domestic learning, the region relied solely on a single traditional language pathshala. 
                </p>
                <p>
                    Education during this time was limited strictly to select families who would carry wrapped bundles of Vedic texts, the <span class=" font-medium">Chandi</span>, and <span class=" font-medium">Rudri</span> tied around their waists to study traditional rituals (<span class="font-medium">Karmakanda</span>). For the wider community, including the indigenous families near the lakeshore, access to functional, modern global literacy and English education was virtually non-existent.
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
                                src="{{ asset('images/min-bahadur-gurung.jpg') }}" 
                                alt="Min Bahadur Gurung, the visionary founder of Anadu Primary School" 
                                class="w-full h-full object-cover"
                            />
                        </div>
                        <div class="mt-3 text-center">
                            <p class="text-[10px] tracking-wider text-gray-400 uppercase font-sans">
                                Min Bahadur Gurung — The Visionary Founder
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Current Description with Post-War Reconstruction Fund Details -->
                <div class="md:col-span-7 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                    <span class="text-[#C5A880] text-xs uppercase tracking-widest font-bold block">Historical Records</span>
                    <h3 class="text-[#234433] text-2xl mb-4">The Vision of Min Bahadur Gurung</h3>
                    
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
                        <p>Source: <span class=" font-medium text-gray-500">"मेरो जीवनमा बुद्धधर्म"</span>, Authored by Min Bahadur Gurung, Pumdi Bhumdi - 1, Taalpari, Anadu</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Section 3: The Geographic Challenge & Collective Sacrifice -->
    <section class="max-w-5xl mx-auto px-6 py-20">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-start">
            <div class="md:col-span-4 sticky top-6">
                <h2 class="text-[#234433] text-2xl tracking-tight">The Manikharka Beginnings & Sisneri Relocation</h2>
                <span class="text-xs uppercase text-[#C5A880] mt-2 block font-semibold">2007 BS – 2041 BS</span>
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
            <div class="md:col-span-8 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                <p>
                    When the school was first set up in <strong class="text-gray-900 font-medium">2007 BS</strong>, it was perched high upon <strong class="text-gray-900 font-medium">Manikharka Dada</strong>. Being the solitary educational bastion in the area, it initially drew large numbers of students from neighboring Brahmin communities and surrounding villages across the entire Lukumswara Village Development Committee (VDC). Over the decades, as other regional schools slowly emerged across the VDC, outlying students began enrolling closer to home, focusing Anadu Primary School’s demographic strictly on its native children.
                </p>
                <p>
                    However, Anadu’s unique topography posed a severe structural barrier. The village is split across two prominent ridges: the first hill encompasses <span class=" font-medium">Manikharka</span> and <span class=" font-medium">Mulabari</span>, while the opposing hill shelters <span class=" font-medium">Saaudara, Gairi, Andada,</span> and <span class=" font-medium">Ekleswara</span>. For young children trekking from the far settlements of Saaudara, Andada, and Ekleswara, attending school meant navigating punishing distances—daily descending into rugged ravines, crossing the volatile waters of the <strong class="text-gray-900 font-medium">Budhkhola</strong> and <strong class="text-gray-900 font-medium">Aamchyo Khola</strong>, and scaling the steep ascent up Manikharka hill.
                </p>
                <p>
                    Recognizing that this exhausting trek was too hazardous for young children, recently retired British Gurkha veteran <strong class="text-gray-900 font-semibold">Lieutenant Bhim Prasad Gurung</strong> intervened. Believing that the school must sit at the geographic heart of the community, he coordinated a collective effort. Under his coordination and initiative, prominent local land owners—<strong class="text-gray-900 font-medium">Man Bahadur Gurung</strong> and <strong class="text-gray-900 font-medium">Tas Bahadur Gurung</strong>—generously stepped forward to donate their private property located down in the central basin of <strong class="text-[#234433] font-semibold">Sisneri Bagar</strong>.
                </p>
                <p>
                    Mobilized by pure community spirit, the new campus was built entirely through local voluntary labor, with community figures like <strong class="text-gray-900 font-medium">Prem Bahadur Gurung</strong> leading the physical construction. The newly centralized school officially opened its gates to students in the year <strong class="text-gray-900 font-medium">2041 BS (1984/85 AD)</strong>.
                </p>
            </div>
        </div>
    </section>

    <!-- Section 4: Decades of Service & Modern Realities -->
    <section class="bg-[#F7F5F0] py-20 border-t border-gray-200/60">
        <div class="max-w-5xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
                
                <!-- Left: Institutional Pillars / Text Info -->
                <div class="md:col-span-7 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                    <span class="text-[#C5A880] text-xs uppercase tracking-widest font-bold block">Community Guardians & Teachers</span>
                    <h2 class="text-[#234433] text-2xl md:text-3xl">Pillars of the Institution</h2>
                    <p>
                        The lifeblood of the institution has always been its dedicated educators drawn directly from the local soil. Respected community figures like <strong class="text-gray-900 font-medium">Deo Bahadur Gurung</strong> and <strong class="text-gray-900 font-medium">Tek Bahadur Gurung</strong> devoted years of service to shaping young minds within these walls. Notably, <strong class="text-gray-900 font-medium">Jagat Bahadur Pahari</strong>—the former Ward Chairperson of Lakeside (Ward-6)—also served as the school's distinguished Headmaster, guiding its academic foundation.
                    </p>
                    <p>
                        At its peak operational era, this thriving community primary school successfully taught classes up through the <strong class="text-gray-900 font-medium">fifth level</strong>. 
                    </p>
                    <p class="text-xs bg-white p-4 rounded-sm border-l-2 border-[#C5A880] shadow-sm">
                        <strong class="text-gray-900 font-sans not- block mb-1">The Contemporary Era:</strong>
                        In the current age of rapid urbanization, shifting demographic trends, and the widespread rise of private English-medium boarding schools, the institutional footprint of this historic government facility has naturally shrunk. Today, it perseveres by focusing its resources entirely on nurturing the village's youngest generation, handling preschool students only.
                    </p>
                </div>

                <!-- Right: Visual Component Grid Slot -->
                <div class="md:col-span-5">
                    <div class="max-w-md mx-auto mb-8">
                        <img src="{{ asset('images/anadu-school-classroom.jpg') }}" alt="Anadu School Classroom" class="w-full rounded-sm">
                        <p class="text-xs text-gray-500 text-center mt-2">Photo credit: Pep Roig (2007)</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>
@endsection
