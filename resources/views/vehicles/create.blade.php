@extends('layouts.app')

@section('content')
    <h1>Adicionar Novo Veículo</h1>
    <form action="{{ route('vehicles.store') }}" method="POST">
        @csrf

        <label for="vehicle_type_id">Tipo do Veículo:</label>
        <select id="vehicle_type_id" name="vehicle_type_id" required>
            @foreach ($vehicleTypes as $type)
                <option value="{{ $type->id }}">{{ $type->type_name }}</option>
            @endforeach
        </select>

        <label for="vehicle_company_id">Empresa:</label>
        <select id="vehicle_company_id" name="vehicle_company_id" required>
            @foreach ($vehicleCompanies as $company)
                <option value="{{ $company->id }}">{{ $company->company_name }}</option>
            @endforeach
        </select>

        <label for="license_plate">Placa:</label>
        <input type="text" id="license_plate" name="license_plate" required>

        <label for="model">Modelo:</label>
        <input type="text" id="model" name="model" required>

        <label for="capacity">Capacidade:</label>
        <input type="number" id="capacity" name="capacity" required>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="active">Ativo</option>
            <option value="inactive">Inativo</option>
        </select>

        <button type="submit">Salvar</button>
    </form>
@endsection
