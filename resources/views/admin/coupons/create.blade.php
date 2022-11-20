@extends('admin.layouts.app')
@section('content')

@component('admin.components.create')
    @slot('title', 'Cadastrar Cupom')
    @slot('url', route('coupons.store'))
    @slot('form')
        @include('admin.coupons.form')
    @endslot
@endcomponent

@endsection
