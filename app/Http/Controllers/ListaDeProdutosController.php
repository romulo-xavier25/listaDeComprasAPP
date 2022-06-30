<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Models\ListaDeProdutos;
use App\Models\Produto;

class ListaDeProdutosController extends Controller
{
    public function visualizarListaDeProdutos($id) : Collection
    {
        $lista_de_produto = new ListaDeProdutos();
        $response = $lista_de_produto->visualizarListaDeProdutos($id);

        return $response;
    }

    public function duplicarListaDeProdutos($id) : string
    {
        $duplicar_lista_de_produto = new ListaDeProdutos();
        $response = $duplicar_lista_de_produto->duplicarListaDeProdutos($id);

        if ($response['success'])
            return $response['message'];

        return $response['message'];
    }

    public function adicionarQuantidadeDoProdutos(Request $request) : string
    {
        $lista_de_produto = new ListaDeProdutos();
        $response = $lista_de_produto->adicionarQuantidadeDoProdutos($request);

        return $response;
    }

    public function diminuirQuantidadeDoProdutos(Request $request) : string
    {
        $lista_de_produto = new ListaDeProdutos();
        $response = $lista_de_produto->diminuirQuantidadeDoProdutos($request);

        return $response;
    }

    public function cadastrarProdutoNaLista($id, Request $request) : string
    {
        $lista_de_produto = new ListaDeProdutos();
        $response = $lista_de_produto->cadastrarProdutoNaLista($id, $request);

        if ($response['success'])
            return $response['message'];

        return $response['message'];
    }

    public function removerProdutoDaLista($id, Request $request) : string
    {
        $lista_de_produto = new ListaDeProdutos();
        $response = $lista_de_produto->removerProdutoDaLista($id, $request);

        if ($response['success'])
            return $response['message'];

        return $response['message'];
    }
}
