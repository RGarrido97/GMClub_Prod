<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
?>
@extends('plantilla')

@section('header')
    <h1>Crear Usuarios del Jugadores</h1>
@endsection
@section('content')
    <form action="{{route('subirjugadores')}}" method="post">
        @csrf
            <input type="text" name="nombre" id="">
            <input type="text" name="apellidos" id="">
            <select name="id_equipo" id="">
            @foreach ($id as $equipos)
            <option value="{{$equipos->id}}">{{$equipos->categoria}} {{$equipos->letra}}</option>
            @endforeach
            </select>
            <input type="submit" value="Crear">
    </form>
    
    <br>
    <h1>Jugadores</h1>
    <br>
    <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col" style="text-align: center">Equipo</th>
            <th scope="col" style="text-align: center">Nombre</th>
            <th scope="col" style="text-align: center">Apellidos</th>
            <th scope="col" style="text-align: center">Goles</th>
            <th scope="col" style="text-align: center">Asistenicas</th>
            <th scope="col" style="text-align: center">Amarillas</th>
            <th scope="col" style="text-align: center">Rojas</th>
            <th scope="col" style="text-align: center">Editar</th>
            <th scope="col" style="text-align: center">Eliminar</th>
          </tr>
        </thead>
        <tbody>
            @foreach($u as $user)
            
               
                    <tr>
                        <td style="text-align: center">{{JugadoresController::devolverEquipo($user->id_equipo)}}</td> 
                        <td style="text-align: center">{{$user->nombre}}</td> 
                        <td style="text-align: center">{{$user->apellidos}}</td>
                        <td style="text-align: center">{{$user->goles}}</td>
                        <td style="text-align: center">{{$user->asistencias}}</td>
                        <td style="text-align: center">{{$user->ta}}</td>
                        <td style="text-align: center">{{$user->tr}}</td>
                        <td style="text-align: center"><a href="{{route('editar_jugador',$user)}}" class="btn btn-outline-success">Editar</a></td>
                        <td style="text-align: center"><form action="{{route('eliminarjugador',$user)}}" method="post">
                            @csrf @method('DELETE')
                            <input type="submit" class="btn btn-outline-danger" value="Eliminar">
                        </form></td>
                    </tr>
               
            
            @endforeach
        </tbody>
      </table>
@endsection