<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecprocessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recprocess', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('idrecsub')->nullable()->index('recibosubrecprocess');
            $table->dateTime('datae')->nullable();
            $table->string('locals')->nullable()->index('recprocesslocal');
            $table->string('descricao', 100)->nullable();
            $table->string('numero', 20)->nullable();
            $table->double('valor')->nullable();
            $table->dateTime('conclusao')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recprocess');
    }
}
