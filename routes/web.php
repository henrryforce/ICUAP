<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\CorreoController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdministracionController;
use App\Http\Controllers\CrearInvertagorController;
use App\Http\Controllers\ListadoInvestigadoresController;


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

Route::get('/', function () {return view('pagina_principal');})->name('index');
Route::get('/login',[loginController::class,'index'])->name('login');
Route::post('/login',[loginController::class,'store']);
Route::post('/logout',[LogoutController::class,'store'])->name('logout');
Route::post('/register', [RegisterController::class,'store'])->name('altaUsaurio');
Route::get('/administracion', [AdministracionController::class,'index'])->name('administracion');
Route::post('/administracion', [AdministracionController::class,'index']);

Route::get('/administracion/investigador/detalles', function () {return view('auth.detalles_investigador');})->name('investigador.detalles');
Route::post('/requestTest', [CrearInvertagorController::class,'store'])->name("request");
Route::get('/vista_usuarios', function () {return view('vista_usuarios');})->name('usuarios');
Route::get('/listado_investigadores', [ListadoInvestigadoresController::class,'index'])->name('investigadores');
Route::post('/listado_investigadores', [ListadoInvestigadoresController::class,'index']);
Route::delete('/listado_investigadores/{id}', [ListadoInvestigadoresController::class,'destroy'])->name('investigadoresDelete');
Route::get('/lista_usuarios', function () {return view('lista_usuarios');})->name('lista_usuarios');
