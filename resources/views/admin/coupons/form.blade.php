<div class="row">
    <div class="form-group col-sm-6">
        <label for="name" class="required">Nome </label>
        <input type="text" name="name" id="name" class="form-control" required autofocus value="{{ old('name',$coupon->name) }}">
    </div>

    <div class="form-group col-sm-6">
        <label for="value" class="required">Valor </label>
        <input type="number" value="value" id="value" class="form-control" required autofocus value="{{ old('value',$coupon->value) }}">
    </div>
</div>
