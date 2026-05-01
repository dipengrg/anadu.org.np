@extends('components.layout')

@section('title')
    @if(app()->getLocale() == 'en')
        Home | Talpari Anadu
    @elseif(app()->getLocale() == 'ne')
        गृहपृष्ठ | तालपारी अनदुँ
    @endif
@endsection

@section('content')
    Home Content
@endsection
