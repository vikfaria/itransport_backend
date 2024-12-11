@extends('layouts.app')

@section('content')
    <h1>Editar Veículo</h1>
    <form action="{{ route('vehicles.update', $vehicle) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="vehicle_type_id">Tipo do Veículo:</label>
        <select id="vehicle_type_id" name="vehicle_type_id" required>
            @foreach ($vehicleTypes as $type)
                <option value="{{ $type->id }}" {{ $vehicle->vehicle_type_id == $type->id ? 'selected' : '' }}>
                    {{ $type->type_name }}
                </option>
            @endforeach
        </select>

        <label for="vehicle_company_id">Empresa:</label>
        <select id="vehicle_company_id" name="vehicle_company_id" required>
            @foreach ($vehicleCompanies as $company)
                <option value="{{ $company->id }}" {{ $vehicle->vehicle_company_id == $company->id ? 'selected' : '' }}>
                    {{ $company->company_name }}
                </option>
            @endforeach
        </select>

        <label for="license_plate">Placa:</label>
        <input type="text" id="license_plate" name="license_plate" value="{{ $vehicle->license_plate }}" required>

        <label for="model">Modelo:</label>
        <input type="text" id="model" name="model" value="{{ $vehicle->model }}" required>

        <label for="capacity">Capacidade:</label>
        <input type="number" id="capacity" name="capacity" value="{{ $vehicle->capacity }}" required>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="active" {{ $vehicle->status == 'active' ? 'selected' : '' }}>Ativo</option>
            <option value="inactive" {{ $vehicle->status == 'inactive' ? 'selected' : '' }}>Inativo</option>
        </select>

        <button type="submit">Atualizar</button>
    </form>
@endsection
