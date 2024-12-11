@extends('layouts.app')

@section('content')
    <h1>Detalhes do Veículo</h1>
    <p><strong>ID:</strong> {{ $vehicle->id }}</p>
    <p><strong>Placa:</strong> {{ $vehicle->license_plate }}</p>
    <p><strong>Modelo:</strong> {{ $vehicle->model }}</p>
    <p><strong>Capacidade:</strong> {{ $vehicle->capacity }}</p>
    <p><strong>Status:</strong> {{ $vehicle->status }}</p>
    <p><strong>Tipo:</strong> {{ $vehicle->type->type_name }}</p>
    <p><strong>Empresa:</strong> {{ $vehicle->company->company_name }}</p>
    <a href="{{ route('vehicles.index') }}">Voltar</a>
@endsection
