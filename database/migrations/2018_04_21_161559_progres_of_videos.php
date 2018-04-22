<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProgresOfVideos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('ProgresOfVideos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_base');
            $table->integer('id_users');
            $table->integer('base_course_id');
            $table->integer('quantity');
            $table->date('next_date');
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
