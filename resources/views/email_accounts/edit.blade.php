@extends('layouts.app')

@section('content')
    <h1>Editar Conta de E-mail</h1>
    <form action="{{ route('email_accounts.update', $emailAccount) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="email_address">Endereço de E-mail:</label>
        <input type="email" id="email_address" name="email_address" value="{{ $emailAccount->email_address }}" required>

        <label for="smtp_server">Servidor SMTP:</label>
        <input type="text" id="smtp_server" name="smtp_server" value="{{ $emailAccount->smtp_server }}" required>

        <label for="port">Porta:</label>
        <input type="number" id="port" name="port" value="{{ $emailAccount->port }}" required>

        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" value="{{ $emailAccount->username }}" required>

        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" value="{{ $emailAccount->password }}" required>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="active" {{ $emailAccount->status == 'active' ? 'selected' : '' }}>Ativo</option>
            <option value="inactive" {{ $emailAccount->status == 'inactive' ? 'selected' : '' }}>Inativo</option>
        </select>

        <button type="submit">Atualizar</button>
    </form>
@endsection
