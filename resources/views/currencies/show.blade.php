@extends('layouts.app')

@section('content')
    <h1>Detalhes da Moeda</h1>
    <p><strong>ID:</strong> {{ $currency->id }}</p>
    <p><strong>Nome:</strong> {{ $currency->name }}</p>
    <p><strong>Código:</strong> {{ $currency->code }}</p>
    <p><strong>Símbolo:</strong> {{ $currency->symbol }}</p>
    <p><strong>Taxa de Câmbio:</strong> {{ $currency->exchange_rate }}</p>
    <a href="{{ route('currencies.index') }}">Voltar</a>
@endsection
