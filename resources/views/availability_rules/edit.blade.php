@extends('layouts.app')

@section('content')
    <h1>Editar Regra de Disponibilidade</h1>
    <form action="{{ route('availability_rules.update', $availabilityRule) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="vehicle_id">Veículo:</label>
        <select id="vehicle_id" name="vehicle_id" required>
            @foreach ($vehicles as $vehicle)
                <option value="{{ $vehicle->id }}" {{ $availabilityRule->vehicle_id == $vehicle->id ? 'selected' : '' }}>
                    {{ $vehicle->model }} ({{ $vehicle->license_plate }})
                </option>
            @endforeach
        </select>

        <label for="start_date">Data de Início:</label>
        <input type="datetime-local" id="start_date" name="start_date" value="{{ $availabilityRule->start_date }}" required>

        <label for="end_date">Data de Término:</label>
        <input type="datetime-local" id="end_date" name="end_date" value="{{ $availabilityRule->end_date }}" required>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="available" {{ $availabilityRule->status == 'available' ? 'selected' : '' }}>Disponível</option>
            <option value="unavailable" {{ $availabilityRule->status == 'unavailable' ? 'selected' : '' }}>Indisponível</option>
        </select>

        <button type="submit">Atualizar</button>
    </form>
@endsection
