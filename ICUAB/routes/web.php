<?php

use App\Http\Controllers\AdministracionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\CorreoController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CrearInvertagorController;

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
Route::post('/register', [RegisterController::class,'store'])->name('altaUsaurio');
Route::get('/administracion', [AdministracionController::class,'index'])->name('administracion');
Route::get('/administracion/investigador/detalles', function () {return view('auth.detalles_investigador');})->name('investigador.detalles');
Route::post('/requestTest', [CrearInvertagorController::class,'store'])->name("request");

