@extends('layouts.app')

@section('content')
    <h1>Detalhes do Cupom</h1>
    <p><strong>ID:</strong> {{ $coupon->id }}</p>
    <p><strong>Código:</strong> {{ $coupon->code }}</p>
    <p><strong>Tipo de Desconto:</strong> {{ $coupon->discount_type }}</p>
    <p><strong>Valor do Desconto:</strong> {{ $coupon->discount_value }}</p>
    <p><strong>Data de Início:</strong> {{ $coupon->start_date }}</p>
    <p><strong>Data de Término:</strong> {{ $coupon->end_date }}</p>
    <p><strong>Status:</strong> {{ $coupon->status }}</p>
    <a href="{{ route('coupons.index') }}">Voltar</a>
@endsection
