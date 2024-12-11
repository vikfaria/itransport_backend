@extends('layouts.app')

@section('content')
    <h1>Editar Motorista</h1>
    <form action="{{ route('drivers.update', $driver) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" value="{{ $driver->name }}" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $driver->email }}" required>

        <label for="phone_number">Telefone:</label>
        <input type="text" id="phone_number" name="phone_number" value="{{ $driver->phone_number }}" required>

        <label for="license_number">Número da Licença:</label>
        <input type="text" id="license_number" name="license_number" value="{{ $driver->license_number }}" required>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="active" {{ $driver->status == 'active' ? 'selected' : '' }}>Ativo</option>
            <option value="inactive" {{ $driver->status == 'inactive' ? 'selected' : '' }}>Inativo</option>
        </select>

        <button type="submit">Atualizar</button>
    </form>
@endsection
