@extends('admin.layouts.app')
@section('content')

@component('admin.components.table')
    @slot('body')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-blue order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Pedidos Recebidos</h6>
                        <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span>{{ $qtdSale }}</span></h2>
                        <p class="m-b-0">Pedidos Concluídos<span class="f-right">{{ $qtdSale }}</span></p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-green order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Pedidos Recebidos</h6>
                        <h2 class="text-right"><i class="fa fa-rocket f-left"></i><span>{{ $qtdSale }}</span></h2>
                        <p class="m-b-0">Pedidos Concluídos<span class="f-right">{{ $qtdSale }}</span></p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-yellow order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Pedidos Recebidos</h6>
                        <h2 class="text-right"><i class="fa fa-refresh f-left"></i><span>{{ $qtdSale }}</span></h2>
                        <p class="m-b-0">Pedidos Concluídos<span class="f-right">{{ $qtdSale }}</span></p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-pink order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Pedidos Recebidos</h6>
                        <h2 class="text-right"><i class="fa fa-credit-card f-left"></i><span>{{ $qtdSale }}</span></h2>
                        <p class="m-b-0">Pedidos Concluídos<span class="f-right">{{ $qtdSale }}</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endslot
@endcomponent

@endsection
