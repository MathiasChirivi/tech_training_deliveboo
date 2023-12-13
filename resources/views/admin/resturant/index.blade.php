@extends('layouts.admin')

@section('content')

<!-- resources/views/restaurants/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div>
        <h1>Elenco dei tuoi ristoranti</h1>
        <ul>
            @foreach($restaurants as $restaurant)
                <li>
                    <h2>Ristorante: {{ $restaurant->name }}</h2>
                    <p>Indirizzo: {{ $restaurant->address }}</p>
                    <p>PIVA: {{ $restaurant->piva }}</p>
                </li>
            @endforeach
        </ul>

        <h3>Piatti:</h3>
        <ul>
            @foreach($restaurant->dishes as $dish)
                <li>
                    <strong>{{ $dish->name }}</strong>
                    <p>{{ $dish->description }}</p>
                    <p>Ingredienti: {{ $dish->ingredients }}</p>
                    <p>Prezzo: {{ $dish->price }}</p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection


@endsection

