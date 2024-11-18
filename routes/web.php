<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HandleInertiaRequests;
use App\Http\Controllers\{
    DocenteController,
};


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return inertia('candidatura');
});

Route::get('/dados_pessoais', function () {
    return inertia('dados_pessoais');

});
Route::get('/formacao_academica', function () {
    return inertia('formacao_academica');

});


Route::get('/get-nacionalidade', [App\Http\Controllers\NacionalidadeController::class, 'store']);
Route::resource('docente', DocenteController::class);



// Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
Route::middleware(['auth'])->group(function () {
    Route::get('/teste', [App\Http\Controllers\NovaController::class, 'index']);
//    Route::get('/teste_pessoa', [App\Http\Controllers\PessoaController::class, 'index']);
//    Route::get('/teste_nacionalidade', [App\Http\Controllers\PessoaController::class, 'store']);
//    Route::get('/teste_nacionalidade', [App\Http\Controllers\NacionalidadeController::class, 'index']);


}); */



