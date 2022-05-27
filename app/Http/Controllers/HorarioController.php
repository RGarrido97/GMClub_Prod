<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Horario;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    //subirfranja

    public function subirfranja(Request $request){
        $aa = $request->tipo;
        if($aa == 'f11'){
            $add = Horario::create([
                'id_club'  => User::find(Auth::id())->id_club,
                'dia'   => $request->dia,
                'franja' =>$request->franja,
                'hora_inicio' => $request->hora_inicio,
                'hora_fin' => $request->hora_fin,
                'tipo' => $request->tipo,
                'campo1' => $request->campo11,
                'campo2' => $request->campo12,
                'campo3' => NULL,
                'campo4' => NULL,
            ]);}else{
                $add = Horario::create([
                    'id_club'  => User::find(Auth::id())->id_club,
                    'dia'   => $request->dia,
                    'franja' =>$request->franja,
                    'hora_inicio' => $request->hora_inicio,
                    'hora_fin' => $request->hora_fin,
                    'tipo' => $request->tipo,
                    'campo1' => $request->campo1,
                    'campo2' => $request->campo2,
                    'campo3' => $request->campo3,
                    'campo4' => $request->campo4,
                ]);}

            return back();   
        }
        
        public function eliminarhora($user){
            // dd($user);
            $categoria2 = Horario::find($user);
            $categoria2->delete();
            return back();
        }
        public function horarios()
        {
            $usuario=User::find(Auth::id());
            $a=$usuario->id_club;
            //groupBy
            $gb=Horario::where('id_club','=',$a)->groupBy('franja')->get('franja');

            $id=Horario::where('id_club','=',$a)->where('franja','=','1')->where('dia','=','lunes')->get();
            
            $m1=Horario::where('id_club','=',$a)->where('franja','=','1')->where('dia','=','martes')->get();
            $x1=Horario::where('id_club','=',$a)->where('franja','=','1')->where('dia','=','miercoles')->get();
            $j1=Horario::where('id_club','=',$a)->where('franja','=','1')->where('dia','=','jueves')->get();
            $v1=Horario::where('id_club','=',$a)->where('franja','=','1')->where('dia','=','viernes')->get();


            $l2=Horario::where('id_club','=',$a)->where('franja','=','2')->where('dia','=','lunes')->get();
            $m2=Horario::where('id_club','=',$a)->where('franja','=','2')->where('dia','=','martes')->get();
            $x2=Horario::where('id_club','=',$a)->where('franja','=','2')->where('dia','=','miercoles')->get();
            $j2=Horario::where('id_club','=',$a)->where('franja','=','2')->where('dia','=','jueves')->get();
            $v2=Horario::where('id_club','=',$a)->where('franja','=','2')->where('dia','=','viernes')->get();


            $l3=Horario::where('id_club','=',$a)->where('franja','=','3')->where('dia','=','lunes')->get();
            $m3=Horario::where('id_club','=',$a)->where('franja','=','3')->where('dia','=','martes')->get();
            $x3=Horario::where('id_club','=',$a)->where('franja','=','3')->where('dia','=','miercoles')->get();
            $j3=Horario::where('id_club','=',$a)->where('franja','=','3')->where('dia','=','jueves')->get();
            $v3=Horario::where('id_club','=',$a)->where('franja','=','3')->where('dia','=','viernes')->get();



            $l4=Horario::where('id_club','=',$a)->where('franja','=','4')->where('dia','=','lunes')->get();
            $m4=Horario::where('id_club','=',$a)->where('franja','=','4')->where('dia','=','martes')->get();
            $x4=Horario::where('id_club','=',$a)->where('franja','=','4')->where('dia','=','miercoles')->get();
            $j4=Horario::where('id_club','=',$a)->where('franja','=','4')->where('dia','=','jueves')->get();
            $v4=Horario::where('id_club','=',$a)->where('franja','=','4')->where('dia','=','viernes')->get();


            return view('horarios', compact('gb','id', 'm1','x1', 'j1','v1','l2', 'm2','x2', 'j2','v2','l3', 'm3','x3', 'j3','v3','l4', 'm4','x4', 'j4','v4'));
        }
}

