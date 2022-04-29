<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAuthMembershipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('auth_membership', function (Blueprint $table) {
            $table->foreign(['group_id'], 'auth_membership_ibfk_2')->references(['id'])->on('auth_group')->onDelete('CASCADE');
            $table->foreign(['user_id'], 'auth_membership_ibfk_1')->references(['id'])->on('auth_user')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('auth_membership', function (Blueprint $table) {
            $table->dropForeign('auth_membership_ibfk_2');
            $table->dropForeign('auth_membership_ibfk_1');
        });
    }
}
