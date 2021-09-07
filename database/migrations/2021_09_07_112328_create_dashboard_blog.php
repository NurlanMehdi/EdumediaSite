<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDashboardBlog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dashboard_blog', function (Blueprint $table) {
            $table->id();
            $table->string('blog_name_az');
            $table->string('blog_name_en');
            $table->string('name_az');
            $table->string('name_en');
            $table->string('short_info_az');
            $table->string('short_info_en');
            $table->string('image');
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('dashboard_blog');
    }
}
