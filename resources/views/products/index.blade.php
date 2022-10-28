@extends('layouts.layout')
@section ("content")
<div class="CONTAINER">
  <a type="button" href="{{route('product.create')}}"class="btn btn-primary">
    Cadastro
  </a>
</div>
    <table class="table">
      <thead>
        <tr>


          <th scope="col">Nome</th>
          <th scope="col">Descrição</th>
          <th scope="col">Preço</th>
          <th scope="col">Disponibilidade</th>
          <th>Ações</th>
          <th></th>
        </tr>

      </thead>
      <tbody>
        @foreach($products as $product)
        <tr>

          <td>{{ $product->name}}</td>
          <td>{{ $product->description}}</td>
          <td>{{ $product->price_cents}}</td>
          <td>{{ $product->is_available}}</td>
          <td colspan="2" class="d-flex flex-row gap-1">
            <a href="{{route('product.edit',$product->id)}}" class="btn btn-warning">
              <i class="bi bi-pencil-square"></i>
            </a>
          <form method="POST" action="{{route('product.destroy',$product->id)}}">
  @csrf
  @method('delete')
              <button type="submit" class="btn btn-danger">
                <i class ="bi bi-trash3-fill"></i>
              </button>
            </form>


</td>
        </tr>
        @endforeach
      </tbody>
    </table>
@endsection
