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
            $table->foreign('id_jugador')->references('id')->on('jugadores');
            $table->foreignId('id_club');
            $table->foreign('id_club')->references('id')->on('clubs')->onDelete('cascade');;
            $table->integer('preinscripcion')->default(0);
            $table->integer('pago1')->default(0);
            $table->integer('pago2')->default(0);
            $table->integer('pago3')->default(0);
            $table->integer('pago4')->default(0);
            $table->integer('pago5')->default(0);
            $table->integer('pago6')->default(0);
            $table->integer('pago7')->default(0);
            $table->integer('pago8')->default(0);
            $table->integer('pago9')->default(0);
            $table->integer('pago10')->default(0);
            $table->string('tipo')->nullable();
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
