@extends('layouts.app')

@section('content')
    <h1>Lista de Rotas</h1>
    <a href="{{ route('routes.create') }}">Adicionar Nova Rota</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Local de Partida</th>
                <th>Local de Destino</th>
                <th>Distância</th>
                <th>Tempo Estimado</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($routes as $route)
                <tr>
                    <td>{{ $route->id }}</td>
                    <td>{{ $route->pickupLocation->name }}</td>
                    <td>{{ $route->dropoffLocation->name }}</td>
                    <td>{{ $route->distance }} km</td>
                    <td>{{ $route->estimated_time }}</td>
                    <td>
                        <a href="{{ route('routes.show', $route) }}">Visualizar</a>
                        <a href="{{ route('routes.edit', $route) }}">Editar</a>
                        <form action="{{ route('routes.destroy', $route) }}" method="POST" style="display:inline;">
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
