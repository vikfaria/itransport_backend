@extends('layouts.app')

@section('content')
    <h1>Editar Rota</h1>
    <form action="{{ route('routes.update', $route) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="pickup_location_id">Local de Partida:</label>
        <select id="pickup_location_id" name="pickup_location_id" required>
            @foreach ($locations as $location)
                <option value="{{ $location->id }}" {{ $route->pickup_location_id == $location->id ? 'selected' : '' }}>
                    {{ $location->name }}
                </option>
            @endforeach
        </select>

        <label for="dropoff_location_id">Local de Destino:</label>
        <select id="dropoff_location_id" name="dropoff_location_id" required>
            @foreach ($locations as $location)
                <option value="{{ $location->id }}" {{ $route->dropoff_location_id == $location->id ? 'selected' : '' }}>
                    {{ $location->name }}
                </option>
            @endforeach
        </select>

        <label for="distance">Distância (km):</label>
        <input type="number" id="distance" name="distance" step="0.1" value="{{ $route->distance }}" required>

        <label for="estimated_time">Tempo Estimado (hh:mm):</label>
        <input type="time" id="estimated_time" name="estimated_time" value="{{ $route->estimated_time }}" required>

        <button type="submit">Atualizar</button>
    </form>
@endsection
