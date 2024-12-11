@extends('layouts.app')

@section('content')
    <h1>Detalhes do Geofence</h1>
    <p><strong>ID:</strong> {{ $geofence->id }}</p>
    <p><strong>Nome:</strong> {{ $geofence->name }}</p>
    <p><strong>Latitude:</strong> {{ $geofence->latitude }}</p>
    <p><strong>Longitude:</strong> {{ $geofence->longitude }}</p>
    <p><strong>Raio (em metros):</strong> {{ $geofence->radius }}</p>
    <a href="{{ route('geofences.index') }}">Voltar</a>
@endsection
