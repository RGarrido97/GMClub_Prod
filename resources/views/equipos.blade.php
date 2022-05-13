<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
?>
@extends('plantilla')

@section('header')
    <h1>Equipos</h1>
@endsection

@section('content')
    <form action="{{route('subirequipo')}}" method="post">
        @csrf
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
        <input type="text" name="division" id="">
        <select name="id_entrenador" id="">
            @foreach ($id as $user)
            <option  value="{{$user->id}}">{{$user->name}}</option>
            @endforeach  
        </select>
        <input type="submit" value="Crear Equipo">
    </form>
    <table>
        @foreach ($as as $asas)
            
        @endforeach
        <tr>
            <td>{{$asas->categoria}}</td>
        </tr>
    </table>
@endsection
