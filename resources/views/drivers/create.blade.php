@extends('layouts.app')

@section('content')
    <h1>Adicionar Novo Motorista</h1>
    <form action="{{ route('drivers.store') }}" method="POST">
        @csrf

        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone_number">Telefone:</label>
        <input type="text" id="phone_number" name="phone_number" required>

        <label for="license_number">Número da Licença:</label>
        <input type="text" id="license_number" name="license_number" required>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="active">Ativo</option>
            <option value="inactive">Inativo</option>
        </select>

        <button type="submit">Salvar</button>
    </form>
@endsection
