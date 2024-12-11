@extends('layouts.app')

@section('content')
    <h1>Detalhes da Taxa de Imposto</h1>
    <p><strong>ID:</strong> {{ $taxRate->id }}</p>
    <p><strong>Nome:</strong> {{ $taxRate->name }}</p>
    <p><strong>Taxa (%):</strong> {{ $taxRate->rate }}</p>
    <p><strong>Descrição:</strong> {{ $taxRate->description }}</p>
    <a href="{{ route('tax_rates.index') }}">Voltar</a>
@endsection
