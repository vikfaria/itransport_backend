@extends('layouts.app')

@section('content')
    <h1>Lista de Cupons</h1>
    <a href="{{ route('coupons.create') }}">Adicionar Novo Cupom</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Código</th>
                <th>Tipo de Desconto</th>
                <th>Valor do Desconto</th>
                <th>Data de Início</th>
                <th>Data de Término</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($coupons as $coupon)
                <tr>
                    <td>{{ $coupon->id }}</td>
                    <td>{{ $coupon->code }}</td>
                    <td>{{ $coupon->discount_type }}</td>
                    <td>{{ $coupon->discount_value }}</td>
                    <td>{{ $coupon->start_date }}</td>
                    <td>{{ $coupon->end_date }}</td>
                    <td>{{ $coupon->status }}</td>
                    <td>
                        <a href="{{ route('coupons.show', $coupon) }}">Visualizar</a>
                        <a href="{{ route('coupons.edit', $coupon) }}">Editar</a>
                        <form action="{{ route('coupons.destroy', $coupon) }}" method="POST" style="display:inline;">
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
