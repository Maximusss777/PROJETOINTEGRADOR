@extends('layouts.layout')
@section ("content")
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
<h1 class= "text-center">Acesso a Conta </h1>
    <form>
      <div class="mb-3" >
        <label for="exampleInputEmail1" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Nunca compartilharemos seu e-mail.</div>
      </div>
      <div class="mb-3">
        <label for="inputPassword5" class="form-label">Senha</label>
  <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
  <div id="passwordHelpBlock" class="form-text">
    Sua senha deve ter de 8 a 20 caracteres, conter letras e números e não deve conter espaços, caracteres especiais ou emoji.
  </div>
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Confirmar</label>
      </div>
      <button type="submit" class="btn btn-primary">
    {{ __('Enviar') }}
    </form>
  </div>
  </body>
</html>
@endsection
