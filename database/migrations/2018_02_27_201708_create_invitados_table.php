<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvitadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitados', function (Blueprint $table) {
            $table->increments('id_invitado');
            $table->string('nombre_invitado');
            $table->string('direccion_invitado')->nullable();
            $table->integer('id_mesa')->unsigned();
            $table->foreign('id_mesa')->references('id_mesa')->on('mesas');
            $table->integer('id_invitador')->unsigned();
            $table->foreign('id_invitador')->references('id_invitado')->on('invitados')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invitados');
    }
}
