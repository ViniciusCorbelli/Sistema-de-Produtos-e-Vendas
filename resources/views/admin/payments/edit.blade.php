@extends('admin.layouts.app')
@section('content')

@component('admin.components.edit')
    @slot('title', 'Editar Marca')
    @slot('url', route('payments.update', $payment->id))
    @slot('form')
        @include('admin.payments.form')
    @endslot
@endcomponent

@endsection
