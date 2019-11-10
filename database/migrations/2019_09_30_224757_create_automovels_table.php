<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutomovelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automovels', function (Blueprint $table) {
           $table->increments('id');
           // $table->timestamps();
           $table->string('nome',100);
           $table->string('marca',100);
           $table->string('modelo',100);
           $table->string('placa', 8)->unique();
           $table->double('vl_venda');
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
        Schema::dropIfExists('automovels');
    }
}
