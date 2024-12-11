@extends('layouts.app')

@section('content')
    <h1>Lista de Geofences</h1>
    <a href="{{ route('geofences.create') }}">Adicionar Novo Geofence</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Raio (metros)</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($geofences as $geofence)
                <tr>
                    <td>{{ $geofence->id }}</td>
                    <td>{{ $geofence->name }}</td>
                    <td>{{ $geofence->latitude }}</td>
                    <td>{{ $geofence->longitude }}</td>
                    <td>{{ $geofence->radius }}</td>
                    <td>
                        <a href="{{ route('geofences.show', $geofence) }}">Visualizar</a>
                        <a href="{{ route('geofences.edit', $geofence) }}">Editar</a>
                        <form action="{{ route('geofences.destroy', $geofence) }}" method="POST" style="display:inline;">
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
