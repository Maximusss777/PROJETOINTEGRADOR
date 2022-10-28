@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edição de Produtod') }}</div>

              <div class="card-body">
                    <form method="POST" action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
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
                        <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Descrição') }}</label>
                          <div class="col-md-6">
                            <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="name" autofocus>
                            </div>
                              <div class="row mb-3">
                                <label for="preço" class="col-md-4 col-form-label text-md-end">{{ __('Preço') }}</label>
                                  <div class="col-md-6 pt-4">
                                    <input id="preço" type="text" class="form-control @error('preço') is-invalid @enderror" name="preço" value="{{ old('preço') }}" required autocomplete="name" autofocus>
@error('preço')
                                </div>
                            </div>

                                </div>
                            @enderror
                        <div class="col-md-6 pt-4">
                          <div class="row mb-0">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      {{ __('Registrar') }}
                                  </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
