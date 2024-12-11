@extends('layouts.app')

@section('content')
    <h1>Detalhes do Extra da Reserva</h1>
    <p><strong>ID:</strong> {{ $bookingExtra->id }}</p>
    <p><strong>Nome do Extra:</strong> {{ $bookingExtra->extra_name }}</p>
    <p><strong>Preço:</strong> R$ {{ $bookingExtra->extra_price }}</p>
    <p><strong>ID da Reserva:</strong> {{ $bookingExtra->booking_id }}</p>
    <a href="{{ route('booking_extras.index') }}">Voltar</a>
@endsection
