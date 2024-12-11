@extends('layouts.app')

@section('content')
    <h1>Adicionar Nova Conta de E-mail</h1>
    <form action="{{ route('email_accounts.store') }}" method="POST">
        @csrf

        <label for="email_address">Endereço de E-mail:</label>
        <input type="email" id="email_address" name="email_address" required>

        <label for="smtp_server">Servidor SMTP:</label>
        <input type="text" id="smtp_server" name="smtp_server" required>

        <label for="port">Porta:</label>
        <input type="number" id="port" name="port" required>

        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="active">Ativo</option>
            <option value="inactive">Inativo</option>
        </select>

        <button type="submit">Salvar</button>
    </form>
@endsection
