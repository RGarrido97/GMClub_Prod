<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
?>
@extends('plantilla')

@section('header')
    <h1>Editar Jugadores</h1>
@endsection
@section('content')
    <form action="{{route('subirjugadores')}}" method="post">
        @csrf
        @foreach ($id as $info)
            <input type="text" name="nombre" id="" value="{{$info->nombre}}">
            <input type="text" name="apellidos" value="{{$info->apellidos}}">
            <select name="id_equipo" id="">
            @foreach ($ida as $equipos)
            <option value="{{$equipos->id}}">{{$equipos->categoria}} {{$equipos->letra}}</option>
            @endforeach
            </select>
            <input type="submit" value="Crear">
    </form>
    
   
@endsection