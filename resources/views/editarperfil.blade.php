@extends('plantilla')

@section('header')
    <h1>Modificar Datos Personales</h1>
@endsection


@section('content')
    <form action="{{route('actualizarperfil')}}" method="post">
        @csrf @method('patch')

        @if ($usuario = Auth::user())
            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" value="{{$usuario->name}}" required autocomplete="name" autofocus>
                </div>
            </div>

            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Apellidos') }}</label>

                <div class="col-md-6">
                    <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{$usuario->apellidos}}" required autocomplete="apellido" autofocus>
                </div>
            </div>

            <div class="row mb-3">
                <label for="rol" class="col-md-4 col-form-label text-md-end">Rol:</label>
                <div class="col-md-6">
                    <select name="rol" id="rol" class="form-control">
                        <option value="{{ $usuario->rol }}">{{ $usuario->rol }}</option>
                    </select>
                </div>
                
            </div>
            

            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electrónico') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$usuario->email}}" required disabled autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Repite Contraseña') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-success">
                        {{ __('Actualizar Perfil') }}
                    </button>
                </div>
            </div>
        @endif
    </form>
@endsection