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
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_club');
            $table->foreign('id_club')->references('id')->on('clubs')->onDelete('cascade');
            $table->foreignId('id_entrenador');
            $table->foreign('id_entrenador')->references('id')->on('users')->onDelete('cascade');
            $table->string('categoria');
            $table->string('letra');
            $table->string('division')->nullable();
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
        Schema::dropIfExists('equipos');
    }
};
