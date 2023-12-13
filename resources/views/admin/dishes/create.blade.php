<!-- resources/views/nome_vista.blade.php -->

@extends('layouts.admin')

@section('content')
<div>
    @foreach($restaurants as $restaurant)
        <h1>Aggiungi Piatto a {{ $restaurant->name }}</h1>
    @endforeach

    <form action="{{ route('dishes.store') }}" method="POST">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" name="name" required>

        <label for="description">Descrizione:</label>
        <textarea name="description" required></textarea>

        <label for="ingredients">Ingredienti:</label>
        <textarea name="ingredients" required></textarea>

        <label for="visible">Visibile:</label>
        <input type="checkbox" name="visible" value="1" checked>

        <label for="price">Prezzo:</label>
        <input type="text" name="price" required>

        <button type="submit">Aggiungi Piatto</button>
    </form>
</div>
@endsection
