<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class ListaDeProdutos extends Model
{
    use HasFactory;

    public function visualizarListaDeProdutos($id) : Collection
    {
        $lista_de_produto = DB::table('lista_de_produtos_produto')
                                ->join('produtos', 'produtos.id', '=', 'lista_de_produtos_produto.produto_id')
                                ->select('produtos.*')
                                ->get();

        return $lista_de_produto;
    }

    public function duplicarListaDeProdutos($id) : array
    {
        $lista_de_produto = DB::table('lista_de_produtos_produto')
                                ->where('lista_de_produtos_id', '=', $id)
                                ->get();

        try {

            $cadastrar_lista_de_produtos = ListaDeProdutos::create();

            for ($i = 0; $i < count($lista_de_produto); $i++) {
                DB::insert('insert into lista_de_produtos_produto (lista_de_produtos_id, produto_id, quantidade_do_produto) values (?, ?, ?)', [$cadastrar_lista_de_produtos->id, $lista_de_produto[$i]->produto_id, $lista_de_produto[$i]->quantidade_do_produto]);
            }

            
            return [
                'success' => true,
                'message' => 'Lista de produtos duplicada com sucesso!'
            ];

        } catch (Exception $e) {

            return [
                'success' => false,
                'message' => $e->getMessage()
                // 'message' => 'Erro na tentativa de duplicar uma lista de produtos!'
            ];
            
        }
    }

    public function adicionarQuantidadeDoProdutos($request) : string
    {
        try {

            DB::table('lista_de_produtos_produto')
                                ->where('id', '=', $request->id)
                                ->update(['quantidade_do_produto' => $request->quantidade_do_produto + 1]);

            
            return $request->quantidade_do_produto + 1;

        } catch (Exception $e) {

            return "Erro na tentativa de adicionar a quantidade do produto!";
            
        }

    }

    public function diminuirQuantidadeDoProdutos($request) : string
    {
        try {

            if ($request->quantidade_do_produto == 0) {
                return "Esse produto está zerado na lista";
            }

            DB::table('lista_de_produtos_produto')
                                ->where('id', '=', $request->id)
                                ->update(['quantidade_do_produto' => $request->quantidade_do_produto - 1]);

            
            return $request->quantidade_do_produto - 1;

        } catch (Exception $e) {

            return "Erro na tentativa de diminuir a quantidade do produto!";
            
        }
    }

    public function cadastrarProdutoNaLista($id, $request)
    {
        try {

            DB::insert('insert into lista_de_produtos_produto (lista_de_produtos_id, produto_id, quantidade_do_produto) values (?, ?, ?)', 
                [$id, $request->produto_id, $request->quantidade_do_produto]);
            
            return [
                'success' => true,
                'message' => 'Produto cadastrado na lista com sucesso!'
            ];

        } catch (Exception $e) {

            return [
                'success' => false,
                'message' => 'Erro na tentativa de cadastrar produto na lista!'
            ];
            
        }
    }

    public function removerProdutoDaLista($id, $request) : array
    {
        try {

            DB::table('lista_de_produtos_produto')
                                                ->where('lista_de_produtos_id', '=', $id)
                                                ->where('produto_id', '=', $request->produto_id)
                                                ->delete();
            
            return [
                'success' => true,
                'message' => 'Produto removido da lista com sucesso!'
            ];

        } catch (Exception $e) {

            return [
                'success' => false,
                'message' => 'Erro na tentativa de remover produto da lista!'
            ];
            
        }
    }
}
