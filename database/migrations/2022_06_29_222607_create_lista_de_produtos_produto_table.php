<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListaDeProdutosProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_de_produtos_produto', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('lista_de_produtos_id')->unsigned();
            $table->foreign('lista_de_produtos_id')->references('id')
                                        ->on('lista_de_produtos')
                                        ->onDelete('cascade');

            $table->bigInteger('produto_id')->unsigned();
            $table->foreign('produto_id')->references('id')
                                        ->on('produtos')
                                        ->onDelete('cascade');
                        
            $table->string('quantidade_do_produto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lista_de_produtos_produto');
    }
}
