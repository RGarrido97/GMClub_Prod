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

    public function actequipo(){
        Equipo::find()->update([
            'name' => request('name'),
            'apellidos' => request('apellido'),
            'rol' => request('rol'),
            $code = request('password'),
            'password' => Hash::make($code),
        ]);
        return back(); 
    }

    public function verplantilla(){
        $user=User::find(Auth::id());
        $a=$user->id_club;
        
        $equipos = Equipo::where('id_club','=',$a)->get();
        return view('verplantilla', compact('equipos'));
    }

    public function actualizar_datos_equipo(Equipo $user){
        $user->update([
            'division' => request('division_mod'),
            'id_entrenador' => request('id_entrenador_mod')
        ]);
        return back();
    }
}
