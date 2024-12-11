@extends('layouts.app')

@section('content')
    <h1>Lista de Moedas</h1>
    <a href="{{ route('currencies.create') }}">Adicionar Nova Moeda</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Código</th>
                <th>Símbolo</th>
                <th>Taxa de Câmbio</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($currencies as $currency)
                <tr>
                    <td>{{ $currency->id }}</td>
                    <td>{{ $currency->name }}</td>
                    <td>{{ $currency->code }}</td>
                    <td>{{ $currency->symbol }}</td>
                    <td>{{ $currency->exchange_rate }}</td>
                    <td>
                        <a href="{{ route('currencies.show', $currency) }}">Visualizar</a>
                        <a href="{{ route('currencies.edit', $currency) }}">Editar</a>
                        <form action="{{ route('currencies.destroy', $currency) }}" method="POST" style="display:inline;">
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
