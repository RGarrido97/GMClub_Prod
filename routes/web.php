<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ControllerEvent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('/', [InicioController::class, 'index'])->name('inico');
Route::get('/home', [InicioController::class, 'home'])->name('home');
Route::post('/crear_club', [ClubController::class, 'crear_club'])->name('crear_club');
// editarperfil
Route::get('/editarperfil', [InicioController::class, 'editarperfil'])->name('editarperfil');
Route::get('/editarusuario/{user}', [InicioController::class, 'editar_usuario'])->name('editar_usuario');
//actualizarperfil
Route::patch('/actualizarperfil', [InicioController::class, 'actualizarperfil'])->name('actualizarperfil');
Route::patch('/actualizarperfilmiembros/{user}', [InicioController::class, 'actualizarperfilmiembros'])->name('actualizarperfilmiembros');
// Route::get('/ome', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// crearjunta
Route::get('/crearjunta', [InicioController::class, 'crearjunta'])->name('crearjunta');
//crearusuariojunta
Route::post('/crearusuariojunta', [InicioController::class, 'crearusuariojunta'])->name('crearusuariojunta');
//eliminarusario
Route::delete('/eliminarusario/{user}', [InicioController::class, 'eliminarusario'])->name('eliminarusario');

//correo-interno
Route::get('/correointerno', [InicioController::class, 'correointerno'])->name('correointerno');
//crearentrada
Route::get('/crearentrada', [InicioController::class, 'crearentrada'])->name('crearentrada');
//subirpublicacion
Route::post('/subirpublicacion', [InicioController::class, 'subirpublicacion'])->name('subirpublicacion');
//blogentrenador
Route::get('/blogentrenador', [InicioController::class, 'blogentrenador'])->name('blogentrenador');
//crearentrenador
Route::get('/crearentrenador', [InicioController::class, 'crearentrenador'])->name('crearentrenador');
//equipos
Route::get('/equipos', [InicioController::class, 'equipos'])->name('equipos');
//subirequipo
Route::post('/subirequipo', [InicioController::class, 'subirequipo'])->name('subirequipo');
//presidente
Route::post('/presidente', [InicioController::class, 'presidente'])->name('presidente');
//editar_equipo
Route::get('editar_equipo/{equipos}', [EquipoController::class, 'editar_equipo'])->name('editar_equipo');
//eliminar_equipo
Route::delete('/eliminar_equipo/{user}', [EquipoController::class, 'eliminar_equipo'])->name('eliminar_equipo');
//crearjugadores
Route::get('/crearjugadores', [JugadoresController::class, 'crearjugadores'])->name('crearjugadores');
//subirjugadores
Route::post('/subirjugadores', [JugadoresController::class, 'subirjugadores'])->name('subirjugadores');
//estadisticadejugadores
Route::get('/estadisticadejugadores', [JugadoresController::class, 'estadisticadejugadores'])->name('estadisticadejugadores');
//sumargol
Route::patch('/sumargol/{user}', [JugadoresController::class, 'sumargol'])->name('sumargol');
//restargol
Route::patch('/restargol/{user}', [JugadoresController::class, 'restargol'])->name('restargol');
//editar_jugador
Route::get('/editar_jugador/{user}', [JugadoresController::class, 'editar_jugador'])->name('editar_jugador');

// eliminarjugador
Route::delete('/eliminarjugador/{user}', [JugadoresController::class, 'eliminarjugador'])->name('eliminarjugador');
