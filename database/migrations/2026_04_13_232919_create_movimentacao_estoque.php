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
        Schema::create('movimentacao_estoque', function (Blueprint $table) {
            $table->id();
            $table->datetime('data_entrada');
            $table->datetime('data_saida');
            $table->integer('quantidade_entrada');
            $table->integer('quantidade_saida');
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
        Schema::dropIfExists('movimentacao_estoque');
    }
};
