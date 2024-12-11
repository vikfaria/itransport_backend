@extends('layouts.app')

@section('content')
    <h1>Adicionar Novo Extra</h1>
    <form action="{{ route('booking_extras.store') }}" method="POST">
        @csrf
        <label for="extra_name">Nome do Extra:</label>
        <input type="text" id="extra_name" name="extra_name" required>

        <label for="extra_price">Preço do Extra:</label>
        <input type="number" id="extra_price" name="extra_price" step="0.01" required>

        <label for="booking_id">ID da Reserva:</label>
        <input type="number" id="booking_id" name="booking_id" required>

        <button type="submit">Salvar</button>
    </form>
@endsection
