<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAuthPermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('auth_permission', function (Blueprint $table) {
            $table->foreign(['group_id'], 'auth_permission_ibfk_1')->references(['id'])->on('auth_group')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('auth_permission', function (Blueprint $table) {
            $table->dropForeign('auth_permission_ibfk_1');
        });
    }
}
