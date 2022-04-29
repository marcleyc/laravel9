<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAuthEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('auth_event', function (Blueprint $table) {
            $table->foreign(['user_id'], 'auth_event_ibfk_1')->references(['id'])->on('auth_user')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('auth_event', function (Blueprint $table) {
            $table->dropForeign('auth_event_ibfk_1');
        });
    }
}
