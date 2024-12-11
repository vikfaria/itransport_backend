@extends('layouts.app')

@section('content')
    <h1>Lista de Contas de E-mail</h1>
    <a href="{{ route('email_accounts.create') }}">Adicionar Nova Conta de E-mail</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Endereço de E-mail</th>
                <th>Servidor SMTP</th>
                <th>Porta</th>
                <th>Usuário</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($emailAccounts as $emailAccount)
                <tr>
                    <td>{{ $emailAccount->id }}</td>
                    <td>{{ $emailAccount->email_address }}</td>
                    <td>{{ $emailAccount->smtp_server }}</td>
                    <td>{{ $emailAccount->port }}</td>
                    <td>{{ $emailAccount->username }}</td>
                    <td>{{ $emailAccount->status }}</td>
                    <td>
                        <a href="{{ route('email_accounts.show', $emailAccount) }}">Visualizar</a>
                        <a href="{{ route('email_accounts.edit', $emailAccount) }}">Editar</a>
                        <form action="{{ route('email_accounts.destroy', $emailAccount) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
