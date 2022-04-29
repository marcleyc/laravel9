<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('descricao', 100)->nullable();
            $table->decimal('honorarios', 10)->nullable();
            $table->decimal('emolumentos', 10)->nullable();
            $table->decimal('total', 10)->nullable();
            $table->longText('obs')->nullable();
            $table->longText('pdf')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicos');
    }
}
