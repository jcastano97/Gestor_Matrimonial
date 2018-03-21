<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationCamareroMesaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacion_camarero_mesa', function (Blueprint $table) {
            $table->increments('id_camarero_mesa');
            $table->integer('id_camarero')->unsigned();
            $table->foreign('id_camarero')->references('id_camarero')->on('camareros');
            $table->integer('id_mesa')->unsigned();
            $table->foreign('id_mesa')->references('id_mesa')->on('mesas');
            $table->string('rol');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relacion_camarero_mesa');
    }
}
