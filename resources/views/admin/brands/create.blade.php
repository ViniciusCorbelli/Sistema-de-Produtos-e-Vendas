@extends('admin.layouts.app')
@section('content')

@component('admin.components.create')
    @slot('title', 'Cadastrar Marca')
    @slot('url', route('brands.store'))
    @slot('form')
        @include('admin.brands.form')
    @endslot
@endcomponent

@endsection
