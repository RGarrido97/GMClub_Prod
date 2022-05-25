<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Equipo;
use App\Models\Jugadores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class JugadoresController extends Controller
{
    public function crearjugadores(){
        $usuario=User::find(Auth::id());
        $a=$usuario->id;
        $id=Equipo::where('id_entrenador','=',$a)->get();
        $u=Jugadores::where('id_entrenador','=',$a)->get();
        return view('crearjugadores', compact('id', 'u'));
    }


    public function estadisticadejugadores(){
        $usuario=User::find(Auth::id());
        $a=$usuario->id;
        $id=Equipo::where('id_entrenador','=',$a)->get();
        $u=Jugadores::where('id_entrenador','=',$a)->get();
        return view('estadisticadejugadores', compact('id', 'u'));
    }

    //sumargol
    public function sumargol($id){
        $carrito = Jugadores::find($id);
        $carrito->update([
            'goles' => $carrito->goles+1
        ]);
        return back();
    }

    public function restargol($user){
          
        $carrito = Jugadores::find($id);
        $carrito->update([
            'goles' => $carrito->goles-1
        ]);
        return back();
    }

    //subirjugadores
    public function subirjugadores(Request $request){

        $usuario=User::find(Auth::id());
        $a=$usuario->id;

        $add = Jugadores::create([
            'id_equipo'  => $request->id_equipo,
            'id_entrenador'  => $a,
            'nombre'   => $request->nombre,
            'apellidos' =>$request->apellidos,
         ]);
         return back();
    }

    static function devolverEquipo($a){
        $c = Equipo::find($a)->categoria;
        $d = Equipo::find($a)->letra;
        $da = $c.' '.$d;
        return($da);

    }

    public function eliminarjugador(User $user){
        // dd($user);
        $categoria2 = User::find($user);
        $categoria2->each->delete();
        return back();
    }
}
