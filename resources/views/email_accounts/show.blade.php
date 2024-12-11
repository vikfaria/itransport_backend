@extends('layouts.app')

@section('content')
    <h1>Detalhes da Conta de E-mail</h1>
    <p><strong>ID:</strong> {{ $emailAccount->id }}</p>
    <p><strong>Endereço de E-mail:</strong> {{ $emailAccount->email_address }}</p>
    <p><strong>Servidor SMTP:</strong> {{ $emailAccount->smtp_server }}</p>
    <p><strong>Porta:</strong> {{ $emailAccount->port }}</p>
    <p><strong>Usuário:</strong> {{ $emailAccount->username }}</p>
    <p><strong>Status:</strong> {{ $emailAccount->status }}</p>
    <a href="{{ route('email_accounts.index') }}">Voltar</a>
@endsection
