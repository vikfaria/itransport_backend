@extends('layouts.app')

@section('content')
    <h1>Adicionar Novo Atributo ao Veículo</h1>
    <form action="{{ route('vehicle_attributes.store') }}" method="POST">
        @csrf

        <label for="vehicle_id">Veículo:</label>
        <select id="vehicle_id" name="vehicle_id" required>
            @foreach ($vehicles as $vehicle)
                <option value="{{ $vehicle->id }}">{{ $vehicle->model }} ({{ $vehicle->license_plate }})</option>
            @endforeach
        </select>

        <label for="attribute_name">Nome do Atributo:</label>
        <input type="text" id="attribute_name" name="attribute_name" required>

        <label for="attribute_value">Valor do Atributo:</label>
        <input type="text" id="attribute_value" name="attribute_value" required>

        <button type="submit">Salvar</button>
    </form>
@endsection
