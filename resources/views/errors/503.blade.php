@extends('components.layout')

@section('title', __('Service Unavailable') . ' - तालपारी अनदुँ | Talpari Anadu')

@section('content')
    <div class="text-center px-6 py-12">
        <p class=" text-anadu-gold text-lg md:text-xl mb-2 tracking-wider">{{ __('Service Unavailable') }}</p>
        <p class="text-lg md:text-xl text-anadu-forest/70 mb-8 max-w-md mx-auto font-body">{{ __('The service you are looking for is currently unavailable.') }}</p>
    </div>
@endsection