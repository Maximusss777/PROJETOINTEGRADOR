@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
@section('content')
<h3>Detalhes</h3>
<ul class="list-group">
<li>{{$menu->name}}</li>
<li>{{$menu->descripition}}</li>>
<li>{{$menu->is_active}}</li>>
</ul>
<div class="container-fluid">
<form class="" action="{{route('menu.product.store',$menu->id)}}" method="post">
@csrf
<select class="form-select" aria-label="Default select example" name="product_id">
  @foreach($addableProducts as $product)
  <option value="{{$product->id}}">{{$product->name}}</option>
@endforeach
    <button type="submit" class="btn btn-sucess rounded" title="Adicionar novo prato">
        <i class="bi bi-clipboard-plus"></i>
  <i class="bi bi-plus-lg"></i>
    </button>
  </div>
</select>
<button type="submit" class="btn btn-dark">Adicionar</button>
</form>
<img src="https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl={{urlencode(route('menu.public.show', $menu->id))}}" >
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Descrição</th>
      <th scope="col">Preço</th>
      <th scope="col">Disponibilidade</th>

    </tr>
  </thead>
<tbody>
    @foreach($menu->products as $product)
    <tr>
      <td><a target="_blank" href="{{route('product.show', $product->id)}}">{{$product->name}}</a></td>
      <td>{{$product->description}}</td>
        <td>{{$product->price_cents}}</td>
        <td>{{$product->is_avaliable ? 'Disponível' : 'Indisponível'}}</td>
        <td>
          <div class="btn-group" role="group" aria-label="Basic example">
            <form action="{{route('menu.product.destroy', [$menu->id, $product->id])}}" method="post">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger" title="Remover">
                <i class='bi bi-trash'></i>
              </button>
            </form>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
          @endsection
