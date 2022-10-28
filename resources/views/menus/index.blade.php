@section ("content")
@extends('layouts.layout')
<div class="CONTAINER">
  <a type="button" href="{{route('menu.create')}}"class="btn btn-primary">
    Criar Cardápio
  </a>
</div>
    <table class="table">
      <thead>
        <tr>

          <th scope="col">Nome</th>
          <th scope="col">Descrição</th>
          <th scope="col">Ativo</th>
          <th>Ações</th>
          <th></th>
        </tr>

      </thead>
      <tbody>
        @foreach($menus as $menu)
        <tr>
          <td>{{ $menu ->name}}</td>
          <td>{{ $menu->description}}</td>
          <td>{{ $menu->is_active}}</td>

          <td colspan="2" class="d-flex flex-row gap-1">
            <a href="{{route('menu.edit',$menu->id)}}" class="btn btn-warning">
              <i class="bi bi-pencil-square"></i>
            </a>
          <a href="{{route('menu.show',$menu->id)}}" class="btn btn-primary">
            <i class="bi bi-info-circle"></i>
          </a>
          <form method="POST" action="{{route('menu.destroy',$menu->id)}}">
  @csrf
  @method('delete')
              <button type="submit" class="btn btn-danger">
                <i class ="bi bi-trash3-fill"></i>
              </button>
            </form>


</td>
  <td>
<h5>Link Compartilhável</h5>
<a href="{{route('menu.public.show', $menu->id)}}">{{route('menu.public.show', $menu->id)}}</a>
        </tr>
        @endforeach
      </tbody>
    </table>
@endsection
