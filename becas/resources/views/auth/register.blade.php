@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Regitro') }}
                </div>
                <div class="card-body">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="name">
                                {{ __('Nombre:') }}
                            </label>
                            <div class="col-md-6">
                                <input autocomplete="name" autofocus="" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required="" type="text" value="{{ old('name') }}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                    @enderror
                                </input>
                            </div>
                        </div>
                        <div class="form-group row" hidden="true">
                            <label class="col-md-4 col-form-label text-md-right" for="tipoUsuario" hidden="true">
                                {{ __('Tipo de Usuario') }}
                            </label>
                            <div class="col-md-6">
                                <input autocomplete="tipoUsuario" autofocus="" class="form-control @error('tipoUsuario') is-invalid @enderror" hidden="true" id="tipoUsuario" name="tipoUsuario" required="" type="text" value="{{ 2 }}">
                                    @error('tipoUsuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                    @enderror
                                </input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="email">
                                {{ __('Correo Electronico:') }}
                            </label>
                            <div class="col-md-6">
                                <input autocomplete="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required="" type="email" value="{{ old('email') }}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                    @enderror
                                </input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="password">
                                {{ __('Contraseña') }}
                            </label>
                            <div class="col-md-6">
                                <input autocomplete="new-password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required="" type="password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                    @enderror
                                </input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="password-confirm">
                                {{ __('Confirma Contraseña') }}
                            </label>
                            <div class="col-md-6">
                                <input autocomplete="new-password" class="form-control" id="password-confirm" name="password_confirmation" required="" type="password">
                                </input>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button class="btn btn-primary" type="submit">
                                    {{ __('Registrarse') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
