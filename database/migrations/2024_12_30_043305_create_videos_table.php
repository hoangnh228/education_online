<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('video_name');
            $table->unsignedBigInteger('courses_id');
            $table->string('course_name');
            $table->string('teacher_name');
            $table->text('description');
            $table->string('duration');
            $table->string('url');
            $table->timestamps();

            $table->foreign('courses_id')->references('id')->on('courses')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('videos');
    }
}