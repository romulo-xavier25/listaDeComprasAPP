<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaDeCompras extends Model
{
    use HasFactory;

    public function cadastrarListaDeCompra($request) : array
    {
        try {
            $this->titulo = $request->titulo;
            $this->lista_de_produtos_id = $request->lista_de_produtos_id;
            $this->save();

            return [
                'success' => true,
                'message' => 'Lista de compra cadastrada com sucesso!'
            ];

        } catch (Exception $e) {
            
            return [
                'success' => false,
                'message' => 'Erro na tentativa de cadastrar uma lista de compra!'
            ];

        }
    }

}
