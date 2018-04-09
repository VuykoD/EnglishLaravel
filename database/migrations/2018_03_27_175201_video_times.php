<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VideoTimes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('video_times', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_video_name');
            $table->string('eng');
            $table->string('rus');
            $table->integer('start_');
            $table->integer('end_');
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
