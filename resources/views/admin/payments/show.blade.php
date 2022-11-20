@extends('admin.layouts.app')

@section('content')
    @component('admin.components.show')
        @slot('title', 'Detalhes da Marca')
        @slot('content')
            @include('admin.payments.form')
        @endslot
        @slot('back')
            <a href="{{ route('payments.edit', $payment->id) }}" class="btn btn-primary float-right ml-1"><i class="fas fa-pen"></i> Editar</a>
            <a href="{{ route('payments.index') }}" class="btn btn-dark float-right"><i class="fas fa-undo-alt"></i> Voltar</a>
        @endslot
    @endcomponent
@endsection

@push('scripts')
    <script>
        $('.form-control' ).attr('readonly',true)
        $('.controlselect' ).attr('readonly',true)
    </script>
@endpush