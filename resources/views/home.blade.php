@extends('layouts.app')

@section('title')
    @if(app()->getLocale() == 'en')
        Home | Talpari Anadu
    @elseif(app()->getLocale() == 'ne')
        गृहपृष्ठ | तालपारी अनदुँ
    @else
        गृहपृष्ठ | तालपारी अनदुँ
    @endif
@endsection

@section('content')
    
@endsection
