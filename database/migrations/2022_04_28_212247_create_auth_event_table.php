<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auth_event', function (Blueprint $table) {
            $table->integer('id', true);
            $table->dateTime('time_stamp')->nullable();
            $table->string('client_ip', 512)->nullable();
            $table->integer('user_id')->nullable()->index('user_id__idx');
            $table->string('origin', 512)->nullable();
            $table->longText('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auth_event');
    }
}
