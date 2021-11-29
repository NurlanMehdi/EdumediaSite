<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDashboardTranslate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dashboard_translate', function (Blueprint $table) {
            $table->id();
            $table->integer('item_id');
            $table->string('key');
            $table->string('blog_name');
            $table->string('button_name')->nullable();
            $table->string('blog_button_other')->nullable();
            $table->string('names')->nullable();
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
        Schema::dropIfExists('dashboard_translate');
    }
}
