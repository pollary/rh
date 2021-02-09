<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FuncionarioController;
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
Route::resource('funcionarios',FuncionarioController::class);       //resource = get,post,edit,delete
Route::get('funcionarios/cpf/{cpf}',[FuncionarioController::class, 'showByCpf']);
Route::get('funcionarios/nome/{nome}',[FuncionarioController::class, 'showByName']);


//Endereço antigo:
//http://187.115.70.244:4556/sig/app.html#/servicosonline/portal-servidor