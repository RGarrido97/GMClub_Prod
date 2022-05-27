<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
?>
@extends('plantilla')

@section('header')
    <h1>Ver plantillas</h1>
@endsection

@section('content')
    
      @foreach ($equipos as $equipo)
          <a href="{{route('verplantilladet',$equipo) }}">{{JugadoresController::devolverEquipo($equipo->id)}}</a><br>
      @endforeach
 
@endsection