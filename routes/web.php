<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\CorreoController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdministracionController;
use App\Http\Controllers\CompletarInvestigadores;
use App\Http\Controllers\ConsultasCharts;
use App\Http\Controllers\CrearInvertagorController;
use App\Http\Controllers\ListadoInvestigadoresController;
use App\Http\Controllers\PaginaListaUsuarios;
use App\Http\Controllers\ResultadoBusquedaInvestigador;
use App\Http\Controllers\TestChart;

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
Route::get('/administracion', [AdministracionController::class,'index'])->name('administracion');
Route::post('/administracion', [AdministracionController::class,'index']);

Route::get('/administracion/investigador/completar', [CompletarInvestigadores::class,'index'])->name('completarInvestigador');
Route::post('/requestTest', [CrearInvertagorController::class,'store'])->name("request");
Route::get('/vista_usuarios',[ResultadoBusquedaInvestigador::class,'index'])->name('resultadoBusquedaInvestigador');
Route::get('/listado_investigadores', [ListadoInvestigadoresController::class,'index'])->name('investigadores');
Route::post('/listado_investigadores', [ListadoInvestigadoresController::class,'index']);
Route::get('/lista_usuarios', [PaginaListaUsuarios::class,'index'])->name('listaUsuarios');
Route::get('/testchart',[TestChart::class,'index']);
Route::get('/chart/patentes',[ConsultasCharts::class,'patentes'])->name('ConsultaPatentes');
Route::get('/chart/articulos',[ConsultasCharts::class,'articulos'])->name('ConsultarArticulos');