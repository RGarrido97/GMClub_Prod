@extends('plantilla')

@section('header')
    <h1>Crear Entrenadores</h1>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Nuevo Entrenador') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

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
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Apellidos') }}</label>

                                <div class="col-md-6">
                                    <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{ old('apellido') }}" required autocomplete="apellido" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                    <label for="rol" class="col-md-4 col-form-label text-md-end">Rol:</label>
                                    <div class="col-md-6">
                                        <select name="rol" id="rol" class="form-control" disabled>
                                            <option value="Entrenador">Entrenador</option>
                                        </select>
                                    </div>
                            </div>
                            

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electrónico') }}</label>

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
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Regístrate') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <h1>Entrenadores</h1>
    @foreach($id as $user)
    
    <br>

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col" style="text-align: center">Nombre</th>
            <th scope="col" style="text-align: center">Apellidos</th>
            <th scope="col" style="text-align: center">Correo Electrónico</th>
            <th scope="col" style="text-align: center">Editar</th>
            <th scope="col" style="text-align: center">Eliminar</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center">{{$user->name}}</td> 
                <td style="text-align: center">{{$user->apellidos}}</td>
                <td style="text-align: center">{{$user->email}}</td>
                <td style="text-align: center"><a href="{{route('editar_usuario',$user)}}" class="btn btn-outline-success">Editar</a></td>
                <td style="text-align: center"><form action="{{route('eliminarusario',$user)}}" method="post">
                    @csrf @method('DELETE')
                    <input type="submit" class="btn btn-outline-danger" value="Eliminar">
                </form></td>
            </tr>
        </tbody>
      </table>
                        
    @endforeach
@endsection
