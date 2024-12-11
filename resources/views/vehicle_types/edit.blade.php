@extends('layouts.app')

@section('content')
    <h1>Editar Tipo de Veículo</h1>
    <form action="{{ route('vehicle_types.update', $vehicleType) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="type_name">Nome do Tipo:</label>
        <input type="text" id="type_name" name="type_name" value="{{ $vehicleType->type_name }}" required>

        <label for="description">Descrição:</label>
        <textarea id="description" name="description" rows="4" required>{{ $vehicleType->description }}</textarea>

        <button type="submit">Atualizar</button>
    </form>
@endsection
