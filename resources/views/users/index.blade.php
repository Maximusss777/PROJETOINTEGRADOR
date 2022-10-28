@extends('layouts.layout')
@section ("content")
<div class="CONTAINER">
  <a type="button" href="{{route('user.create')}}"class="btn btn-primary">
    Cadastro
  </a>
</div>
    <table class="table">
      <thead>
        <tr>

          <th scope="col">Id</th>
          <th scope="col">Nome</th>
          <th scope="col">CPF</th>
          <th scope="col">Número</th>
          <th scope="col">E-mail</th>
          <th scope="col">Endereço</th>
          <th>Ações</th>
          <th></th>
        </tr>

      </thead>
      <tbody>
        @foreach($users as $user)
        <tr>
          <td scope="row">{{ $user ->id}}</td>
          <td>{{ $user->name}}</td>
          <td>{{ $user->cpf}}</td>
          <td>{{ $user->phone}}</td>
          <td>{{ $user->email}}</td>
          <td>{{ $user->address}}</td>
          <td colspan="2" class="d-flex flex-row gap-1">
            <a href="{{route('user.edit',$user->id)}}" class="btn btn-warning">
              <i class="bi bi-pencil-square"></i>
            </a>
          <a href="{{route('user.show',$user->id)}}" class="btn btn-primary">
            <i class="bi bi-info-circle"></i>
          </a>
          <form method="POST" action="{{route('user.destroy',$user->id)}}">
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
