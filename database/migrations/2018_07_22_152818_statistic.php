<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Statistic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('statistic_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_users');
            $table->integer('video_new')->nullable();
            $table->integer('video_repeat')->nullable();
            $table->integer('video_test')->nullable();
            $table->integer('course_new')->nullable();
            $table->integer('course_repeat')->nullable();
            $table->integer('course_test')->nullable();           
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
        Schema::dropIfExists('statistic_users');
    }
}
