<div class="row">

    <div class="form-group col-sm-6">
        <label for="totalSale" class="required">Valor total </label>
        <input type="number" name="totalSale" id="totalSale" class="form-control" required value="{{ old('totalSale',$sell->totalSale) }}">
    </div>

     <div class="form-group col-sm-6">
        <label for="crossdocking" class="required">Crossdocking </label>
        <input type="number" name="crossdocking" id="crossdocking" class="form-control" required value="{{ old('crossdocking',$sell->crossdocking) }}">
    </div>

    <div class="form-group col-sm-6">
        <label for="situation">Situação</label>
        <select  class="form-control" name="situation" value="">
            <option {{ old('situation',$sell->situation) == 0 ? "selected" : "" }} value="0">Aguardando pagamento</option>
            <option {{ old('situation',$sell->situation) == 1 ? "selected" : "" }} value="1">Pago</option>
            <option {{ old('situation',$sell->situation) == 2 ? "selected" : "" }} value="2">Em transporte</option>
            <option {{ old('situation',$sell->situation) == 3 ? "selected" : "" }} value="3">Entregue</option>
            <option {{ old('situation',$sell->situation) == 4 ? "selected" : "" }} value="4">Cancelada</option>
        </select>
    </div>

    <div class="form-group col-sm-12">
        <label for="note" class="required">Observação </label>
        <textarea name="note" id="note" class="form-control" required>{{ old('note',$sell->note) }}</textarea>
    </div>

    <div class="form-group col-sm-6">
        <label for="client_id">Cliente</label>
        <select  class="form-control" name="client_id" value="">
            <option></option>
            @foreach($clients as $client)
                <option {{ $sell->client && $sell->client->id == $client->id ? "selected" : "" }} value="{{ $client->id }}">{{ $client->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-sm-6">
        <label for="coupon_id">Cupom</label>
        <select  class="form-control" name="coupon_id" value="">
            <option></option>
            @foreach($coupons as $coupon)
                <option {{ $sell->coupon && $sell->coupon->id == $coupon->id ? "selected" : "" }} value="{{ $coupon->id }}">{{ $coupon->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-sm-6">
        <label for="payment_id">Pagamento</label>
        <select  class="form-control" name="payment_id" value="">
            <option></option>
            @foreach($payments as $payment)
                <option {{ $sell->payment && $sell->payment->id == $payment->id ? "selected" : "" }} value="{{ $payment->id }}">{{ $payment->name }}</option>
            @endforeach
        </select>
    </div>

</div>
