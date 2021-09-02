@extends('layouts.app')

@section('content')
    <div class="quoteTile" onclick="location.reload();">
        <img 
            src="{{ asset('images/android-chrome-192x192.png') }}"
            alt="Elon Musk's Face"
        />
        <p>
            {{ $quote }}
        </p>
        
        <sub>
            -Elon Musk
        </sub>
    </div>
@endsection
