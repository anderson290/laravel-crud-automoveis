<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePecaAutomovelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peca_automovels', function (Blueprint $table) {
            $table->increments('id');
            // $table->timestamps();
            $table->integer('peca_id')->unsigned;
            $table->integer('automovel_id')->unsigned;
            $table->foreign('peca_id')->references('id')->on('pecas');
            $table->foreign('automovel_id')->references('id')->on('automovels');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peca_automovels');
    }
}
