@extends('layouts.app')

@section('content')
    <h1>Lista de Regras de Disponibilidade</h1>
    <a href="{{ route('availability_rules.create') }}">Adicionar Nova Regra de Disponibilidade</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Veículo</th>
                <th>Data de Início</th>
                <th>Data de Término</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($availabilityRules as $rule)
                <tr>
                    <td>{{ $rule->id }}</td>
                    <td>{{ $rule->vehicle->model }} ({{ $rule->vehicle->license_plate }})</td>
                    <td>{{ $rule->start_date }}</td>
                    <td>{{ $rule->end_date }}</td>
                    <td>{{ $rule->status }}</td>
                    <td>
                        <a href="{{ route('availability_rules.show', $rule) }}">Visualizar</a>
                        <a href="{{ route('availability_rules.edit', $rule) }}">Editar</a>
                        <form action="{{ route('availability_rules.destroy', $rule) }}" method="POST" style="display:inline;">
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
