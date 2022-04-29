<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReciboTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recibo', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('idc')->nullable()->index('contatosrecibo');
            $table->dateTime('dataf')->nullable();
            $table->string('prestador', 20)->nullable();
            $table->string('nome', 250)->nullable();
            $table->integer('fatura')->nullable();
            $table->string('tipo_pgto', 250)->nullable();
            $table->string('obs', 250)->nullable();
            $table->double('tothonorarios')->nullable();
            $table->double('totcustas')->nullable();
            $table->double('total')->nullable();
            $table->double('iva')->nullable();
            $table->string('parceria', 20)->nullable();
            $table->double('valor')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recibo');
    }
}
