<div class="row">
    <div class="form-group col-sm-6">
        <label for="name" class="required">Nome </label>
        <input type="text" name="name" id="name" class="form-control" required autofocus value="{{ old('name',$product->name) }}">
    </div>

    <div class="form-group col-sm-6">
        <label for="sku" class="required">SKU </label>
        <input type="text" name="sku" id="sku" class="form-control" required value="{{ old('sku',$product->sku) }}">
    </div>

    <div class="form-group col-sm-6">
        <label for="unity" class="required">Unidade </label>
        <input type="text" name="unity" id="unity" class="form-control" required value="{{ old('unity',$product->unity) }}">
    </div>

    <div class="form-group col-sm-6">
        <label for="situation">Situação</label>
        <select  class="form-control" name="situation" value="">
            <option {{ old('situation',$product->situation) == 1 ? "selected" : "" }} value="1">Ativo</option>
            <option {{ old('situation',$product->situation) == 0 ? "selected" : "" }} value="0">Inativo</option>
        </select>
    </div>

    <div class="form-group col-sm-6">
        <label for="weight" class="required">Peso </label>
        <input type="number" name="weight" id="weight" class="form-control" required value="{{ old('weight',$product->weight) }}">
    </div>

    <div class="form-group col-sm-6">
        <label for="gtin" class="required">GTIN </label>
        <input type="text" name="gtin" id="gtin" class="form-control" required value="{{ old('gtin',$product->gtin) }}">
    </div>

    <div class="form-group col-sm-6">
        <label for="ean" class="required">EAN </label>
        <input type="text" name="ean" id="ean" class="form-control" required value="{{ old('ean',$product->ean) }}">
    </div>

    <div class="form-group col-sm-12">
        <label for="description" class="required">Descrição </label>
        <textarea name="description" id="description" class="form-control" required>{{ old('description',$product->description) }}</textarea>
    </div>

    <div class="form-group col-sm-6">
        <label for="width" class="required">Largura </label>
        <input type="number" name="width" id="width" class="form-control" required value="{{ old('width',$product->width) }}">
    </div>

    <div class="form-group col-sm-6">
        <label for="height" class="required">Altura </label>
        <input type="number" name="height" id="height" class="form-control" required value="{{ old('height',$product->height) }}">
    </div>

    <div class="form-group col-sm-6">
        <label for="length" class="required">Comprimento </label>
        <input type="number" name="length" id="length" class="form-control" required value="{{ old('length',$product->length) }}">
    </div>

    <div class="form-group col-sm-6">
        <label for="category_id">Categoria</label>
        <select  class="form-control" name="category_id" value="">
            <option></option>
            @foreach($categories as $category)
                <option {{ $product->category && $product->category->id == $category->id ? "selected" : "" }} value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-sm-6">
        <label for="brand_id">Marca</label>
        <select  class="form-control" name="brand_id" value="">
            <option></option>
            @foreach($brands as $brand)
                <option {{ $product->category && $product->brand->id == $brand->id ? "selected" : "" }} value="{{ $brand->id }}">{{ $brand->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-sm-6">
        <label for="provider_id">Fornecedores</label>
        <select  class="form-control" name="provider_id[]" value="" multiple>
            <option></option>
            @foreach($providers as $provider)
                <option {{ $product->provider()->find($provider->id) != null ? "selected" : "" }} value="{{ $provider->id }}">{{ $provider->name }}</option>
            @endforeach
        </select>
    </div>

</div>
