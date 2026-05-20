@extends('components.layout')

@section('title')
    Settlement | Talpari Anadu
@endsection

@section('content')
<main id="settlement-content" class="w-full">
    <section class="max-w-5xl mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-start">
            <div class="md:col-span-4 sticky top-6">
                <h2 class="text-[#234433] text-2xl emphasis leading-tight">From Kohlasothar to the Western Hills</h2>
                <span class="text-xs font-mono uppercase text-[#C5A880] mt-2 block font-semibold">~500 CE - 14th Century</span>
            </div>
            <div class="md:col-span-8 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                <p>
                    According to the rich tapestry of <strong class="text-gray-900 font-medium">Pye Taa</strong> (the oral tradition of the Gurung people), our historical roots in Nepal began at <strong class="text-gray-900 font-semibold">Kohlasothar</strong>. Regarded as the very first Gurung settlement, a landmark study conducted by the <strong class="text-gray-900 font-medium">University of Cambridge in 2000</strong> estimates its origins to lie between ~500 and 1000 CE. 
                </p>
                <p>
                    For centuries, this high-altitude cradle nurtured our culture. However, the shifting tides of history—marked by the rise of the Khas and Gorkha kingdoms—eventually led to the abandonment of Kohlasothar around the 14th century. This triggered a widespread hill dispersion, prompting our ancestors to migrate southward into the mid-hills of western Nepal, laying down new roots across Lamjung, Kaski, and Gorkha.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-white py-20 border-y border-gray-100">
        <div class="max-w-5xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
                
                <div class="md:col-span-7 order-2 md:order-1 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                    <h2 class="text-[#234433] text-2xl md:text-3xl emphasis mb-4">The Primordial Village by the Water</h2>
                    <p>
                        As the migration trickled downward, an ancient civilization gradually formed near the lush, southern shores of what was originally known as <strong class="text-gray-900 font-medium">Phyoba Lake</strong> (now Fewa Lake). 
                    </p>
                    <p>
                        Living in complete harmony with the landscape, this indigenous Gurung tribe became deeply intertwined with the waters. The lake and its surrounding forests formed the entire lifeblood of the community—sustaining families through a traditional way of life rooted heavily in fishing, fertile cultivation, and livestock herding.
                    </p>
                </div>

                <div class="md:col-span-5 order-1 md:order-2">
                    <div class="aspect-[4/3] w-full rounded-sm overflow-hidden">
                        <img src="{{ asset('images/gurung-lady-rowing-tuni.jpg') }}" alt="A civilization built upon fishing, herding, and cultivation on the southern shores." class="w-full h-full object-cover">
                    </div>
                    <p class="text-xs text-gray-500 text-center mt-2">Photo credit: Stu Ullmann (1964 AD)</p>
                </div>

            </div>
        </div>
    </section>

    <section class="max-w-4xl mx-auto px-6 py-20 text-center">
        <span class="text-[#C5A880] text-xs uppercase tracking-widest font-bold block mb-4">Evolution of Name</span>
        
        <h2 class="text-[#234433] text-3xl emphasis mb-6">"Anadi" to "Anadu"</h2>
        
        <div class="max-w-md mx-auto mb-8">
            <img src="{{ asset('images/anadu-village.jpg') }}" alt="Anadu Village" class="w-full rounded-sm">
            <p class="text-xs text-gray-500 text-center mt-2">Photo credit: Maitighar (1966 AD), the 3rd Nepali Film</p>
        </div>
        
        <div class="max-w-2xl mx-auto text-gray-600 text-sm md:text-base space-y-6 leading-relaxed">
            <p>
                Over time, the settlement encountered shifting linguistic influences. In the Khas language, the village came to be known as <span class="text-[#234433] font-semibold italic">Anadi</span>—a deeply philosophical term translating to <strong class="text-gray-900 font-medium">Beginningless, Eternal, Primordial, and Ageless</strong>. 
            </p>
            <p class="text-gray-500 text-sm">
                As administrative mappings modernized across the decades, this primordial name adapted phonetically into official records. It was formally recognized as <strong class="text-gray-800 font-medium">Anadu</strong>, categorized initially under the historic Lukumswara Village Development Committee (VDC), and later nested within the Pumdi Bhumdi VDC, before integrating into today's Pokhara-22.
            </p>
        </div>
    </section>

</main>
@endsection
