<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListaDeCompras;

class ListaDeComprasController extends Controller
{
    public function cadastrarListaDeCompra(Request $request) : string
    {
        $cadastrar_lista_compra = new ListaDeCompras();
        $response = $cadastrar_lista_compra->cadastrarListaDeCompra($request);

        if ($response['success'])
            return $response['message'];

        return $response['message'];
    }
}
