<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Blog;

use config\session;


class InicioController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

    public function home()
    {
        if (Auth::user()) {
            $usuario=User::find(Auth::id());
            $usuarioidclub=$usuario->id_club;
            if($usuarioidclub == null){
                return view('form_club' ); // Añadir route con nombre crea_club
            }else {
                return view('home');   
            }
        }else{
            return view('welcome');
        }
        
    }
    public function editarperfil(){
        if (Auth::user()) {
            $usuario=User::find(Auth::id())->get();
            return view('editarperfil', compact('usuario'));
        }else{
            return view('welcome');
        }
        
    }

    public function actualizarperfil(){
        User::find(Auth::id())->update([
            'name' => request('name'),
            'apellidos' => request('apellido'),
            'rol' => request('rol'),
            'email' => request('email'),
            $code = request('password'),
            'password' => Hash::make($code),
        ]);
        return InicioController::editarperfil();  
    }

    public function crearjunta(){
        $usuario=User::find(Auth::id());
        $a=$usuario->id_club;
        // print($a);
        $id=User::find(Auth::id())->where('id_club','=',$a)->get();
        // var_dump($id);
        return view('crearjunta', compact('id'));
    }
    public function crearusuariojunta(Request $request){
        $pswd = Hash::make($request->password);
        $usuario=User::find(Auth::id());
        $club_nuevo = new User;
        $club_nuevo ->name = $request->name;
        $club_nuevo ->apellidos = $request->apellido;
        $club_nuevo ->id_club = $usuario->id_club;
        $club_nuevo ->rol = $request->rol;
        $club_nuevo ->email = $request->email;
        $club_nuevo ->password = $pswd;

        $club_nuevo -> save();
        return back();
    }

    public function eliminarusario(User $user){
        // dd($user);
        $categoria2 = User::find($user);
        $categoria2->each->delete();
        return back();
    }

    public function correointerno(){
        $usuario=User::find(Auth::id());
        $a=$usuario->id_club;
        $blog=Blog::where('id_club','=',$a)->orderBy('created_at','ASC')->get();
        return view('correointerno', compact('blog'));
    }

    static function devolverUser($a){
        return User::find($a)->name;
    }
    static function devolverRol($a){
        return User::find($a)->rol;
    }
    public function crearentrada(){
        return view('crearentrada');
    }

    public function subirpublicacion(Request $request){


        $add = Blog::create([
            'id_user' => User::find(Auth::id())->id,
            'id_club'  => User::find(Auth::id())->id_club,
            'titulo'   => $request->titulo,
            'contenido' =>$request->comentarios
         ]);
        return route('correointerno');
    }

    public function editar_usuario(User $user){

        return view('editarperfil_miembros', [
            'usuario' => $user
        ]);

    }
}
