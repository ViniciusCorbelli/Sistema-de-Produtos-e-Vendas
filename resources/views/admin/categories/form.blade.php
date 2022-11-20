<div class="row">
    <div class="form-group col-sm-6">
        <label for="name" class="required">Nome </label>
        <input type="text" name="name" id="name" class="form-control" required autofocus value="{{ old('name',$category->name) }}">
    </div>
    <div class="form-group col-sm-6">
        <label for="category_id">Categorias</label>
        <select  class="form-control" name="category_id" value="">
            <option></option>
            @foreach($categories as $cat)
                <option {{ $category->category && $cat->category->id == $cat->id ? "selected" : "" }} value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>
    </div>
</div>
