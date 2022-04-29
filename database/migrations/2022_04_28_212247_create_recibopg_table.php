<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecibopgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recibopg', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('idRec')->nullable()->default(0)->index('FK__recibo');
            $table->date('venct')->nullable();
            $table->text('valor')->nullable();
            $table->date('iva')->nullable();
            $table->date('total')->nullable();
            $table->date('nrec')->nullable();
            $table->date('datapgiva')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recibopg');
    }
}
