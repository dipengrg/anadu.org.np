@extends('components.layout')

@section('title', __('Not Found') . ' - तालपारी अनदुँ | Talpari Anadu')

@section('content')
    <div class="text-center px-6 py-12">
        <p class="emphasis text-anadu-gold text-lg md:text-xl mb-2 tracking-wider">{{ __('Page Not Found') }}</p>
        <p class="text-lg md:text-xl text-anadu-forest/70 mb-8 max-w-md mx-auto font-body">{{ __('The page you are looking for could not be found.') }}</p>
    </div>
@endsection
