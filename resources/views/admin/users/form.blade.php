<div class="row">

    <div class="form-group col-sm-6">
        <label for="name" class="required">Nome </label>
        <input type="text" name="name" id="name" class="form-control" required autofocus
            value="{{ old('name', $user->name) }}">
    </div>
    <div class="form-group col-sm-6">
        <label for="email" class="required">E-mail </label>
        <input type="email" name="email" id="email" class="form-control" required
            value="{{ old('email', $user->email) }}">
    </div>

    <div class="form-group col-sm-6">
        <label for="password" class="required">Senha </label>
        <input type="password" name="password" id="password" class="form-control" required
            value="{{ old('password', $user->password) }}">
    </div>

    <div class="form-group col-sm-6">
        <label for="password" class="required">Tipo de usuário </label>
        <select class="form-control" name="user_type" value="{{ old('user_type', isset($client) ? '1' : '2') }}">
            <option {{ isset($client) ? 'checked' : '' }}value="1">Cliente</option>
            <option {{ isset($provider) ? 'checked' : ''  }}value="2">Fornecedor</option>
        </select>
    </div>

    <div class="form-group col-sm-6" id="client">
        <label for="CPF">CPF </label>
        <input type="CPF" name="CPF" id="CPF" class="form-control" value="{{ old('CPF', $client->CPF) }}">
    </div>

    <div class="form-group col-sm-6">
        <label for="telephone">Telefone </label>
        <input type="telephone" name="telephone" id="telephone" class="form-control"
            value="{{ old('telephone', $client->telephone) }}">
    </div>

    <div class="form-group col-sm-6" id="provider">
        <label for="CNPJ">CNPJ </label>
        <input type="CNPJ" name="CNPJ" id="CNPJ" class="form-control" value="{{ old('CNPJ', $client->CNPJ) }}">
    </div>

</div>
