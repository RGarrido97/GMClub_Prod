<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
?>
@extends('plantilla')

@section('header')
    <h1>Mis Jugadores</h1>
@endsection
@section('content')
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('js/admin.js') }}"></script>

<h2>Crear Jugadores</h2>
<br>
<div class="jumbotron" style="text-align:center; width: 50%; margin-left: auto; margin-right: auto;">
    

    <form action="{{route('subirjugadores')}}" method="post">
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">Nombre Jugador</label>
          <br>
          <input type="text" class="form-control" name="nombre" id="">
        </div>
        
        <div class="mb-3">
          <label for="" class="form-label">Apellido Jugador</label>
          <br>
          <input type="text" class="form-control" name="apellidos" id="">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Selecciona Equipo</label>
          <br>
          <select class="form-select" name="id_equipo" id="">
            @foreach ($id as $equipos)
            <option value="{{$equipos->id}}">{{$equipos->categoria}} {{$equipos->letra}}</option>
            @endforeach
            </select>
        </div>
        <input type="submit" class="btn btn-success" value="Crear">  
</div>
          
    </form>
    <h2>Mis Jugadores</h2>
    <br>
    <table class="table table-striped table-hover" id="tabla_jugadores">
        <thead>
          <tr>
            <th scope="col" style="text-align: center">Equipo</th>
            <th scope="col" style="text-align: center">Nombre</th>
            <th scope="col" style="text-align: center">Apellidos</th>
            <th scope="col" style="text-align: center">Goles</th>
            <th scope="col" style="text-align: center">Asistenicas</th>
            <th scope="col" style="text-align: center">Amarillas</th>
            <th scope="col" style="text-align: center">Rojas</th>
            <th scope="col" style="text-align: center">Actualizar</th>
            <th scope="col" style="text-align: center">Eliminar</th>
          </tr>
        </thead>
        <tbody>
            @foreach($u as $user)
            
               
                    <tr>
                        <form action="{{route('actualizar_jugador',$user)}}" method="post">
                          @csrf 
                          @method('PATCH')
                    
                          <td style="text-align: center">{{JugadoresController::devolverEquipo($user->id_equipo)}}</td> 
                          <td style="text-align: center"><input id="name" type="text" class="form-control" name="name" value="{{$user->nombre}}" required autocomplete="name" autofocus></td> 
                          <td style="text-align: center"><input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{$user->apellidos}}" required autocomplete="apellido" autofocus></td>
                          <td style="text-align: center">{{$user->goles}}</td>
                          <td style="text-align: center">{{$user->asistencias}}</td>
                          <td style="text-align: center">{{$user->ta}}</td>
                          <td style="text-align: center">{{$user->tr}}</td>
                          <td style="text-align: center"><input name="" class="btn btn-outline-warning" id=""  type="submit" value="Actualizar"></td>
                        </form>
                        <td style="text-align: center"><form action="{{route('eliminarjugador',$user)}}" method="post">
                            @csrf @method('DELETE')
                            <input type="submit" class="btn btn-outline-danger" value="Eliminar">
                        </form></td>
                    </tr>
                
            
            @endforeach
        </tbody>
      </table>
@endsection