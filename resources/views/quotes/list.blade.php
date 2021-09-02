@extends('layouts.app')

@section('title', 'List Elon quotes | ElonGate')
        
@section('content')
    <!-- Elon image -->
    <img 
    src="{{ asset('images/android-chrome-192x192.png') }}"
    alt="Elon Musk's Face"
    class="elonHead"
    />

    <!-- Quote list -->
    @foreach($quotes as $quote)
        <div class="quoteTile" onclick="location.reload();">
            <p>
                {{ $quote->body }}
            </p>
            <sub>
                -Elon Musk
            </sub>
            <div class="controls">
                <a href="{{ url("quotes/$quote->id/delete") }}">
                    Delete
                </a>
                <a href="{{ url("quotes/$quote->id/edit") }}">
                    Edit
                </a>
            </div>
        </div>
    @endforeach
@endsection
