@extends('layouts.app')

@section('content')
    <h1>Lista de Tipos de Veículos</h1>
    <a href="{{ route('vehicle_types.create') }}">Adicionar Novo Tipo de Veículo</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome do Tipo</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehicleTypes as $type)
                <tr>
                    <td>{{ $type->id }}</td>
                    <td>{{ $type->type_name }}</td>
                    <td>{{ $type->description }}</td>
                    <td>
                        <a href="{{ route('vehicle_types.show', $type) }}">Visualizar</a>
                        <a href="{{ route('vehicle_types.edit', $type) }}">Editar</a>
                        <form action="{{ route('vehicle_types.destroy', $type) }}" method="POST" style="display:inline;">
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
