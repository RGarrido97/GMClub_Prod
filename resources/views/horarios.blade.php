<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
?>
@extends('plantilla')

@section('header')
    <h1>Horarios de Entrenamiento</h1>
@endsection
@section('content')


<table class="table" style="text-align: center">
    
        
    
        <tr>
            <th>Franja</th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miercoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
            
        </tr>   
            <tr> 
                <td>1</td>  
            
                    
                    <!-- lunes primera franja -->
                    <td>@foreach ($id as $item)
                        <table>
                        <tr>
                            @if ($item->campo1 != "")<td>Campo 1: <br> 
                                {{JugadoresController::devolverEquipo($item->campo1)}}
                                </td>@endif
                            @if ($item->campo2 != "")<td>Campo 2: <br> 
                                {{JugadoresController::devolverEquipo($item->campo2)}}
                                </td>@endif
                        </tr>
                        <tr>
                            @if ($item->campo3 != "")<td>Campo 3: <br> 
                                {{JugadoresController::devolverEquipo($item->campo3)}}
                                </td>@endif
                            @if ($item->campo4 != "")<td>Campo 4: <br> 
                                {{JugadoresController::devolverEquipo($item->campo4)}}
                                </td>@endif
                        </tr>
                        </table>
                        @endforeach</td>
                    
                    
                    <!-- martes primera franja -->
                    <td>@foreach ($m1 as $item)
                        <table>
                        <tr>
                            @if ($item->campo1 != "")<td>Campo 1: <br> 
                                {{JugadoresController::devolverEquipo($item->campo1)}}
                                </td>@endif
                            @if ($item->campo2 != "")<td>Campo 2: <br> 
                                {{JugadoresController::devolverEquipo($item->campo2)}}
                                </td>@endif
                        </tr>
                        <tr>
                            @if ($item->campo3 != "")<td>Campo 3: <br> 
                                {{JugadoresController::devolverEquipo($item->campo3)}}
                                </td>@endif
                            @if ($item->campo4 != "")<td>Campo 4: <br> 
                                {{JugadoresController::devolverEquipo($item->campo4)}}
                                </td>@endif
                        </tr>
                        </table>
                         @endforeach</td>
                   

                    
                    <!-- miercoles primera franja -->
                    <td>@foreach ($x1 as $item)
                        <table>
                        <tr>
                            @if ($item->campo1 != "")<td>Campo 1: <br> 
                                {{JugadoresController::devolverEquipo($item->campo1)}}
                                </td>@endif
                            @if ($item->campo2 != "")<td>Campo 2: <br> 
                                {{JugadoresController::devolverEquipo($item->campo2)}}
                                </td>@endif
                        </tr>
                        <tr>
                            @if ($item->campo3 != "")<td>Campo 3: <br> 
                                {{JugadoresController::devolverEquipo($item->campo3)}}
                                </td>@endif
                            @if ($item->campo4 != "")<td>Campo 4: <br> 
                                {{JugadoresController::devolverEquipo($item->campo4)}}
                                </td>@endif
                        </tr>
                        </table>
                        @endforeach</td>
                    
                    
                    <!-- jueves primera franja -->
                    <td>@foreach ($j1 as $item)
                        <table>
                        <tr>
                            @if ($item->campo1 != "")<td>Campo 1: <br> 
                                {{JugadoresController::devolverEquipo($item->campo1)}}
                                </td>@endif
                            @if ($item->campo2 != "")<td>Campo 2: <br> 
                                {{JugadoresController::devolverEquipo($item->campo2)}}
                                </td>@endif
                        </tr>
                        <tr>
                            @if ($item->campo3 != "")<td>Campo 3: <br> 
                                {{JugadoresController::devolverEquipo($item->campo3)}}
                                </td>@endif
                            @if ($item->campo4 != "")<td>Campo 4: <br> 
                                {{JugadoresController::devolverEquipo($item->campo4)}}
                                </td>@endif
                        </tr>
                        </table>
                        @endforeach</td>
                    
                    
                    <!-- viernes primera franja -->
                    <td>@foreach ($v1 as $item)
                        <table>
                        <tr>
                            @if ($item->campo1 != "")<td>Campo 1: <br> 
                                {{JugadoresController::devolverEquipo($item->campo1)}}
                                </td>@endif
                            @if ($item->campo2 != "")<td>Campo 2: <br> 
                                {{JugadoresController::devolverEquipo($item->campo2)}}
                                </td>@endif
                        </tr>
                        <tr>
                            @if ($item->campo3 != "")<td>Campo 3: <br> 
                                {{JugadoresController::devolverEquipo($item->campo3)}}
                                </td>@endif
                            @if ($item->campo4 != "")<td>Campo 4: <br> 
                                {{JugadoresController::devolverEquipo($item->campo4)}}
                                </td>@endif
                        </tr>
                        </table>
                        @endforeach</td>
                    
            </tr>
            <tr> 
                <td>2</td>  
            
                    
                    <!-- lunes segunda franja -->
                    <td>@foreach ($l2 as $item)
                        <table>
                        <tr>
                            @if ($item->campo1 != "")<td>Campo 1: <br> 
                                {{JugadoresController::devolverEquipo($item->campo1)}}
                                </td>@endif
                            @if ($item->campo2 != "")<td>Campo 2: <br> 
                                {{JugadoresController::devolverEquipo($item->campo2)}}
                                </td>@endif
                        </tr>
                        <tr>
                            @if ($item->campo3 != "")<td>Campo 3: <br> 
                                {{JugadoresController::devolverEquipo($item->campo3)}}
                                </td>@endif
                            @if ($item->campo4 != "")<td>Campo 4: <br> 
                                {{JugadoresController::devolverEquipo($item->campo4)}}
                                </td>@endif
                        </tr>
                        </table>
                        @endforeach</td>
                    
                    
                    <!-- martes segunda franja -->
                    <td>@foreach ($m2 as $item)
                        <table>
                        <tr>
                            @if ($item->campo1 != "")<td>Campo 1: <br> 
                                {{JugadoresController::devolverEquipo($item->campo1)}}
                                </td>@endif
                            @if ($item->campo2 != "")<td>Campo 2: <br> 
                                {{JugadoresController::devolverEquipo($item->campo2)}}
                                </td>@endif
                        </tr>
                        <tr>
                            @if ($item->campo3 != "")<td>Campo 3: <br> 
                                {{JugadoresController::devolverEquipo($item->campo3)}}
                                </td>@endif
                            @if ($item->campo4 != "")<td>Campo 4: <br> 
                                {{JugadoresController::devolverEquipo($item->campo4)}}
                                </td>@endif
                        </tr>
                        </table>
                        @endforeach</td>
                    

                    
                    <!-- miercoles segunda franja -->
                    <td>@foreach ($x2 as $item)
                        <table>
                        <tr>
                            @if ($item->campo1 != "")<td>Campo 1: <br> 
                                {{JugadoresController::devolverEquipo($item->campo1)}}
                                </td>@endif
                            @if ($item->campo2 != "")<td>Campo 2: <br> 
                                {{JugadoresController::devolverEquipo($item->campo2)}}
                                </td>@endif
                        </tr>
                        <tr>
                            @if ($item->campo3 != "")<td>Campo 3: <br> 
                                {{JugadoresController::devolverEquipo($item->campo3)}}
                                </td>@endif
                            @if ($item->campo4 != "")<td>Campo 4: <br> 
                                {{JugadoresController::devolverEquipo($item->campo4)}}
                                </td>@endif
                        </tr>
                        </table>
                        @endforeach</td>
                    
                    
                    <!-- jueves segunda franja -->
                    <td>@foreach ($j2 as $item)
                        <table>
                        <tr>
                            @if ($item->campo1 != "")<td>Campo 1: <br> 
                                {{JugadoresController::devolverEquipo($item->campo1)}}
                                </td>@endif
                            @if ($item->campo2 != "")<td>Campo 2: <br> 
                                {{JugadoresController::devolverEquipo($item->campo2)}}
                                </td>@endif
                        </tr>
                        <tr>
                            @if ($item->campo3 != "")<td>Campo 3: <br> 
                                {{JugadoresController::devolverEquipo($item->campo3)}}
                                </td>@endif
                            @if ($item->campo4 != "")<td>Campo 4: <br> 
                                {{JugadoresController::devolverEquipo($item->campo4)}}
                                </td>@endif
                        </tr>
                        </table>
                        @endforeach</td>
                    
                    
                    <!-- viernes segunda franja -->
                    <td>@foreach ($v2 as $item)
                        <table>
                        <tr>
                            @if ($item->campo1 != "")<td>Campo 1: <br> 
                                {{JugadoresController::devolverEquipo($item->campo1)}}
                                </td>@endif
                            @if ($item->campo2 != "")<td>Campo 2: <br> 
                                {{JugadoresController::devolverEquipo($item->campo2)}}
                                </td>@endif
                        </tr>
                        <tr>
                            @if ($item->campo3 != "")<td>Campo 3: <br> 
                                {{JugadoresController::devolverEquipo($item->campo3)}}
                                </td>@endif
                            @if ($item->campo4 != "")<td>Campo 4: <br> 
                                {{JugadoresController::devolverEquipo($item->campo4)}}
                                </td>@endif
                        </tr>
                        </table>
                        @endforeach</td>
                    
            </tr>
            <tr> 
                <td>3</td>  
            
                    
                    <!-- lunes segunda franja -->
                    <td>@foreach ($l3 as $item)
                        <table>
                        <tr>
                            @if ($item->campo1 != "")<td>Campo 1: <br> 
                                {{JugadoresController::devolverEquipo($item->campo1)}}
                                </td>@endif
                            @if ($item->campo2 != "")<td>Campo 2: <br> 
                                {{JugadoresController::devolverEquipo($item->campo2)}}
                                </td>@endif
                        </tr>
                        <tr>
                            @if ($item->campo3 != "")<td>Campo 3: <br> 
                                {{JugadoresController::devolverEquipo($item->campo3)}}
                                </td>@endif
                            @if ($item->campo4 != "")<td>Campo 4: <br> 
                                {{JugadoresController::devolverEquipo($item->campo4)}}
                                </td>@endif
                        </tr>
                        </table>
                        @endforeach</td>
                    
                    
                    <!-- martes segunda franja -->
                    <td>@foreach ($m3 as $item)
                        <table>
                        <tr>
                            @if ($item->campo1 != "")<td>Campo 1: <br> 
                                {{JugadoresController::devolverEquipo($item->campo1)}}
                                </td>@endif
                            @if ($item->campo2 != "")<td>Campo 2: <br> 
                                {{JugadoresController::devolverEquipo($item->campo2)}}
                                </td>@endif
                        </tr>
                        <tr>
                            @if ($item->campo3 != "")<td>Campo 3: <br> 
                                {{JugadoresController::devolverEquipo($item->campo3)}}
                                </td>@endif
                            @if ($item->campo4 != "")<td>Campo 4: <br> 
                                {{JugadoresController::devolverEquipo($item->campo4)}}
                                </td>@endif
                        </tr>
                        </table>
                        @endforeach</td>
                    

                    
                    <!-- miercoles segunda franja -->
                    <td>@foreach ($x3 as $item)
                        <table>
                        <tr>
                            @if ($item->campo1 != "")<td>Campo 1: <br> 
                                {{JugadoresController::devolverEquipo($item->campo1)}}
                                </td>@endif
                            @if ($item->campo2 != "")<td>Campo 2: <br> 
                                {{JugadoresController::devolverEquipo($item->campo2)}}
                                </td>@endif
                        </tr>
                        <tr>
                            @if ($item->campo3 != "")<td>Campo 3: <br> 
                                {{JugadoresController::devolverEquipo($item->campo3)}}
                                </td>@endif
                            @if ($item->campo4 != "")<td>Campo 4: <br> 
                                {{JugadoresController::devolverEquipo($item->campo4)}}
                                </td>@endif
                        </tr>
                        </table>
                        @endforeach</td>
                    
                    
                    <!-- jueves segunda franja -->
                    <td>@foreach ($j3 as $item)
                        <table>
                        <tr>
                            @if ($item->campo1 != "")<td>Campo 1: <br> 
                                {{JugadoresController::devolverEquipo($item->campo1)}}
                                </td>@endif
                            @if ($item->campo2 != "")<td>Campo 2: <br> 
                                {{JugadoresController::devolverEquipo($item->campo2)}}
                                </td>@endif
                        </tr>
                        <tr>
                            @if ($item->campo3 != "")<td>Campo 3: <br> 
                                {{JugadoresController::devolverEquipo($item->campo3)}}
                                </td>@endif
                            @if ($item->campo4 != "")<td>Campo 4: <br> 
                                {{JugadoresController::devolverEquipo($item->campo4)}}
                                </td>@endif
                        </tr>
                        </table>
                        @endforeach</td>
                    
                    
                    <!-- viernes segunda franja -->
                    <td>@foreach ($v3 as $item)
                        <table>
                        <tr>
                            @if ($item->campo1 != "")<td>Campo 1: <br> 
                                {{JugadoresController::devolverEquipo($item->campo1)}}
                                </td>@endif
                            @if ($item->campo2 != "")<td>Campo 2: <br> 
                                {{JugadoresController::devolverEquipo($item->campo2)}}
                                </td>@endif
                        </tr>
                        <tr>
                            @if ($item->campo3 != "")<td>Campo 3: <br> 
                                {{JugadoresController::devolverEquipo($item->campo3)}}
                                </td>@endif
                            @if ($item->campo4 != "")<td>Campo 4: <br> 
                                {{JugadoresController::devolverEquipo($item->campo4)}}
                                </td>@endif
                        </tr>
                        </table>
                        @endforeach</td>
                    
            </tr>
            <tr> 
                <td>4</td>  
            
                    
                    <!-- lunes segunda franja -->
                    <td>@foreach ($l4 as $item)
                        <table>
                        <tr>
                            @if ($item->campo1 != "")<td>Campo 1: <br> 
                                {{JugadoresController::devolverEquipo($item->campo1)}}
                                </td>@endif
                            @if ($item->campo2 != "")<td>Campo 2: <br> 
                                {{JugadoresController::devolverEquipo($item->campo2)}}
                                </td>@endif
                        </tr>
                        <tr>
                            @if ($item->campo3 != "")<td>Campo 3: <br> 
                                {{JugadoresController::devolverEquipo($item->campo3)}}
                                </td>@endif
                            @if ($item->campo4 != "")<td>Campo 4: <br> 
                                {{JugadoresController::devolverEquipo($item->campo4)}}
                                </td>@endif
                        </tr>
                        </table>
                        @endforeach</td>
                    
                    
                    <!-- martes segunda franja -->
                    <td>@foreach ($m4 as $item)
                        <table>
                        <tr>
                            @if ($item->campo1 != "")<td>Campo 1: <br> 
                                {{JugadoresController::devolverEquipo($item->campo1)}}
                                </td>@endif
                            @if ($item->campo2 != "")<td>Campo 2: <br> 
                                {{JugadoresController::devolverEquipo($item->campo2)}}
                                </td>@endif
                        </tr>
                        <tr>
                            @if ($item->campo3 != "")<td>Campo 3: <br> 
                                {{JugadoresController::devolverEquipo($item->campo3)}}
                                </td>@endif
                            @if ($item->campo4 != "")<td>Campo 4: <br> 
                                {{JugadoresController::devolverEquipo($item->campo4)}}
                                </td>@endif
                        </tr>
                        </table>
                        @endforeach</td>
                    

                    
                    <!-- miercoles segunda franja -->
                    <td>@foreach ($x4 as $item)
                        <table>
                        <tr>
                            @if ($item->campo1 != "")<td>Campo 1: <br> 
                                {{JugadoresController::devolverEquipo($item->campo1)}}
                                </td>@endif
                            @if ($item->campo2 != "")<td>Campo 2: <br> 
                                {{JugadoresController::devolverEquipo($item->campo2)}}
                                </td>@endif
                        </tr>
                        <tr>
                            @if ($item->campo3 != "")<td>Campo 3: <br> 
                                {{JugadoresController::devolverEquipo($item->campo3)}}
                                </td>@endif
                            @if ($item->campo4 != "")<td>Campo 4: <br> 
                                {{JugadoresController::devolverEquipo($item->campo4)}}
                                </td>@endif
                        </tr>
                        </table>
                        @endforeach</td>
                    
                    
                    <!-- jueves segunda franja -->
                    <td>@foreach ($j4 as $item)
                        <table>
                        <tr>
                            @if ($item->campo1 != "")<td>Campo 1: <br> 
                                {{JugadoresController::devolverEquipo($item->campo1)}}
                                </td>@endif
                            @if ($item->campo2 != "")<td>Campo 2: <br> 
                                {{JugadoresController::devolverEquipo($item->campo2)}}
                                </td>@endif
                        </tr>
                        <tr>
                            @if ($item->campo3 != "")<td>Campo 3: <br> 
                                {{JugadoresController::devolverEquipo($item->campo3)}}
                                </td>@endif
                            @if ($item->campo4 != "")<td>Campo 4: <br> 
                                {{JugadoresController::devolverEquipo($item->campo4)}}
                                </td>@endif
                        </tr>
                        </table>
                        @endforeach</td>
                    
                    
                    <!-- viernes segunda franja -->
                    <td>@foreach ($v4 as $item)
                        <table>
                        <tr>
                            @if ($item->campo1 != "")<td>Campo 1: <br> 
                                {{JugadoresController::devolverEquipo($item->campo1)}}
                                </td>@endif
                            @if ($item->campo2 != "")<td>Campo 2: <br> 
                                {{JugadoresController::devolverEquipo($item->campo2)}}
                                </td>@endif
                        </tr>
                        <tr>
                            @if ($item->campo3 != "")<td>Campo 3: <br> 
                                {{JugadoresController::devolverEquipo($item->campo3)}}
                                </td>@endif
                            @if ($item->campo4 != "")<td>Campo 4: <br> 
                                {{JugadoresController::devolverEquipo($item->campo4)}}
                                </td>@endif
                        </tr>
                        </table>
                        @endforeach</td>
                    
            </tr>
    </table>
@endsection
