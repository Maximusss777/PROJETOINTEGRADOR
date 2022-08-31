@extends('layouts.layout')
<div class="CONTAINER">

</div>
    <table class="table">
      <thead>
        <tr>

          <th scope="col">Produto</th>
          <th scope="col">Preço</th>
          <th scope="col">Descrição</th>
<th scope="col">Status</th>
          <th>Opcões</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>X-Burguer</td>
          <td>12,00 R$</td>
          <td>Pão brioche, carne 250g,alface,tomate e queijo</td>
<td><div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
  <label class="form-check-label" for="flexSwitchCheckChecked"></label>
</div></td>
          <td><button type="button" class="btn btn-danger">Deletar</button></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td><div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
  <label class="form-check-label" for="flexSwitchCheckChecked"></label>
</div></td>
<td><button type="button" class="btn btn-danger">Deletar</button></td>
        </tr>
        <tr>
          <td colspan="2"></td>
          <td></td>
          <td><div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
  <label class="form-check-label" for="flexSwitchCheckChecked"></label>
</div></td>
<td><button type="button" class="btn btn-danger">Deletar</button></td>
        </tr>
      </tbody>
    </table>
  </body>
</html>
