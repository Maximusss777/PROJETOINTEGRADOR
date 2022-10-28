<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
@vite(['resources/js/app.js'])
  <title>@yield("title")</title>
  </head>
  <body>
    <nav class="navbar navbar-expand" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="{{route('menu.index')}}">Cardápios</a>
        <a class="nav-link" href='login'>Login</a>
<a class="nav-link" href="cadastrodeemp">Cadastro de empresas</a>
<a class="nav-link" href="{{route('user.index')}}">Empregados</a>
<a class="nav-link" href="{{route('product.index')}}">Produtos</a>
<a class="nav-link" href=""></a>
      </div>
    </div>
  </div>
</nav>
@yield("content")
  </body>
</html>
