@extends('layouts.app')

@section('content')
    <h1>Detalhes da Empresa de Veículos</h1>
    <p><strong>ID:</strong> {{ $vehicleCompany->id }}</p>
    <p><strong>Nome da Empresa:</strong> {{ $vehicleCompany->company_name }}</p>
    <p><strong>Endereço:</strong> {{ $vehicleCompany->address }}</p>
    <p><strong>Contato:</strong> {{ $vehicleCompany->contact_number }}</p>
    <a href="{{ route('vehicle_companies.index') }}">Voltar</a>
@endsection
