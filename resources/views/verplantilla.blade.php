<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
?>
@extends('plantilla')

@section('header')
    <h1>Ver plantillas</h1>
@endsection

@section('content')
    
      

      <ul class="list-group">
        @foreach ($equipos as $equipo)
            <li class="list-group-item"><a href="{{route('verplantilladet',$equipo) }}" style="text-decoration:none; color:black">{{JugadoresController::devolverEquipo($equipo->id)}}</a></li>
        @endforeach
      </ul>
 
@endsection