@extends('admin.layouts.app')
@section('content')

@component('admin.components.edit')
    @slot('title', 'Editar Cupom')
    @slot('url', route('coupons.update', $coupon->id))
    @slot('form')
        @include('admin.coupons.form')
    @endslot
@endcomponent

@endsection
