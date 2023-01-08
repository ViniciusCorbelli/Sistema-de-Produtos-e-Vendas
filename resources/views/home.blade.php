@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($products as $product)
    <section class="section-products">
		<div class="container">
            <div class="row justify-content-center text-center">
               <div class="col-md-8 col-lg-6">
                  <div class="header">
                     <h3>Produto em destaque</h3>
                     <h2>Produtos populares</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 col-lg-4 col-xl-3">
                  <div id="product-4" class="single-product">
                     <div class="part-1">
                        <span class="new">Novo</span>
                        <ul>
                           <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                           <li><a href="#"><i class="fas fa-heart"></i></a></li>
                           <li><a href="#"><i class="fas fa-plus"></i></a></li>
                           <li><a href="#"><i class="fas fa-expand"></i></a></li>
                        </ul>
                     </div>
                     <div class="part-2">
                        <h3 class="product-title">{{ $product->name }}</h3>
                        <h4 class="product-price">R$ {{  number_format($product->weight, 2) }}</h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
    </section>
    @endforeach
</div>
@endsection
