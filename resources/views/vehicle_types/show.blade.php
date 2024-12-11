@extends('layouts.app')

@section('content')
    <h1>Detalhes do Tipo de Veículo</h1>
    <p><strong>ID:</strong> {{ $vehicleType->id }}</p>
    <p><strong>Nome do Tipo:</strong> {{ $vehicleType->type_name }}</p>
    <p><strong>Descrição:</strong> {{ $vehicleType->description }}</p>
    <a href="{{ route('vehicle_types.index') }}">Voltar</a>
@endsection
