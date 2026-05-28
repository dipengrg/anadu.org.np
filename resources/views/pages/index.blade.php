@extends('components.layout')

@section('title')
    @if(app()->getLocale() == 'en')
        Home | Talpari Anadu
    @elseif(app()->getLocale() == 'ne')
        गृहपृष्ठ | तालपारी अनदुँ
    @endif
@endsection

@section('content')
<main id="main-content" class="w-full">
    <section id="about" class="max-w-6xl mx-auto px-6 py-20 md:py-32">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-6">
                <h2 class="text-[#234433] text-3xl md:text-4xl  leading-tight mb-6">Surrounded by Nature, Preserved by People</h2>
                
                <div class="text-gray-600 space-y-6 leading-relaxed text-sm md:text-base">
                    <p>
                        Nestled on the serene, forested slopes across Fewa Lake in Pokhara ward 22, Kaski, Anadu is more than just a geographic location—it is a living museum of cultural resilience, deep-rooted traditions, and community solidarity.
                    </p>
                    <p>
                        Separated from the bustling lakeside by the peaceful waters, our village has preserved its unique identity for generations. From the sacred steps of the Bishwa Shanti Stupa to the historic resting grounds of Chhoko Dhee, Anadu stands as a testament to a rich past and a sustainable, community-driven future.
                    </p>
                </div>
            </div>

            <div class="lg:col-span-6">
                <div class="overflow-hidden rounded-sm shadow-md bg-gray-100 aspect-[4/3]">
                    <img 
                        src="{{ asset('images/anadu-people.jpg') }}" 
                        alt="People of Anadu Community" 
                        class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500"
                    />
                </div>
            </div>
        </div>
    </section>

    <section id="highlight" class="max-w-4xl mx-auto px-6 py-12 text-center border-t border-gray-200/30">
        <div class="inline-block mb-4 text-[#C5A880] text-lg">✦</div>
        <h3 class="text-[#234433] text-xl md:text-2xl  max-w-2xl mx-auto leading-relaxed">
            "Preserving the Wisdom of the Khegi"
        </h3>

        <div class="flex justify-center items-center mb-8">
            <div class="max-w-xl w-full overflow-hidden rounded-sm shadow-sm bg-gray-100 aspect-[16/10]">
                <img 
                    src="{{ asset('images/khegi-wisdom.jpg') }}" 
                    alt="Preserving the Wisdom of the Khegi" 
                    class="w-full h-full object-cover"
                />
            </div>
        </div>

        <p class="mt-4 text-gray-500 text-sm max-w-lg mx-auto leading-relaxed">
            Our traditions are kept alive through oral histories, language, and sacred rituals performed by our cultural custodians during Lhosar, Maai Puja, and Chyopa Teh.
        </p>
    </section>

    <section id="campaigns" class="py-20 border-t border-gray-200/50">
        <div class="max-w-5xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                <div class="lg:col-span-4 sticky top-6">
                    <h3 class="text-[#234433] text-2xl md:text-3xl ">Keeping Anadu Pure & Green</h3>
                    <p class="text-gray-600 text-sm mt-4 leading-relaxed">
                        We take collective action to protect the natural ecosystem handed down by our ancestors.
                    </p>
                </div>
                <div class="lg:col-span-8 space-y-4">
                    <div class="bg-white p-6 rounded-sm border border-gray-100 flex items-start gap-4">
                        <div class="text-[#C5A880] text-xl font-bold ">01</div>
                        <div>
                            <h4 class="text-gray-900 font-semibold  mb-1">Fewa Lake Clean-up</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">Protecting the shoreline, controlling pollution, and safeguarding aquatic life along our village borders.</p>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-sm border border-gray-100 flex items-start gap-4">
                        <div class="text-[#C5A880] text-xl font-bold ">02</div>
                        <div>
                            <h4 class="text-gray-900 font-semibold  mb-1">Baato Sarsafai</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">Community-led trail cleaning and structural path restorations to maintain historical walking trails.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
