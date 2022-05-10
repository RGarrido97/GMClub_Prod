@extends('plantilla')

@section('header')
    <h1>Crear Usuarios de la Junta Directiva</h1>
@endsection
@section('content')
    <form action="{{route('crearusuariojunta')}}" method="post">
        @csrf
        <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="" required autocomplete="name" autofocus>
            </div>
        </div>

        <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Apellidos') }}</label>

            <div class="col-md-6">
                <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="" required autocomplete="apellido" autofocus>
            </div>
        </div>

        <div class="row mb-3">
            <label for="rol" class="col-md-4 col-form-label text-md-end">Rol:</label>
            <div class="col-md-6">
                    <select name="rol" id="rol" class="form-control">
                    <option  value="Presidente">Presidente</option>
                    <option  value="Secretario">Secretario</option>
                    <option  value="Tesorero">Tesorero</option>
                    <option  value="Vocal">Vocal</option>
                    <option  value="Director Deportivo">Director Deportivo</option>
                    <option value="Coordinador">Coordinador</option>
                    <option value="Entrenador">Entrenador</option>
                </select>
            </div>
            
        </div>
        

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electrónico') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email">

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
                <button type="submit" class="btn btn-outline-success">
                    {{ __('Crear Miembro') }}
                </button>
            </div>
        </div>
    </form>
    <br>
    <h1>Miembros del Club</h1>
    <br>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col" style="text-align: center">Nombre</th>
            <th scope="col" style="text-align: center">Apellidos</th>
            <th scope="col" style="text-align: center">Correo Electrónico</th>
            <th scope="col" style="text-align: center">Tipo de Cargo</th>
            <th scope="col" style="text-align: center">Editar</th>
            <th scope="col" style="text-align: center">Eliminar</th>
          </tr>
        </thead>
        <tbody>
            @foreach($id as $user)
            <tr>
                <td style="text-align: center">{{$user->name}}</td> 
                <td style="text-align: center">{{$user->apellidos}}</td>
                <td style="text-align: center">{{$user->email}}</td>
                <td style="text-align: center">{{$user->rol}}</td>
                <td style="text-align: center"><a href="{{route('editar_usuario',$user)}}" class="btn btn-outline-success">Editar</a></td>
                <td style="text-align: center"><form action="{{route('eliminarusario',$user)}}" method="post">
                    @csrf @method('DELETE')
                    <input type="submit" class="btn btn-outline-danger" value="Eliminar">
                </form></td>
            </tr>
            @endforeach
        </tbody>
      </table>
@endsection