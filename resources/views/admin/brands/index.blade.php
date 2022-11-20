@extends('admin.layouts.app')
@section('content')

@component('admin.components.table')
    @slot('create', route('brands.create'))
    @slot('title', 'Marcas')
    @slot('head')
        <th>Nome</th>
        <th></th>
    @endslot
    @slot('body')
        @foreach ($brands as $brand)
                <tr>
                    <td>{{ $brand->name }}</td>
                    <td class="options">
                        <a href="{{ route('brands.edit', $brand->id) }}" class="btn btn-sm btn-success"><i class="fas fa-pen"></i></a>

                        <a href="{{ route('brands.show', $brand->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>

                        <form class="form-delete" action="{{ route('brands.destroy', $brand->id) }}" method="post">
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
