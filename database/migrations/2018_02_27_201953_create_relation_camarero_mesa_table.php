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
            $table->increments('id');
            $table->integer('id_camarero')->unsigned();
            $table->foreign('id_camarero')->references('id')->on('camareros');
            $table->integer('id_mesa')->unsigned();
            $table->foreign('id_mesa')->references('id')->on('mesas');
            $table->string('rol');
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
        Schema::dropIfExists('relacion_camarero_mesa');
    }
}
