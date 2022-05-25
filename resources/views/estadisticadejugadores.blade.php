<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
?>
@extends('plantilla')

@section('header')
    <h1>Estadisitcas de Jugadores</h1>
@endsection
@section('content')
            <div class="container" style="display: flex; margin-left: 0px;">
                <div class="row" style="margin: 0px;">

                
            @foreach($u as $user)
            
                <div class="card" style="width: 18rem; margin:20px; min-width: 13rem;">
                    <img class="card-img-top" src="{{ asset('assets/perfil.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$user->nombre}} {{$user->apellidos}}</h5>
                        <p class="card-text">Equipo: {{JugadoresController::devolverEquipo($user->id_equipo)}}</p>
                        
                            <div class="container" style="display: flex; margin-left:">
                                <p class="card-text">Goles: {{$user->goles}}
                                <form action="{{route('sumargol', $user)}}" method="post" style="margin-left:5px;">
                                    @csrf @method('PATCH')
                                    <input type="submit" class="btn btn-success" value="+"  style="width: 50px; height: 30px;">
                                </form>          
                                @if ($user->goles == 0)
                                    <form action="{{route('restargol', $user)}}" method="post" style="margin-left:5px;">
                                        @csrf @method('PATCH')
                                        <input  type="submit" class="btn btn-danger" value="-" disabled style="width: 50px; height: 30px;">
                                    </form>
                                @else
                                    <form action="{{route('restargol', $user)}}" method="post" style="margin-left:5px;"></form>
                                        @csrf @method('PATCH')
                                        <input type="submit" class="btn btn-danger" value="-" style="width: 50px; height: 30px;">
                                    </form>
                                @endif
                            </div>
                            
                        </p>
                        <p class="card-text">Asistencias: {{$user->asistencias}}</p>
                        <p class="card-text">T. Amarillas: {{$user->ta}}</p>
                        <p class="card-text">T. Rojas: {{$user->tr}}</p>

                       
                    </div>
                    </div>    
            @endforeach
                </div>
            </div>
@endsection