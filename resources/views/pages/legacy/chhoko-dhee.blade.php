@extends('components.layout')

@section('title')
    Chhoko Dhee | Talpari Anadu
@endsection

@section('content')
    <!-- Main Content Area: Chhoko Dhee Page -->
<main id="chhoko-dhee-content" class="w-full">
<!-- Page Header / Intro Banner -->
    <section class="max-w-4xl mx-auto px-6 pt-20 pb-12 text-center">
        <span class="text-[#C5A880] text-xs uppercase tracking-widest font-bold block mb-3">Sacred Legacy</span>
        <h1 class="text-[#234433] text-3xl md:text-5xl emphasis tracking-tight mb-6">Chhoko Dhee</h1>
        <p class="text-gray-600 text-base md:text-lg max-w-2xl mx-auto leading-relaxed">
            The ancestral cemetery of the Anadu Gurung community—a sacred shoreline where the physical journey ends and a profound spiritual union with the waters begins.
        </p>
        <div class="w-12 h-[1px] bg-[#C5A880] mx-auto mt-8"></div>
    </section>

    <!-- Section 1: The Sacred Ground & The Last Rites -->
    <section class="max-w-5xl mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-start">
            <div class="md:col-span-4 sticky top-6">
                <h2 class="text-[#234433] text-2xl emphasis tracking-tight">The Final Resting Place</h2>
                <span class="text-xs uppercase text-[#C5A880] mt-2 block font-semibold">Geographic & Ritual Foundation</span>
            </div>
            <div class="md:col-span-8 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                <p>
                    Nestled reverently on the edge of the water, <strong class="text-gray-900 font-medium">Chhoko Dhee</strong> serves as the traditional cemetery for the Gurung community of Anadu. Geographically defined by nature, this sacred space is located between the boundaries of the <span class="italic font-medium">Aneri Khola</span> and <span class="italic font-medium">Syaneri Khola</span> close to the lake. Within these grounds, the bodies of departed souls are primarily cremated. However, in exceptional circumstances, burials are also performed in accordance with the explicit final wishes of the parents or the deceased.
                </p>
                <p>
                    The execution of a person's last rites on this ground is guided under the spiritual direction of the <strong class="text-[#234433] font-semibold">Klehpri priest</strong>. In a deeply symbolic procession, the funeral attendees (<span class="italic font-medium">Malaami</span>) carry the deceased and revolve around the crematorium in an <strong class="text-gray-900 font-medium">anti-clockwise direction exactly three times</strong> before the body is carefully placed upon the funeral pyre. 
                </p>
                <p>
                    This final farewell is a comprehensive communal gathering. The entire village unites alongside the immediate <span class="italic font-medium">Bhai Khalak</span> (clan), the <span class="italic font-medium">Chelibeti</span> (both married and unmarried daughters), the <span class="italic font-medium">Jwais</span> (sons-in-law), and the <span class="italic font-medium">Aasyo</span> (the maternal family members of the deceased), ensuring that no soul transitions into the next realm without the collective weight of their relatives and friends present.
                </p>
            </div>
        </div>
    </section>

    <!-- Section 2: Two-Column Layout — Simi Kai & The Role of the Jwais -->
    <section class="bg-white py-20 border-y border-gray-100">
        <div class="max-w-5xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
                
                <!-- Left Column: Cultural Kinship Roles Card -->
                <div class="md:col-span-5 order-last md:order-first">
                    <div class="w-full bg-[#F7F5F0] border border-gray-200/60 rounded-sm p-6 space-y-4 shadow-sm">
                        <span class="text-xs uppercase tracking-widest font-bold text-[#C5A880] block">Kinship Responsibilities</span>
                        <h4 class="text-[#234433] text-xl font-serif">The Duty of the Jwais</h4>
                        <p class="text-gray-600 text-xs leading-relaxed">
                            In Gurung eschatology, the sons-in-law bear the profound logistical and physical responsibility of maintaining the purity of the burial grounds.
                        </p>
                        <ul class="text-gray-600 text-xs space-y-1 list-none p-0 italic">
                            <li>• Releasing the sacred ashes onto the water</li>
                            <li>• Cleansing the entire crematorium space</li>
                            <li>• Sweeping and removing all debris and litter</li>
                        </ul>
                        <div class="pt-2 border-t border-gray-200 text-[10px] tracking-wide text-gray-400 uppercase">
                            Ritual Purity &amp; Respect
                        </div>
                    </div>
                </div>

                <!-- Right Column: Simi Kai Details -->
                <div class="md:col-span-7 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                    <span class="text-[#C5A880] text-xs uppercase tracking-widest font-bold block">Post-Cremation Customs</span>
                    <h3 class="text-[#234433] text-2xl emphasis mb-4">The Ritual of Simi Kai</h3>
                    
                    <p>
                        The journey of the departed soul does not conclude at the cremation pyre. On the <strong class="text-gray-900 font-medium">third day following the cremation</strong>, a sacred secondary rite known as <strong class="text-[#234433] font-semibold">Simi Kai</strong> is performed. 
                    </p>
                    <p>
                        During this ritual, the *Khalak*, *Chelibeti*, *Jwais*, and *Aasyo* return to the cemetery grounds to lovingly offer the favorite foods, beverages, and earthly delicacies of the departed soul, nurturing their spirit on its continuing ancestral path.
                    </p>
                    <p>
                        Within these rites, the <strong class="text-gray-900 font-medium">Jwais (sons-in-law)</strong> hold an indispensable, highly revered role. Beyond their ceremonial presence, they take on the physical labor of finality: they safely release the collected ashes onto the moving water and rigorously clean the entire crematorium plot. Armed with brooms, they meticulously restore the area, clearing it of all litter, ash fragments, and garbage out of absolute reverence for the site.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Section 3: The Spirit of Fewa Lake -->
    <section class="max-w-5xl mx-auto px-6 py-20">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-start">
            <div class="md:col-span-4 sticky top-6">
                <h2 class="text-[#234433] text-2xl emphasis tracking-tight">Ancestors of the Water</h2>
                <span class="text-xs uppercase text-[#C5A880] mt-2 block font-semibold">The Spiritual Continuum</span>
            </div>
            <div class="md:col-span-8 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                <p>
                    Once the cremation is absolute and the crematorium is cleansed, the final act bridges the mortal world with the eternal. The gathered ashes are tenderly dispersed and dissolved into the expansive waters of the lake. 
                </p>
                <p>
                    Through this profound ritual fluidization, the Anadu community maintains a deep, living conviction that <strong class="text-[#234433] font-semibold">their ancestors become one with Fewa Lake itself</strong>. The water is not merely a geographic landmark; it is a repository of their lineage's spirits. 
                </p>
                <p>
                    To honor this everlasting connection and keep the memory of their predecessors alive, a <strong class="text-gray-900 font-medium">special puja is performed near the lakeshore every single year</strong>. This annual gathering serves as a solemn acknowledgment of their roots, ensuring that the living community always pauses to remember the generation that now flows within the gentle waves of the lake.
                </p>
            </div>
        </div>
    </section>

</main>
@endsection
