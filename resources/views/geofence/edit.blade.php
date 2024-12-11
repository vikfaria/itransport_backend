@extends('layouts.app')

@section('content')
    <h1>Editar Geofence</h1>
    <form action="{{ route('geofences.update', $geofence) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" value="{{ $geofence->name }}" required>

        <label for="latitude">Latitude:</label>
        <input type="text" id="latitude" name="latitude" value="{{ $geofence->latitude }}" required>

        <label for="longitude">Longitude:</label>
        <input type="text" id="longitude" name="longitude" value="{{ $geofence->longitude }}" required>

        <label for="radius">Raio (em metros):</label>
        <input type="number" id="radius" name="radius" value="{{ $geofence->radius }}" required>

        <button type="submit">Atualizar</button>
    </form>
@endsection
