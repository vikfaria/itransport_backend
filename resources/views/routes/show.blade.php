@extends('layouts.app')

@section('content')
    <h1>Detalhes da Rota</h1>
    <p><strong>ID:</strong> {{ $route->id }}</p>
    <p><strong>Local de Partida:</strong> {{ $route->pickupLocation->name }}</p>
    <p><strong>Local de Destino:</strong> {{ $route->dropoffLocation->name }}</p>
    <p><strong>Distância:</strong> {{ $route->distance }} km</p>
    <p><strong>Tempo Estimado:</strong> {{ $route->estimated_time }}</p>
    <a href="{{ route('routes.index') }}">Voltar</a>
@endsection
