@extends('layouts.app')

@section('content')
    <h1>Lista de Empresas de Veículos</h1>
    <a href="{{ route('vehicle_companies.create') }}">Adicionar Nova Empresa</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome da Empresa</th>
                <th>Endereço</th>
                <th>Contato</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehicleCompanies as $company)
                <tr>
                    <td>{{ $company->id }}</td>
                    <td>{{ $company->company_name }}</td>
                    <td>{{ $company->address }}</td>
                    <td>{{ $company->contact_number }}</td>
                    <td>
                        <a href="{{ route('vehicle_companies.show', $company) }}">Visualizar</a>
                        <a href="{{ route('vehicle_companies.edit', $company) }}">Editar</a>
                        <form action="{{ route('vehicle_companies.destroy', $company) }}" method="POST" style="display:inline;">
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
