<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTcasamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tcasamento', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('idc')->nullable();
            $table->string('nubente1', 50)->nullable();
            $table->date('nasc1')->nullable();
            $table->string('estCivil1', 50)->nullable();
            $table->string('naturalidade1', 50)->nullable();
            $table->string('nacionalidade1', 50)->nullable();
            $table->string('pai1', 50)->nullable();
            $table->string('mae1', 50)->nullable();
            $table->string('residencia1', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tcasamento');
    }
}
