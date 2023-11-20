<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViagensDisponiveisTable extends Migration
{
    public function up()
    {
        Schema::create('viagens_disponiveis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->string('origem_viagem');
            $table->string('destino_viagem');
            $table->dateTime('partida_viagem');
            $table->dateTime('volta_viagem');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('viagens_disponiveis');
    }
}
