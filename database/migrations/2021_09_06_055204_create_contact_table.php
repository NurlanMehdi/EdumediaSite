<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->id();
            $table->string('facebook');
            $table->integer('facebook_status')->default(0);
            $table->string('linkedin');
            $table->integer('linkedin_status')->default(0);
            $table->string('instagram');
            $table->integer('instagram_status')->default(0);
            $table->string('mail',320);
            $table->integer('mail_status')->default(0);
            $table->string('phone_number',20);
            $table->integer('phone_number_status')->default(0);
            $table->string('address');
            $table->integer('address_status')->default(0);

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
        Schema::dropIfExists('contact');
    }
}
