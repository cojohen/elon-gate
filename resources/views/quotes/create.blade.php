@extends('layouts.app')

@section('title', 'Create a Quote | ElonGate')

@section('content')
    <div class="section">
        <h1>Create a new quote</h1>
        <form action="{{ url('quotes/create') }}" method="POST">
            @csrf

            <div class="block">
                <input
                    type="text"
                    name="body"
                    placeholder="Quote..."
                    size="50"
                    onkeyup="document.getElementById('quoteText').innerHTML=this.value">
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
            Your text here
        </p>
        
        <sub>
            -Elon Musk
        </sub>
    </div>

@endsection