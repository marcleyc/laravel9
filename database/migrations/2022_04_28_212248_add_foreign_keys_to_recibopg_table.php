<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRecibopgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recibopg', function (Blueprint $table) {
            $table->foreign(['idRec'], 'FK_recibopg_recibo')->references(['id'])->on('recibo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recibopg', function (Blueprint $table) {
            $table->dropForeign('FK_recibopg_recibo');
        });
    }
}
