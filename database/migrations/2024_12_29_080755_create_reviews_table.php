<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id('review_id');
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->unsignedBigInteger('courses_id')->nullable(false);
            $table->integer('rating')->nullable(false);
            $table->text('comment')->nullable(false);
            $table->timestamps();

            $table->foreign('user_id')
                ->references('user_id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('courses_id')
                ->references('courses_id')
                ->on('courses')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
