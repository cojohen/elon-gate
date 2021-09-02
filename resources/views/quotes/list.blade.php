@extends('layouts.app')

@section('title', 'List Elon quotes | ElonGate')
        
@section('content')
    <!-- Elon image -->
    <img 
    src="{{ asset('images/android-chrome-192x192.png') }}"
    alt="Elon Musk's Face"
    class="elonHead"
    />

    <!-- Create new quote -->
    <div class="statsRow">
        <a 
            href="{{ url('/quotes/create') }}"
            alt="Create new">
            New &rarr;
        </a>
    </div>
    
    <!-- Display list count -->
    <div class="statsRow">
        <p>
            1 - {{ count($quotes) }} of {{ count($quotes) }}
        </p>
    </div>

    <!-- Display list of quotes as tiles -->
    @foreach($quotes as $quote)
        <div class="quoteTile" onclick="location.reload();">
            <p>
                {{ $quote->body }}
            </p>
            <sub>
                -Elon Musk
            </sub>
            <div 
                class="controls"
                style="float:right; ">
                <a 
                    href="{{ url("quotes/$quote->id/edit") }}"
                    style="color: green;">
                    Edit &rarr;
                </a>
                <form 
                    action="{{ url("quotes/$quote->id") }}"
                    method="POST">
                    @csrf
                    @method('delete')
                    <button
                        type="submit" 
                        style="color:red;">
                        Delete &rarr;
                    </button>
                </form>
            </div>
        </div>
    @endforeach
@endsection
