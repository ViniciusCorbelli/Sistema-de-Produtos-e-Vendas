@extends('admin.layouts.app')
@section('content')

@component('admin.components.table')
    @slot('create', route('coupons.create'))
    @slot('title', 'Cupons')
    @slot('head')
        <th>Nome</th>
        <th>Valor</th>
        <th></th>
    @endslot
    @slot('body')
        @foreach ($coupons as $coupon)
                <tr>
                    <td>{{ $coupon->name }}</td>
                    <td>{{ $coupon->value }}</td>
                    <td class="options">
                        <a href="{{ route('coupons.edit', $coupon->id) }}" class="btn btn-sm btn-success"><i class="fas fa-pen"></i></a>

                        <a href="{{ route('coupons.show', $coupon->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>

                        <form class="form-delete" action="{{ route('coupons.destroy', $coupon->id) }}" method="post">
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
