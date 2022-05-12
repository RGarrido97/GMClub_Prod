<?php

namespace App\Http\Controllers;
?>
@extends('plantilla')

@section('header')
    <h1>Foro Entrenadores</h1>
@endsection

@section('content')
    
    
    <a href="{{route('crearentrada')}}"><button type="button" class="btn btn-outline-success">Nueva Entrada</button></a>
    
    @foreach ($blog as $item)
        <div class="card" style="margin-top: 20px">
            <div class="card-header">
                {{InicioController::devolverUser($item->id_user)}} - {{InicioController::devolverRol($item->id_user)}}
            </div>
            <div class="card-body">
            <h5 class="card-title">{{$item->titulo}}</h5>
            <p class="card-text">{{$item->contenido}}</p>
            <footer class="blockquote-footer">{{$item->created_at}}</footer>
            </div>
        </div>
    @endforeach
@endsection