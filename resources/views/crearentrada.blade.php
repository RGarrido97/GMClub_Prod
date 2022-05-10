<?php

namespace App\Http\Controllers;
?>
@extends('plantilla')

@section('content')
    <form action="{{route('subirpublicacion')}}" method="post">
        @csrf
        <label for="">Título</label><br>
        <input type="text" name="titulo" id="" required><br>
        <label for="">Asunto</label><br>
        <textarea name="comentarios" rows="10" cols="40" required></textarea><br>
        <input type="submit" value="Publicar">
    </form>
@endsection