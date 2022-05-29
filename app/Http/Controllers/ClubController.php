<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Club;

class ClubController extends Controller
{
    //

    static function crear_club(Request $request){

        
        if (is_uploaded_file($_FILES['escudo']['tmp_name'])){
            $club_nuevo = new Club;
            $club_nuevo ->nombre = $request->nombre;
            $club_nuevo ->escudo = $_FILES["escudo"]['name'];
            $club_nuevo ->localidad = $request->localidad;
            $club_nuevo ->provincia = $request->provincia;
            $club_nuevo ->federacion = $request->federacion;
            $club_nuevo -> save();
            $clubs = Club::orderBy('id','desc')->get();
            //mover foto
                $estructura = "fotos/".$clubs[0]->id;
                if (!is_dir($estructura)){
                    mkdir($estructura, 0777, true);
                }
                move_uploaded_file($_FILES["escudo"]['tmp_name'], $estructura."/".$_FILES["escudo"]['name']);

            $asignarid = $clubs[0]->id;

            User::find(Auth::id())->update([
                'id_club' => $asignarid
            ]);
        }

        return view('welcome');
    }
}
