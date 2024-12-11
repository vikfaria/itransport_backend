@extends('layouts.app')

@section('content')
    <h1>Lista de Extras da Reserva</h1>
    <a href="{{ route('booking_extras.create') }}">Adicionar Novo Extra</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome do Extra</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($booking_extras as $extra)
                <tr>
                    <td>{{ $extra->id }}</td>
                    <td>{{ $extra->extra_name }}</td>
                    <td>{{ $extra->extra_price }}</td>
                    <td>
                        <a href="{{ route('booking_extras.show', $extra) }}">Visualizar</a>
                        <a href="{{ route('booking_extras.edit', $extra) }}">Editar</a>
                        <form action="{{ route('booking_extras.destroy', $extra) }}" method="POST" style="display:inline;">
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
