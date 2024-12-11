@extends('layouts.app')

@section('content')
    <h1>Detalhes da Localização</h1>
    <p><strong>ID:</strong> {{ $location->id }}</p>
    <p><strong>Nome:</strong> {{ $location->name }}</p>
    <p><strong>Endereço:</strong> {{ $location->address }}</p>
    <p><strong>Latitude:</strong> {{ $location->latitude }}</p>
    <p><strong>Longitude:</strong> {{ $location->longitude }}</p>
    <a href="{{ route('locations.index') }}">Voltar</a>
@endsection
