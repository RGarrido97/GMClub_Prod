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
                              <td><form action="{{route('sumargol', $user)}}" method="post" style="margin-left:5px;">
                                @csrf @method('PATCH')
                                <input type="submit" class="btn btn-success" value="+"  style="width: 50px; height: 30px;">
                            
                            @if ($user->goles == 0)
                                </form> {{$user->goles}} <form action="{{route('restargoles', $user)}}" method="post" style="margin-left:5px;">
                                    @csrf @method('PATCH')
                                    <input type="submit" class="btn btn-danger" value="-" disabled style="width: 50px; height: 30px;">
                                </form></td>
                            @else
                                </form> {{$user->goles}} <form action="{{route('restargoles', $user)}}" method="post" style="margin-left:5px;">
                                    @csrf @method('PATCH')
                                    <input type="submit" class="btn btn-danger" value="-"  style="width: 50px; height: 30px;">
                                </form></td>
                            @endif
                            

                            {{-- ASISTENCIAS --}}
                              <td>
                                <form action="{{route('sumarasis', $user)}}" method="post" >
                                @csrf @method('PATCH')
                                <input type="submit" class="btn btn-success" value="+"  style="width: 50px; height: 30px;">
                            
                            @if ($user->asistencias == 0)
                                </form> {{$user->asistencias}} <form action="{{route('resasis', $user)}}" method="post" >
                                    @csrf @method('PATCH')
                                    <input type="submit" class="btn btn-danger" value="-" disabled  style="width: 50px; height: 30px;">
                                </form></td>
                            @else
                                </form> {{$user->asistencias}} <form action="{{route('resasis', $user)}}" method="post" >
                                    @csrf @method('PATCH')
                                    <input type="submit" class="btn btn-danger" value="-"  style="width: 50px; height: 30px;">
                                </form></td>
                            @endif
                            

                            {{-- T.AMARILLAS  --}}
                              <td><form action="{{route('sumaram', $user)}}" method="post" >
                                @csrf @method('PATCH')
                                <input type="submit" class="btn btn-success" value="+"  style="width: 50px; height: 30px;">

                            @if ($user->ta == 0)
                                </form> {{$user->ta}} <form action="{{route('resam', $user)}}" method="post" >
                                    @csrf @method('PATCH')
                                    <input type="submit" class="btn btn-danger" value="-" disabled  style="width: 50px; height: 30px;">
                                </form> </td>
                            @else
                                </form> {{$user->ta}} <form action="{{route('resam', $user)}}" method="post" >
                                    @csrf @method('PATCH')
                                    <input type="submit" class="btn btn-danger" value="-"  style="width: 50px; height: 30px;">
                                </form> </td>
                            @endif
                            

                            {{-- T.ROJAS --}}
                              <td><form action="{{route('sumarroj', $user)}}" method="post" >
                                @csrf @method('PATCH')
                                <input type="submit" class="btn btn-success" value="+"  style="width: 50px; height: 30px;">
                            
                            @if ($user->tr == 0)
                                </form> {{$user->tr}} <form action="{{route('resroj', $user)}}" method="post" >
                                    @csrf @method('PATCH')
                                    <input type="submit" class="btn btn-danger" value="-" disabled  style="width: 50px; height: 30px;">
                                </form></td>    
                            @else
                                </form> {{$user->tr}} <form action="{{route('resroj', $user)}}" method="post" >
                                    @csrf @method('PATCH')
                                    <input type="submit" class="btn btn-danger" value="-"  style="width: 50px; height: 30px;">
                                </form></td>
                            @endif
                            
                            </tr>
            @endforeach
                            </tbody>
                        </table>
                    </div>
@endsection