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
            $table->increments('id');
            $table->integer('id_tiporegalo')->unsigned();
            $table->foreign('id_tiporegalo')->references('id')->on('tipos_regalos')->nullable();
            $table->string('descripcion_regalo');
            $table->integer('id_invitado')->unsigned();
            $table->foreign('id_invitado')->references('id')->on('invitados')->nullable();
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
        Schema::dropIfExists('regalos');
    }
}
