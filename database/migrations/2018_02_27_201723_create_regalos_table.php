<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegalosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regalos', function (Blueprint $table) {
            $table->increments('id_regalo');
            $table->integer('id_tiporegalo')->unsigned();
            $table->foreign('id_tiporegalo')->references('id_tiporegalo')->on('tipos_regalos')->nullable();
            $table->string('descripcion_tiporegalo');
            $table->integer('id_invitado')->unsigned();
            $table->foreign('id_invitado')->references('id_invitado')->on('invitados')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regalos');
    }
}
