@extends('layouts.app')

@section('content')
    <h1>Editar Empresa de Veículos</h1>
    <form action="{{ route('vehicle_companies.update', $vehicleCompany) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="company_name">Nome da Empresa:</label>
        <input type="text" id="company_name" name="company_name" value="{{ $vehicleCompany->company_name }}" required>

        <label for="address">Endereço:</label>
        <textarea id="address" name="address" rows="4" required>{{ $vehicleCompany->address }}</textarea>

        <label for="contact_number">Contato:</label>
        <input type="text" id="contact_number" name="contact_number" value="{{ $vehicleCompany->contact_number }}" required>

        <button type="submit">Atualizar</button>
    </form>
@endsection
