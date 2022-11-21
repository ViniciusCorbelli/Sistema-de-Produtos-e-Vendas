@extends('admin.layouts.app')
@section('content')

@component('admin.components.edit')
    @slot('title', 'Editar Produto')
    @slot('url', route('products.update', $product->id))
    @slot('form')
        @include('admin.products.form')
    @endslot
@endcomponent

@endsection
