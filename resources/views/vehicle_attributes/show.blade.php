@extends('layouts.app')

@section('content')
    <h1>Detalhes do Atributo do Veículo</h1>
    <p><strong>ID:</strong> {{ $vehicleAttribute->id }}</p>
    <p><strong>Veículo:</strong> {{ $vehicleAttribute->vehicle->model }} ({{ $vehicleAttribute->vehicle->license_plate }})</p>
    <p><strong>Nome do Atributo:</strong> {{ $vehicleAttribute->attribute_name }}</p>
    <p><strong>Valor do Atributo:</strong> {{ $vehicleAttribute->attribute_value }}</p>
    <a href="{{ route('vehicle_attributes.index') }}">Voltar</a>
@endsection
