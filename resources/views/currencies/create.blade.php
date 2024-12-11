@extends('layouts.app')

@section('content')
    <h1>Adicionar Nova Moeda</h1>
    <form action="{{ route('currencies.store') }}" method="POST">
        @csrf

        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>

        <label for="code">Código:</label>
        <input type="text" id="code" name="code" maxlength="3" required>

        <label for="symbol">Símbolo:</label>
        <input type="text" id="symbol" name="symbol" required>

        <label for="exchange_rate">Taxa de Câmbio:</label>
        <input type="number" id="exchange_rate" name="exchange_rate" step="0.01" required>

        <button type="submit">Salvar</button>
    </form>
@endsection
