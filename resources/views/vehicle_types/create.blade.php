@extends('layouts.app')

@section('content')
    <h1>Adicionar Novo Tipo de Veículo</h1>
    <form action="{{ route('vehicle_types.store') }}" method="POST">
        @csrf

        <label for="type_name">Nome do Tipo:</label>
        <input type="text" id="type_name" name="type_name" required>

        <label for="description">Descrição:</label>
        <textarea id="description" name="description" rows="4" required></textarea>

        <button type="submit">Salvar</button>
    </form>
@endsection
