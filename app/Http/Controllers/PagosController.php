<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jugadores;
use App\Models\Pagos;
use App\Models\Club;
use App\Models\Equipo;
use Barryvdh\DomPDF\Facade\Pdf;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class PagosController extends Controller
{
    public function index(){

        $usuario=User::find(Auth::id());
        $a=$usuario->id_club;
        // $u=Jugadores::where('id_club','=',$a)->get();
        $pagos = Pagos::where('id_club','=',$a)->get();

        return view('gestion_economica', compact('pagos'));
    }

    public function actualizar_pago(Pagos $item){
        $item->update([
            'tipo' => request('tipopago')
        ]);
        return back();
    }

    public function nuevo_pago(Pagos $pago){
        
        return view('nuevo_pago', [
            'usuario' => $pago
        ]);

    }

    public function generar_recibo(Pagos $user){

        $num_pago = request('pago');
        $fecha = request('fecha');
        $cantidad = request('cantidad');
        $jugador = JugadoresController::devolverJugador($user->id_jugador);
        $equipo = JugadoresController::devolverCategoria($user->id_jugador);
        


        $user->update([
            $num_pago => $cantidad,
        ]);

        $pdf = PDF::loadView('design_pdf.reportepdf', compact('num_pago','fecha','cantidad','jugador','equipo'));

        return $pdf->download($jugador.'_'.$num_pago.'.pdf');

         
    }
}
