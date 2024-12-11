@extends('layouts.app')

@section('content')
    <h1>Editar Moeda</h1>
    <form action="{{ route('currencies.update', $currency) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" value="{{ $currency->name }}" required>

        <label for="code">Código:</label>
        <input type="text" id="code" name="code" value="{{ $currency->code }}" maxlength="3" required>

        <label for="symbol">Símbolo:</label>
        <input type="text" id="symbol" name="symbol" value="{{ $currency->symbol }}" required>

        <label for="exchange_rate">Taxa de Câmbio:</label>
        <input type="number" id="exchange_rate" name="exchange_rate" value="{{ $currency->exchange_rate }}" step="0.01" required>

        <button type="submit">Atualizar</button>
    </form>
@endsection
