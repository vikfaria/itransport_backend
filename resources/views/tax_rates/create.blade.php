@extends('layouts.app')

@section('content')
    <h1>Adicionar Nova Taxa de Imposto</h1>
    <form action="{{ route('tax_rates.store') }}" method="POST">
        @csrf

        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>

        <label for="rate">Taxa (%):</label>
        <input type="number" id="rate" name="rate" step="0.01" required>

        <label for="description">Descrição:</label>
        <textarea id="description" name="description" rows="4"></textarea>

        <button type="submit">Salvar</button>
    </form>
@endsection
