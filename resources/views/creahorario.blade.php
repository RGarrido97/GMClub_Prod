<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
?>
@extends('plantilla')

@section('header')
    <h1>Gestor de Horarios</h1>
@endsection
@section('content')
<h2>Horarios Definidos</h2>

    <table class="table">
        <tr>
            <th>Día</th>
            <th>Franja</th>
            <th>Hora inicio</th>
            <th>Hora fin</th>
            <th>Tipo</th>
            <th>Campo 1</th>
            <th>Campo 2</th>
            <th>Campo 3</th>
            <th>Campo 4</th>
            <th>Eliminar</th>
        </tr>
        @foreach ($datos as $item)
        <tr>
                <td>{{$item->dia}}</td>
                <td>{{$item->franja}}</td>
                <td>{{$item->hora_inicio}}</td>
                <td>{{$item->hora_fin}}</td>
                <td>{{$item->tipo}}</td>
                <td>{{JugadoresController::devolverEquipo($item->campo1)}}</td>
                <td>{{JugadoresController::devolverEquipo($item->campo2)}}</td>
                <td>
                    @if ($item->campo3 != '')
                        {{JugadoresController::devolverEquipo($item->campo3)}}
                    @endif
                    
                </td>

                <td>@if ($item->campo4 != '')
                        {{JugadoresController::devolverEquipo($item->campo4)}}
                    @endif</td>
                <td>
                    <form action="{{route('eliminarhora',$item)}}" method="post">
                            @csrf @method('DELETE')
                            <input type="submit" class="btn btn-outline-danger" value="Eliminar">
                    </form>
                </td>

        </tr>
        @endforeach
    </table>
<br>
<h2>Crear Nuevo Horario</h2>
<br>
<div class="jumbotron" style="text-align:left; width: 50%; margin-left: auto; margin-right: auto;">
<form action="{{route('subirfranja')}}" method="post">
@csrf
    <div class="mb-3">
        <label for="" class="form-label">Día:</label>
        <select name="dia" class="form-control" id="">
            <option value="Lunes">Lunes</option>
            <option value="Martes">Martes</option>
            <option value="Miercoles">Miercoles</option>
            <option value="jueves">Jueves</option>
            <option value="viernes">Viernes</option>
        </select>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Franja Horaria:</label>
      <select name="franja" class="form-control" id="">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Hora de inicio:</label>
      <input type="time" name="hora_inicio" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Hora de finalización:</label>
      <input type="time" name="hora_fin" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Tipo de Entrenamiento:</label>
      <select name="tipo" class="form-control" id="eg">
        <option value=""></option>
        <option value="f11">Fútbol 11</option>
        <option value="f7">Fútbol 7</option>
    </select>
    </div>
    
    
    <div id="insert">

    </div>
    <div class="f11d desactivar">
        <div class="mb-3">
          <label for="" class="form-label">Campo 1:</label>
          <select name="campo11" class="form-control" id="f11d">
            @foreach ($f11 as $f11a)
                <option value="{{$f11a->id}}">{{$f11a->categoria}} {{$f11a->letra}}</option>
            @endforeach
            </select>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Campo 2:</label>
          <select name="campo12" class="form-control" id="f11d">
            @foreach ($f11 as $f11a)
                <option value="{{$f11a->id}}">{{$f11a->categoria}} {{$f11a->letra}}</option>
            @endforeach
        </select>
        </div>
    </div>

    <div class="f7d desactivar">
        <div class="mb-3">
          <label for="" class="form-label">Campo 1:</label>
          <select name="campo1" class="form-control" id="f7d">
            @foreach ($f7 as $f7a)
                <option value="{{$f7a->id}}">{{$f7a->categoria}} {{$f7a->letra}}</option>
            @endforeach
        </select>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Campo 2:</label>
          <select name="campo2" class="form-control" id="f7d">
            @foreach ($f7 as $f7a)
                <option value="{{$f7a->id}}">{{$f7a->categoria}} {{$f7a->letra}}</option>
            @endforeach
        </select>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Campo 3:</label>
          <select name="campo3" class="form-control" id="f7d">
            @foreach ($f7 as $f7a)
                <option value="{{$f7a->id}}">{{$f7a->categoria}} {{$f7a->letra}}</option>
            @endforeach
        </select>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Campo 4:</label>
          <select name="campo4" class="form-control" id="f7d">
            @foreach ($f7 as $f7a)
                <option value="{{$f7a->id}}">{{$f7a->categoria}} {{$f7a->letra}}</option>
            @endforeach
        </select>
        </div>
    </div>
    <input type="submit" class="btn btn-outline-success" value="Agregar Horario">
</form>
</div>
    <script>
        window.onload = function(){
            dpt = document.getElementById('eg');
            ins = document.getElementById('f11d');
            ans = document.getElementById('f7d');

            ins_div = document.querySelector('div.f11d');
            ans_div = document.querySelector('div.f7d');

                dpt.addEventListener("input", function(){
                // console.log(dpt.value);
                if(dpt.value == 'f11'){
                    console.log(ins);
                    ins_div.classList.remove("desactivar");
                    ans_div.classList.add("desactivar");
                }else if(dpt.value == 'f7'){
                    console.log(ans);
                    ans_div.classList.remove("desactivar");
                    ins_div.classList.add("desactivar");
                }else if(dpt.value == ''){
                    ins_div.classList.add("desactivar"); 
                    ans_div.classList.add("desactivar");
                }
            });
        
        }
        
    </script>
@endsection