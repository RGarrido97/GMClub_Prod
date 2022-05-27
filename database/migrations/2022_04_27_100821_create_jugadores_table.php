<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugadores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_club');
            $table->foreign('id_club')->references('id')->on('clubs')->onDelete('cascade');
            $table->foreignId('id_equipo');
            $table->foreign('id_equipo')->references('id')->on('equipos')->onDelete('cascade');
            $table->foreignId('id_entrenador');
            $table->foreign('id_entrenador')->references('id')->on('users');
            $table->string('nombre');
            $table->string('apellidos');
            $table->integer('goles')->default(0);
            $table->integer('asistencias')->default(0);
            $table->integer('ta')->default(0);
            $table->integer('tr')->default(0);
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
        Schema::dropIfExists('jugadores');
    }
};
