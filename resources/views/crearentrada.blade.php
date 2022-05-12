<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
?>
@extends('plantilla')

@section('header')
    <h1>Nueva Publicación</h1>
@endsection

@section('content')
    <form action="{{route('subirpublicacion')}}" method="post">
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">Título:</label>
          <input type="text" class="form-control" name="titulo" id="" aria-describedby="helpId" placeholder="">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Asunto:</label><br>
          <textarea name="comentarios" rows="10" cols="134" required></textarea>
        </div>

        @if (Auth::user()->rol=="Presidente" || Auth::user()->rol=="Secretario" || Auth::user()->rol=="Tesorero" || Auth::user()->rol=="Vocal")
            <div class="mb-3">
                <label for="" class="form-label">Blog de Destino:</label>
                <select class="form-control" name="blog" id="" disabled>
                <option value="junta">Junta</option>
                </select>
            </div>
        @endif

        @if (Auth::user()->rol=="Director Deportivo")
            <div class="mb-3">
                <label for="" class="form-label">Blog de Destino:</label>
                <select class="form-control" name="blog" id="">
                <option value="junta">Junta</option>
                <option value="entrenador">Entrenadores</option>
                </select>
            </div>
        @endif

        @if (Auth::user()->rol=="Coordinador" || Auth::user()->rol=="Entrenador")
            <div class="mb-3">
                <label for="" class="form-label">Blog de Destino:</label>
                <select class="form-control" name="blog" id="" disabled>
                <option value="entrenador">Entrenadores</option>
                </select>
            </div>
        @endif


        <button type="submit" class="btn btn-success">Publicar</button>
    </form>
@endsection