<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtratoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extrato', function (Blueprint $table) {
            $table->date('data')->nullable();
            $table->string('banco', 20)->nullable();
            $table->string('historico', 50)->nullable();
            $table->float('valor', 10, 0)->nullable();
            $table->float('saldo', 10, 0)->nullable();
            $table->string('tipo', 30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extrato');
    }
}
