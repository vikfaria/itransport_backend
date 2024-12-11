@extends('layouts.app')

@section('content')
    <h1>Editar Regra de Preço</h1>
    <form action="{{ route('pricing_rules.update', $pricingRule) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="rule_name">Nome da Regra:</label>
        <input type="text" id="rule_name" name="rule_name" value="{{ $pricingRule->rule_name }}" required>

        <label for="vehicle_type_id">Tipo de Veículo:</label>
        <select id="vehicle_type_id" name="vehicle_type_id" required>
            @foreach ($vehicleTypes as $type)
                <option value="{{ $type->id }}" {{ $pricingRule->vehicle_type_id == $type->id ? 'selected' : '' }}>
                    {{ $type->type_name }}
                </option>
            @endforeach
        </select>

        <label for="base_price">Preço Base:</label>
        <input type="number" id="base_price" name="base_price" value="{{ $pricingRule->base_price }}" step="0.01" required>

        <label for="price_per_km">Preço por KM:</label>
        <input type="number" id="price_per_km" name="price_per_km" value="{{ $pricingRule->price_per_km }}" step="0.01" required>

        <label for="price_per_minute">Preço por Minuto:</label>
        <input type="number" id="price_per_minute" name="price_per_minute" value="{{ $pricingRule->price_per_minute }}" step="0.01" required>

        <button type="submit">Atualizar</
