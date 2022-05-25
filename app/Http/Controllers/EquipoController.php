<?php

namespace App\Http\Controllers;
use App\Models\Equipo;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function eliminar_equipo($user){
        // dd($user);
        $categoria2 = Equipo::find($user);
        $categoria2->delete();
        return back();
    }

    public function editar_equipo(User $user){
        $user=User::find(Auth::id());
        $a=$user->id_club;
        $entrenadoresClub=User::find(Auth::id())->where('id_club','=',$a)->where('rol','=','Entrenador')->get();
        $equipos = Equipo::where('id_club','=',$a)->get();
        return view('editar_equipo', compact('entrenadoresClub','equipos'));
    }
}
