<?php

namespace App\Http\Controllers;
?>
@extends('plantilla')

@section('content')
    <h1>Ultimas entradas</h1>
    <a href="{{route('crearentrada')}}"><button>Crear entrada</button></a>
    @foreach ($blog as $item)
    <div class="muro">
        {{InicioController::devolverUser($item->id_user)}} - {{InicioController::devolverRol($item->id_user)}}<br>
        {{$item->titulo}}<br>
        {{$item->contenido}}<br>
        {{$item->created_at}}
    </div>
    @endforeach
@endsection