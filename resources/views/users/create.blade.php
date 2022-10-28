@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cadastro de Funcionários') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email de Acesso') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirme sua Senha') }}</label>

                            <div class="col-md-6 pt-4">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="row mb-3">
                          <label for="cpf" class="col-md-4 col-form-label text-md-end">{{ __('CPF') }}</label>
                          <div class="col-md-6 pt-4">
                            <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required autocomplete="name" autofocus>
                          </div>
                        </div>
                          <div class="row mb-3">
                          <label for="telefone" class="col-md-4 col-form-label text-md-end">{{ __('Telefone') }}</label>
                            <div class="col-md-6 pt-4">
                          <input id="telefone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="name" autofocus>
                        </div>
                      </div>


                            <div class="col-md-6">
                              <label for="inputEndereço" class="form-label">Endereço</label>
                              <input type="text" name="Endereço" class="form-control" id="inputCity">
                            </div>
                            <div class="col-md-6">
                            <div class="col-md-6 pt-4">
                            <select class="form-control" name="type">
                              <option value="manager">Gerente</option>
                                <option value="employee">Funcionário</option>
                                </select>
                    </div>
                      <div class="col-md-6 pt-4">
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
