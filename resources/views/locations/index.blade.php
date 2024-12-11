@extends('layouts.app')

@section('content')
    <h1>Lista de Localizações</h1>
    <a href="{{ route('locations.create') }}">Adicionar Nova Localização</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($locations as $location)
                <tr>
                    <td>{{ $location->id }}</td>
                    <td>{{ $location->name }}</td>
                    <td>{{ $location->address }}</td>
                    <td>{{ $location->latitude }}</td>
                    <td>{{ $location->longitude }}</td>
                    <td>
                        <a href="{{ route('locations.show', $location) }}">Visualizar</a>
                        <a href="{{ route('locations.edit', $location) }}">Editar</a>
                        <form action="{{ route('locations.destroy', $location) }}" method="POST" style="display:inline;">
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
