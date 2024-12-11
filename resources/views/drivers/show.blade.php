@extends('layouts.app')

@section('content')
    <h1>Detalhes do Motorista</h1>
    <p><strong>ID:</strong> {{ $driver->id }}</p>
    <p><strong>Nome:</strong> {{ $driver->name }}</p>
    <p><strong>Email:</strong> {{ $driver->email }}</p>
    <p><strong>Telefone:</strong> {{ $driver->phone_number }}</p>
    <p><strong>Número da Licença:</strong> {{ $driver->license_number }}</p>
    <p><strong>Status:</strong> {{ $driver->status }}</p>
    <a href="{{ route('drivers.index') }}">Voltar</a>
@endsection
