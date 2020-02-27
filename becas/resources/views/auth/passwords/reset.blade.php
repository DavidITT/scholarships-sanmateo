@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Restablecer Password') }}
                </div>
                <div class="card-body">
                    <form action="{{ route('password.update') }}" method="POST">
                        @csrf
                        <input name="token" type="hidden" value="{{ $token }}">
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="email">
                                    {{ __('Correo Electronico:') }}
                                </label>
                                <div class="col-md-6">
                                    <input autocomplete="email" autofocus="" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required="" type="email" value="{{ $email ?? old('email') }}">
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
                                    {{ __('Confirmar Contraseña') }}
                                </label>
                                <div class="col-md-6">
                                    <input autocomplete="new-password" class="form-control" id="password-confirm" name="password_confirmation" required="" type="password">
                                    </input>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button class="btn btn-primary" type="submit">
                                        {{ __('Restablecer Password') }}
                                    </button>
                                </div>
                            </div>
                        </input>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
