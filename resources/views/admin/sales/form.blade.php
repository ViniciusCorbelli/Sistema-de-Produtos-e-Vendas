<div class="row">

    <div class="form-group col-sm-6">
        <label for="totalSale" class="required">Valor total </label>
        <input type="number" name="totalSale" id="totalSale" class="form-control" required value="{{ old('totalSale',$sale->totalSale) }}">
    </div>

     <div class="form-group col-sm-6">
        <label for="crossdocking" class="required">Crossdocking </label>
        <input type="number" name="crossdocking" id="crossdocking" class="form-control" required value="{{ old('crossdocking',$sale->crossdocking) }}">
    </div>

    <div class="form-group col-sm-6">
        <label for="situation">Situação</label>
        <select  class="form-control" name="situation" value="">
            <option {{ old('situation',$sale->situation) == 0 ? "selected" : "" }} value="0">Aguardando pagamento</option>
            <option {{ old('situation',$sale->situation) == 1 ? "selected" : "" }} value="1">Pago</option>
            <option {{ old('situation',$sale->situation) == 2 ? "selected" : "" }} value="2">Em transporte</option>
            <option {{ old('situation',$sale->situation) == 3 ? "selected" : "" }} value="3">Entregue</option>
            <option {{ old('situation',$sale->situation) == 4 ? "selected" : "" }} value="4">Cancelada</option>
        </select>
    </div>

    <div class="form-group col-sm-12">
        <label for="note" class="required">Observação </label>
        <textarea name="note" id="note" class="form-control" required>{{ old('note',$sale->note) }}</textarea>
    </div>

    <div class="form-group col-sm-6">
        <label for="client_id">Cliente</label>
        <select  class="form-control" name="client_id" value="">
            @foreach($clients as $client)
                <option {{ old('situation',$sale->client_id) == $client->id ? "selected" : "" }} value="{{ $client->id }}">{{ $client->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-sm-6">
        <label for="coupon_id">Cupom</label>
        <select  class="form-control" name="coupon_id" value="">
            @foreach($coupons as $coupon)
                <option {{ old('situation',$sale->coupon_id) == $coupon->id ? "selected" : "" }} value="{{ $coupon->id }}">{{ $coupon->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-sm-6">
        <label for="payment_id">Pagamento</label>
        <select  class="form-control" name="payment_id" value="">
            @foreach($payments as $payment)
                <option {{ old('situation',$sale->payment_id) == $payment->id  ? "selected" : "" }} value="{{ $payment->id }}">{{ $payment->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-sm-6">
        <label for="provider_id">Produtos</label>
        <select  class="form-control" name="product_id[]" value="" multiple>
            @foreach($products as $product)
                <option {{ $sale->products()->find($product->id) != null ? "selected" : "" }} value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select>
    </div>

</div>
