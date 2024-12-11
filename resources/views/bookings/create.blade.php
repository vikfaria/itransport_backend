@extends('layouts.app')

@section('content')
    <h1>Adicionar Nova Reserva</h1>
    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <label for="status">Status:</label>
        <input type="text" id="status" name="status" required>

        <label for="booking_date">Data da Reserva:</label>
        <input type="datetime-local" id="booking_date" name="booking_date" required>

        <label for="pickup_date">Data de Pickup:</label>
        <input type="datetime-local" id="pickup_date" name="pickup_date" required>

        <label for="dropoff_date">Data de Dropoff:</label>
        <input type="datetime-local" id="dropoff_date" name="dropoff_date" required>

        <button type="submit">Salvar</button>
    </form>
@endsection
