@extends('components.layout')

@section('title')
    Khema Puja | Talpari Anadu
@endsection

@section('content')
<!-- Main Content Area: Khema Puja -->
<main id="khema-puja-content" class="w-full">

    <!-- Page Header / Intro Banner -->
    <section class="max-w-4xl mx-auto px-6 pt-20 pb-12 text-center">
        <span class="text-[#C5A880] text-xs uppercase tracking-widest font-bold block mb-3">Culture &amp; Identity</span>
        <h1 class="text-[#234433] text-3xl md:text-5xl emphasis tracking-tight mb-6">खें-माँ पूजा (Khema Puja)</h1>
        <p class="text-gray-600 text-base md:text-lg max-w-2xl mx-auto leading-relaxed font-serif italic">
            "फेवातालको काखमा पुर्ख्यौली स्मरण र पहिचानको संरक्षण"
        </p>
        <div class="w-12 h-[1px] bg-[#C5A880] mx-auto mt-8"></div>
    </section>

    <!-- Section 1: The Misty Morning Ritual on the Shore -->
    <section class="max-w-5xl mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-start">
            <div class="md:col-span-4 sticky top-6">
                <h2 class="text-[#234433] text-2xl emphasis tracking-tight">The Dawn of Magh 1st</h2>
                <span class="text-xs uppercase text-[#C5A880] mt-2 block font-semibold">An Ancestral Heritage on Water</span>
            </div>
            <div class="md:col-span-8 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                <p>
                    Every year on the auspicious morning of <strong class="text-gray-900 font-medium">Magh 1st (हरेक वर्ष माघ १ गतेको शुभ बिहानीमा)</strong>, when a thick blanket of winter mist settles softly over the surface of Fewa Lake (<span class="italic font-medium">जब फेवातालको सतहमा बाक्लो कुहिरोले ढाकिएको हुन्छ</span>), a deeply moving tradition unfolds. The brothers and sisters of the Tamu community from Taalpaari Anadu village gather at the water's edge, carrying a profound ancient legacy to remember and worship their ancestors (<span class="italic font-medium">तालपारी अनदुँ गाउँका तमु समुदायका दाजुभाइ तथा दिदीबहिनीहरू एउटा प्राचीन विरासत बोकेर तालको किनारमा आफ्ना पुर्खा लाई सम्झिदई पुजा गर्ने गरिन्छ</span>).
                </p>
                <p>
                    In the sacred path taught by the ancestors—the <strong class="text-gray-900 font-medium">Khé (खें - Paternal Ancestors)</strong> and <strong class="text-gray-900 font-medium">Mā (माँ - Maternal Ancestors)</strong>—nature is never treated as a lifeless, inanimate object (<span class="italic font-medium">हाम्रा पुर्खाहरू खें "पितृ" र माँ "मातृ" ले सिकाउनुभएको यो मार्गमा प्रकृतिलाई कुनै निर्जीव वस्तु मानिँदैन</span>). Standing as a living witness to this bond is the lake itself, historically known in Tamu Kyi as <strong class="text-[#234433] font-semibold">Phyõb Tal (फ्योँब ताल / फेवाताल)</strong>.
                </p>
                <div class="bg-[#F7F5F0] p-5 rounded-sm border-l-2 border-[#C5A880] text-xs font-serif italic text-gray-700">
                    "यो पुजाले के सिकाउँछ भने—हाम्रा पुर्खाहरू कतै टाढा छैनन्, उनीहरू त यी ताल हिमाल र यो धर्तीमा समाहित छन्।"
                    <span class="font-sans font-bold uppercase tracking-wider text-gray-400 block text-[10px] not-italic mt-2">The Cosmic Belief: Ancestors are one with the Lake, Mountains, and Earth</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Two-Column Layout — A Plea for Cultural Preservation -->
    <section class="bg-white py-20 border-y border-gray-100">
        <div class="max-w-5xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
                
                <!-- Left Column: Identity Safeguard Card -->
                <div class="md:col-span-5 order-last md:order-first">
                    <div class="w-full bg-[#F7F5F0] border border-gray-200/60 rounded-sm p-6 space-y-4 shadow-sm font-sans">
                        <span class="text-xs uppercase tracking-widest font-bold text-[#C5A880] block">Our Shared Identity</span>
                        <h4 class="text-[#234433] text-xl font-serif">साझा पहिचान</h4>
                        <p class="text-gray-600 text-xs leading-relaxed">
                            This ritual, closely guarded and kept alive by the Anadu community, stands as a cornerstone of our distinct cultural identity.
                        </p>
                        <div class="pt-4 border-t border-gray-200 text-[10px] tracking-wide text-gray-400 uppercase">
                            Taalpaari Anadu Tamu Samaj
                        </div>
                    </div>
                </div>

                <!-- Right Column: The Threat of Modernity -->
                <div class="md:col-span-7 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                    <span class="text-[#C5A880] text-xs uppercase tracking-widest font-bold block">The Threat of Disappearance</span>
                    <h3 class="text-[#234433] text-2xl emphasis mb-4">Preserving the Legacy Against the Wave of Modernity</h3>
                    
                    <p>
                        Despite its immense spiritual and historical value, this invaluable tradition currently stands on the very brink of disappearance (<span class="italic font-medium">तर आज, यो अमूल्य परम्परा लोप हुने संघारमा छ</span>). 
                    </p>
                    <p>
                        There is a deep and growing concern within the community that our original, indigenous customs and rituals might eventually be washed away and lost in the sweeping current of modern globalization (<span class="italic font-medium">आधुनिकताको लहरमा कतै हाम्रा मौलिक रितिरिवाजहरू नहराउन् भन्ने चिन्ता हामीमाझ छ</span>). Preserving <strong class="text-gray-900 font-medium">Khema Puja</strong> is not just about keeping an ancient ritual alive; it is about protecting the distinct ancestral roots that give the Tamu people their unique place under the Himalayan sky.
                    </p>
                </div>

            </div>
        </div>
    </section>

</main>
@endsection
