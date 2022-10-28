@extends('layouts.app')

@section('content')
<div class="container">
<h1>Cadastro de Cardápios</h1>
                    <form method="POST" action="{{ route('menu.store') }}" enctype="multipart/form-data">
                        @csrf
                           <div class="d-flex flex-row gap-2">
                            <label for="name" class="col-form-label">{{ __('Nome') }}</label>

                               <div class="mb-3 w-50">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                                </div>
                              </div>
                              <div class="d-flex flex-row gap-2">
                                <label for="preço" class="col-form-label">{{ __('Preço') }}</label>
                                  <div class="mb-3 w-50">
                                    <input id="preço" type="text" class="form-control @error('preço') is-invalid @enderror" name="preço" value="{{ old('preço') }}" required autocomplete="preço" autofocus>

                                </div>
                              </div>

                                <div class="d-flex flex-row gap-2">
                                  <label for="description" class="col-form-label">{{ __('Descrição') }}</label>

                                  <div class="mb-3 w-50">
                                      <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>
                                  </div>
                                </div>
                                <select class="form-select w-50" aria-label="Default select example" name="is_active">
                                  <option value="0">Desativado</option>
                                  <option value="1">Ativo</option>
                                </select>
                        <div class="d-flex flex-row gap-2">
                          <div class="row mb-0">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      {{ __('Salvar') }}
                                  </button>
                              </div>
                            </div>
                          </div>
                        </div>












@endsection
