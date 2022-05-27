<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Blog;
use App\Models\Equipo;
use App\Models\Horario;
use App\Models\Club;


use config\session;


class InicioController extends Controller
{
    //
    public function index()
    {   
        
        return view('welcome');
    }

    public function calendario()
    {   

        return view('calendario');
    }

    public function home()
    {
        if (Auth::user()) {
            $usuario=User::find(Auth::id());
            $usuarioidclub=$usuario->id_club;
            if($usuarioidclub == null){
                return view('form_club' ); // Añadir route con nombre crea_club
            }else {
                $usuario=User::find(Auth::id());
                $a=$usuario->id_club;
                // print($a);
                $info=Club::where('id','=',$a)->get();
                return view('home', compact('info'));   
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

    public function crearhorario(){
        $usuario=User::find(Auth::id());
        $a=$usuario->id_club;
        // print($a);
        $f7=Equipo::where('id_club','=',$a)->where('tipo','=','f7')->get();
        $f11=Equipo::where('id_club','=',$a)->where('tipo','=','f11')->get();
        $datos=Horario::where('id_club','=',$a)->get();
            return view('creahorario', compact('f7','f11','datos'));
        
    }

    //crearcoordinador
    public function crearcoordinador()
    {
        $usuario=User::find(Auth::id());
        $a=$usuario->id_club;
        // print($a);
        $id=User::where('id_club','=',$a)->where('rol','=','coordinador')->get();
        return view('crearcoordinador', compact('id'));   
    }       

    public function actualizarperfil(){
        User::find(Auth::id())->update([
            'name' => request('name'),
            'apellidos' => request('apellido'),
            'rol' => request('rol'),
            $code = request('password'),
            'password' => Hash::make($code),
        ]);
        return view('home');  
    }

    public function actualizarperfilmiembros(User $user){
        $user->update([
            'name' => request('name'),
            'apellidos' => request('apellido'),
            'rol' => request('rol'),
            $code = request('password'),
            'password' => Hash::make($code),
        ]);
        return view('home');  
    }

    public function editar_usuario(User $user){

        return view('editarperfil_miembros', [
            'usuario' => $user
        ]);

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


    public function presidente(Request $request){
        $pswd = Hash::make($request->password);
        $usuario=User::find(Auth::id());
        $club_nuevo = new User;
        $club_nuevo ->name = $request->name;
        $club_nuevo ->apellidos = $request->apellido;
        $club_nuevo ->rol = $request->rol;
        $club_nuevo ->email = $request->email;
        $club_nuevo ->password = $pswd;

        $club_nuevo -> save();
        return view('auth.login');
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
        $blog=Blog::where('id_club','=',$a)->where('tipo','=','junta')->orderBy('created_at','DESC')->get();
        return view('correointerno', compact('blog'));
    }

    public function blogentrenador(){
        $usuario=User::find(Auth::id());
        $a=$usuario->id_club;
        $blog=Blog::where('id_club','=',$a)->where('tipo','=','entrenador')->orderBy('created_at','DESC')->get();
        return view('blogentrenador', compact('blog'));
    }

    static function devolverUser($a){

        $nombre_completo = User::find($a)->name.' '.User::find($a)->apellidos;
        return $nombre_completo;
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
            'contenido' =>$request->comentarios,
            'tipo' => $request->blog
         ]);
         return back();
    }

    
    //crearentrenador
    public function crearentrenador(){
        $usuario=User::find(Auth::id());
        $a=$usuario->id_club;
        $id=User::find(Auth::id())->where('id_club','=',$a)->where('rol','=','Entrenador')->get();
        return view('crearentrenador', compact('id'));
    }

    //equipos
    public function equipos(){
        $usuario=User::find(Auth::id());
        $a=$usuario->id_club;
        $id=User::find(Auth::id())->where('id_club','=',$a)->where('rol','=','Entrenador')->get();
        $as=Equipo::where('id_club','=',$a)->OrderBy('categoria','asc')->get();
        return view('equipos', compact('id','as'));
    }

    //subirequipo
    public function subirequipo(Request $request){

        $add = Equipo::create([
            'id_club'  => User::find(Auth::id())->id_club,
            'id_entrenador'   => $request->id_entrenador,
            'categoria' =>$request->categoria,
            'letra' => $request->letra,
            'division' => $request->division,
            'tipo' => $request->tipo,
         ]);
         return back();
    }

    public function imprimir(){
        
        

    }
}
