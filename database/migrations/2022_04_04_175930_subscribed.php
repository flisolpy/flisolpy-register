<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Subscribed extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribed', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('work_place');
            $table->integer('event_id');
            $table->string('phone');
            $table->boolean('confirmed')->default(false);
            $table->integer('create_uid')->nullable();
            $table->integer('write_uid')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
