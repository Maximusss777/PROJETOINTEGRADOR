@extends('layouts.app')

@section('content')
<div class="container">
  <ul class="list-group">
<li class="list-group-item"><strong>Nome:</strong>{{$user->name}}</li>
<li class="list-group-item"><strong>Email:</strong>{{$user->email}}</li>
<li class="list-group-item"><strong>CPF:</strong>{{$user->cpf}}</li>
<li class="list-group-item"><strong>Telefone:</strong>{{$user->phone}}</li>
</ul>
@endsection
