@extends('components.layout')

@section('title')
    Lhokor | Talpari Anadu
@endsection

@section('content')
<!-- Main Content Area: Lhokor (Barga Chakra) -->
<main id="lhokor-barga-content" class="w-full">

    <!-- Page Header / Intro Banner -->
    <section class="max-w-4xl mx-auto px-6 pt-20 pb-12 text-center">
        <span class="text-[#C5A880] text-xs uppercase tracking-widest font-bold block mb-3">Culture &amp; Identity</span>
        <h1 class="text-[#234433] text-3xl md:text-5xl  tracking-tight mb-6">Lhokor: The Barga Chakra</h1>
        <p class="text-gray-600 text-base md:text-lg max-w-2xl mx-auto leading-relaxed">
            Understanding the sacred 12-year astrological wheel of the Tamu people—a cosmic system governing time, destiny, and communal celebration.
        </p>
        <div class="w-12 h-[1px] bg-[#C5A880] mx-auto mt-8"></div>
    </section>

    <!-- Section 1: The Mechanics of the 12-Year Cycle -->
    <section class="max-w-5xl mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-start">
            <div class="md:col-span-4 sticky top-6">
                <h2 class="text-[#234433] text-2xl  tracking-tight">The Wheel of Time</h2>
                <span class="text-xs uppercase text-[#C5A880] mt-2 block font-semibold">Astrological Foundation</span>
            </div>
            <div class="md:col-span-8 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                <p>
                    In the rich cultural tapestry of the Gurung (Tamu) community, time is not merely counted; it is envisioned as a continuous, sacred circle known as <strong class="text-[#234433] font-semibold">Lhokor</strong>. Deeply tied to ancient Himalayan astrology, this system organizes time into the <span class=" font-medium">Barga Chakra</span>—a zodiac wheel consisting of twelve distinct years, with each year represented by a specific animal.
                </p>
                <p>
                    The mechanics of the <span class="">Barga Chakra</span> dictate that each individual animal sign (or <strong class="text-gray-900 font-medium">Barga</strong>) repeats exactly <strong class="text-gray-900 font-medium">every 12 years</strong>. When a person reaches a multiple of their birth year (such as age 12, 24, 36, 48, 60, or 72), they hit their matching zodiac year—a significant biological and spiritual milestone celebrated with deeply rooted family rituals to ward off misfortune and welcome renewed vitality.
                </p>
                <p>
                    The transition from one *Barga* to the next marks the arrival of the most important festival in the Tamu calendar: <strong class="text-gray-900 font-medium">Tamu Lhosar</strong> (the Gurung New Year), celebrated enthusiastically every year in late December (the 15th of Poush in the Bikram Sambat calendar).
                </p>
            </div>
        </div>
    </section>

    <!-- Section 2: The 12 Authentic Bargas (The Animal Matrix Table) -->
    <section class="bg-white py-20 border-y border-gray-100">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-xs uppercase text-[#C5A880] tracking-widest font-bold block mb-2">The Authentic Zodiac Guide</span>
                <h3 class="text-[#234433] text-2xl md:text-3xl ">The Twelve Signs of the Tamu Barga</h3>
                <p class="text-gray-500 text-xs mt-2">The traditional, indigenous chronological sequence of animal signs that govern the Gurung wheel of time.</p>
            </div>

            <!-- Responsive Table -->
            <div class="overflow-x-auto border border-gray-200 rounded-sm shadow-sm max-w-3xl mx-auto">
                <table class="w-full text-left border-collapse text-xs md:text-sm">
                    <thead>
                        <tr class="bg-[#F7F5F0] border-b border-gray-200 text-[#234433] uppercase tracking-wider text-[11px] font-semibold">
                            <th class="p-4 w-1/4 text-center">Order</th>
                            <th class="p-4 w-2/4">Barga (Tamu Kyi)</th>
                            <th class="p-4 w-1/4">Nepali / English Name</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 divide-y divide-gray-100 bg-white font-sans">
                        <tr>
                            <td class="p-4 font-medium text-gray-900 text-center">1</td>
                            <td class="p-4 flex items-center gap-3 font-semibold text-gray-900"><span class="text-base">🐭</span> च्यु-ल्हो</td>
                            <td class="p-4 text-gray-600 font-medium">मुसा वर्ग <span class="text-gray-400 font-normal text-xs ml-1">(Rat)</span></td>
                        </tr>
                        <tr>
                            <td class="p-4 font-medium text-gray-900 text-center">2</td>
                            <td class="p-4 flex items-center gap-3 font-semibold text-gray-900"><span class="text-base">🐮</span> ल्वोँ-ल्हो</td>
                            <td class="p-4 text-gray-600 font-medium">गाई वर्ग <span class="text-gray-400 font-normal text-xs ml-1">(Cow)</span></td>
                        </tr>
                        <tr>
                            <td class="p-4 font-medium text-gray-900 text-center">3</td>
                            <td class="p-4 flex items-center gap-3 font-semibold text-gray-900"><span class="text-base">🐅</span> तो-ल्हो</td>
                            <td class="p-4 text-gray-600 font-medium">बाघ वर्ग <span class="text-gray-400 font-normal text-xs ml-1">(Tiger)</span></td>
                        </tr>
                        <tr>
                            <td class="p-4 font-medium text-gray-900 text-center">4</td>
                            <td class="p-4 flex items-center gap-3 font-semibold text-gray-900"><span class="text-base">🐈</span> हि-ल्हो</td>
                            <td class="p-4 text-gray-600 font-medium">बिरालो वर्ग <span class="text-gray-400 font-normal text-xs ml-1">(Cat)</span></td>
                        </tr>
                        <tr>
                            <td class="p-4 font-medium text-gray-900 text-center">5</td>
                            <td class="p-4 flex items-center gap-3 font-semibold text-gray-900"><span class="text-base">🦅</span> मुप्रि-ल्हो</td>
                            <td class="p-4 text-gray-600 font-medium">गरुड वर्ग <span class="text-gray-400 font-normal text-xs ml-1">(Garuda / Eagle)</span></td>
                        </tr>
                        <tr>
                            <td class="p-4 font-medium text-gray-900 text-center">6</td>
                            <td class="p-4 flex items-center gap-3 font-semibold text-gray-900"><span class="text-base">🐍</span> सप्रि-ल्हो</td>
                            <td class="p-4 text-gray-600 font-medium">सर्प वर्ग <span class="text-gray-400 font-normal text-xs ml-1">(Snake)</span></td>
                        </tr>
                        <tr>
                            <td class="p-4 font-medium text-gray-900 text-center">7</td>
                            <td class="p-4 flex items-center gap-3 font-semibold text-gray-900"><span class="text-base">🐎</span> त-ल्हो</td>
                            <td class="p-4 text-gray-600 font-medium">घोडा वर्ग <span class="text-gray-400 font-normal text-xs ml-1">(Horse)</span></td>
                        </tr>
                        <tr>
                            <td class="p-4 font-medium text-gray-900 text-center">8</td>
                            <td class="p-4 flex items-center gap-3 font-semibold text-gray-900"><span class="text-base">🐑</span> ल्हुँ-ल्हो</td>
                            <td class="p-4 text-gray-600 font-medium">भेडा वर्ग <span class="text-gray-400 font-normal text-xs ml-1">(Sheep)</span></td>
                        </tr>
                        <tr>
                            <td class="p-4 font-medium text-gray-900 text-center">9</td>
                            <td class="p-4 flex items-center gap-3 font-semibold text-gray-900"><span class="text-base">🐒</span> प्र-ल्हो</td>
                            <td class="p-4 text-gray-600 font-medium">बाँदर वर्ग <span class="text-gray-400 font-normal text-xs ml-1">(Monkey)</span></td>
                        </tr>
                        <tr>
                            <td class="p-4 font-medium text-gray-900 text-center">10</td>
                            <td class="p-4 flex items-center gap-3 font-semibold text-gray-900"><span class="text-base">🐓</span> च्ह्याँ-ल्हो</td>
                            <td class="p-4 text-gray-600 font-medium">चरा वर्ग <span class="text-gray-400 font-normal text-xs ml-1">(Bird)</span></td>
                        </tr>
                        <tr>
                            <td class="p-4 font-medium text-gray-900 text-center">11</td>
                            <td class="p-4 flex items-center gap-3 font-semibold text-gray-900"><span class="text-base">🐕</span> खि-ल्हो</td>
                            <td class="p-4 text-gray-600 font-medium">कुकुर वर्ग <span class="text-gray-400 font-normal text-xs ml-1">(Dog)</span></td>
                        </tr>
                        <tr>
                            <td class="p-4 font-medium text-gray-900 text-center">12</td>
                            <td class="p-4 flex items-center gap-3 font-semibold text-gray-900"><span class="text-base">🦌</span> फो-ल्हो</td>
                            <td class="p-4 text-gray-600 font-medium">मृग वर्ग <span class="text-gray-400 font-normal text-xs ml-1">(Deer)</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Section 3: Cultural Relevance & Identity -->
    <section class="max-w-5xl mx-auto px-6 py-20">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-start">
            <div class="md:col-span-4 sticky top-6">
                <h2 class="text-[#234433] text-2xl  tracking-tight">Destiny &amp; Community Connection</h2>
                <span class="text-xs uppercase text-[#C5A880] mt-2 block font-semibold">Living Astrological Heritage</span>
            </div>
            <div class="md:col-span-8 text-gray-600 space-y-6 text-sm md:text-base leading-relaxed">
                <p>
                    The *Barga Chakra* extends far beyond simple date-keeping. In traditional Gurung society, a person’s born *Barga* is believed to deeply influence their character traits, natural strengths, and general disposition in life. 
                </p>
                <p>
                    When major milestone cultural activities or communal events—such as weddings, naming ceremonies, or traditional <span class="">Pye Karya (Arghau)</span> rites—are organized, the matching and contrasting dynamics of the participants' *Bargas* are carefully weighed by the cultural shamanic priests (<span class="font-medium text-gray-900">Pachyu</span> and <span class="font-medium text-gray-900">Ghyabri</span>) to ensure structural harmony, spiritual protection, and collective prosperity for the community.
                </p>
            </div>
        </div>
    </section>

</main>
@endsection
