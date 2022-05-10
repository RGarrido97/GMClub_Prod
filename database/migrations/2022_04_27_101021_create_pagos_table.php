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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_jugador');
            $table->foreign('id_jugador')->references('id')->on('jugadores')->onDelete('cascade');
            $table->integer('preinscripcion');
            $table->integer('pago1');
            $table->integer('pago2');
            $table->integer('pago3');
            $table->integer('pago4');
            $table->integer('pago5');
            $table->integer('pago6');
            $table->integer('pago7');
            $table->integer('pago8');
            $table->integer('pago9');
            $table->integer('pago10');
            $table->string('tipo');
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
        Schema::dropIfExists('pagos');
    }
};
