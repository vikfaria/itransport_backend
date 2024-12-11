@extends('layouts.app')

@section('content')
    <h1>Detalhes da Regra de Preço</h1>
    <p><strong>ID:</strong> {{ $pricingRule->id }}</p>
    <p><strong>Nome da Regra:</strong> {{ $pricingRule->rule_name }}</p>
    <p><strong>Tipo de Veículo:</strong> {{ $pricingRule->vehicleType->type_name }}</p>
    <p><strong>Preço Base:</strong> {{ $pricingRule->base_price }}</p>
    <p><strong>Preço por KM:</strong> {{ $pricingRule->price_per_km }}</p>
    <p><strong>Preço por Minuto:</strong> {{ $pricingRule->price_per_minute }}</p>
    <a href="{{ route('pricing_rules.index') }}">Voltar</a>
@endsection
