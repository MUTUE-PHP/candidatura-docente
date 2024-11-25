<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\NacionalidadeController;
use App\Http\Controllers\PessoaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(PessoaController::class)->group(function(){

    Route::post('salvar-pessoa','store');

});

Route::get('dados_formulario',[DocenteController::class,'index']);
Route::post('docente',[DocenteController::class,'store']);
Route::get('docente/{id}',[DocenteController::class,'show']);
Route::get('docente/edit/{id}',[DocenteController::class,'edit']);
Route::put('docente/update/{id}',[DocenteController::class,'update']);
Route::delete('docente/destroy/{id}',[DocenteController::class,'destroy']);


