@extends('layouts.app')

@section('title', 'Edit a Quote | ElonGate')

@section('content')
    <div class="section">
        <h1>Create a new quote</h1>
        <form action="{{ url("quotes/$quote->id") }}" method="POST">
            @csrf
            @method('PUT')
            <div class="block">
                <input
                    type="text"
                    name="body"
                    size="50"
                    onkeyup="document.getElementById('quoteText').innerHTML=this.value"
                    value="{{ $quote->body }}">
                <input
                    type="submit"
                    name="submit"
                    value="Store">
            </div>
        </form>
    </div>
    <!-- quote view -->
    <div class="section quoteTile" id="quoteTile">
        <img 
            src="{{ asset('images/android-chrome-192x192.png') }}"
            alt="Elon Musk's Face"
        />
        <p id="quoteText">
            {{ $quote->body }}
        </p>
        
        <sub>
            -Elon Musk
        </sub>
    </div>

@endsection