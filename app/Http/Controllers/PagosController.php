<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jugadores;
use App\Models\Pagos;
use App\Models\Equipo;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class PagosController extends Controller
{
    public function index(){

        $usuario=User::find(Auth::id());
        $a=$usuario->id_club;
        $u=Jugadores::where('id_club','=',$a)->get();
        $pagos = Pagos::find($a)->get();

        return view('gestion_economica', compact('u','pagos'));
    }

    public function actualizar_pago(Pagos $item){
        $item->update([
            'tipo' => request('tipopago')
        ]);
        return back();
    }
}
