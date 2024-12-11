@extends('layouts.app')

@section('content')
    <h1>Adicionar Nova Rota</h1>
    <form action="{{ route('routes.store') }}" method="POST">
        @csrf

        <label for="pickup_location_id">Local de Partida:</label>
        <select id="pickup_location_id" name="pickup_location_id" required>
            @foreach ($locations as $location)
                <option value="{{ $location->id }}">{{ $location->name }}</option>
            @endforeach
        </select>

        <label for="dropoff_location_id">Local de Destino:</label>
        <select id="dropoff_location_id" name="dropoff_location_id" required>
            @foreach ($locations as $location)
                <option value="{{ $location->id }}">{{ $location->name }}</option>
            @endforeach
        </select>

        <label for="distance">Distância (km):</label>
        <input type="number" id="distance" name="distance" step="0.1" required>

        <label for="estimated_time">Tempo Estimado (hh:mm):</label>
        <input type="time" id="estimated_time" name="estimated_time" required>

        <button type="submit">Salvar</button>
    </form>
@endsection
