@extends('layouts.app')

@section('content')
    <h1>Adicionar Nova Empresa</h1>
    <form action="{{ route('vehicle_companies.store') }}" method="POST">
        @csrf

        <label for="company_name">Nome da Empresa:</label>
        <input type="text" id="company_name" name="company_name" required>

        <label for="address">Endereço:</label>
        <textarea id="address" name="address" rows="4" required></textarea>

        <label for="contact_number">Contato:</label>
        <input type="text" id="contact_number" name="contact_number" required>

        <button type="submit">Salvar</button>
    </form>
@endsection
