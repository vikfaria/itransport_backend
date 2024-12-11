@extends('layouts.app')

@section('content')
    <h1>Adicionar Novo Geofence</h1>
    <form action="{{ route('geofences.store') }}" method="POST">
        @csrf

        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>

        <label for="latitude">Latitude:</label>
        <input type="text" id="latitude" name="latitude" required>

        <label for="longitude">Longitude:</label>
        <input type="text" id="longitude" name="longitude" required>

        <label for="radius">Raio (em metros):</label>
        <input type="number" id="radius" name="radius" required>

        <button type="submit">Salvar</button>
    </form>
@endsection
