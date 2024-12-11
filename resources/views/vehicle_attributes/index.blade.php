@extends('layouts.app')

@section('content')
    <h1>Lista de Atributos dos Veículos</h1>
    <a href="{{ route('vehicle_attributes.create') }}">Adicionar Novo Atributo</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Veículo</th>
                <th>Nome do Atributo</th>
                <th>Valor do Atributo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehicleAttributes as $attribute)
                <tr>
                    <td>{{ $attribute->id }}</td>
                    <td>{{ $attribute->vehicle->model }} ({{ $attribute->vehicle->license_plate }})</td>
                    <td>{{ $attribute->attribute_name }}</td>
                    <td>{{ $attribute->attribute_value }}</td>
                    <td>
                        <a href="{{ route('vehicle_attributes.show', $attribute) }}">Visualizar</a>
                        <a href="{{ route('vehicle_attributes.edit', $attribute) }}">Editar</a>
                        <form action="{{ route('vehicle_attributes.destroy', $attribute) }}" method="POST" style="display:inline;">
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
