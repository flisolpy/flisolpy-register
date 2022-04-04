<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Events extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('backgroud_image')->nullable();
            $table->longText('description');
            $table->longText('content')->nullable();
            $table->date('init_date');
            $table->date('finish_date');
            $table->boolean('has_finish')->default(false);
            $table->boolean('enable_register')->default(false);
            $table->integer('total_registered')->default(0);
            $table->integer('total_confirmed')->default(0);
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
        Schema::dropIfExists('events');
    }
}
