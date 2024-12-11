@extends('layouts.app')

@section('content')
    <h1>Editar Cupom</h1>
    <form action="{{ route('coupons.update', $coupon) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="code">Código:</label>
        <input type="text" id="code" name="code" value="{{ $coupon->code }}" required>

        <label for="discount_type">Tipo de Desconto:</label>
        <select id="discount_type" name="discount_type" required>
            <option value="percentage" {{ $coupon->discount_type == 'percentage' ? 'selected' : '' }}>Percentual</option>
            <option value="fixed" {{ $coupon->discount_type == 'fixed' ? 'selected' : '' }}>Fixo</option>
        </select>

        <label for="discount_value">Valor do Desconto:</label>
        <input type="number" id="discount_value" name="discount_value" value="{{ $coupon->discount_value }}" step="0.01" required>

        <label for="start_date">Data de Início:</label>
        <input type="datetime-local" id="start_date" name="start_date" value="{{ $coupon->start_date }}" required>

        <label for="end_date">Data de Término:</label>
        <input type="datetime-local" id="end_date" name="end_date" value="{{ $coupon->end_date }}" required>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="active" {{ $coupon->status == 'active' ? 'selected' : '' }}>Ativo</option>
            <option value="inactive" {{ $coupon->status == 'inactive' ? 'selected' : '' }}>Inativo</option>
        </select>

        <button type="submit">Atualizar</button>
    </form>
@endsection
