@extends('layouts.app')

@section('content')
    <h1>Detalhes da Regra de Disponibilidade</h1>
    <p><strong>ID:</strong> {{ $availabilityRule->id }}</p>
    <p><strong>Veículo:</strong> {{ $availabilityRule->vehicle->model }} ({{ $availabilityRule->vehicle->license_plate }})</p>
    <p><strong>Data de Início:</strong> {{ $availabilityRule->start_date }}</p>
    <p><strong>Data de Término:</strong> {{ $availabilityRule->end_date }}</p>
    <p><strong>Status:</strong> {{ $availabilityRule->status }}</p>
    <a href="{{ route('availability_rules.index') }}">Voltar</a>
@endsection
