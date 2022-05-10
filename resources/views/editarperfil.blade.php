@extends('plantilla')

@section('header')
    <h1>Modificar Datos Personales</h1>
@endsection


@section('content')
<form action="{{route('actualizarperfil')}}" method="post">
    @csrf @method('patch')
    @foreach ($usuario as $a)
        
    
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$a->name}}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Apellidos') }}</label>

                            <div class="col-md-6">
                                <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{$a->apellidos}}" required autocomplete="apellido" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="rol" class="col-md-4 col-form-label text-md-end">Rol:</label>
                            <div class="col-md-6">
                                 <select name="rol" id="rol" class="form-control">
                                    <option {{"Presidente"==$a->rol ? "selected='true'" : ''}} value="Presidente">Presidente</option>
                                    <option {{"Secretario"==$a->rol ? "selected='true'" : ''}} value="Secretario">Secretario</option>
                                    <option {{"Tesorero"==$a->rol ? "selected='true'" : ''}} value="Tesorero">Tesorero</option>
                                    <option {{"Vocal"==$a->rol ? "selected='true'" : ''}} value="Vocal">Vocal</option>
                                    <option {{"Director Deportivo"==$a->rol ? "selected='true'" : ''}} value="Director Deportivo">Director Deportivo</option>
                                    <option {{"Coordinador"==$a->rol ? "selected='true'" : ''}}value="Coordinador">Coordinador</option>
                                    <option {{'Entrenador'==$a->rol ? "selected='true'" : ''}} value="Entrenador">Entrenador</option>
                                </select>
                            </div>
                           
                        </div>
                        

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$a->email}}" required autocomplete="email">

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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
</form>
@endsection