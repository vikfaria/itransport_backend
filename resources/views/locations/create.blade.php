@extends('layouts.app')

@section('content')
    <h1>Adicionar Nova Localização</h1>
    <form action="{{ route('locations.store') }}" method="POST">
        @csrf

        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>

        <label for="address">Endereço:</label>
        <textarea id="address" name="address" rows="4" required></textarea>

        <label for="latitude">Latitude:</label>
        <input type="text" id="latitude" name="latitude" required>

        <label for="longitude">Longitude:</label>
        <input type="text" id="longitude" name="longitude" required>

        <button type="submit">Salvar</button>
    </form>
@endsection
