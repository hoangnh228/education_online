<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id('cart_id');
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->unsignedBigInteger('courses_id')->nullable(false);
            $table->timestamps();


            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('courses_id')->references('courses_id')->on('courses')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
