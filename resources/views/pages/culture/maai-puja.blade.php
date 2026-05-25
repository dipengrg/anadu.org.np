@extends('components.layout')

@section('title')
    Maai Puja | Talpari Anadu
@endsection

@section('content')
<!-- Main Content Area: Maai Puja -->
<main id="maai-puja-content" class="w-full">

    <!-- Page Header / Intro Banner -->
    <section class="max-w-4xl mx-auto px-6 pt-20 pb-12 text-center">
        <span class="text-[#C5A880] text-xs uppercase tracking-widest font-bold block mb-3">Culture &amp; Identity</span>
        <h1 class="text-[#234433] text-3xl md:text-5xl emphasis tracking-tight mb-6">माई पूजा (Maai Puja)</h1>
        <p class="text-gray-600 text-base md:text-lg max-w-2xl mx-auto leading-relaxed font-serif italic">
            "सन्तानको सुस्वास्थ्य, गाउँको समृद्धि र महिलाहरूको नेतृत्व"
        </p>
        <div class="w-12 h-[1px] bg-[#C5A880] mx-auto mt-8"></div>
    </section>

    <!-- Section 1: Sacred Intentions & Communal Peace -->
    <section class="max-w-5xl mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-start">
            <div class="md:col-span-4 sticky top-6">
                <h2 class="text-[#234433] text-2xl emphasis tracking-tight">The Blessings of Maai</h2>
                <span class="text-xs uppercase text-[#C5A880] mt-2 block font-semibold">Prosperity &amp; Well-being</span>
            </div>
            <div class="md:col-span-8 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                <p>
                    Rooted deeply within the traditional spiritual heritage of the Tamu community, <strong class="text-[#234433] font-semibold">Maai Puja (माई पूजा)</strong> is a deeply revered annual festival that brings profound spiritual peace to the settlement. The ritual is carried out with collective devotion, focusing specifically on wishing for the robust health and long life of children, alongside the overarching economic and agricultural prosperity of the entire village (<span class="italic font-medium">सन्तानको सुस्वास्थ्य र गाउँको समृद्धिको कामना</span>).
                </p>
                <p>
                    By making traditional offerings to the sacred feminine forces of nature at the designated Maai Thaan, the community invokes protection over their households. This localized spiritual devotion infuses the entire village with an enduring sense of communal harmony, calm, and absolute spiritual tranquility (<span class="italic font-medium">गाउँमा आध्यात्मिक शान्ति प्रदान गर्दछ</span>).
                </p>
            </div>
        </div>
    </section>

    <!-- Section 2: Two-Column Layout — Timing & Women's Active Role -->
    <section class="bg-white py-20 border-y border-gray-100">
        <div class="max-w-5xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
                
                <!-- Left Column: Ritual Timing Card -->
                <div class="md:col-span-5">
                    <div class="w-full bg-[#F7F5F0] border border-gray-200/60 rounded-sm p-6 space-y-4 shadow-sm font-sans">
                        <span class="text-xs uppercase tracking-widest font-bold text-[#C5A880] block">Festival Schedule</span>
                        <h4 class="text-[#234433] text-xl font-serif">Annual Custom (प्रत्येक वर्ष)</h4>
                        
                        <div class="space-y-3 pt-2">
                            <div class="flex items-start gap-3">
                                <span class="text-[#C5A880] text-xs mt-1">◆</span>
                                <div>
                                    <strong class="text-gray-900 text-sm block">Chaitra</strong>
                                    <span class="text-gray-500 text-xs">चैत महिनाको पहिलो मंगलबार (First Tuesday of Chaitra)</span>
                                </div>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-gray-200 text-[10px] tracking-wide text-gray-400 uppercase">
                            A Grand Seasonal Observance
                        </div>
                    </div>
                </div>

                <!-- Right Column: Leadership of Women -->
                <div class="md:col-span-7 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                    <span class="text-[#C5A880] text-xs uppercase tracking-widest font-bold block">Matriarchal Leadership</span>
                    <h3 class="text-[#234433] text-2xl emphasis mb-4">The Active Participation of Women</h3>
                    
                    <p>
                        <strong class="text-gray-900 font-medium">Maai Puja</strong> is celebrated on a grand, magnificent scale (<span class="italic font-medium">भव्य रूपमा सम्पन्न हुन्छ</span>) precisely <strong class="text-gray-900 font-medium">once every year</strong> in the spring, marking a vital period of growth and renewal.
                    </p>
                    <p>
                        A defining pillar of this sacred festival is the highly active participation and leadership of the community's women (<span class="italic font-medium">महिलाहरूको सक्रिय सहभागिता रहन्छ</span>). From preparing the ritual ingredients to leading the devotional space, the women step into the forefront as the spiritual guardians of their children's future and the village's health, beautifully mirroring the matriarchal reverence woven throughout indigenous Tamu customs.
                    </p>
                </div>

            </div>
        </div>
    </section>

</main>
@endsection
