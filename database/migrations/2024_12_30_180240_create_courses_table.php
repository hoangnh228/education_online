<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->foreignId('teacher_id')->constrained('users')->cascadeOnDelete();
            $table->decimal('price', 8, 2);
            $table->text('description');
            $table->integer('duration');
            $table->boolean('status')->default(true); // 0 1 2
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};