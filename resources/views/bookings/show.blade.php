@extends('layouts.app')

@section('content')
    <h1>Detalhes da Reserva</h1>
    <p><strong>ID:</strong> {{ $booking->id }}</p>
    <p><strong>Status:</strong> {{ $booking->status }}</p>
    <p><strong>Data da Reserva:</strong> {{ $booking->booking_date }}</p>
    <p><strong>Data de Pickup:</strong> {{ $booking->pickup_date }}</p>
    <p><strong>Data de Dropoff:</strong> {{ $booking->dropoff_date }}</p>
    <a href="{{ route('bookings.index') }}">Voltar</a>
@endsection
