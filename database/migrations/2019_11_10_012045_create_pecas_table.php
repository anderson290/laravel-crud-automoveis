<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pecas', function (Blueprint $table) {
            $table->increments('id');
            // $table->timestamps();
            $table->string('nome',100);
            $table->string('marca',100);
            $table->string('modelo',100);
            $table->text('descricao', 100);
            $table->string('cd_peca', 100);
            $table->double('preco');
            $table->date('dt_fabricacao');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pecas');
    }
}
