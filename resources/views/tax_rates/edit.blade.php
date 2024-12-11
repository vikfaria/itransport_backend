@extends('layouts.app')

@section('content')
    <h1>Editar Taxa de Imposto</h1>
    <form action="{{ route('tax_rates.update', $taxRate) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" value="{{ $taxRate->name }}" required>

        <label for="rate">Taxa (%):</label>
        <input type="number" id="rate" name="rate" value="{{ $taxRate->rate }}" step="0.01" required>

        <label for="description">Descrição:</label>
        <textarea id="description" name="description" rows="4">{{ $taxRate->description }}</textarea>

        <button type="submit">Atualizar</button>
    </form>
@endsection
