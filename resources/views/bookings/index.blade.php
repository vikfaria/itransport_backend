@extends('layouts.app')

@section('content')
    <h1>Lista de Reservas</h1>
    <a href="{{ route('bookings.create') }}">Adicionar Nova Reserva</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Status</th>
                <th>Data da Reserva</th>
                <th>Data de Pickup</th>
                <th>Data de Dropoff</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
                <tr>
                    <td>{{ $booking->id }}</td>
                    <td>{{ $booking->status }}</td>
                    <td>{{ $booking->booking_date }}</td>
                    <td>{{ $booking->pickup_date }}</td>
                    <td>{{ $booking->dropoff_date }}</td>
                    <td>
                        <a href="{{ route('bookings.show', $booking) }}">Visualizar</a>
                        <a href="{{ route('bookings.edit', $booking) }}">Editar</a>
                        <form action="{{ route('bookings.destroy', $booking) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
