<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListaDeComprasController;
use App\Http\Controllers\ListaDeProdutosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('cadastrar-lista-de-compra', [ListaDeComprasController::class, 'cadastrarListaDeCompra']);
Route::get('visualizar-lista-de-produtos/{id}', [ListaDeProdutosController::class, 'visualizarListaDeProdutos']);
Route::post('duplicar-lista-de-produtos/{id}', [ListaDeProdutosController::class, 'duplicarListaDeProdutos']);
Route::put('adicionar-quantidade-do-produto', [ListaDeProdutosController::class, 'adicionarQuantidadeDoProdutos']);
Route::put('diminuir-quantidade-do-produto', [ListaDeProdutosController::class, 'diminuirQuantidadeDoProdutos']);
Route::post('cadastrar-produto-na-lista/{id}', [ListaDeProdutosController::class, 'cadastrarProdutoNaLista']);
Route::delete('remover-produto-da-lista/{id}', [ListaDeProdutosController::class, 'removerProdutoDaLista']);
