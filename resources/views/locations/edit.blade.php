@extends('layouts.app')

@section('content')
    <h1>Editar Localização</h1>
    <form action="{{ route('locations.update', $location) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" value="{{ $location->name }}" required>

        <label for="address">Endereço:</label>
        <textarea id="address" name="address" rows="4" required>{{ $location->address }}</textarea>

        <label for="latitude">Latitude:</label>
        <input type="text" id="latitude" name="latitude" value="{{ $location->latitude }}" required>

        <label for="longitude">Longitude:</label>
        <input type="text" id="longitude" name="longitude" value="{{ $location->longitude }}" required>

        <button type="submit">Atualizar</button>
    </form>
@endsection
