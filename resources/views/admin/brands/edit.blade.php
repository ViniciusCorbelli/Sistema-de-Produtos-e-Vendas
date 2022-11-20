@extends('admin.layouts.app')
@section('content')

@component('admin.components.edit')
    @slot('title', 'Editar Marca')
    @slot('url', route('brands.update', $brand->id))
    @slot('form')
        @include('admin.brands.form')
    @endslot
@endcomponent

@endsection
