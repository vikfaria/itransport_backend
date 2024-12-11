@extends('layouts.app')

@section('content')
    <h1>Lista de Regras de Preços</h1>
    <a href="{{ route('pricing_rules.create') }}">Adicionar Nova Regra de Preço</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome da Regra</th>
                <th>Tipo de Veículo</th>
                <th>Preço Base</th>
                <th>Preço por KM</th>
                <th>Preço por Minuto</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pricingRules as $rule)
                <tr>
                    <td>{{ $rule->id }}</td>
                    <td>{{ $rule->rule_name }}</td>
                    <td>{{ $rule->vehicleType->type_name }}</td>
                    <td>{{ $rule->base_price }}</td>
                    <td>{{ $rule->price_per_km }}</td>
                    <td>{{ $rule->price_per_minute }}</td>
                    <td>
                        <a href="{{ route('pricing_rules.show', $rule) }}">Visualizar</a>
                        <a href="{{ route('pricing_rules.edit', $rule) }}">Editar</a>
                        <form action="{{ route('pricing_rules.destroy', $rule) }}" method="POST" style="display:inline;">
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
