@extends('layouts.app')

@section('content')
<div class="container">
<h1>Edição de Cardápios</h1>
                    <form method="POST" action="{{ route('menu.update',$menu->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                           <div class="d-flex flex-row gap-2">
                            <label for="name" class="col-form-label">{{ __('Nome') }}</label>

                               <div class="mb-3 w-50">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name',$menu->name) }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                                </div>
                              </div>
                            

                                <div class="d-flex flex-row gap-2">
                                  <label for="description" class="col-form-label">{{ __('Descrição') }}</label>

                                  <div class="mb-3 w-50">
                                      <input id="descripition" type="text" class="form-control @error('descripition') is-invalid @enderror" name="descripition" value="{{ old('descripition',$menu->descripition) }}" required autocomplete="descripition" autofocus>
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
