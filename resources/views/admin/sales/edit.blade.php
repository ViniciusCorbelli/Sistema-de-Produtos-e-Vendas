@extends('admin.layouts.app')
@section('content')

@component('admin.components.edit')
    @slot('title', 'Editar Venda')
    @slot('url', route('sales.update', $sale->id))
    @slot('form')
        @include('admin.sales.form')
    @endslot
@endcomponent

@endsection
