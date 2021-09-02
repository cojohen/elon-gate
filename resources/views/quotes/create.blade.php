@extends('layouts.app')

@section('title', 'Create a Quote | elonpi')

@section('content')
    <h1>Create a new quote</h1>

    <div class="">
        <form action="">
            <div class="block">
                <input
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="quote"
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
    <div class="quoteTile" id="quoteTile">
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