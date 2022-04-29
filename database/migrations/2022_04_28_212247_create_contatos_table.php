<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contatos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->dateTime('datac')->nullable();
            $table->string('nome', 250)->nullable();
            $table->string('portugues', 100)->nullable();
            $table->string('status', 20)->nullable();
            $table->string('indicacao', 50)->nullable();
            $table->longText('obs')->nullable();
            $table->decimal('honorarios', 10)->nullable();
            $table->string('cli', 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contatos');
    }
}
