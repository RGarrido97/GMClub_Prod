<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
?>
@extends('plantilla')

@section('header')
    <h1>Estadística de Mis Plantillas</h1>
@endsection
@section('content')
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('js/admin.js') }}"></script>

                    <div class="table-responsive">
                        <table class="table table-hover" id="tabla_jugadores" style="text-align: center;">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Equipo</th>
                                    <th scope="col">Goles</th>
                                    <th scope="col">Asistencias</th>
                                    <th scope="col">T.Amarillas</th>
                                    <th scope="col">T.Rojas</th>
                                </tr>
                                </thead>
                                <tbody>  
            @foreach($u as $user)

                
                            <tr>
                                {{-- NOMBRE --}}
                              <td>{{$user->nombre}} {{$user->apellidos}}</td>

                              {{-- EQUIPO --}}
                              <td>{{JugadoresController::devolverEquipo($user->id_equipo)}}</td>

                              {{-- GOLES --}}
                              <td>{{$user->goles}}</td>
                        
                            {{-- ASISTENCIAS --}}
                              <td>{{$user->asistencias}}</td>

                            {{-- T.AMARILLAS  --}}
                              <td>{{$user->ta}}</td>
                        
                            {{-- T.ROJAS --}}
                              <td>{{$user->tr}}</td>    
                            
                            </tr>
            @endforeach
                            </tbody>
                        </table>
                    </div>
@endsection