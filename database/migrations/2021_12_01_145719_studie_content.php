<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StudieContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studie_content', function (Blueprint $table) {
            $table->id();
            $table->integer('studie_id');
            $table->string('header_text',500)->nullable();
            $table->string('first_text',500)->nullable();
            $table->string('header_name')->nullable();
            $table->string('footer_text',500)->nullable();
            $table->string('img');
            $table->string('key');
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
        Schema::dropIfExists('studie_content');
    }
}
