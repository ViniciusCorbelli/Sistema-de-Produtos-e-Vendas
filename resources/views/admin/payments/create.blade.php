@extends('admin.layouts.app')
@section('content')

@component('admin.components.create')
    @slot('title', 'Cadastrar Pagamento')
    @slot('url', route('payments.store'))
    @slot('form')
        @include('admin.payments.form')
    @endslot
@endcomponent

@endsection
