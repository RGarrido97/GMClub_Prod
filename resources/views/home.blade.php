<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
?>
@extends('plantilla')

@section('header')
    
        @foreach ($info as $club )
            <img src="fotos/{{$club->id}}/{{$club->escudo}}" alt="" style="width: 50px; heigth: 15px; margin-right: 10px;">
            <h1>{{$club->nombre}}</h1>
        @endforeach
    
@endsection

@section('content')
    <h2>Información del club</h2>
    <div class="jumbotron" style="text-align:center;">
        @if ($max_gol == null)
        @foreach ($info as $item)
        <table class="table table-striped">
            <thead>

            </thead>
                <tr>
                    <th>Nombre: </th>
                    <td>{{$item->nombre}}</td>
                </tr>
                <tr>
                    <th>Localidad: </th>
                    <td>{{$item->localidad}}</td>
                </tr>
                <tr>
                    <th>Provincia: </th>
                    <td>{{$item->provincia}}</td>
                </tr>
                <tr>
                    <th>Federacion: </th>
                    <td>{{$item->federacion}}</td>
                </tr>
                <tr>
                    <th>Escudo: </th>
                    <td><img src="fotos/{{$item->id}}/{{$item->escudo}}" class="" alt="" style="width: 70px; heigth: 50px; margin-right: 10px;"> </td>
                </tr>
        </table>
        @endforeach
        @else
            
        @endif
        @foreach ($info as $item)
                <table class="table table-striped">
                    <thead>

                    </thead>
                        <tr>
                            <th>Nombre: </th>
                            <td>{{$item->nombre}}</td>
                        </tr>
                        <tr>
                            <th>Localidad: </th>
                            <td>{{$item->localidad}}</td>
                        </tr>
                        <tr>
                            <th>Provincia: </th>
                            <td>{{$item->provincia}}</td>
                        </tr>
                        <tr>
                            <th>Federacion: </th>
                            <td>{{$item->federacion}}</td>
                        </tr>
                        <tr>
                            <th>Escudo: </th>
                            <td><img src="fotos/{{$item->id}}/{{$item->escudo}}" class="" alt="" style="width: 70px; heigth: 50px; margin-right: 10px;"> </td>
                        </tr>
                </table>
        @endforeach
    </div>
    <br>
    <h2>Datos de Interés General</h2>
    <br>
    <h3>Máximos Goleadores</h3>
    <div class="goleadores" style="display: flex;">

    
        @foreach ($max_gol as $jugador )

            <div class="card" style="width: 18rem; margin:auto;">
                <img class="card-img-top" src="assets/perfil.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$jugador->nombre}} {{$jugador->apellidos}}</h5>
                    <p class="card-text">Total de Goles: {{$jugador->goles}}</p>
                </div>
            </div>
            
        @endforeach

    </div>
    <br>
    <h3>Máximos Asistentes</h3>
    <div class="asistencias" style="display: flex;">

    
        @foreach ($max_asis as $jugador )

            <div class="card" style="width: 18rem; margin:auto;">
                <img class="card-img-top" src="assets/perfil.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$jugador->nombre}} {{$jugador->apellidos}}</h5>
                    <p class="card-text">Total de Asistencias: {{$jugador->asistencias}}</p>
                </div>
            </div>
            
        @endforeach

    </div>
    <br>
    <h3>Jugadores más Amonestados (Tarjetas Amarillas)</h3>
    <div class="ta" style="display: flex;">

    
        @foreach ($max_ta as $jugador )

            <div class="card" style="width: 18rem; margin:auto;">
                <img class="card-img-top" src="assets/perfil.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$jugador->nombre}} {{$jugador->apellidos}}</h5>
                    <p class="card-text">Total de Amonestaciones: {{$jugador->ta}}</p>
                </div>
            </div>
            
        @endforeach

    </div>
    <br>
    <h3>Jugadores más Amonestados (Tarjetas Rojas)</h3>
    <div class="ta" style="display: flex;">

    
        @foreach ($max_tr as $jugador )

            <div class="card" style="width: 18rem; margin:auto;">
                <img class="card-img-top" src="assets/perfil.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$jugador->nombre}} {{$jugador->apellidos}}</h5>
                    <p class="card-text">Total de Amonestaciones: {{$jugador->tr}}</p>
                </div>
            </div>
            
        @endforeach

    </div>
@endsection
