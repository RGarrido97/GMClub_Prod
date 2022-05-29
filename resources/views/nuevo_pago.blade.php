<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
?>
@extends('plantilla')

@section('header')
    
        <h1>Nuevo Ingreso de {{JugadoresController::devolverJugador($usuario->id_jugador)}}</h1>
    
@endsection

@section('content')
<div class="container">
    <div class="jumbotron">
                    <h2 style="text-align: center">Datos del Ingreso</h2>
                    <br>
                    <form action="{{route('generar_recibo',$usuario)}}" method="post">
                        @csrf @method('patch')
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Orden del Pago:') }}</label>

                            <div class="col-md-6">
                                <select name="pago" class="form-control" id="pago">
                                    <option value="preinscripcion">Preinscripción</option>
                                    <option value="pago1">Pago 1</option>
                                    <option value="pago2">Pago 2</option>
                                    <option value="pago3">Pago 3</option>
                                    <option value="pago4">Pago 4</option>
                                    <option value="pago5">Pago 5</option>
                                    <option value="pago6">Pago 6</option>
                                    <option value="pago7">Pago 7</option>
                                    <option value="pago8">Pago 8</option>
                                    <option value="pago9">Pago 9</option>
                                    <option value="pago10">Pago 10</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Cantidad:') }}</label>

                            <div class="col-md-6">
                                <input id="cantidad" type="number" class="form-control" name="cantidad" required autocomplete="" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Fecha del Pago:') }}</label>

                            <div class="col-md-6">
                                <input id="fecha" type="date" class="form-control" name="fecha" required autocomplete="" autofocus>
                            </div>
                        </div>
                        <div class="buttons" style="display: flex">
                        <input type="submit" class="btn btn-outline-danger" value="Generar Recibo" style="margin-left: 50%">
                        <a href="/gestion_eco" class="btn btn-outline-primary" style="margin-left: 140px">Volver</a>  
                    </div>
                    </form>
                </div>
                </div>
@endsection
