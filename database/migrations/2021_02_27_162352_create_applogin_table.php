<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApploginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applogin', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('image_upload')->nullable();
            $table->string('fullname');
            $table->string('age');
            $table->string('location');
            $table->string('experience');
            $table->string('degree');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applogin');
    }
}
