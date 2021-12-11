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


Route::group(['middleware' => ['auth']], function() {
    Route::get('/', [HomeController::class,'index']);
    Route::resource('funcionarios',FuncionarioController::class);       //resource = get,post,edit,delete
    Route::get('funcionarios/cpf/{cpf}',[FuncionarioController::class, 'showByCpf']);
    Route::get('funcionarios/nome/{nome}',[FuncionarioController::class, 'showByName']);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


require __DIR__.'/auth.php';
