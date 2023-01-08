@extends('admin.layouts.app')
@section('content')

@component('admin.components.table')
    @slot('create', route('sales.create'))
    @slot('title', 'Vendas')
    @slot('head')
        <th>ID venda</th>
        <th>Forma de pagamento</th>
        <th>Total</th>
        <th></th>
    @endslot
    @slot('body')
        @foreach ($sales as $sale)
                <tr>
                    <td>{{ $sale->id }}</td>
                    <td>{{ $sale->payment->name }}</td>
                    <td>{{ $sale->totalSale }}</td>
                    <td class="options">
                        <a href="{{ route('sales.edit', $sale->id) }}" class="btn btn-sm btn-success"><i class="fas fa-pen"></i></a>

                        <a href="{{ route('sales.show', $sale->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>

                        <form class="form-delete" action="{{ route('sales.destroy', $sale->id) }}" method="post">
                            @csrf
                            @method('delete')

                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
        @endforeach
    @endslot
@endcomponent

@endsection

@push('scripts')
    <script src="{{ asset('js/components/dataTable.js') }}"></script>
    <script src="{{ asset('js/components/sweetAlert.js') }}"></script>
@endpush
