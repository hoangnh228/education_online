<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('fullname')->nullable(false);
            $table->string('username')->unique()->nullable(false);
            $table->string('password')->nullable(false);
            $table->date('dob')->nullable(false);
            $table->string('address')->nullable(false);
            $table->string('phonenumber')->nullable(false);
            $table->string('email')->unique()->nullable(false);
            $table->enum('role', ['user', 'teacher', 'admin'])->nullable(false);
            $table->string('image')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
