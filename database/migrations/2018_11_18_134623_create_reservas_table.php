<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data_criacao_reserva');
            $table->date('data_inicial');
            $table->date('data_final');
            $table->unsignedInteger('hospedagem_id');
            $table->unsignedInteger('user_id');
            $table->timestamps();

            $table->foreign('hospedagem_id')->references('id')->on('hospedagens');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
