<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('paginaInicial');
});

Route::get('/paginaInicial', function () {
    return view('paginaInicial');
});





Route::get('/produto/cadastrar', [ProdutoController::class,'cadastrar']);

Route::get('/produto/listar', [ProdutoController::class, 'listar']);

Route::post('/produto/criar', [ProdutoController::class, 'criar']);

Route::post('/produto/editar/{id}', [ProdutoController::class, 'editar']);

Route::post('/produto/excluir/{id}', [ProdutoController::class,'excluir']);

Route::put('/produto/atualizar/{id}', [ProdutoController::class,'atualizar']);



