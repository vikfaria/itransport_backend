@extends('layouts.app')

@section('content')
    <h1>Adicionar Novo Cupom</h1>
    <form action="{{ route('coupons.store') }}" method="POST">
        @csrf

        <label for="code">Código:</label>
        <input type="text" id="code" name="code" required>

        <label for="discount_type">Tipo de Desconto:</label>
        <select id="discount_type" name="discount_type" required>
            <option value="percentage">Percentual</option>
            <option value="fixed">Fixo</option>
        </select>

        <label for="discount_value">Valor do Desconto:</label>
        <input type="number" id="discount_value" name="discount_value" step="0.01" required>

        <label for="start_date">Data de Início:</label>
        <input type="datetime-local" id="start_date" name="start_date" required>

        <label for="end_date">Data de Término:</label>
        <input type="datetime-local" id="end_date" name="end_date" required>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="active">Ativo</option>
            <option value="inactive">Inativo</option>
        </select>

        <button type="submit">Salvar</button>
    </form>
@endsection
