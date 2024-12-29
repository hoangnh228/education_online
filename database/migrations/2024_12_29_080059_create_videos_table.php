<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id('video_id');
            $table->string('videoname')->nullable(false);
            $table->unsignedBigInteger('courses_id')->nullable(false);
            $table->string('coursename')->nullable(false);
            $table->string('teacher_name')->nullable(false);
            $table->text('description')->nullable(false);
            $table->string('duration')->nullable(false);
            $table->string('url')->nullable(false);
            $table->timestamps();


            $table->foreign('courses_id')->references('courses_id')->on('courses')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
