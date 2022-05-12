<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


