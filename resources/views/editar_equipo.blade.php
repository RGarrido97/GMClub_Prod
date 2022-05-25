<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
?>
@extends('plantilla')

@section('header')
    <h1>Equipos</h1>
@endsection

@section('content')
    <form action="{{route('subirequipo')}}" method="post">
        @csrf
        <select name="categoria" id="categoria" class="form-control">
            @foreach ($equipos as $e)
                <option  value="{{$e->categoria}}" readonly>{{$e->categoria}}</option>
            @endforeach
        </select>
        
        <select name="letra" id="letra" class="form-control">
        @foreach ($equipos as $e)
                <option  value="{{$e->letra}}" readonly>{{$e->letra}}</option>
            @endforeach
        </select>
        <input type="text" name="division" id="" value="{{$e->division}}">
        <select name="id_entrenador" id="">
            @foreach ($entrenadoresClub as $user)
            <option  value="{{$user->id}}">{{$user->name}}</option>
            @endforeach  
        </select>
        <input type="submit" value="Crear Equipo">
    </form>
@endsection
