@extends('layouts.app')

@section('content')
    <h1>Lista de Motoristas</h1>
    <a href="{{ route('drivers.create') }}">Adicionar Novo Motorista</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Número da Licença</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($drivers as $driver)
                <tr>
                    <td>{{ $driver->id }}</td>
                    <td>{{ $driver->name }}</td>
                    <td>{{ $driver->email }}</td>
                    <td>{{ $driver->phone_number }}</td>
                    <td>{{ $driver->license_number }}</td>
                    <td>{{ $driver->status }}</td>
                    <td>
                        <a href="{{ route('drivers.show', $driver) }}">Visualizar</a>
                        <a href="{{ route('drivers.edit', $driver) }}">Editar</a>
                        <form action="{{ route('drivers.destroy', $driver) }}" method="POST" style="display:inline;">
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
