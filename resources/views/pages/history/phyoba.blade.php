@extends('components.layout')

@section('title')
    Phewa Lake | Talpari Anadu
@endsection

@section('content')
<main id="fewa-lake-content" class="w-full">

    <section class="max-w-4xl mx-auto px-6 pt-20 pb-12 text-center">
        <h1 class="text-[#234433] text-3xl md:text-5xl tracking-tight mb-6">The Phyoba Lake</h1>
        <p class="text-gray-600 text-base md:text-lg max-w-2xl mx-auto leading-relaxed">
            The geological, spiritual, and cultural heartbeat of our community, spanning back nearly a thousand years.
        </p>

        <div class="w-full mb-8">
            <img src="{{ asset('images/phewa-lake-panorama.jpg') }}" alt="Fyoba Taal" class="w-full rounded-sm">
            <p class="text-xs text-gray-500 text-center mt-2">Photo: Dipendra Gurung, 2023</p>
        </div>

        <div class="w-12 h-[1px] bg-[#C5A880] mx-auto mt-8"></div>
    </section>

    <section class="max-w-4xl mx-auto px-6 py-16 text-center">
        <div class="text-gray-600 space-y-4">
            <h2 class="text-[#234433] text-2xl md:text-3xl leading-tight">Born from the Peaks</h2>
            <p class="text-sm md:text-base leading-relaxed max-w-2xl mx-auto">
                Sitting gracefully at an altitude of 742 meters and covering an area of approximately 5.7 square kilometers, Fewa Lake is a semi-natural, freshwater marvel. 
            </p>
            <p class="text-sm md:text-base leading-relaxed max-w-2xl mx-auto">
                Its history dates back to around <strong class="text-gray-900 font-semibold">1190 AD</strong>, when a cataclysmic, massive rockslide from <strong class="text-gray-900 font-medium">Annapurna IV</strong> dammed the Seti River. The resulting torrents filled the basin with vast debris, shaping the broad alluvial terrace that Pokhara rests on today and pooling the pristine waters beneath Anadu's hills.
            </p>
        </div>
    </section>

    <section class="bg-white py-20 border-y border-gray-100">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-[#234433] text-3xl mb-6">"Fyoba" — The Act of Revering Nature</h2>

            <div class="w-full mb-8">
                <img src="{{ asset('images/phyoba-lake.jpg') }}" alt="Fyoba Taal" class="w-full rounded-sm">
                <p class="text-xs text-gray-500 text-center mt-2">Photo: AI Image</p>
            </div>
            
            <div class="text-gray-600 text-sm md:text-base space-y-6 leading-relaxed max-w-2xl mx-auto">
                <p>
                    Long before it was mapped on global tourist routes, the lake held profound sacred meaning for the indigenous Gurung people, who practiced Bonism—a deep form of nature worship. To our ancestors, the surrounding jungles, untamed rivers, towering peaks, and open waters were living deities.
                </p>
                <p>
                    When approaching the water, villagers would traditionally bow down in deep reverence—a sacred gesture known natively as <strong class="text-gray-900 font-medium">Fyoba</strong>. It was from this spiritual devotion that the water body earned its true name: <strong class="text-[#234433] font-semibold">Fyoba Taal</strong>. Alternately, across the eastern shore, the residents of Baidam (modern-day Lakeside) historically referred to it as <span class="">Baidam Taal</span>.
                </p>
            </div>
        </div>
    </section>

    <section class="max-w-5xl mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-start">
            <div class="md:col-span-4 sticky top-6">
                <h2 class="text-[#234433] text-2xl leading-tight">The Fewaali Pahchyu</h2>
                <div class="md:col-span-5 order-1 md:order-2">
                    <div class="aspect-[4/3] w-full rounded-sm overflow-hidden">
                        <img src="{{ asset('images/pahchyu-pariwar.jpg') }}" alt="The Pahchyu Clan." class="w-full h-full object-cover">
                    </div>
                    <p class="text-xs text-gray-500 text-center mt-2">Photo: Dipendra Gurung</p>
                </div>
            </div>
            <div class="md:col-span-8 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                <p>
                    The lake didn't just sustain our physical needs; it deeply influenced our kinship, identity, and ritual lineages. Over generations of settlement along the shorelines, the local Pahchyu clan formed a distinct ancestral sub-lineage known explicitly as the <strong class="text-[#234433] font-semibold">Fewaali Pahchyu</strong>.
                </p>
                <p>
                    Named directly after their historical proximity to the waters, the descendants of this specialized shamanic subclan eventually migrated over time, spreading outward from the basin. Today, branches of the *Fewaali Pahchyu* lineage can be found rooted across various mid-hill villages throughout the wider Kaski district, carrying the legacy of the lake wherever they settle.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-[#F7F5F0] py-20 border-t border-gray-200/50">
        <div class="max-w-5xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
                
                <div class="md:col-span-5">
                    <div class="md:col-span-5 order-1 md:order-2">
                        <div class="aspect-[4/3] w-full rounded-sm overflow-hidden">
                            <img src="{{ asset('images/taal-barahi-temple.jpg') }}" alt="Taal Barahi Temple." class="w-full h-full object-cover">
                        </div>
                        <p class="text-xs text-gray-500 text-center mt-2">Photo: Internet Archive</p>
                    </div>
                </div>

                <div class="md:col-span-7 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                    <h2 class="text-[#234433] text-2xl md:text-3xl">The Island of Tal Barahi</h2>
                    <p>
                        Floating prominently amidst the open currents is the famous island that holds the <strong class="text-gray-900 font-medium">Taal Barahi Mandir</strong>, a sacred space deeply incorporated and protected by the Brahmin community. 
                    </p>
                    <p>
                        The island is enveloped in a legendary, timeless mythological narrative. Local folklore details how a wandering deity, disguised as a humble beggar, tested the virtue of the ancient valley's inhabitants. Only an old, pious couple shared their modest food. Warning them of impending judgment, the deity told them to flee to high ground. Shortly after, a torrential deluge flooded the entire valley floor, submerging the uncharitable village below and leaving only the couple’s elevated hut standing—forming the sacred island we see today.
                    </p>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
