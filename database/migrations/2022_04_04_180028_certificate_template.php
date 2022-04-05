<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CertificateTemplate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate_template', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('event_id');
            $table->longText('content')->nullable();
            $table->string('backgroud')->nullable();
            $table->date('date');
            $table->string('footer')->nullable();
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
