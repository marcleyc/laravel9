<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecibosubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recibosub', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('idRec')->nullable()->index('reciborecibosub');
            $table->string('servicos', 250)->nullable();
            $table->string('nome', 250)->nullable();
            $table->double('honorarios')->nullable();
            $table->double('custas')->nullable();
            $table->double('total')->nullable();
            $table->string('locals')->nullable();
            $table->date('inicio')->nullable();
            $table->string('nprocesso', 10)->nullable();
            $table->date('termino')->nullable();
            $table->string('ok', 1)->default('F');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recibosub');
    }
}
