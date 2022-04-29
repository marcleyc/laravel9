<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanceiroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financeiro', function (Blueprint $table) {
            $table->integer('id', true);
            $table->date('dataf')->nullable();
            $table->string('banco', 20)->nullable()->index('financeirobanco');
            $table->string('tipo', 50)->nullable();
            $table->string('historico')->nullable();
            $table->string('numero')->nullable();
            $table->double('valor')->nullable();
            $table->integer('cliente')->nullable();
            $table->string('obs', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('financeiro');
    }
}
