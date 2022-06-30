<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListaDeComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_de_compras', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');

            $table->bigInteger('lista_de_produtos_id')->unsigned();
            $table->foreign('lista_de_produtos_id')->references('id')
                                        ->on('lista_de_produtos')
                                        ->onDelete('cascade');

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
        Schema::dropIfExists('lista_de_compras');
    }
}
