@extends('components.layout')

@section('title')
    Territory | Talpari Anadu
@endsection

@section('content')
<main id="territory-content" class="w-full">

    <section class="max-w-4xl mx-auto px-6 pt-20 pb-12 text-center">
        <p class="text-gray-600 text-base md:text-lg emphasis max-w-2xl mx-auto leading-relaxed mb-8">
            Exploring the historical shifts, modern borders, and ancestral lands that define the physical footprint of Anadu.
        </p>

        <div class="flex justify-center gap-8 mb-8">
            <div class="w-64">
                <img src="{{ asset('images/raniban.jpg') }}" alt="Raniban" class="w-full rounded-sm">
                <p class="text-xs text-gray-500 text-center mt-2">Photo credit: Pete and Marian Downs (1966), Sunighat Khet in the background.</p>
            </div>

            <div class="w-64">
                <img src="{{ asset('images/kafaldada.jpg') }}" alt="Kafaldada" class="w-full rounded-sm">
                <p class="text-xs text-gray-500 text-center mt-2">Photo credit: Dan Pierce (1963), capturing the historic Kaafaldada fields (Khet) stretching behind.</p>
            </div>
        </div>
    </section>

    <section class="max-w-5xl mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-start">
            <div class="md:col-span-4 sticky top-6">
                <h2 class="text-[#234433] text-2xl emphasis leading-tight">The Raniban Shift & Relocation</h2>
                <span class="text-xs uppercase text-[#C5A880] mt-2 block font-semibold">Before 2033 BS (1976/77 AD)</span>
                <div class="max-w-md mx-auto mb-8">
                    <img src="{{ asset('images/faaparswaraa.jpg') }}" alt="Fapar Swaara" class="w-full rounded-sm">
                    <p class="text-xs text-gray-500 text-center mt-2">Photo credit: Doug Bingham (1963 AD), featuring members of the families later displaced to Banke and Bardia.</p>
                </div>
            </div>
            <div class="md:col-span-8 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                <p>
                    Historically, the territory of Anadu encompassed a vast geographical footprint that stretched significantly eastward towards Damside along the southern shores of the lake. This expansive landscape included culturally and geographically distinct tracts of land known locally as <strong class="text-gray-900 font-medium">Jhakrithaan, Taarebhir, Kainipaani, Mye Khola, Chihandada, Suni Ghaat, Dharmase, Kaafal Dada,</strong> and <strong class="text-gray-900 font-medium">Faapar Swaara</strong>.
                </p>
                <p>
                    A major territorial transformation occurred around <strong class="text-gray-900 font-medium">2033 BS (1976/77 AD)</strong> when these lands were acquired by the state under King Mahendra's environmental conservation initiatives. The area was systematically closed off and converted into what is known today as <strong class="text-[#234433] font-semibold">Raniban (The Queen’s Forest)</strong>. During this transition, 12 local households deep within the zone were completely displaced and subsequently relocated to Bake, Bardia.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-white py-20 border-y border-gray-100">
        <div class="max-w-5xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
                
                <div class="md:col-span-7 order-2 md:order-1 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                    <span class="text-[#C5A880] text-xs uppercase tracking-widest font-bold block">Current Demarcations</span>
                    <h2 class="text-[#234433] text-2xl md:text-3xl emphasis mb-4">From the Ridge to the Shoreline</h2>
                    <p>
                        Today, Anadu occupies a neatly defined natural corridor. Our borders stretch horizontally from <strong class="text-gray-900 font-medium">Deurali Khola (Chisapaani)</strong> in the east all the way to <strong class="text-gray-900 font-medium">Khare Khola</strong> on the western edge. Vertically, the community is anchored at the crest by the prominent <strong class="text-gray-900 font-medium">Min Thumki Dada</strong>—the site of the World Peace Stupa—and gently rolls downward until it hits the shores of Fewa Lake.
                    </p>
                    <p>
                        The modern community is distributed organically across several distinctive internal settlements, each carrying its own name and character: <strong class="text-gray-800 font-medium">Maanikharka, Mulabari, Lychee Garden, Saaudara, Gairi, Andada,</strong> and <strong class="text-gray-800 font-medium">Ekleswara</strong>. 
                    </p>
                    <p class="text-xs bg-[#F7F5F0] p-4 rounded-sm border-l-2 border-[#C5A880]">
                        <strong class="text-gray-900">Note on Chhoko Dhee:</strong> On the western frontier bordering the lake, our ancient community ancestral cemetery (<span class="italic font-semibold">Chhoko Dhee</span>) stands respectfully positioned between the natural banks of the <span class="font-medium">Aneri</span> and <span class="font-medium">Syaneri</span> rivers.
                    </p>
                </div>

                <div class="md:col-span-5 order-1 md:order-2">
                    <div class="md:col-span-5 order-1 md:order-2">
                        <div class="aspect-[4/3] w-full rounded-sm overflow-hidden">
                            <img src="{{ asset('images/world-peace-stupa-pokhara.jpg') }}" alt="World Peace Stupa." class="w-full h-full object-cover">
                        </div>
                        <p class="text-xs text-gray-500 text-center mt-2">Photo credit: Wikipedia</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="max-w-5xl mx-auto px-6 py-20">
        <div class="text-center">
            <span class="text-[#C5A880] text-xs uppercase tracking-widest font-bold block mb-8">Phewa Faat Agricultural Cycle</span>
            
            <div class="max-w-md mx-auto mb-8">
                <img src="{{ asset('images/phewafaat.jpg') }}" alt="Phewa Faat" class="w-full rounded-sm">
                <p class="text-xs text-gray-500 text-center mt-2">Photo credit: Stock Image, Internet Archive</p>
            </div>

            <h2 class="text-[#234433] text-2xl md:text-3xl emphasis mb-6">The Rhythms of Jethobudho Harvesting</h2>
            
            <div class="text-gray-600 space-y-6 text-sm md:text-base leading-relaxed max-w-2xl mx-auto">
                <p>
                    Beyond our immediate hillslope properties, the villagers of Anadu maintain large, ancestral farming plots located directly out in the fertile plains of the <strong class="text-gray-900 font-semibold">Phewa Faat</strong>. This vital agricultural land is fully utilized twice a year, specializing in the intensive cultivation of the highly aromatic, prized local heritage rice strain: <strong class="text-brand-green font-medium">Jethobudho Dhaan</strong>.
                </p>
                <p>
                    Because of our distinct position across the lake, the culmination of the harvest yields a beautiful, unique local tradition. Once the stalks are dried, massive stacks of protective golden hay (<span class="italic font-medium">paral</span>) are piled high into traditional wooden boats. Farmers then row across the open waters of the lake, transporting the livestock feed back home to sustain their cattle through the changing seasons.
                </p>
            </div>
        </div>
    </section>

</main>
@endsection
