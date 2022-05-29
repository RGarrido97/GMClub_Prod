<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
?>
@extends('plantilla')

@section('header')
    <h1>Gestor de Cobros</h1>
@endsection

@section('content')
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('js/admin.js') }}"></script>

<table class="table table-hover" id="tabla_pagos">
    <thead>
        <tr style="text-align: center">
          <th scope="col">Nombre</th>
          <th scope="col" >Preinscripción</th>
          <th scope="col">Tipo Pago</th>
          <th scope="col">Pago 1</th>
          <th scope="col">Pago 2</th>
          <th scope="col">Pago 3</th>
          <th scope="col">Pago 4</th>
          <th scope="col">Pago 5</th>
          <th scope="col">Pago 6</th>
          <th scope="col">Pago 7</th>
          <th scope="col">Pago 8</th>
          <th scope="col">Pago 9</th>
          <th scope="col">Pago 10</th>
          <th scope="col">Ingresos</th>
          <th scope="col">Actualizar</th>
        </tr>
      </thead>
      <tbody>
    
    @foreach ($pagos as $pago )
        
            
            <tr>
                <form action="{{route('actualizar_pago',$pago)}}" method="post">
                    @csrf 
                    @method('PATCH')
                    <td style="width: 200px;">{{JugadoresController::devolverJugador($pago->id_jugador)}}</td>
                    <td>{{ $pago->preinscripcion }} €</td>
                    <td style="width: 120px;">
                        <select class="form-select" name="tipopago" id="tipopago">
                            <option value="{{ $pago->tipo }}">{{ $pago->tipo }}</option>
                            <option value="Mensual">Mensual</option>
                            <option value="Trimestral">Trimestral</option>
                            <option value="Semestral">Semestral</option>
                            <option value="Anual">Anual</option>
                        </select>
                    </td>
                    <td>{{ $pago->pago1 }} €</td>
                    <td>{{ $pago->pago2 }} €</td>
                    <td>{{ $pago->pago3 }} €</td>
                    <td>{{ $pago->pago4 }} €</td>
                    <td>{{ $pago->pago5 }} €</td>
                    <td>{{ $pago->pago6 }} €</td>
                    <td>{{ $pago->pago7 }} €</td>
                    <td>{{ $pago->pago8 }} €</td>
                    <td>{{ $pago->pago9 }} €</td>
                    <td>{{ $pago->pago10 }} €</td>
                    <td style="text-align: center; width: 90px;"><a href="{{route('nuevo_pago',$pago)}}" class="btn btn-outline-success">Añadir Pago</a></td>
                    <td style="text-align: center; width: 90px;"><input name="" class="btn btn-outline-warning" id=""  type="submit" value="Actualizar"></td>
                </form>
            </tr>
            
        
    @endforeach
   
    </tbody>
</table>
 
@endsection