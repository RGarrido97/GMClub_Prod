<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Equipo;
use App\Models\Jugadores;
use App\Models\Pagos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class JugadoresController extends Controller
{
    public function crearjugadores(){
        $usuario=User::find(Auth::id());
        $a=$usuario->id;
        $id=Equipo::where('id_entrenador','=',$a)->get();
        $u=Jugadores::where('id_entrenador','=',$a)->OrderBy('id_equipo', 'desc')->get();
        return view('crearjugadores', compact('id', 'u'));
    }


    public function estadisticadejugadores(){
        $usuario=User::find(Auth::id());
        $a=$usuario->id;
        $id=Equipo::where('id_entrenador','=',$a)->get();
        $u=Jugadores::where('id_entrenador','=',$a)->OrderBy('nombre', 'asc')->get();
        return view('estadisticadejugadores', compact('id', 'u'));
    }


    public function verplantilladet(Equipo $equipo){
        $a=$equipo->id;
        $u=Jugadores::where('id_equipo','=',$a)->OrderBy('nombre', 'asc')->get();
        return view('verplantilladet', compact('u', 'equipo'));
    }


    public function estadisticadejugadoresclub(){
        $usuario=User::find(Auth::id());
        $a=$usuario->id_club;
        $u=Jugadores::where('id_club','=',$a)->OrderBy('nombre', 'asc')->get();
        return view('estadisticadejugadoresclub', compact('u'));
    }

    // sumarroj
    public function sumarroj($id){
        $carrito = Jugadores::find($id);
        $carrito->update([
            'tr' => $carrito->tr+1
        ]);
        return back();
    }
    // resroj
    public function resroj($id){
        $carrito = Jugadores::find($id);
        $carrito->update([
            'tr' => $carrito->tr-1
        ]);
        return back();
    }

    //sumargol
    public function sumargol($id){
        $carrito = Jugadores::find($id);
        $carrito->update([
            'goles' => $carrito->goles+1
        ]);
        return back();
    }

    // sumaram
    public function sumaram($id){
        $carrito = Jugadores::find($id);
        $carrito->update([
            'ta' => $carrito->ta+1
        ]);
        return back();
    }

    // resam
    public function resam($id){
            $carrito = Jugadores::find($id);
            $carrito->update([
                'ta' => $carrito->ta-1
            ]);
            return back();
        }

    //sumarasis
    public function sumarasis($id){
        $carrito = Jugadores::find($id);
        $carrito->update([
            'asistencias' => $carrito->asistencias+1
        ]);
        return back();
    }

    //restargoles
    public function restargoles($id){
        $carrito = Jugadores::find($id);
        $carrito->update([
            'goles' => $carrito->goles-1
        ]);
        return back();
    }
    //resasis
    public function resasis($id){
        $carrito = Jugadores::find($id);
        $carrito->update([
            'asistencias' => $carrito->asistencias-1
        ]);
        return back();
    }


    public function restargol($user){
        $carrito = Jugadores::find($user);
        $carrito->update([
            'goles' => $carrito->goles-1
        ]);
        return back();
    }


    //subirjugadores
    public function subirjugadores(Request $request){

        $usuario=User::find(Auth::id());
        $a=$usuario->id;

        $b=$usuario->id_club;

        $add = Jugadores::create([
            'id_club' => $b,
            'id_equipo'  => $request->id_equipo,
            'id_entrenador'  => $a,
            'nombre'   => $request->nombre,
            'apellidos' =>$request->apellidos,
         ]);

         $resultado = Jugadores::orderBy('id', 'desc')->take(1)->get();

         $add_pago = Pagos::create([
            'id_jugador' => $resultado[0]->id,
            'id_club' => $b,
         ]);
         return back();
    }

    static function devolverEquipo($a){
        $c = Equipo::find($a)->categoria;
        $d = Equipo::find($a)->letra;
        $da = $c.' '.$d;
        return($da);

    }

    static function devolverCategoria($a){
        $z = Jugadores::find($a)->id_equipo;
        $c = Equipo::find($z)->categoria;
        $d = Equipo::find($z)->letra;
        $da = $c.' '.$d;
        return($da);

    }

    static function devolverJugador($a){

        $nombre_completo = Jugadores::find($a)->nombre ." ". Jugadores::find($a)->apellidos;
        return $nombre_completo;
    }

    public function eliminarjugador($user){
        // dd($user);
        $categoria2 = Jugadores::find($user);
        $categoria2->delete();
        return back();
    }

    //editar_jugador
    public function actualizar_jugador(Jugadores $user){

        $user->update([
            'nombre' => request('name'),
            'apellidos' => request('apellido')
        ]);
        return back();
    }
        
        
}
