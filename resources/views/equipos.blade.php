<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
?>
@extends('plantilla')

@section('header')
    <h1>Equipos</h1>
@endsection

@section('content')
<div class="jumbotron" style="text-align:left; width: 50%; margin-left: auto; margin-right: auto;">

    <form action="{{route('subirequipo')}}" method="post">
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">Seleccionar Categoría:</label>
          <select name="categoria" id="categoria" class="form-control">
            <option  value="Escuela">Escuela</option>
            <option  value="Prebenjamín">Prebenjamín</option>
            <option  value="Benjamín">Benjamín</option>
            <option  value="Aleví">Aleví</option>
            <option  value="Infantil">Infantil</option>
            <option  value="Cadete">Cadete</option>
            <option  value="Juvenil">Juvenil</option>
            <option  value="Prebenjamín">Prebenjamín</option>
            <option  value="Amateur">Amateur</option>
        </select>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Letra identificativa del Equipo:</label>
          <select name="letra" id="letra" class="form-control">
            <option  value="A">A</option>
            <option  value="B">B</option>
            <option  value="C">C</option>
            <option  value="D">D</option>
            <option  value="E">E</option>
            <option  value="F">F</option>
            <option  value="G">G</option>
            <option  value="H">H</option>
            <option  value="I">I</option>
            <option  value="J">J</option>
            <option  value="K">K</option>
            <option  value="L">L</option>
            <option  value="M">M</option>
            <option  value="N">N</option>
            <option  value="O">O</option>
            <option  value="P">P</option>
            <option  value="Q">Q</option>
            <option  value="R">R</option>
            <option  value="E">E</option>
            <option  value="T">T</option>
            <option  value="U">U</option>
            <option  value="V">V</option>
            <option  value="W">W</option>
            <option  value="X">X</option>
            <option  value="Y">Y</option>
            <option  value="Z">Z</option>
        </select>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">División de la Competición:</label>
          <input type="text" name="division" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Selecciona un Entrenador:</label>
          <select name="id_entrenador" class="form-control" id="">
            @foreach ($id as $user)
            <option  value="{{$user->id}}">{{$user->name}} {{$user->apellidos}}</option>
            @endforeach  
        </select>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Selecciona Modalidad:</label>
          <select name="tipo" class="form-control" id="">
            <option  value="f7">F7</option>
            <option  value="f11">F11</option>
        </select>
        </div>
        
        <input type="submit" class="btn btn-outline-success" value="Crear Equipo">
    </form>
</div>
    <table class="table">
        <tr style="text-align: center">
            <th>Categoría</th>
            <th>Letra</th>
            <th>División</th>
            <th>Entrenador</th>
            <th>Tipo</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </tr>
        @foreach ($as as $asas)
        <tr>
            <form action="{{route('actualizar_datos_equipo',$asas)}}" method="post">
              @csrf 
              @method('PATCH')
            <td>{{$asas->categoria}}</td>
            <td>{{$asas->letra}}</td>
            <td>
              <input type="text" class="form-control" name="division_mod" id="" value="{{$asas->division}} ">
            </td>
            <td>
              <select name="id_entrenador_mod" class="form-control" id="">
                <option value="{{$asas->id_entrenador}}">{{InicioController::devolverUser($asas->id_entrenador)}}</option>
                @foreach ($id as $user)
                <option  value="{{$user->id}}">{{$user->name}} {{$user->apellidos}}</option>
                @endforeach  
            </select>
            </td>
            <td>{{$asas->tipo}}</td>
            <td style="text-align: center"><input type="submit" class="btn btn-outline-warning" value="Actualizar"></td>
        </form>
            <td style="text-align: center"><form action="{{route('eliminar_equipo',$asas)}}" method="post">
                @csrf @method('DELETE')
                <input type="submit" class="btn btn-outline-danger" value="Eliminar">
            </form></td>
        </tr>
        @endforeach
    </table>
@endsection
