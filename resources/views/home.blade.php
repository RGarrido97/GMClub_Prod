<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
?>
@extends('plantilla')

@section('header')
    <h1>Dashboard</h1>
@endsection

@section('content')
    <h2>Informacion del club</h2>
    @foreach ($info as $item)
            <table class="table">
                    <tr>
                    
                        <td>Nombre: </td>
                        <td>{{item->nombre}}</td>
                    </tr>
                    <tr>
        
                        <td></td>
                        <td></td>
                    </tr>

            </table>
    @endforeach
    
    
@endsection
