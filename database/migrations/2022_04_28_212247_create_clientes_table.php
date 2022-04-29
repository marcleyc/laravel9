<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('idc')->nullable()->index('contatos');
            $table->string('nome', 250)->nullable();
            $table->string('sexo', 1)->nullable();
            $table->string('estcivil', 250)->nullable();
            $table->string('nacionalidade', 250)->nullable();
            $table->string('freguesia', 250)->nullable();
            $table->string('concelho', 250)->nullable();
            $table->string('pai', 250)->nullable();
            $table->string('mae', 250)->nullable();
            $table->string('morada', 250)->nullable();
            $table->string('passapote', 15)->nullable();
            $table->dateTime('emissao')->nullable();
            $table->string('emissor', 20)->nullable();
            $table->string('cpf', 15)->nullable();
            $table->longText('assento')->nullable();
            $table->longText('obs')->nullable();
            $table->string('tel', 20)->nullable();
            $table->string('email', 70)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
