@extends('components.layout')

@section('title')
    @if(app()->getLocale() == 'en')
        Home | Talpari Anadu
    @elseif(app()->getLocale() == 'ne')
        गृहपृष्ठ | तालपारी अनदुँ
    @endif
@endsection

@section('content')
<main class="w-full">
    <h1 class="text-center">Welcome to Taalpari</h1>
    <section class="max-w-6xl mx-auto px-5 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 items-center">
            <div class="lg:col-span-6">
                <h2 class="text-center">Surrounded by Nature, Preserved by People</h2>
                
                <div class="space-y-6 leading-relaxed text-sm md:text-base">
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

    <section class="max-w-6xl mx-auto px-5 py-8">
        <h2 class="text-[#234433] text-xl md:text-2xl max-w-2xl mx-auto leading-relaxed">
            "Preserving the Wisdom of the Khegi"
        </h2>

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
</main>
@endsection
