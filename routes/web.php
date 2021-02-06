<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChamadoController;
use App\Http\Controllers\SuporteController;
use App\Http\Controllers\AssuntoController;
use App\Http\Controllers\AssuntoDetalheController;
use App\Http\Controllers\HomeController;

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


Route::get('/', [HomeController::class,'index']);


Route::group(['prefix' => 'suporte'], function () {
	Route::get('',[SuporteController::class,'index']);
	Route::get('painel',[SuporteController::class,'dashboard']);
	Route::resource('chamados',ChamadoController::class);
	Route::resource('assuntos',AssuntoController::class);
	Route::resource('assuntos-detalhes',AssuntoDetalheController::class);
});

//Endereço antigo:
//http://187.115.70.244:4556/sig/app.html#/servicosonline/portal-servidor