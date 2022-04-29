<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRecibosubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recibosub', function (Blueprint $table) {
            $table->foreign(['idRec'], 'FK_recibosub_recibo')->references(['id'])->on('recibo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recibosub', function (Blueprint $table) {
            $table->dropForeign('FK_recibosub_recibo');
        });
    }
}
