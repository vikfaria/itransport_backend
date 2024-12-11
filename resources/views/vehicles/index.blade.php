@extends('layouts.app')

@section('content')
    <h1>Lista de Veículos</h1>
    <a href="{{ route('vehicles.create') }}">Adicionar Novo Veículo</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Placa</th>
                <th>Modelo</th>
                <th>Capacidade</th>
                <th>Status</th>
                <th>Tipo</th>
                <th>Empresa</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehicles as $vehicle)
                <tr>
                    <td>{{ $vehicle->id }}</td>
                    <td>{{ $vehicle->license_plate }}</td>
                    <td>{{ $vehicle->model }}</td>
                    <td>{{ $vehicle->capacity }}</td>
                    <td>{{ $vehicle->status }}</td>
                    <td>{{ $vehicle->type->type_name }}</td>
                    <td>{{ $vehicle->company->company_name }}</td>
                    <td>
                        <a href="{{ route('vehicles.show', $vehicle) }}">Visualizar</a>
                        <a href="{{ route('vehicles.edit', $vehicle) }}">Editar</a>
                        <form action="{{ route('vehicles.destroy', $vehicle) }}" method="POST" style="display:inline;">
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
