@extends('admin.layouts.app')
@section('content')

@component('admin.components.create')
    @slot('title', 'Cadastrar Vendas')
    @slot('url', route('sales.store'))
    @slot('form')
        @include('admin.sales.form')
    @endslot
@endcomponent

@endsection
