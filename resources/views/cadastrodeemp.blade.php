@extends('layouts.layout')
<div class="container">

  <div class="col-md-6">
    <label for="inputCnpj" class="form-label">CNPJ</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputNomeFantasia" class="form-label">Nome Fantasia</label>
    <input type="text" class="form-control" id="inputNomeFantasia4">
  </div>
  <div class="col-6">
    <label for="inputGerenteResponsável" class="form-label">Gerente Responsável</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="">
  </div>
  <div class="col-6">
    <label for="inputE-mail" class="form-label">E-mail</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="">
  </div>
  <div class="col-md-6">
    <label for="inputEndereço" class="form-label">Endereço</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-6">
    <label for="inputRazãoSocial" class="form-label">Razão Social</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-6">
    <label for="inputTelefone" class="form-label">Telefone</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-6">
    <label for="inputSenha" class="form-label">Senha</label>
    <input type="password" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputCidade" class="form-label">Cidade</label>
    <select id="inputCidade" class="form-select">
      <option selected>Escolha...</option>
      <option>...</option>
<option>AC</option>
<option>AL</option>
<option>AP</option>
<option>AM</option>
<option>BA</option>
<option>CE</option>
<option>DF</option>
<option>ES</option>
<option>GO</option>
<option>MA</option>
<option>MT</option>
<option>MS</option>
<option>MG</option>
<option>PA</option>
<option>PB</option>
<option>PR</option>
<option>PE</option>
<option>PI</option>
<option>RJ</option>
<option>RN</option>
<option>RS</option>
<option>RO</option>
<option>RR</option>
<option>SC</option>
<option>SP</option>
<option>SE</option>
<option>TO</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">CEP</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Lembre de mim
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Entrar</button>
  </div>
</form>
</div>
  </body>
</html>
