@extends('layouts.app')

@section('content')
    <h1>Lista de Taxas de Imposto</h1>
    <a href="{{ route('tax_rates.create') }}">Adicionar Nova Taxa de Imposto</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Taxa (%)</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($taxRates as $taxRate)
                <tr>
                    <td>{{ $taxRate->id }}</td>
                    <td>{{ $taxRate->name }}</td>
                    <td>{{ $taxRate->rate }}</td>
                    <td>{{ $taxRate->description }}</td>
                    <td>
                        <a href="{{ route('tax_rates.show', $taxRate) }}">Visualizar</a>
                        <a href="{{ route('tax_rates.edit', $taxRate) }}">Editar</a>
                        <form action="{{ route('tax_rates.destroy', $taxRate) }}" method="POST" style="display:inline;">
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
