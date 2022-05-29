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
    
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
   
    </tbody>
</table>
 
@endsection