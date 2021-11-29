<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutCareers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_careers', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('string_id');
            $table->string('status');
            $table->string('img');
            $table->string('button_name');
            $table->string('short_info');
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
        Schema::dropIfExists('about_careers');
    }
}
